@extends('template_backend.home')
@section('sub-judul','Tambah Maps')
@section('content')

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
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

    <form action="{{ route('maps.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>URL</label>
            <input type="url" class="form-control" name="url">
        </div>

        <div class="form-group">
            <label>Embed Maps</label>
            <input type="text" class="form-control" name="embed">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Maps</button>
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