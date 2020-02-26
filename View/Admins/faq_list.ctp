<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-md-12" style="padding-top:15px">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          <li class="active">FAQ</li>
        </ol>
      </div>
      <div class="col-md-0" style="padding-left:0">

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="dashboard-main">
          <div class="panel panel-default panel-primary">
            <div class="panel-heading"><i class="fa fa-pencil-square-o"></i>&nbsp;FAQ</div>
            <div class="panel-body">
              <div class="table-top-action">
                <div class="row">
                  <div class="col-md-10">
                    <?php echo $this->Html->link('Add FAQ', array('controller'=>'Admins', 'action'=>'AddFaq'), array('class'=>'btn btn-addnew'))?>
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
                  <th>Question</th>
                  <th>Response</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <?php if(isset($view_faq)){
                  $i=1;
                  foreach ($view_faq as $value) {
                    ?>
                    <tr>
                      <td><?php echo $i; $i++;?></td>
                       <td><?php echo isset($value['FrequentlyQuestion']['question'])? $value['FrequentlyQuestion']['question']:"N/A";?></td>
					  <td>
                        <?php echo isset($value['FrequentlyQuestion']['answer'])? $value['FrequentlyQuestion']['answer']:"N/A";?>
                      </td> 
                      
                      <td><?php if($value['FrequentlyQuestion']['status']==1){
                        echo "Active";
                      }else if($value['FrequentlyQuestion']['status']==2){
                        echo "Deactive";
                      } ?></td>
                      <td>
                        <?php echo $this->Html->link('Edit', array('controller'=>'Admins', 'action'=>'EditFaq/'.base64_encode(convert_uuencode($value['FrequentlyQuestion']['id']))))?> 
                        |
                        <?php echo $this->Html->link('Delete',array('controller'=>'Admins','action'=>
						'DeleteFaq/'.base64_encode(convert_uuencode($value['FrequentlyQuestion']['id']))))?> 
                        |
                        <?php if($value['FrequentlyQuestion']['status']==1){
                          echo $this->Html->link('Deactivate', array('controller'=>'Admins', 'action'=>'DeactFaq/'.base64_encode(convert_uuencode($value['FrequentlyQuestion']['id']))));
                        }else if($value['FrequentlyQuestion']['status']==2){
                          echo $this->Html->link('Activate', array('controller'=>'Admins', 'action'=>'DeactFaq/'.base64_encode(convert_uuencode($value['FrequentlyQuestion']['id']))));
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
  