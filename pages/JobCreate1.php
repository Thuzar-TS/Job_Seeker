<?php include_once("../layout/header.php"); ?>

<style>
.hide{
        display:none;
}
</style>
   <div class="wrap">
      <div class="row">     
         <div class="col-md-12">
               <div class="panel panel-info scroll"> 
                  <div class="panel-header"><h4 class ="page-header"> <strong> Job Create </strong></h4></div>
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-sm-2"></div>
                           <div class="col-sm-8">    
                              <form method="post" action="" class="form-horizontal " style = "margin-top:30px">   
                                    <div class="form-group">     
                                       <div class = "col-sm-3">
                                          <label for="customerid" >Customer ID : </label> 
                                       </div>                                                           
                                       <div class="col-sm-8">
                                             <input type="text" class="form-control" id="customer_id" name="customer_id" >
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class = "col-sm-3">
                                          <label for="jobid" >Job ID : </label>
                                       </div>        
                                       <div class="col-sm-8">
                                             <input type="text" class="form-control" id="job_id" name="Job_id" >
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class = "col-sm-3">
                                          <label for="customername" >Customer Name : </label>
                                       </div>     
                                       <div class="col-sm-8">
                                             <input type="text" class="form-control" id="customer_name" name="customer_name">
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class = "col-sm-8"> <h3><u> Job Information </h3></u></div>  
                                    </div>
                                  

                                    <div class="form-group" style = "margin-top:20px">
                                       <div class = "col-sm-3"> 
                                             <label for="jobtitle" >Job Title : </label>
                                       </div> 
                                       <div class="col-sm-8">
                                             <input type="text" class="form-control" id="job_title" name="job_title" >
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class = "col-sm-3">
                                          <label for="image" >Image</label>
                                       </div>
                                       <div class="col-sm-8">
                                             <input type="file" class="form-control" id="imgInp" name="Job_id" >
                                             <img id="blah" src="#" class="hide img-thumbnail" width="300" />
                                       </div>
                                    </div>   

                                 
                                    <div id="newlink"><div>
                                    
                                    <div class="form-group">
                                       <div class = "col-sm-3"></div>
                                       <div class = "col-sm-8">
                                       <p id="addnew"><a href="javascript:new_link()" class="btn btn-md btn-info"> <span class="glyphicon glyphicon-plus"></span> Add New Item </a></p>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class = "col-sm-3">
                                          <label for="header" >Header : </label>
                                       </div>
                                       <div class="col-sm-8">
                                             <input type="text" class="form-control" id="header" name="header" >
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class = "col-sm-3">
                                          <label for="body" > Body : </label>
                                       </div>
                                       <div class="col-sm-8">          
                                             <textarea name="body" class="form-control" cols="50" rows="5" ></textarea>
                                       </div>
                                    </div>
                                   
                                                   
                              </form>                      
                           </div>
                           <div class="col-sm-2"></div>
                        </div>
                        <!-- Template -->
                        <div id="newlinktpl" style="display:none">
                        
                          
                           <div class="form-group" style="margin-top:30px">
                              <div class = "col-sm-3">
                                    <label for="header" >Header : </label>
                              </div>
                              <div class="col-sm-8">
                                    <input type="text" class="form-control" id="header" name="header" >
                              </div>
                           </div>
                           <div class="form-group">
                                 <div class = "col-sm-3">
                                    <label for="body">Body : </label>
                                 </div>
                                 <div class="col-sm-8">          
                                    <textarea name="body" class="form-control" cols="50" rows="5" ></textarea>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>     
          </div>
      </div> 
   </div>
 
<script>
var ct = 1;
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
	var delLink = '<div class = "row"><div class = "col-sm-2"></div> <div class = "col-sm-7"></div> <div class= "col-sm-3"> <div class="btn btn-sm btn-danger"><a href="javascript:delIt('+ ct +')">  Undo </a>  </div>   </div></div> ';
	div1.innerHTML = document.getElementById('newlinktpl').innerHTML + delLink;
	document.getElementById('newlink').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink');
	parentEle.removeChild(ele);
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
  $('#blah').removeClass('hide');
});
</script>

<?php include_once("../layout/footer.php"); ?>