@extends('layouts.admin')

@section('title')
    <title> Swabber</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit Admin</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
      
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
  
                  <a href="{{route('swabbers.create')}}" class="btn btn-primary mb-2">
                      Tambah
                  </a>
  
                  <table class="table table-hover table-bordered table-stripped" id="example2">
                      <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Telphone</th>
                          <th>Jenis Kelamin</th>
                          <th>Opsi</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($swabber as $key => $swabber)
                          <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$swabber->name}}</td>
                              <td>{{$swabber->email}}</td>
                              <td>{{$swabber->telphone}}</td>
                              <td>{{$swabber->jenis_kelamin}}</td>
                              <td>
                                 
                                 

                                  <form action="{{ route('swabbers.destroy', $swabber->id) }}" method="post">
                                    <!-- KONVERSI DARI @ CSRF & @ METHOD AKAN DIJELASKAN DIBAWAH -->
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('swabbers.edit', $swabber)}}" class="btn btn-primary btn-sm">
                                        Edit
                                    </a>
                                    {{-- <button class="btn btn-danger btn-sm ">Hapus</button> --}}
                                </form>
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
  
              </div>
          </div>
      </div>
  </div>

</div>
</div>
</main>
@endsection