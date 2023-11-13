@extends('layout.main')
@section('container')
    
<H1>Form Input </H1>
<h2>unutk user</h2>

<body class="bg-body-tertiary">

<div class="container">
<main>
  <div class="py-5 text-center">
    
    <h2>Input form</h2>
    <p class="lead">Berikut adalah input data sampah yang ingin dihitung</p>
  </div>

  <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Detail</span>

      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Nama Sampah</h6>
            <small class="text-body-secondary">tampil nama sampah</small>
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Kategory Sampah</h6>
            <small class="text-body-secondary">tampil Kategory</small>
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Berat Sampah </h6>
            <small class="text-body-secondary">Tampil berat </small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
          <div class="text-success">
            <h6 class="my-0">Total harga sampah</h6>
            
          </div>
          <span class="text-success">tampil harga</span>
          <button type="submit" class="btn btn-secondary">Simpan</button>
        </li>
      </ul>
    </div>

    
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Transaksi | Detail</h4>
      <form class="needs-validation" novalidate>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Nama Sampah</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Kategori Sampah</label>
            <select class="form-select" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Berat</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>

          
        </div>

        <hr class="my-4">

        <button class="w-100 btn btn-primary btn-lg" type="submit">Cek Harga</button>
      </form>
    </div>
  </div>
</main>
@endsection


      