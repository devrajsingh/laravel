 <section id="main-content">
  <section class="wrapper">
    <div class="row" style="padding-top:20px">
      <div style="padding-right:0" class="col-md-12">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          <li><?php echo  $this->Html->link('News', array('controller'=>'Admins', 'action'=>'NewsList'))?></li>
          <li class="active">Add FAQ</li>
        </ol>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; Add FAQ</div>
          <div class="panel-body ">
            <div class="col-md-12">
              <?php echo $this->Form->create('FrequentlyQuestion', array('class'=>'form-signin form-signup','enctype'=>'multipart/form-data','style'=>'margin:30px auto;max-width: 740px;')); ?>      
              <div class="login-wrap" style="padding:0;margin:0px auto;">
                <div class="user-login-info" style="overflow: hidden;">
                  <p class="signuptext2" style="color:#fff; text-align:center;">FAQ Details</p>
                </div>
                  <?php echo  $this->Session->flash(); ?>
                <div class="col-md-3 boxesstyle">FAQ Question</div>
                <div class="col-md-9">
                  <?php echo $this->Form->input('question', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'FAQ Question'));?>
                </div>

                <div class="col-md-3 boxesstyle">FAQ Answer</div>
                <div class="col-md-9">
                  <?php echo $this->Form->input('answer' , array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','rows'=>10,'placeholder'=>'FAQ Answer'));?>
                </div>
				 
                
                <div class="col-md-6" style="padding-top:20px">
                  <input type="submit" class="btn btn-default savebtn" value="Add FAQ">
				  <input type="reset" class="btn btn-default savebtn" value="Cancel" style="margin-left:320px;margin-top:-52px;">
                 
                  
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
  
 </script>