<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false))?></li>
                    <li class="active">View Support Request</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; View Support Request</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="editprofilewrap">
                                <div class="col-md-12">
                                   
                                    <div class="login-wrap" style="padding:0;margin:0px auto;">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Requested Client Id</td>
                                                <td><?php echo !empty($view['User']['client_id'])?$view['User']['client_id']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Requested Client Name</td>
                                                <td><?php echo !empty($view['User']['first_name'])?$view['User']['first_name']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Requested Client Mobile No</td>
                                                <td><?php echo !empty($view['User']['mobile'])?$view['User']['mobile']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Requested Client Email </td>
                                                <td><?php echo !empty($view['User']['email'])?$view['User']['email']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Problem Type</td>
                                                <td><?php echo !empty($view['Support']['problem_type'])?$view['Support']['problem_type']:'N/A';?></td>
                                            </tr>
                                                <td>Description</td>
                                                <td><?php echo !empty($view['Support']['description'])?$view['Support']['description']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Problem Picture1</td>
                                                <td><?php echo !empty($view['Support']['pic1'])?$view['User']['address']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Problem Picture2</td>
                                                <td><?php echo !empty($view['Support']['pic2'])?$view['Support']['pic2']:'N/A';?></td>
                                            </tr>
                                            
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

