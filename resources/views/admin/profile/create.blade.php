

@extends('layouts.app')

@section('content')
@include('inc.admin.navbar')
<div class="container mb-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <h5 class="mb-5">Create New Member</h5>
            <form action="{{route('admin.profile.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" type="text">
                </div>
                <div class="form-group">
                    <label for="name">Nickname</label>
                    <input class="form-control" name="nickname" type="text">
                </div>
                <div class="form-group">
                    <label for="name">Details</label>
                    <textarea name="details" class="summernote"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
    
</div>
@endsection
