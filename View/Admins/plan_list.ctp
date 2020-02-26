<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-md-12" style="padding-top:15px">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          <li class="active">Plans</li>
        </ol>
      </div>
      <div class="col-md-0" style="padding-left:0">

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="dashboard-main">
          <div class="panel panel-default panel-primary">
            <div class="panel-heading"><i class="fa fa-pencil-square-o"></i>&nbsp;Plans</div>
            <div class="panel-body">
              <div class="table-top-action">
                <div class="row">
                  <div class="col-md-10">
                    <?php echo $this->Html->link('Add Plan', array('controller'=>'Admins', 'action'=>'AddPlans'), array('class'=>'btn btn-addnew'))?>
                  </div>
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-12">
                    <?php echo $this->Session->flash();?>
                  </div>
                </div>

              </div>
              <table class="table table-striped table-bordered">
                <tr>
                  <th>Sr. no.</th>
                  <th>Plan Name</th>
                  <th>Plan Price Per Month</th>
                  <th>Description</th>
                  <th>No. of Operators</th>
                  <th>Discount Biannual</th>
                  <th>Discount Annual</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <?php if(isset($Plans)){
                  $i=1;
                  foreach ($Plans as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $i; $i++;?></td>
                      <td><?php echo $value['SubscriptionPlan']['plan_name']; ?></td>
                     <!--  <td>
                        <?php  if($value['SubscriptionPlan']['plan_validity']==1){
                          echo ucwords('monthly');
                        }else if($value['SubscriptionPlan']['plan_validity']==2){
                          echo ucwords('quaterly');
                        }else if($value['SubscriptionPlan']['plan_validity']==3){
                          echo ucwords('Half Yearly');
                        }else if($value['SubscriptionPlan']['plan_validity']==4){
                          echo ucwords('Annual');
                        }  
                        ?>

                      </td> -->
                      <td><?php echo $value['SubscriptionPlan']['plan_price']; ?> $</td>
                      <td><?php echo $value['SubscriptionPlan']['description']; ?></td>
                      <td><?php echo $value['SubscriptionPlan']['operators']; ?></td>
                      <td><?php echo !empty($value['SubscriptionPlan']['discount_biannual'])? $value['SubscriptionPlan']['discount_biannual'].'%' : 'N/A'; ?></td>
                      <td><?php echo !empty($value['SubscriptionPlan']['discount_annual'])? $value['SubscriptionPlan']['discount_annual'].'%' : 'N/A'; ?></td>
                      <td><?php if($value['SubscriptionPlan']['status']==1){
                        echo "Active";
                      }else if($value['SubscriptionPlan']['status']==2){
                        echo "Deactive";
                      } ?></td>
                      <td>
                        <?php echo $this->Html->link('Edit', array('controller'=>'Admins', 'action'=>'EditPlan/'.base64_encode(convert_uuencode($value['SubscriptionPlan']['id']))))?> 
                        / 
                        <?php echo $this->Html->link('Delete', 'javascript:void(0)', array('class'=>'delrow','data-id'=>base64_encode(convert_uuencode($value['SubscriptionPlan']['id']))))?> 
                        /
                        <?php if($value['SubscriptionPlan']['status']==1){
                          echo $this->Html->link('Deactivate', array('controller'=>'Admins', 'action'=>'DeactPlan/'.base64_encode(convert_uuencode($value['SubscriptionPlan']['id']))));
                        }else if($value['SubscriptionPlan']['status']==2){
                          echo $this->Html->link('Activate', array('controller'=>'Admins', 'action'=>'ActPlan/'.base64_encode(convert_uuencode($value['SubscriptionPlan']['id']))));
                        }
                        ?>
                      </td>
                    </tr>
                    <?php }} ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  <script type="text/javascript">
    $(document).ready(function(){
      $('body').on('click','.delrow', function(e){
        console.log($(this).data('id'));
        var id = $(this).data('id');
        if(confirm('Are you sure want to delete??')){
          window.location.href ='<?php echo WEB_PATH ?>Admins/DeletePlan/'+id;
        }
      });
    });
  </script>