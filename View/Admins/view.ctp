<?php $countryList = $this->requestAction(array('controller'=>'Cpanels', 'action'=>'getCountryList'));?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false))?></li>
                    <li class="active">View Company Profile</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; View  Profile</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="editprofilewrap">
                                <div class="col-md-12">
                                <?php echo $this->Form->create('Admin'); ?>      
                                    <div class="login-wrap" style="padding:0;margin:0px auto;">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>First Name</td>
                                                <td><?php echo !empty($view['User']['first_name'])?$view['User']['first_name']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name</td>
                                                <td><?php echo !empty($view['User']['last_name'])?$view['User']['last_name']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>User Name</td>
                                                <td><?php echo !empty($view['User']['username'])?$view['User']['username']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Email </td>
                                                <td><?php echo !empty($view['User']['email'])?$view['User']['email']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Company Name</td>
                                                <td><?php echo !empty($view['User']['company_name'])?$view['User']['company_name']:'N/A';?></td>
                                            </tr>
                                                <td>Mobile Number</td>
                                                <td><?php echo !empty($view['User']['phone_number'])?$view['User']['phone_number']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo !empty($view['User']['address'])?$view['User']['address']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Zip Code</td>
                                                <td><?php echo !empty($view['User']['zipcode'])?$view['User']['zipcode']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td><?php echo !empty($view['User']['city'])?$view['User']['city']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>State</td>
                                                <td><?php echo !empty($view['User']['state'])?$view['User']['state']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td><?php echo isset($countryList[$view['User']['country']])?$countryList[$view['User']['country']]:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Current Status</td>
                                                <td><?php if($view['User']['status']==1){
                                                  echo "Inactive";
                                                  }else if($view['User']['status']==2){
                                                  echo "Active";
                                                  }else if($view['User']['status']==3){
                                                  echo "Unverified";
                                                  }?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>    

<style>
  .table{
   font-size:14px;
 }
 .table  > tbody > tr > td:first-child{
   font-weight:bold;

 }
</style>

