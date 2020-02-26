<?php $countryList = $this->requestAction(array('controller'=>'Cpanels', 'action'=>'getCountryList'));?>
<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
 					<li><a href="#">Company</a></li>
 					<li class="active">Edit Company</li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; Edit Company</div>
 					<div class="panel-body ">
 						<div class="col-md-12">
 							<?php echo $this->Form->create('User', array('class'=>'form-signin form-signup','style'=>'margin:30px auto;max-width: 740px;','enctype'=>'multipart/form-data')); ?>      
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								<div class="user-login-info" style="overflow: hidden;">
 									<p class="signuptext2" style="color:#fff; text-align:center;"><i class="fa fa-edit"></i>&nbsp;Edit company</p>
 								</div>
 								<div style="color:red;text-align:center;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								<div class="col-md-3 boxesstyle">First Name</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('first_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'First Name','value'=>$edit['first_name']));?>
 								</div>

 								<div class="col-md-3 boxesstyle">Last Name</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('last_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Last Name','value'=>$edit['last_name']));?>
 								</div>
 								<div class="col-md-3 boxesstyle"> Username</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('username', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Username','value'=>$edit['username'], 'readonly'=>true));?>
 								</div>
 								<div class="col-md-3 boxesstyle"> Email</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('email', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Email','value'=>$edit['email'], 'readonly'=>true));?>
 								</div>
 								<div class="col-md-3 boxesstyle"> Company Name</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('company_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Company Name','value'=>$edit['company_name'], 'readonly'=>true));?>
 								</div>

 								<div class="col-md-3 boxesstyle">Password</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Password','value'=>''));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Confirm Password</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('confirm_password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'confirm password','value'=>''));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Profile Pic</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('image', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Contact No.</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('phone_number', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Phone Number','value'=>$edit['phone_number']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Address 1</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('address', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Address','value'=>$edit['address']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Address 2</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('address2', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Address 2','value'=>$edit['address2']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Zip Code</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('zipcode', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'zipcode','value'=>$edit['zipcode']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">City</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('city', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'City','value'=>$edit['city']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">State</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('state', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'State','value'=>$edit['state']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Country</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('country', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Country','options'=>$countryList,'selected'=>$edit['country']
 									));?>
 								</div>
 								<div class="col-md-6" style="padding:15px"><input type="submit" class="btn btn-default savebtn" value="Update">
 									<a href="#" style="float:right;margin-top:6px;">Cancel</a>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 </section>
