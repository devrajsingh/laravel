 <style>
 select{
  font-weight:bold;
  color:black;
 }
 </style>
 <section id="main-content">
  <section class="wrapper">
    <div class="row" style="padding-top:20px">
      <div style="padding-right:0" class="col-md-12">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          
          <li class="active">Add Report</li>
        </ol>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading profileedit"><i class="fa fa-book"></i>&nbsp; Add Report</div>
          <div class="panel-body ">
            <div class="col-md-12">
              <?php echo $this->Form->create('UserReport', array('class'=>'form-signin form-signup','enctype'=>'multipart/form-data','style'=>'margin:30px auto;max-width: 740px;')); ?>      
              <div class="login-wrap" style="padding:0;margin:0px auto;">
                  <?php echo  $this->Session->flash(); ?>
                
				 <div class="col-md-5 boxesstyle">Duration</div>
				 <div class="col-md-7">
                  <?php echo $this->Form->input('duration' , array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$duration));?>
                </div>
         <div class="col-md-5 boxesstyle">CCTv</div>
         <div class="col-md-7">
                  <?php echo $this->Form->input('cctv' , array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$userArray));?>
                </div>
         <div class="col-md-5 boxesstyle">Internet</div>
         <div class="col-md-7">
                  <?php echo $this->Form->input('internet' , array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$userArray));?>
                </div>
        <div class="col-md-5 boxesstyle">DVR</div>
         <div class="col-md-7">
                  <?php echo $this->Form->input('dvr' , array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$userArray));?>
                </div>
        <div class="col-md-5 boxesstyle">Motion</div>
         <div class="col-md-7">
                  <?php echo $this->Form->input('motion' , array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$userArray));?>
                </div>
         <div class="col-md-5 boxesstyle">Guard</div>
         <div class="col-md-7">
                  <?php echo $this->Form->input('guard' , array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$userArray));?>
                </div>
         <div class="col-md-5 boxesstyle">Images</div>
         <div class="col-md-7">
          <input name="fileData[]" type="file" class="form-control boxesstyle" multiple="multiple" />
                  </div>
                <center>
                
                <div class="col-md-12" style="padding-top:20px; ">
                  <input type="submit" class="btn btn-default savebtn" value="Upload" style="background-color:#3FC7CB;color:#fff">
				  </div></center>
                 
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