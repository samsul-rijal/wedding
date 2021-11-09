@extends('template_backend.home')
@section('sub-judul','Resepsi')
@section('content')

<div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="card">

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

          <div class="card-header">
              <h6>
                  Halaman ini digunakan untuk memberikan informasi tentang resepsi kedua mempelai.
              </h6>
          </div>
          @if(count($resepsi)<=0)
          <div class="ml-4">
            <a href="{{ route('resepsi.create') }}" class="btn btn-info btn-sm">Buat Akad Nikah</a>
          </div>
          <br>
          @endif
          @foreach ($resepsi as $result)
          <div class="card-body p-0">
            <div class="table">
              <table class="table table-sm table-striped"> 
                <tr>
                  <td>Tanggal Akad Nikah</td>
                  <td>
                    <!-- {{ $result->tanggal }} -->
                    <div class="row">
                      <p id="hari" class="mr-1 ml-2"></p>
                      <p id="tanggal"></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Waktu Mulai</td>
                  <td>
                    {{ $result->jam_mulai }} WIB
                  </td>
                </tr>
                <tr>
                  <td>Waktu Selesai</td>
                  <td>
                  {{ $result->jam_selesai }} WIB
                  </td>
                </tr>
                <tr>
                  <td>Tempat dan Alamat</td>
                  <td>
                    {{ $result->tempat }}
                  </td>
                </tr>
              </table>
            </div>
            <a href="{{ route('resepsi.edit', $result->id) }}" class="btn btn-warning btn-block">Update Data</a>
            <!-- <div class="mt-2">
              <form action="{{ route('resepsi.destroy', $result->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm btn-block">Delete</button>
              </form>
            </div> -->
          </div>
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

      Date.prototype.toShortFormat = function() {
        let monthNames = [
          "Januari","Febuari","Maret","April",
          "Mei","Juni","Juli","Agustus",
          "September", "Oktober","November","Desember"
        ];

        let day = this.getDate();

        let monthIndex = this.getMonth();
        let monthName = monthNames[monthIndex];

        let year = this.getFullYear();

        return `${day} ${monthName} ${year}`;  
      }

      let anyDate = new Date('{{ $result->tanggal }}');

      document.getElementById("tanggal").innerHTML = anyDate.toShortFormat();


      var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      var d = new Date('{{ $result->tanggal }}');
      var dayName = days[d.getDay()];

      document.getElementById("hari").innerHTML = dayName + ' ,';


    </script>
    @endforeach

@endsection