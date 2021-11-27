@extends('template_backend.home')
@section('sub-judul','Daftar Musik')
@section('content')

  <div class="section-body">
    @if(count($musik)<=3)
      <div>
        <a href="{{ route('musik.create') }}" class="btn btn-info btn-sm">Tambah Musik</a>
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
      <div class="row p-1">
        @foreach ($musik as $result)
          <div class="col-12 col-md-4 col-lg-4 mb-2">
              <div class="mb-5 text-center">
                
                  <p>{{ $result->judul }}</p>
                  <audio controls>
                    <source src="{{ asset($result->audio) }}" type="audio/mpeg" />
                  </audio>
          
              </div>
              <a href="{{ route('musik.edit', $result->id) }}" class="btn btn-warning btn-block">Ubah Musik</a>
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