<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class AdminProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $members = Profile::all();
        return view('admin.profile.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|max:1999'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(storage_path('app/public/images'), $imageName);
        } else {
            $imageName = null;
        }


        $member = new Profile;
        $member->name = $request->input('name');
        $member->nickname = $request->input('nickname');
        $member->details = $request->input('details');
        $member->image = $imageName;
        $member->save();

        return redirect('admin')
            ->with('success', 'member successfully created !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Profile::all();
        $member = Profile::find($id);
        return view('admin.profile.edit')
            ->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|max:1999'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(storage_path('app/public/images'), $imageName);
        } else {
            $imageName = null;
        }

        $member = Profile::find($id);
        $member->name = $request->input('name');
        $member->nickname = $request->input('nickname');
        $member->details = $request->input('details');
        $member->image = $imageName;
        $member->save();

        return redirect('admin')
            ->with('success', 'member successfully updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $member = Profile::find($id);
        $member->delete();

        return redirect('admin')
            ->with('success', 'member successfully deleted');
    }
}
