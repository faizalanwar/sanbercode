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
          
           <a class="btn btn-default float-right" href="/pertanyaan/create"><i class="fas fa-plus"></i> Tambah Data</a>
                
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
                      </th> 
                      <th style="width: 28% "class="text-right">
                      
                      </th>
                  </tr>
              </thead>
              <tbody> 
              @foreach($pertanyaan as $key => $tanya)
                  <tr>

                    
                      <td>
                          {{$key +1}}
                      </td>
                      <td>
                      {{$tanya->judul}}
                      </td>
                      <td>
                      {{$tanya->isi}}
                      </td>
                      <td class="project-actions text-right" style="display:flex ">
                          <a class="btn btn-primary btn-sm" href="/pertanyaan/{{$tanya->id}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>&nbsp;
                          <a class="btn btn-info btn-sm" href="/pertanyaan/{{$tanya->id}}/edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>&nbsp;
                          <form action="pertanyaan/{{$tanya->id}}" method ="post"class="inline">
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