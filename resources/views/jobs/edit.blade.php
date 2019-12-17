@extends('base')
@section('jobs','active')
@section('content')
<form action="{{route('jobsUpdate')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" name="nama" value="{{$jobs->nama}}" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection