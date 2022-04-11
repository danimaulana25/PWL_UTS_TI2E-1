@extends('afvanie_01.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Sepeda
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="{{ route('sepeda.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" name="id" class="form-control" id="id" aria-describedby="id" >
                        </div>
                        <div class="form-group">
                            <label for="jenis_sepeda">Jenis Sepeda</label>
                            <input type="janis_sepeda" name="jenis_sepeda" class="form-control" id="jenis_sepeda" aria-describedby="jenis_sepeda" >
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="merk" name="merk" class="form-control" id="merk" aria-describedby="merk" >
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="ukuran" name="ukuran" class="form-control" id="ukuran" aria-describedby="ukuran" >
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="warna" name="warna" class="form-control" id="warna" aria-describedby="warna" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection