 <section id="main-content">
  <section class="wrapper">
    <div class="row" style="padding-top:20px">
      <div style="padding-right:0" class="col-md-12">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          <li><?php echo  $this->Html->link('Plans', array('controller'=>'Admins', 'action'=>'PlanList'))?></li>
          <li class="active">Edit Plans</li>
        </ol>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; Edit Plan</div>
          <div class="panel-body ">
            <div class="col-md-12">
              <?php echo $this->Form->create('SubscriptionPlan', array('class'=>'form-signin form-signup','style'=>'margin:30px auto;max-width: 740px;')); ?>      
              <div class="login-wrap" style="padding:0;margin:0px auto;">
                <div class="user-login-info" style="overflow: hidden;">
                  <p class="signuptext2" style="color:#fff; text-align:center;">Plan Details</p>
                </div>
                  <?php echo  $this->Session->flash(); ?>
                <div class="col-md-3 boxesstyle">Plan Name</div>
                <div class="col-md-9">
                  <?php echo $this->Form->input('plan_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Plan Name', 'value'=>$plan['plan_name']));?>
                </div>

                <div class="col-md-3 boxesstyle">Price</div>
                <div class="col-md-9">
                  <?php echo $this->Form->input('plan_price' , array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Plan  Price in $','value'=>$plan['plan_price']));?>
                </div>
                <div class="col-md-3 boxesstyle">Biannual Discount</div>
                <div class="col-md-9"> 
                  <?php 
                  echo $this->Form->input('discount_biannual', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Discount in %','value'=>$plan['discount_biannual']));?>
                </div>
                <div class="col-md-3 boxesstyle">Annual Discount</div>
                <div class="col-md-9"> 
                  <?php 
                  echo $this->Form->input('discount_annual', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Discount in %','value'=>$plan['discount_annual']));?>
                </div>
                
                <div class="col-md-3 boxesstyle">No.of Operators</div>
                <div class="col-md-9"> 
                  <?php 
                  echo $this->Form->input('operators', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$plan['operators']));?>
                </div>
                <div class="col-md-3 boxesstyle">Description</div>
                <div class="col-md-9"> 
                  <?php echo $this->Form->textarea('description', array('label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Enter Description here','value'=>$plan['description']));?>
                </div>
                <div class="col-md-6" style="padding-top:20px">
                  <input type="submit" class="btn btn-default savebtn" value="Update">
                  <a href="#" style="float:right;padding-top:6px" id="resetCAncel" >Cancel</a> 
                  <input type="reset" id="reset" class="hidden">
                </div>
                <div class="col-md-9"> &nbsp;</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
 <script type="text/javascript">
  $(document).ready(function(){
    $('body').on('click','#resetCAncel', function(e){
      e.preventDefault();
      document.getElementById('reset').click();
    });
  });
 </script>