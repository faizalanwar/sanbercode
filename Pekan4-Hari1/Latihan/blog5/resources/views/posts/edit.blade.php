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
                <h3 class="card-title">Edit Post {{$posts->id}}</h3>
              </div>
              <form role="form" action="/post/{{$posts->id}}/" method="POST">
              @method('PUT');
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="Title" value="{{old('Title',$posts->Title)}}" placeholder="Input Title">
                    @error('Title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi</label>
                    <input type="text" class="form-control" name="Body"  value="{{old('Body',$posts->Body)}}" placeholder="Input Isi">
                    @error('Body')
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