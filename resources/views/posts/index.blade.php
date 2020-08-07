@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if (session('success'))
                  <div class="alert alert-success">
                      {{session('success')}}
                  </div>
              @endif
              <a class="btn btn-primary mb-2" href="/posts/create">create new post</a>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>judul</th>
                    <th>isi</th>
                    <th style="width: 40px">action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($pertanyaans as $key => $pertanyaan)
                      <tr>
                          <td> {{$key+1}} </td>
                          <td> {{$pertanyaan->judul}} </td>
                          <td> {{$pertanyaan->isi}} </td>
                          <td style="display: flex">
                              <a href="/posts/{{$pertanyaan->id}}" class="btn btn-info btn-sm">show</a>
                              <a href="/posts/{{$pertanyaan->id}}/edit" class="btn btn-default btn-sm">edit</a>
                              <form action="/posts/{{$pertanyaan->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                              </form>
                          </td>
                      </tr>
                      @empty
                      <p>no post</p>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection
