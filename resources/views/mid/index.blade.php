<title>Midsemester</title>
@extends('template')

@section('content')

 <div class="container">
  <br>
  <h2>Data Midsemester</h2>
  <br>
   <a class="btn btn-primary" href="{{route('mid.add')}}">Tambah Data</a>
  <br>
  <br>
  
  <table class="table table-bordered table-hover table-bordered" >
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Alamat</th>

        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($midsemesters as $mid)
      <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td scope="row">{{$mid->kolom_nim}}</td>
        <td scope="row">{{$mid->kolom_nama}}</td>
        <td scope="row">{{$mid->kolom_umur}}</td>
        <td scope="row">{{$mid->kolom_alamat}}</td>

        <td scope="row">
          <form action="">
            <a class="btn btn-warning" href="">Edit</a>

           <a class="btn btn-danger" href="/mid/{{$mid->id_215}}/delete">Delete</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>
@endsection