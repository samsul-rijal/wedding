@extends('template_backend.home')
@section('sub-judul','Maps')
@section('content')

  <div class="section-body">
    @if(count($maps)<=0)
      <div>
        <a href="{{ route('maps.create') }}" class="btn btn-info btn-sm">Tambah Maps</a>
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
        @foreach ($maps as $result)
          <div class="col-12 col-md-8">
            <h2>Peta Lokasi</h2>
            <p>Anda dapat melihat lokasi dengan bantuan peta dibawah ini. Atau anda bisa<strong><br>
            <a href="{{ $result->url }}" target="_blank" class="btn btn-primary">Buka di Google Maps</a></strong></p>
          </div>
          
          <div class="col-md-12">
              <iframe
                  width="270"
                  height="265"
                  style="border:0"
                  loading="lazy"
                  allowfullscreen
                  src="{{ $result->embed }}">
              </iframe>
              <div class="col-md-3 text-center">
                <a href="{{ route('maps.edit', $result->id) }}" class="btn btn-warning btn-block">Ubah Maps</a>
              </div>
          </div>
            
        @endforeach
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