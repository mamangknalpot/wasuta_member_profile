@extends('layouts.app')

@section('content')
@include('inc.admin.navbar')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <a href="{{route('admin.create')}}">
            <button class="btn btn-primary mb-5">Add wasuta member + </button>
            </a>
            
            <table class="table table-bordered" style="overflow-x: auto;">
                <thead>
                  <tr class="text-center">
                    <th scope="col">Name</th>
                    <th scope="col">Nickname</th>
                    <th colspan="3" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <th scope="row"> {{$member->name}} </th>
                            <td>{{$member->nickname}}</td>
                            <td> <a href="{{route('user.profile', $member->name)}}">
                                <button class="btn btn-primary">View</button></a>
                            </td>
                            <td> <a href="{{route('admin.edit', $member->id)}}"><button class="btn btn-warning">Edit</button></a> </td>
                            <td>
                                <form action="{{route('admin.destroy', $member->id)}}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                               
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection
