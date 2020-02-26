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
                    <li class="active">Manage Department</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i>&nbsp;Department Listing</div>
                        <div class="panel-body">
                        <?php echo $this->Session->flash();?>
                            <div class="table-top-action">
                                <div class="row" style="overflow:auto;">
                                    <div class="col-md-10" style="margin-bottom:20px;">
                                        <?php echo $this->Html->link('Add Department', array('controller'=>'Admins','action'=>'accessRight'), array('class'=>'btn btn-addnew'))  ?>
                                        </div>
                                     
                            
                           
                            <table class="table table-striped table-bordered" id="example" >
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_type as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo (!empty($res['CustomerType']['type']))?ucfirst($res['CustomerType']['type']):"N/A";?></td>
                                    <td><?php if($res['CustomerType']['status']==1){
                                      echo "Active";  
                                      }else if($res['CustomerType']['status']==2){
                                        echo "DeActive";
                                      }
                                      ?></td>
                                    <td><?php //echo $this->Html->link('View',array('controller'=>'Admins','action'=>'view/'.base64_encode($res['User']['id'])))."&nbsp;|&nbsp;";
                                         //echo $this->Html->link('Edit',array('controller'=>'Admins','action'=>'edit/'.base64_encode($res['User']['id'])))."&nbsp;|&nbsp;";
                                   
                                         
                                         echo $this->Html->link('Delete',array('controller'=>'Admins','action'=>'deleteDepartment/'.base64_encode($res['CustomerType']['id'])))."&nbsp;|&nbsp;";
                                           if($res['CustomerType']['status']==1)
                                      {
                                        echo $this->Html->link('DeActivate',array('controller'=>'Admins','action'=>'ChangeDepartmentStatus/'.base64_encode($res['CustomerType']['id'])));
                                      }
                                      else{
                                        echo $this->Html->link('Activate',array('controller'=>'Admins','action'=>'ChangeDepartmentStatus/'.base64_encode($res['CustomerType']['id'])));
                                      }
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
