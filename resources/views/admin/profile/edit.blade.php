

@extends('layouts.app')

@section('content')
@include('inc.admin.navbar')
<div class="container mb-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <h5 class="mb-5">Edit Member</h5>
            <form action="{{route('admin.profile.update', $member->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" value="{{$member->name}}" id="name" name="name" type="text">
                </div>
                <div class="form-group">
                    <label for="name">Nickname</label>
                    <input class="form-control" value="{{$member->nickname}}" name="nickname" type="text">
                </div>
                <div class="form-group">
                    <label for="name">Details</label>
                    <textarea name="details" class="summernote">{{$member->details}}</textarea>
                </div>
                {{ method_field('PUT') }}
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
    
</div>
@endsection
