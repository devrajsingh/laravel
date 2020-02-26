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
                    <li class="active">Support Request</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i>&nbsp;Support Request</div>
                        <div class="panel-body">
                        <?php echo $this->Session->flash();?>
                            <div class="table-top-action">
                                <div class="row" style="overflow:auto;">
                                    
                                     
                            
                           
                            <table class="table table-striped table-bordered" id="example" >
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Requested Client Id</th>
                                    <th>Requested Client Name</th>
                                    <th>Problem Type</th>
                                    <th>Description</th>
                                    <th>Picture1</th>
                                    <th>Picture2</th>
                                    
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view as $res){ 
                                    if($res['Support']['status']=="1"){?>
                                    <tr style="">
                                     
                                    <?php }else{?>
                                    <tr style="color:#999;">
                                    <?php }?>
                                
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo (!empty($res['User']['client_id']))?ucfirst($res['User']['client_id']):"N/A";?></td>
                                    <td><?php echo (!empty($res['User']['first_name']))?$res['User']['first_name']:"N/A";?></td>
                                    <td><?php echo (!empty($res['Support']['problem_type']))?$res['Support']['problem_type']:"N/A";?></td>
                                    <td><?php echo (!empty($res['Support']['description']))?$res['Support']['description']:"N/A";?></td>
                                    <td><img src="<?php echo HTTP_ROOT;?>img/support/<?php echo $res['Support']['pic1'] ?>" width="50" height="50"></td>
                                    <td><img src="<?php echo HTTP_ROOT;?>img/support/<?php echo $res['Support']['pic1'] ?>" width="50" height="50"></td>
                                    <td>
                                    <?php if($res['Support']['status']=="2"){
                                    echo "Read";
                                    }else{
                                    echo "UnRead";
                                    } ?>   
                                    </td>
                                    <td><?php echo $this->Html->link('View',array('controller'=>'Admins','action'=>'viewSupportRequest/'.base64_encode($res['Support']['id'])));
                                         ?>
                                    </td>
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
