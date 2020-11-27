@extends('layout.Master')
@section('title', 'Manage')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar Artikel </h3>
        </div>
        
        </br>
        </br>  
       <table class="table table-bordered table-striped">
         <thead>
             <tr>
             <th>No</th>
             <th>Judul</th>
             <th>Tanggal</th>
             <th>Image</th>
             <th>Kelola</th>
             </tr>
             </thead>
             <tbody>
              @foreach ($article as $a)
             <tr>
             <td>{{$a->id}}</td>
             <td>{{$a->title}}</td>
             <td>{{$a->created_at}}</td>
             <td> <img src="{{asset('/storage/'.$a->imageurl) }}" alt="imageCap"></td>
                                    <td> <a href="article/edit/{{ $a->id }}" class="btn btn-primary btn-radiuszan"style="background-color:#87CEEB">Edit</a> </td>
                                    <td> <a href="article/delete/{{ $a->id }}" class="btn btn-primary btn-radiuszan"style="background-color:#FF7F50">Hapus</a> </td>
             </tr>
             

             @endforeach
             </tbody>
            </table>
        </div>
        <br>
        <a href="manage/add" class="btn btn-primary">Tambah Data</a>
        <a href="article/cetak_pdf" class="btn btn-primary"target="_blank">CETAK PDF</a> </td>
        <br>
    </div>
</div>    
@endsection