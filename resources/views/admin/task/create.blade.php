@extends('admin.adminmain')
 @section('title',"Admin | Assignees")
 @section('stylesheets')
          <link href="{{asset('admin/css/select2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" /> -->



 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">

 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href=""><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Task management</a></li>>
                <li><a href="">Add Task</a></li>
            </ul>

                       <!-- <header class="panel-heading">
                        <span class="h4">Add Image</span>
                      </header> -->

                      {{Form::open(['route' => 'cal.store','files' => true, 'class'=>'form-horizontal course-form','data-parsley-validate','dropzone'])}}
                      <div class="panel-body">                   
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control"  data-required="true" placeholder="Title" required>   
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Bid Cost.</label>
                          <div class="col-sm-9">
                            <input type="text" name="bcost" class="form-control"  data-required="true" placeholder="Bid Cost" data-parsley-type="digits" required>   
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-sm-3 control-label">Assigned Cost</label>
                          <div class="col-sm-9">
                            <input type="text" name="acost" class="form-control"  data-required="true" placeholder="Assigned Cost" required>   
                          </div>
                        </div>


<!--                          <div class="line line-dashed line-lg pull-in"></div>
                          <div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control"  data-required="true" placeholder="abc@xyz.com" required>   
                          </div>
                        </div>
                        </div>

 -->
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Clients</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-multiple form-control" name="clients[]" >
                                @foreach($clients as $key=>$value)
                                <option value="{{$value}}">{{$key}}</option>
                                @endforeach
                            </select>
                          </div>
                         </div>



                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Assignee</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-multiple form-control" name="assignee[]" >
                                @foreach($assignee as $key=>$value)
                                <option value="{{$value}}">{{$key}}</option>
                                @endforeach
                            </select>
                          </div>
                         </div>

                         <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Assigned Date</label>
                          <div class="col-sm-9">
                              <input type="datetime-local" class="form-control" name="assigned_date">
                            </div>

                             </div>
                            </div>

                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Delivery Date</label>
                          <div class="col-sm-9">
                              <input type="datetime-local" class="form-control" name="delivery_date">
                            </div>

                            </div>
                            </div>

                           
                            
                            <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Villa Images(Min Dimension:1921x724)</label>
                          <div class="col-sm-9">

<div class="input_fields_wrap">
                  <button class="add_field_button glyphicon glyphicon-plus btn btn-primary" aria-hidden="true" style="margin-bottom:10px;">Add More Images</button><br>
                
                  <div style="margin-bottom:10px;">
                       <input type="file" name="image_name[]" class="GalleryImage" id="img0" required /> &nbsp Set Featured <input type="radio" name="set_featured" id="set" value="0">
                  </div>

           </div>      
                       </div>
                     </div>





                            
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-9">
                            <select name="status" required>
                         <option value="">select</option>
                         <option value="A">In Progress</option>
                         <option value="I">Completed</option>
                           </select>

                          </div>
                         </div>





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
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script> -->



 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>


 <script src="{{asset('admin/js/select2.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});


$('.datepicker').datetimepicker();





<script>
 
      $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            //text box increment
            $(wrapper).append('<div style="margin-bottom:10px;"><input type="file" class="GalleryImage" id=img'+x+' name="image_name[]"/> &nbsp Set Featured<input type="radio" name="set_featured" value='+x+'><a href="#" class="remove_field" style="margin-left: 20px">Remove</a></div>'); //add input box
             x++;
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

<script>
function addvillas(){
   var x = $('.description').val();

   //return false;
   var y=x.replace(/<\/?[^>]+(>|$)/g,"");



var hasError = false;


if(y=="")
 {
  document.getElementById('n').innerHTML= "<span style='color: red;'>Please Add Some Contents</span>";
 
hasError = true;
 }else{
  document.getElementById('n').innerHTML="";
 
 }


 if(y.length>683)
 {
 
  document.getElementById('new').innerHTML="<span style='color: red;'>Sorry You Have Reached More Than 683 characters</span>";
 
  hasError = true;
 }else{
 
  document.getElementById('new').innerHTML="";
 }



if(hasError){
   return false;
}
return true;



}
</script>


<script type="text/javascript">
    $(document).on("change",".GalleryImage", function () {

     var id=$(this).attr('id');
    

       var fileInput = $(".villa-form").find("#"+id)[0],
        file = fileInput.files && fileInput.files[0];
       


     if( file ) {

    //added new
      var imgPath = $(this)[0].value;
      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
   

      if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
     //added new

        var img = new Image();

        img.src = window.URL.createObjectURL( file );

        img.onload = function() {
            var width = img.naturalWidth,
                height = img.naturalHeight;

            window.URL.revokeObjectURL( img.src );

            if( width>1920 && height> 723 ) {

       if(id=="img0")
          {

              document.getElementById('set').checked = true;
          }


            }
            else {
               alert("Image Does Not Meets The Dimensions Required");
               
                $('#'+id).val('');
             
            }



        };
      }
      else{
        $(this).val('');
        alert("Please Choose Only Image");
      }
    }
    else { //No file was input or browser doesn't support client side reading
      alert("No File Chosen");
    }

   
 });
</script>
 @endsection