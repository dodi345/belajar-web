@extends('layout.app')


@section('content')
<div class="container">
    <table class="table table-hover">
      <h3>Daftar Barang</h3>
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Barang</th>
              <th scope="col">Stok</th>
              <th scope="col">Harga Beli</th>
              <th scope="col">Harga Jual</th>
              <th scope="col">Gambar</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>A001</td>
            <td>Samsung M20s</td>
            <td>67</td>
            <td>Rp 5.200.000</td>
            <td>Rp 10.000.000</td>
            <td><img src="" alt=""></td>
            <td>
              <button type="button" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-primary">Hapus</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table> 
</div>

@endsection


