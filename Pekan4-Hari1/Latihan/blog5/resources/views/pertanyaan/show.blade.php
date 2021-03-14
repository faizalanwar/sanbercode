@extends('adminlte.master')

@section('title')
<h1> Show Datae</h1>
@endsection

@section('content')




    <!-- Main content -->
    <section class="content">
    <div class="card">
       
        <div class="card-body p-4">
        <p> Title : {{$pertanyaan->judul}}</p>
        <p> Body : {{$pertanyaan->isi}}</p>


        <a class="btn btn-default center" href="/pertanyaan"><i class="fas fa-back"></i>Back to homepage</a>
       
        </div>
        <!-- /.card-body -->
      </div>
      <!-- Default box -->
 
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
  @endsection