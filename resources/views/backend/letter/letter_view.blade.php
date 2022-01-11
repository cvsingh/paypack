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
                <h3 class="box-title">Letters List</h3>
                @if ($current_user->usertype == 'User')
                <a href="{{ route('letters.add') }}" style="float:right;" class="btn btn-rounded btn-success mb-5">Add Letter</a>
                @endif
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
                              <th>Letter No.</th>
                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key=> $letter)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $letter->file_id }}</td>
                            <td>{{ $letter->file_subject }}</td>
                            <td>{{ $letter->type_document }}</td>
                            <td>{{ $letter->letter_no }}</td>
                            <td>
                                <a href="{{ route('files.edit', $letter->id) }}" class="btn btn-info">Submit</a>
                                <a href="{{ route('files.delete', $letter->id) }}" class="btn btn-danger" id="delete">Return</a>
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