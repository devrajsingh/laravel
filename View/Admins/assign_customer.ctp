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
                    <li class="active">Assign Customer To SubAdmin</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading"><i class="fa fa-user"></i>&nbsp;Assign Customer To SubAdmin</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                <div class="row">
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <?php echo $this->Session->flash();?>
                            <table class="table table-striped table-bordered" id="example" >
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Client Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    <th>Click For Assign</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($customer_list as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo (!empty($res['UserMaster']['client_id']))?ucfirst($res['UserMaster']['client_id']):"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['first_name']))?ucfirst($res['UserMaster']['first_name']):"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['email']))?$res['UserMaster']['email']:"N/A";?></td>
                                    <td><?php echo (!empty($res['UserMaster']['mobile']))?$res['UserMaster']['mobile']:"N/A";?></td>
                                    <td>
                                   <?php if($res['UserMaster']['assign_me']=='1'){?>
                                    <input type="checkbox" name="assign_customer" class="assign" checked="true" 
                                    id="<?php echo $res['UserMaster']['id'];?>">
                                    <?php }else{?>
                                        <input type="checkbox" name="assign_customer" class="assign" id="<?php echo $res['UserMaster']['id'];?>">
                                        <?php }?>
                                        </td>
                                </tr>
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

<script>
$(document).ready(function(){
    $('.assign').on('click',function(){
        $('.loader').show();
        var id=$(this).attr('id');
        var subadmin_id='<?php echo $subadmin_id;?>';
         $.ajax({url: "<?php echo HTTP_ROOT;?>admins/assignToSubAdmin/"+id+"/"+subadmin_id, success: function(result){
            if(result=='1'){
               $('.loader').hide();
                window.location.href="<?php echo HTTP_ROOT;?>admins/assignCustomer/"+btoa(subadmin_id);
            }
         
         }

      });        
    });
});
</script>