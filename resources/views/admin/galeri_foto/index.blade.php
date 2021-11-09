@extends('template_backend.home')
@section('sub-judul','Galeri Foto')
@section('content')

  <div class="section-body">
    @if(count($galeri_foto)<=8)
      <div>
        <a href="{{ route('galeri-foto.create') }}" class="btn btn-info btn-sm">Tambah Foto</a>
      </div>
      <br>
    @endif

    @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
          {{ Session('success') }}
        </div>
      </div>
    @endif

    <div class="card">
      <div class="row p-3">
        @foreach ($galeri_foto as $result)
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image">
                  <img src="{{ asset($result->gambar) }}" class="article-image">
                </div>
                <div class="article-image" data-background="{{ asset($result->gambar) }}">
                </div>
                  <div class="article-title">
                  <h2><a href="#">{{ $result->keterangan }}</a></h2>
                </div>
              </div>
              <a href="{{ route('galeri-foto.edit', $result->id) }}" class="btn btn-warning btn-block">Update Data</a>
            </article>
          </div>
        @endforeach
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>    
  $("document").ready(function(){
  setTimeout(function(){
      $("div.alert").remove();
  }, 5000 ); // 5 secs
  });
  </script>

@endsection