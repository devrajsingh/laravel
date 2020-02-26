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
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i>&nbsp;Customer Listing</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                <div class="row">
                                    <!-- <div class="col-md-10" style="margin-bottom:20px;">
                                        <?php echo $this->Html->link('Add New Company', array('controller'=>'Admins','action'=>'AddCompany'), array('class'=>'btn btn-addnew'))  ?>
                                     --></div>
                                    <br>
                                </div>
                            </div>
                            <?php echo $this->Session->flash();?>
                            <table class="table table-striped table-bordered" id="example" >
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <?php if($type['Admin']['user_type']=='1'){?>
                                    <th>Client Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    <th>Address</th>
                                    <?php }else{?>
                                    <th>Client Id</th>
                                    <th>Name</th>
                                    <?php }?>

									<th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view as $res){ ?>
                               
                                    <?php if($type['Admin']['user_type']=='1'){?>
                                    <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo (!empty($res['UserMaster']['client_id']))?ucfirst($res['UserMaster']['client_id']):"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['first_name']))?ucfirst($res['UserMaster']['first_name']):"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['email']))?$res['UserMaster']['email']:"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['mobile']))?$res['UserMaster']['mobile']:"N/A";?></td>
                                    
									<td><?php echo (!empty($res['UserMaster']['address']))?$res['UserMaster']['address']:"N/A";?></td>
                                    <td><?php if($res['UserMaster']['status']==1){
                                      echo "Active";  
                                      }else if($res['UserMaster']['status']==2){
                                        echo "DeActive";
                                      }
                                      ?></td>
                                    <td><?php //echo $this->Html->link('View',array('controller'=>'Admins','action'=>'view/'.base64_encode($res['User']['id'])))."&nbsp;|&nbsp;";
                                         //echo $this->Html->link('Edit',array('controller'=>'Admins','action'=>'edit/'.base64_encode($res['User']['id'])))."&nbsp;|&nbsp;";
                                    echo $this->Html->link('View Report',array('controller'=>'Admins','action'=>'reportDetail/'.base64_encode($res['UserMaster']['id'])))."&nbsp;|&nbsp;";
                                         
                                         echo $this->Html->link('Delete',array('controller'=>'Admins','action'=>'delete/'.base64_encode($res['UserMaster']['id'])))."&nbsp;|&nbsp;";
                                           if($res['UserMaster']['status']==1)
                                      {
                                        echo $this->Html->link('DeActivate',array('controller'=>'Admins','action'=>'ChangeStatus/'.base64_encode($res['UserMaster']['id'])));
                                      }
                                      else{
                                        echo $this->Html->link('Activate',array('controller'=>'Admins','action'=>'ChangeStatus/'.base64_encode($res['UserMaster']['id'])));
                                      }
                                         ?>
                                    </td>
                                </tr>
                                     <?php }else{
                                            if($res['UserMaster']['assign_me']=='1'){?>
                                             <tr>
                                    <td><?php echo $i; $i++;?></td>
                                     <td><?php echo (!empty($res['UserMaster']['client_id']))?ucfirst($res['UserMaster']['client_id']):"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['first_name']))?ucfirst($res['UserMaster']['first_name']):"N/A";?></td>
                                    <td><?php if($res['UserMaster']['status']==1){
                                      echo "Active";  
                                      }else if($res['UserMaster']['status']==2){
                                        echo "DeActive";
                                      }
                                      ?></td>
                                    <td><?php //echo $this->Html->link('View',array('controller'=>'Admins','action'=>'view/'.base64_encode($res['User']['id'])))."&nbsp;|&nbsp;";
                                         //echo $this->Html->link('Edit',array('controller'=>'Admins','action'=>'edit/'.base64_encode($res['User']['id'])))."&nbsp;|&nbsp;";
                                    echo $this->Html->link('View Report',array('controller'=>'Admins','action'=>'reportDetail/'.base64_encode($res['UserMaster']['id'])));
                                         
                                        
                                         ?>
                                    </td>
                                </tr>
                                    <?php }}?>
									
									
									
									
                                    
                                <?php } ?>
                                </tbody>
                            </table>
	

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
