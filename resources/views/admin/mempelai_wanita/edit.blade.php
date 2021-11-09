@extends('template_backend.home')
@section('sub-judul','Edit Data Mempelai Wanita')
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
        <!-- <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div> -->

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


    @endif

    <form action="{{ route('mempelai-wanita.update', $mempelai_wanita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="{{ $mempelai_wanita->nama_lengkap }}">
        </div>
        <div class="form-group">
            <label>Nama Panggilan</label>
            <input type="text" class="form-control" name="nama_panggilan" value="{{ $mempelai_wanita->nama_panggilan }}">
        </div>
        <div class="form-group">
            <label>Putri</label>
            <select class="form-control" name="putri">
                <option value="{{ $mempelai_wanita->putri }}">{{ $mempelai_wanita->putri }}</option>
                <option value="Pertama">Pertama</option>
                <option value="Kedua">Kedua</option>
                <option value="Ketiga">Ketiga</option>
                <option value="Keempat">Keempat</option>
                <option value="Kelima">Kelima</option>
                <option value="Keenam">Keenam</option>
                <option value="Ketujuh">Ketujuh</option>
                <option value="Kedelapan">Kedelapan</option>
                <option value="Kesembilan">Kesembilan</option>
                <option value="Kesepuluh">Kesepuluh</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Bapak</label>
            <input type="text" class="form-control" name="nama_bapak" value="{{ $mempelai_wanita->nama_bapak }}">
        </div>
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" class="form-control" name="nama_ibu" value="{{ $mempelai_wanita->nama_ibu }}">
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Update Data</button>
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