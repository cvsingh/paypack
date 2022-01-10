@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">File List</h3>
                <a href="{{ route('files.add') }}" style="float:right;" class="btn btn-rounded btn-success mb-5">Add File</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">Sl. No.</th>
                              <th>File No.</th>
                              <th>Subject</th>
                              <th>Section</th>
                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key=> $file)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $file->file_no }}</td>
                            <td>{{ $file->subject }}</td>
                            <td>{{ $file->section }}</td>
                            <td>
                                <a href="{{ route('files.edit', $file->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('files.delete', $file->id) }}" class="btn btn-danger" id="delete">Delete</a>
                            </td>
                        </tr>
                              
                          @endforeach
                        
                         
                      </tbody>

                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->  
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->


@endsection