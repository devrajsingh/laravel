<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
                <li class="active">Change Password</li>
                </ol>
            </div>
            <div class="col-md-0" style="padding-left:0">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-pencil-square-o"></i>&nbsp;Change Password</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="editprofilewrap">
                                    <div class="col-md-12">
                                        <?php echo $this->Form->create('Admin', array('class'=>'form-signin form-signup','style'=>'margin:30px auto;max-width: 740px;')); ?>      
                                        <div class="login-wrap" style="padding:0;margin:0px auto;">
                                            <div class="user-login-info" style="overflow: hidden;">
                                                <p class="signuptext2" style="color:#fff; text-align:center;">Change Password</p>
                                            </div>
                                            <?php echo  $this->Session->flash(); ?>
                                            <div class="col-md-3 boxesstyle">Old Password</div>
                                            <div class="col-md-9">
                                                <?php echo $this->Form->input('old_password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Old Password'));?>
                                            </div>
                                            <div class="col-md-3 boxesstyle">New Password</div>
                                            <div class="col-md-9">
                                                <?php echo $this->Form->input('password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Change Password'));?>
                                            </div>
                                            <div class="col-md-3 boxesstyle">Confirm Password</div>
                                            <div class="col-md-9"> 
                                                <?php echo $this->Form->input('confirm_password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Confirm Password'));?>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="submit" class="btn btn-default savebtn" value="Change Password">
                                                <a href="#" style="float:right;padding-top:6px" id="resetCAncel" >Cancel</a> 
                  <input type="reset" id="reset" class="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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