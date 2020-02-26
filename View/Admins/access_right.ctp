<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
 					<li><a href="#">Add Customer Types</a></li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; Add Department Types</div>
 					<div class="panel-body ">
 						<div class="col-md-12">
 							<?php echo $this->Form->create('CustomerType', array('class'=>'form-signin form-signup','style'=>'margin:30px auto;max-width: 740px;','enctype'=>'multipart/form-data')); ?>      
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								<div class="user-login-info" style="overflow: hidden;">
 									<p class="signuptext2" style="color:#fff; text-align:center;"><i class="fa fa-user"></i>&nbsp;Add Department Type</p>
 								</div>
 								<div class="msg" style="text-align:center;color:red;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								<div class="col-md-3 boxesstyle">Department Type</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('type', array('type'=>'text','label' => false,'div'=>false, 'id'=>'type','class' => 'form-control boxesstyle','placeholder'=>'Enter Customer Types'));?>
 								</div>

 								
 								
 								<center>
 								<div class="col-md-12" style="padding:15px">
 								<input type="submit" id="submit" class="btn btn-info" value="Add">
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
