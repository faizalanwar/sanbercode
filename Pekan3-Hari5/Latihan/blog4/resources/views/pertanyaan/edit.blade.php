@extends('adminlte.master')

@section('title')
<h1> Edit Post</h1>
@endsection

@section('content')

<section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Post {{$pertanyaan->id}}</h3>
              </div>
              <form role="form" action="/pertanyaan/{{$pertanyaan->id}}/" method="POST">
              @method('PUT');
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{old('judul',$pertanyaan->judul)}}" placeholder="Input judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi</label>
                    <input type="text" class="form-control" name="isi"  value="{{old('Isi',$pertanyaan->isi)}}" placeholder="Input Isi">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection