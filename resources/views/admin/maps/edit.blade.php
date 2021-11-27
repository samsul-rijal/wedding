@extends('template_backend.home')
@section('sub-judul','Ubah Maps')
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
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ Session('success') }}
            </div>
        </div>
    @endif
    
    <form action="{{ route('maps.update', $maps->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control" name="url" value="{{ $maps->url }}">
        </div>

        <div class="form-group">
            <label>Embed Maps</label>
            <input type="text" class="form-control" name="embed" value="{{ $maps->embed }}">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Ubah Maps</button>
        </div>
    </form>

@endsection