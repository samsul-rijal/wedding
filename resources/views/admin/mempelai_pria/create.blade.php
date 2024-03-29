@extends('template_backend.home')
@section('sub-judul','Tambah Mempelai Pria')
@section('content')

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <!-- <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div> -->

        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ Session('success') }}
            </div>
        </div>

    @endif

    <form action="{{ route('mempelai-pria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap">
        </div>
        <div class="form-group">
            <label>Nama Panggilan</label>
            <input type="text" class="form-control" name="nama_panggilan">
        </div>
        <div class="form-group">
            <label>Putra</label>
            <select class="form-control" name="putra" aria-label="Default select example">
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
            <input type="text" class="form-control" name="nama_bapak">
        </div>
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" class="form-control" name="nama_ibu">
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan</button>
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