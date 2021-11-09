@extends('template_backend.home')
@section('sub-judul','Mempelai Pria')
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
                          Halaman ini digunakan untuk memberikan informasi tentang profile mempelai pria.
                      </h6>
                  </div>
                  @if(count($mempelai_pria)<=0)
                  <div class="ml-4">
                    <a href="{{ route('mempelai-pria.create') }}" class="btn btn-info btn-sm">Tambah Mempelai Pria</a>
                  </div>
                  <br>
                  @endif
                  @foreach ($mempelai_pria as $result)
                  <div class="mx-auto">
                    <img src="{{ asset($result->gambar) }}" class="img-fluid" style="width:160px">
                  </div>
                  <div class="card-body p-0">
                    <div class="table">
                      <table class="table table-sm table-striped"> 
                        <tr>
                          <td>Nama Mempelai Pria</td>
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
                          <td>Putra</td>
                          <td>
                          {{ $result->putra }}
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
                    <a href="{{ route('mempelai-pria.edit', $result->id) }}" class="btn btn-warning btn-block">Update Data</a>
                    <!-- <div class="mt-2">
                      <form action="{{ route('mempelai-pria.destroy', $result->id) }}" method="POST">
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