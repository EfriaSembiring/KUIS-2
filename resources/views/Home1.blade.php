@extends('layout.Master')

@section('title', 'Home')
    
@section('content')
    

<!-- Page Content -->
<div class="container">
  
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
  
      <h1 class="my-4">ANIME HOUSE
        </h1>
  
        <!-- Blog Post -->
        @foreach ($article as $artic)
        <div class="card mb-4">
        <img class="card-img-top" src="{{ $artic->imageurl }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $artic->title }}</h2>
            <p class="card-text">{{ Str::limit($artic->content, 100, '...') }}</p>
                <a href="{{ './article/'.$artic->id }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">Posted on {{ $artic->created_at }} by
                <a>Efria Surya Sembiring</a>
            </div>
        </div>
        @endforeach
  
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Prev</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Next &rarr;</a>
          </li>
        </ul>
  
      </div>
  
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
                    <a href="https://id.wikipedia.org/wiki/One_Piece">One Piece</a>
                  </li>
                  <li>
                      <a href="https://id.wikipedia.org/wiki/Boruto:_Naruto_Next_Generations">Boruto: Naruto Generations</a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Pok%C3%A9mon">Pokemon</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                 <a href="https://id.wikipedia.org/wiki/Attack_on_Titan">Attack On Titan</a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Naruto_Shippudenl">Naruto Shippuden</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Link Menonton Anime Favorite</h5>
          <div class="card-body">
          Silahkan mengunjungi Website resmi seperti Anime.fun ataupun tempt menonton streaming lainnya.
           </div>
        </div>
  
      </div>
  
    </div>
    <!-- /.row -->
  
  </div>
  @endsection