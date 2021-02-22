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

                      {{Form::open(['route' => 'assignee.store','files' => true, 'class'=>'form-horizontal course-form','data-parsley-validate'])}}
                      <div class="panel-body">                   
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Assignee's Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control"  data-required="true" placeholder="Assignee's Name" required>   
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Phone no.</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control"  data-required="true" placeholder="Phone no.(e.g. +91-xxxxxxxxxx)" data-parsley-type="digits" required>   
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-sm-3 control-label">Location</label>
                          <div class="col-sm-9">
                            <input type="text" name="location" class="form-control"  data-required="true" placeholder="Address(e.g. District,State,Country)" required>   
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


                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Skill's</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-multiple form-control" name="skills[]" multiple="multiple">
                                @foreach($skills as $key=>$value)
                                <option value="{{$value->id}}">{{$value->skill}}</option>
                                @endforeach
                            </select>
                          </div>
                         </div>


                         <!-- <label class="col-sm-3 control-label">Skill</label>
                        <select class="js-example-basic-multiple form-control" name="parameters[]" multiple="multiple">
                            @foreach($skills as $key=>$value)
                            <option value="{{$value->skill}}">{{$value->skill}}</option>
                            @endforeach
                        </select> -->


                        <!-- <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-9">
                            <select name="status" required>
                         <option value="">select</option>
                         <option value="A">Active</option>
                         <option value="I">Inactive</option>
                           </select>

                          </div>
                         </div> -->
                    
                    
                      

                       <!-- <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Select An Image(Min Dimension:300 x 200)</label>
                          <div class="col-sm-9">

            <div class="input_fields_wrap">
                
                
                  <div style="margin-bottom:10px;">
                       <input type="file" name="image_name" class="GalleryImage" id="img0" required /> &nbsp 
                  </div>

           </div>      
                       </div>
                     </div> -->
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