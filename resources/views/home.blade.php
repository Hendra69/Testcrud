@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('masuks.store') }}">
          <div class="form-group">
              @csrf
              <label for="jenis_kendaraan">Jenis Kendaraan:</label>
              <input type="text" class="form-control" name="jenis kendaraan"/>
          </div>
          <div class="form-group">
              <label for="nomor_polisi">Nomor Polisi :</label>
              <textarea rows="5" columns="5" class="form-control" name="nomor polisi"></textarea>
          </div>
          <div class="form-group">
              <label for="tgl">Tanggal :</label>
              <input type="date" class="form-control" name="tanggal"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
