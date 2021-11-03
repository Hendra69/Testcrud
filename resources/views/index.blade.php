extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Jenis Kendaraan</td>
          <td>Nomor Polisi</td>
          <td>tgl</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($masuks as $masuk)
        <tr>
            <td>{{$masuk->id}}</td>
            <td>{{$masuk->jenis_kendaraan}}</td>
            <td>{{$masuk->nomor_polisi}}</td>
            <td>{{$masuk->tgl}}</td>
           
            <td>
                
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection