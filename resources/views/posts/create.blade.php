@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambahkan Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/posts" method="POST">
             @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="judul">judul</label>
                <input type="text" class="form-control" name="judul" value="{{old('judul', '')}}" id="judul" placeholder="Masukan judul">
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" value="{{old('isi','')}}" id="isi" name="isi" placeholder="Isi">
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
@endsection
