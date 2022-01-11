@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Add Letter</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                <form action="{{ route('letters.store') }}" method="post">
                    @csrf
                     <div class="row">
                       <div class="col-12">	
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>File Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="file_id" id="select" required="" class="form-control" aria-invalid="false">
                                            <option value="" selected="" disabled="">Select File</option>
                                            @foreach ($files as $file)
                                                <option value="{{ $file->id }}">{{ $file->file_no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>		
                            </div> <!-- End Col Md-6 -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Subject <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="letter_subject" class="form-control" required="" > </div>
                                </div>
                            </div><!-- End Col Md-6 -->
                        </div> <!-- End Row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Subject <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subject" class="form-control" required="" > </div>
                                </div>
                            </div> <!-- End Col Md-6 -->

                            <div class="col-md-6">
                                
                            </div><!-- End Col Md-6 -->
                        </div> <!-- End Row -->
                           
                       <div class="text-xs-right">
                           <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                       </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
      <!-- /.content -->
    
    </div>
</div>


@endsection