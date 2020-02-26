 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <?php echo $this->Html->css('backend/jquery.multiselect');?>
 <section id="main-content">
  <section class="wrapper">
    <div class="row" style="padding-top:20px">
      <div style="padding-right:0" class="col-md-12">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          
          <li class="active"> Push Notification</li>
        </ol>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading profileedit"><i class="fa fa-notification"></i>&nbsp; Emergency Push Notification</div>
          <div class="panel-body ">
            <div class="col-md-12">
              <?php echo $this->Form->create('Notification', array('class'=>'form-signin form-signup','enctype'=>'multipart/form-data','style'=>'margin:30px auto;max-width: 740px;')); ?>      
              <div class="login-wrap" style="padding:0;margin:0px auto;">
                <div class="user-login-info" style="overflow: hidden;">
                  <p class="signuptext2" style="color:#fff; text-align:center;">Push Notification</p>
                </div>
                  <?php echo  $this->Session->flash(); ?>
                <div class="col-md-12">
                  <?php echo $this->Form->input('notification_type', array('type'=>'select','name'=>'notification_type','class' => 'form-control boxesstyle','placeholder'=>'Notification Type','options'=>$user1,' id'=>'notification_type'));?>
                </div>
                <div class="col-md-12">
                  <?php echo $this->Form->input('customer_name', array('type'=>'select','name'=>'group_id[]','placeholder'=>'Notification Type','options'=>$user,'multiple id'=>'langOpt2'));?>
                </div>
             

                
                <div class="col-md-12">
                  <?php echo $this->Form->input('message' , array('type'=>'textarea','div'=>false, 'class' => 'form-control boxesstyle','rows'=>5,'placeholder'=>'Description'));?>
                </div>
                
                <div class="col-md-12">
                  <?php echo $this->Form->input('image' , array('type'=>'file','div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Image'));?>
                </div>
                <center>
                <div class="col-md-12" style="padding-top:20px">
                  <input type="submit" class="btn btn-info" value="Send Notification">
                  <input type="reset" class="btn btn-info" value="Reset">
                 
                  
                </div>
                </center>
                <div class="col-md-9"> &nbsp;</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
 <?php echo $this->Html->script('backend/jquery.multiselect'); ?>
 <script type="text/javascript">
 $('#langOpt2').multiselect({


    
    
   
});
  $(document).ready(function(){
    $('body').on('click','#resetCAncel', function(e){
      e.preventDefault();
      document.getElementById('reset').click();
    });
  });
 </script>
