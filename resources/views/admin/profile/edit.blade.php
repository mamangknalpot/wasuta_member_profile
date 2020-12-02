

@extends('layouts.app')

@section('content')
@include('inc.admin.navbar')
<div class="container mb-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            @include('inc.messages')
            <h5 class="mb-5">Edit Member</h5>
            <form action="{{route('admin.update', $member->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="name">Image</label>
                    <br>
                    <input type="file" name="image">
                </div>

                {{ method_field('PUT') }}
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
    
</div>
@endsection
