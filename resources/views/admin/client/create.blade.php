@extends('admin.adminmain')
 @section('title',"Admin | Assignees")
 @section('stylesheets')
          <link href="{{asset('admin/css/select2.min.css')}}" rel="stylesheet">
 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">

 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href=""><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Assignee management</a></li>>
                <li><a href="">Add Details</a></li>
            </ul>

                       <!-- <header class="panel-heading">
                        <span class="h4">Add Image</span>
                      </header> -->

                      {{Form::open(['route' => 'client.store','files' => true, 'class'=>'form-horizontal course-form','data-parsley-validate'])}}
                      <div class="panel-body">                   
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Client's Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control"  data-required="true" placeholder="Client's Name" required>   
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Contact no.</label>
                          <div class="col-sm-9">
                            <input type="text" name="contact" class="form-control"  data-required="true" placeholder="Contact no.(e.g. +91-xxxxxxxxxx)" data-parsley-type="digits" required>   
                          </div>
                        </div>



                         <div class="line line-dashed line-lg pull-in"></div>
                          <div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control"  data-required="true" placeholder="abc@xyz.com" required>   
                          </div>
                        </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        
                  <footer class="panel-footer text-right bg-light lter">
                       
                          <input type="submit" class="btn btn-success btn-s-xs" value="Submit"/>

                        <a href="{{url('/admin/assignee')}}" class="btn btn-danger">Cancel</a>
                      </footer>


                     </div>

                     {{Form::close()}}
                      
                      
          

</section>
</section>
</section>



 @endsection


 @section('scripts')
 <script src="{{asset('admin/js/select2.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>

 @endsection