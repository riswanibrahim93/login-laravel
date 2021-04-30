@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

    <!-- card -->
    <div class="d-flex justify-content-center mt-5 mb-5">
      <div class="card text-center " style="width: 50rem;">
        <div class="card-header">
          <h4>ADMIN 1</h4>
        </div>
        <div class="card-body">
          <h5>JUMLAH ANTRIAN: 5</h5>
          <H5>NOMOR ANTRIAN</H5>
          <H2>1</H2>
        </div>
        <div class="card-footer text-muted">
         <a href="#" class="btn btn-danger">Panggil Antrian</a>
         <a href="#" class="btn btn-success">Antrian Berikutnya</a>
        </div>
      </div>
    </div>
    
@endsection