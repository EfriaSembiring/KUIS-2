@extends('layout.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar User </h3>
        </div>
        </br>
        </br>
        <form action="/createuser" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group"><br><br>
                        <label for="name">Name</label>
                        <input type="text" class="form-control"required="required" name="name" placeholder="Add Your Name Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"required="required" name="email" placeholder="Add Your Email Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control"required="required" name="password" placeholder="Add Your Password Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <input type="text" class="form-control"required="required" name="roles" placeholder="Set Your Information here"></br>
                    </div>
                    <div class="form-group">
                        <label for="imageurl">Image</label>
                        <input type="file" class="form-control"required="required" name="image" placeholder="Upload a image/picture"></br>
                    </div>
                    <button type="submit" class="btn btn-primary float-center2" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true" ></i>  Add Data </button><br><br>
                </form>
</div>
</div>
@endsection