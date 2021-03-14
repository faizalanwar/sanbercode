@extends('adminlte.master')

@section('title')
<h1> Data Table</h1>
@endsection

@section('content')




    <!-- Main content -->
    <section class="content">
        @if(session('success'))

        <div class="alert alert-success">{{session('success')}}</div>

        @endif
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
          
           <a class="btn btn-default float-right" href="/post/create"><i class="fas fa-plus"></i> Tambah Data</a>
                
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 15%">
                          Judul
                      </th>
                      <th style="width: 37%">
                          Isi
                      </th>
                      <!-- <th style="width: 10%">
                          Tangal Dibuat
                      </th>
                      <th style="width: 8%">
                          Tanggal Diperbaharui
                      </th>
                      <th style="width: 5%" class="text-center">
                          Status
                      </th> -->
                      <th style="width: 28% "class="text-right">
                      
                      </th>
                  </tr>
              </thead>
              <tbody> 
              @foreach($posts as $key => $post)
                  <tr>

                    
                      <td>
                          {{$key +1}}
                      </td>
                      <td>
                      {{$post->Title}}
                      </td>
                      <td>
                      {{$post->Body}}
                      </td>
                      <!-- <td class="project-state">
                          04 03 2020
                      </td><td class="project-state">
                          05 04 2021
                      </td> 
                      <td class="project-state">
                          <span class="badge badge-success">Solved</span>
                      </td>-->
                      <td class="project-actions text-right" style="display:flex ">
                          <a class="btn btn-primary btn-sm" href="/post/{{$post->id}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>&nbsp;
                          <a class="btn btn-info btn-sm" href="/post/{{$post->id}}/edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>&nbsp;
                          <form action="post/{{$post->id}}" method ="post"class="inline">
                          @method('DELETE')
                          @csrf
                          <input type="submit"  class="btn btn-danger btn-sm inline" value="Delete" >
                         
                          </form>
                      </td>
                    
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
  @endsection