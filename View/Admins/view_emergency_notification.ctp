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
                    <li class="active">Send Notification Listing</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i>&nbsp;Send Notification Listing</div>
                        <div class="panel-body">
                        <?php echo $this->Session->flash();?>
                            <div class="table-top-action">
                                <div class="row" style="overflow:auto;">
                                    <div class="col-md-10" style="margin-bottom:20px;">
                                        <?php echo $this->Html->link('Send Notification', array('controller'=>'Admins','action'=>'sendEmergency'), array('class'=>'btn btn-addnew'))  ?>
                                        </div>
                                     
                            
                           
                            <table class="table table-striped table-bordered" id="example" >
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>User Name</th>
                                    <th>Notification Type</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_notification as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo (!empty($res['Notification']['uuid']))?ucfirst($res['Notification']['uuid']):"N/A";?></td>
                                    <td><?php if($res['Notification']['notification_type']==1){
                                      echo "Marketting";  
                                      }else if($res['Notification']['notification_type']==2){
                                        echo "Emergency";
                                      }
                                      ?></td>
                                    <td><?php echo (!empty($res['Notification']['message']))?$res['Notification']['message']:"N/A";?></td>
                                    <td><?php echo (!empty($res['Notification']['add_date']))?date('d-M-Y',$res['Notification']['add_date']):"N/A";?></td>
                                    
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            </div>
                                    <br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
