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
          <li><?php echo  $this->Html->link('News', array('controller'=>'Admins', 'action'=>'NewsList'))?></li>
          <li class="active">View Image</li>
        </ol>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading profileedit"><i class="fa fa-briefcase"></i>&nbsp;View Image</div>
          <div class="panel-body ">
            <?php foreach($view_image as $res){?>
            <div class="col-md-4">
              <img src="<?php echo HTTP_ROOT;?>img/upload_csv/<?php echo $report_date;?>/<?php echo $res['ReportImage']['image'];?>" width="200" height="200">
            </div>
            <?php }?>
                 
              
                  
                
				 
         
                 
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