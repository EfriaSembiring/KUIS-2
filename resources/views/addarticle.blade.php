@extends('layout.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar Artikel</h3>
        </div>
        </br>
        </br>
        <form action="/article/create" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group"><br><br>
                        <label for="title">Judul</label>
                        <input type="text" class="form-control"required="required" name="title" placeholder="Add Title Anime Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control"required="required" name="content" placeholder="Add Content Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="image">Imageurl</label>
                        <input type="file" class="form-control"required="required" name="image" placeholder="Add Link Image Here"></br>
                    </div>
                    
                    <button type="submit" class="btn btn-primary float-center2" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true" ></i>Tambah Data</button><br><br>
                </form>
</div>
</div>
@endsection