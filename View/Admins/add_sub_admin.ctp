<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
 					<li><a href="#">Add Sub Admin</a></li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; Add Sub Admin</div>
 					<div class="panel-body ">
 						<div class="col-md-12">
 							<?php echo $this->Form->create('Admin', array('class'=>'form-signin form-signup','style'=>'margin:30px auto;max-width: 740px;','enctype'=>'multipart/form-data')); ?>      
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								<div class="user-login-info" style="overflow: hidden;">
 									<p class="signuptext2" style="color:#fff; text-align:center;"><i class="fa fa-user"></i>&nbsp;Add Sub Admin</p>
 								</div>
 								<div class="msg" style="text-align:center;color:red;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								<div class="col-md-3 boxesstyle">Email</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('email', array('type'=>'text','label' => false,'div'=>false, 'id'=>'email','class' => 'form-control boxesstyle','placeholder'=>'Email Address'));?>
 								</div>

 								<div class="col-md-3 boxesstyle">Contact No.</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('mobile_no', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','id'=>'mobile','placeholder'=>'Mobile Number','maxlength'=>'10'));?>
 								</div>
 								<div class="col-md-3 boxesstyle"> Username</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('username', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','id'=>'username','placeholder'=>'Username'));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Password</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','id'=>'password','placeholder'=>'Password','value'=>''));?>
 								</div>
 								
 								<div class="col-md-3 boxesstyle">Confirm Password</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('confirm_password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','id'=>'cnf_password','placeholder'=>'confirm password'));?>
 								</div>
<div class="col-md-3 boxesstyle">Department Access</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('customer_type_access', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','id'=>'customer_type_access','options'=>$department));?>
 								</div>
 								
 								<center>
 								<div class="col-md-12" style="padding:15px">
 								<input type="submit" id="submit" class="btn btn-info" value="Add Sub Admin">
 									<input type="reset" class="btn btn-info " value="Reset"></div>
 							</div>
 							</center>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 </section>
<script>
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}

$(document).ready(function(){
$("#mobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $('.msg').html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
$('#submit').on('click',function(){
 var email=$('#email').val();
 var mobile=$('#mobile').val();
 var username=$('#username').val();
 var password=$('#password').val();
 var cnf_password=$('#cnf_password').val();

 if(email==''){
  $('.msg').html('<div class="alert alert-danger">Email Fields Can Not Be Blank!</div>');
  return false;
 }
 else if(!isEmail(email)){
 $('.msg').html('<div class="alert alert-danger">Please Enter Valid Email Address!</div>');
  return false;
	
 }
 else if(mobile==''){
  $('.msg').html('<div class="alert alert-danger">Mobile No. Can Not Be Blank!</div>');
  return false;
 }
 
 else if(username==''){
  $('.msg').html('<div class="alert alert-danger">User Name Can Not Be Blank!</div>');
  return false;
 }
 else if(password==''){
  $('.msg').html('<div class="alert alert-danger">Password Can Not Be Blank!</div>');
  return false;
 }
 else if(cnf_password==''){
  $('.msg').html('<div class="alert alert-danger">Confirm Password Can Not Be Blank!</div>');
  return false;
 }
 else if(password!=cnf_password){
 $('.msg').html('<div class="alert alert-danger">Password and confirm_password are not same!</div>');
  return false;
 	
 }
 else{
 	return true;
 }

})
})
</script>