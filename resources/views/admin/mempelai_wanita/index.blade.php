@extends('template_backend.home')
@section('sub-judul','Mempelai Wanita')
@section('content')

        <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="card">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session('success') }}
                    </div>
                @endif
                  <div class="card-header">
                      <h6>
                          Halaman ini digunakan untuk memberikan informasi tentang profile mempelai wanita.
                      </h6>
                  </div>
                  @if(count($mempelai_wanita)<=0)
                  <div class="ml-4">
                    <a href="{{ route('mempelai-wanita.create') }}" class="btn btn-info btn-sm">Tambah Mempelai Wanita</a>
                  </div>
                  <br>
                  @endif
                  @foreach ($mempelai_wanita as $result)
                  <div class="mx-auto">
                    <img src="{{ asset($result->gambar) }}" class="img-fluid" style="width:160px">
                  </div>
                  <div class="card-body p-0">
                    <div class="table">
                      <table class="table table-sm table-striped"> 
                        <tr>
                          <td>Nama Mempelai Wanita</td>
                          <td>
                            {{ $result->nama_lengkap }}
                          </td>
                        </tr>
                        <tr>
                          <td>Nama Panggilan</td>
                          <td>
                            {{ $result->nama_panggilan }}
                          </td>
                        </tr>
                        <tr>
                          <td>Putri</td>
                          <td>
                          {{ $result->putri }}
                          </td>
                        </tr>
                        <tr>
                          <td>Nama Bapak</td>
                          <td>
                            {{ $result->nama_bapak }}
                          </td>
                        </tr>
                        <tr>
                          <td>Nama Ibu</td>
                          <td>
                            {{ $result->nama_ibu }}
                          </td>
                        </tr>
                      </table>
                    </div>
                    <a href="{{ route('mempelai-wanita.edit', $result->id) }}" class="btn btn-warning btn-block">Update Data</a>
                    <!-- <div class="mt-2">
                      <form action="{{ route('mempelai-wanita.destroy', $result->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm btn-block">Delete</button>
                      </form>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>    
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs
    });
    </script>

@endsection