@extends('template_backend.home')
@section('sub-judul','Ubah Background Foto')
@section('content')

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ $error }}
            </div>
        </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('background-foto.update', $background_foto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label>Ubah Gambar</label>
            <input type="file" class="form-control" name="gambar">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Ubah Gambar</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>    
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

    });
    </script>
    

@endsection