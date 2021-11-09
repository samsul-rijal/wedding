@extends('template_backend.home')
@section('sub-judul','Buat Akad Nikah')
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
    
    <form action="{{ route('akad-nikah.update', $akad_nikah->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group col-md-7">
            <label>Tanggal Akad Nikah</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $akad_nikah->tanggal }}">
        </div>
        <div class="form-row col-md-7">
            <div class="form-group ml-1 mr-3">
                <label>Waktu Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" value="{{ $akad_nikah->jam_mulai }}">
            </div>
            <div class="form-group">
                <label>Waktu Selesai</label>
                <input type="time" class="form-control" name="jam_selesai" value="{{ $akad_nikah->jam_selesai }}">
            </div>

            <!-- <div class="form-group ml-1 mr-3">
                <label>Waktu Mulai</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-clock"></i>
                    </div>
                </div>
                <input type="text" class="form-control timepicker" name="jam_mulai">
                </div>
            </div>

            <div class="form-group">
                <label>Waktu Selesai</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-clock"></i>
                    </div>
                </div>
                <input type="text" class="form-control timepicker" name="jam_selesai">
                </div>
            </div> -->
        </div>

        <div class="form-group col-md-6">
            <label>Tempat dan Alamat</label>
            <textarea class="form-control" name="tempat" id="tempat"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan</button>
        </div>
    </form>

    <script>
        function tempatAcara() {
            document.getElementById("tempat").value = "{{ $akad_nikah->tempat }}";
        }
        tempatAcara()
    </script>

@endsection