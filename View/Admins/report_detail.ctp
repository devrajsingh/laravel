<?php 
    //echo $this->Html->css('backend/font-awesome');
    echo $this->Html->script('backend/datatable');
    echo $this->Html->script('backend/jquery-1.12.0.min');
    echo $this->Html->script('backend/jquery.dataTables.min');
    echo $this->Html->script('backend/dataTables.buttons.min');
    echo $this->Html->script('backend/buttons.flash.min');
    echo $this->Html->script('backend/jszip.min');
    echo $this->Html->script('backend/pdfmake.min');
    echo $this->Html->script('backend/vfs_fonts');
    echo $this->Html->script('backend/buttons.html5.min');
    echo $this->Html->script('backend/buttons.print.min');
    echo $this->Html->css('backend/datatable');
    echo $this->Html->css('backend/jquery.dataTables.min');
    echo $this->Html->css('backend/buttons.dataTables.min');




?>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers",
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    } );
} );
</script>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false))?></li>
                    <li class="active">Report Detail</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-bug"></i>&nbsp;Report Detail</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <?php echo $this->Session->flash();?>
                        </div>
                                    <div class="col-md-10" style="margin-bottom:20px;">
                                        <?php echo $this->Html->link('Add Report', array('controller'=>'Admins','action'=>'uploadReport/'.$view_ide), array('class'=>'btn btn-addnew'))  ?>
                                     </div>
                                    <br>
                                </div>
                            </div>
                            

                            <table class="table table-striped table-bordered" id="example" >
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Date</th>
                                    <th>Duration</th>
                                    <th>CCTv</th>
                                    <th>Internet</th>
                                    <th>DVR</th>
                                    <th>Motion</th> 
                                    <th>Guard</th>
                                    <th>Image</th>  
									<th>Status</th>
                                   <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                 foreach($view_report as $res){?>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $res['UserReport']['add_date'];?></td>
                                    <td><?php echo $res['UserReport']['duration'];?></td>
                                    <td><?php echo ($res['UserReport']['cctv']==1)?"Functional":($res['UserReport']['cctv']==2)?"Not Functional":"Not Available";?></td>
                                    <td><?php echo ($res['UserReport']['internet']==1)?"Functional":"Not Functional";?></td>
                                    <td><?php echo ($res['UserReport']['dvr']==1)?"Functional":"Not Functional";?></td>
                                    <td><?php echo ($res['UserReport']['motion']==1)?"Functional":"Not Functional";?></td>
                                    <td><?php echo ($res['UserReport']['guard']==1)?"Functional":"Not Functional";?></td>
                                    <td><a href="<?php echo HTTP_ROOT;?>/admins/viewAllImage/<?php echo base64_encode($res['UserReport']['id'])?>">View All Image</a></td>
                                    <td><?php if($res['UserReport']['status']==1){
                                        echo "Active";
                                    }
                                    else{
                                        echo "DeActive";
                                    }?></td>
                                    <td><?php 
                                   
                                         
                                        
                                           if($res['UserReport']['status']==1)
                                      {
                                        echo $this->Html->link('DeActivate',array('controller'=>'Admins','action'=>'ChangeReportStatus/'.base64_encode($res['UserReport']['id'])));
                                      }
                                      else{
                                        echo $this->Html->link('Activate',array('controller'=>'Admins','action'=>'ChangeReportStatus/'.base64_encode($res['UserReport']['id'])));
                                      }
                                         ?>
                                    </td>
                                    </tr>
                                <?php }
                                 ?>
                                </tbody>
                            </table>
	

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
