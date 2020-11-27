@extends('layout.Master')
@section('title','edit')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar User </h3>
            </div>
            </div>
            </br>
            <form action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            <input type="hidden" name="id" value="{{$user->id}}"></br>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                 <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                 <input type="text" class="form-control" required="required" name="password" value="{{$user->password}}"></br>
            </div>
            <div class="form-group">
                <label for="roles">Roles</label>
                 <input type="text" class="form-control" required="required" name="roles" value="{{$user->roles}}"></br>
            </div>
            <div class="form-group">
                    <label for="image">Imageurl</label>
                    <input type="file" class="form-control" required="required" name="image" value="{{$user->imageurl}}"></br>
                    <img width="250px" src="{{asset('storage/'.$user->imageurl)}}">
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-center">Ubah Data</button><br><br>
            </form>
        </div>
    </div>
@endsection