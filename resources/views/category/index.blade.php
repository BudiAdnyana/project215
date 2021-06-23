<title>Category</title>
@extends('template')


@section('content')

  <div class="container">
  <br>
  <h2>Data Category</h2>
  <br>
  <a class="btn btn-primary" href="{{route('category.add')}}">Tambah Data</a>
  <br>
  <br>
        <table class="table table-bordered table-hover table-bordered" >
        <thead class="table-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$category->name}}</td>
            <td scope="row"> 
                <form action="">
                  <a class="btn btn-warning" href="">Edit</a>

                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>


  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
@endsection

</html>