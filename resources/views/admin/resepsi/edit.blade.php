@extends('template_backend.home')
@section('sub-judul','Ubah Resepsi')
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
    
    <form action="{{ route('resepsi.update', $resepsi->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group col-md-7">
            <label>Tanggal Akad Nikah</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $resepsi->tanggal }}">
        </div>
        <div class="form-row col-md-7">
            <div class="form-group ml-1 mr-3">
                <label>Waktu Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" value="{{ $resepsi->jam_mulai }}">
            </div>
            <div class="form-group">
                <label>Waktu Selesai</label>
                <input type="time" class="form-control" name="jam_selesai" value="{{ $resepsi->jam_selesai }}">
            </div>
            <div class="form-check mt-5 ml-3">
                <input class="form-check-input" type="checkbox" name="jam_selesai" value="Selesai">
                <label class="form-check-label" for="defaultCheck1">
                    Sampai selesai
                </label>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Tempat dan Alamat</label>
            <textarea class="form-control" name="tempat" id="tempat"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Ubah Resepsi</button>
        </div>
    </form>

    <script>
        function tempatAcara() {
            document.getElementById("tempat").value = "{{ $resepsi->tempat }}";
        }
        tempatAcara()
    </script>

@endsection