@extends('layout.main')
@section('container')
    
<h1>Welcome back, {{ $name }}</h1>

<div class="col-md-7 col-lg-8 ">
    <h2>Total Transaksi</h2>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Sampah</th>
            <th scope="col">Kategori Sampah</th>
            <th scope="col">Berat</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- @php
                $no =1;
            @endphp
            @foreach($informasi as $row) --}}
          <tr>
            {{-- <td>{{ $no++ }}</td>
            <td>{{ $row->nametrash }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->berat }}</td> --}}
            <td>No.</td>
            <td>Bungkus Indomie</td>
            <td>Plastik</td>
            <td>0.2</td>
            <td>Rp 15.000</td>
            <td>
              <input class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" type="submit" value="Edit">
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
    </div>
@endsection


      