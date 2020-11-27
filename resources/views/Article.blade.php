@extends('layout.Master')

@section('title',' Article ')

    
@section('content')
    

 <!-- Page Content -->
 <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Efria Sembiring</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 24, 2020 at 11:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ $article->imageurl }}" alt="">

        <hr>

        <!-- Post Content -->
        {{$article->content}}

        <hr>
      
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
              <a href="https://www.google.com">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">List Anime</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                  <a href="https://id.wikipedia.org/wiki/Attack_on_Titan">Attack On Titan</a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/One_Piece">One Piece</a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Boruto:_Naruto_Next_Generations">Boruto: Naruto Generations</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Pok%C3%A9mon">Pokemon</a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Attack_on_Titan">Attack On Titan</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
        <h5 class="card-header">Link Menonton Anime Favorite</h5>
          <div class="card-body">Silahkan mengunjungi Website resmi seperti Anime.fun ataupun tempt menonton streaming lainnya.
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  @endsection