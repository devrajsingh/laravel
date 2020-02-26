<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-md-12" style="padding-top:15px">
        <ol class="breadcrumb">
          <li><?php echo  $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins', 'action'=>'index'), array('escape'=>false))?></li>
          <li class="active">Blog</li>
        </ol>
      </div>
      <div class="col-md-0" style="padding-left:0">

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="dashboard-main">
          <div class="panel panel-default panel-primary">
            <div class="panel-heading"><i class="fa fa-pencil-square-o"></i>&nbsp;Blog</div>
            <div class="panel-body">
              <div class="table-top-action">
                <div class="row">
                  <div class="col-md-10">
                    <?php echo $this->Html->link('Add Blog', array('controller'=>'Admins', 'action'=>'AddBlog'), array('class'=>'btn btn-addnew'))?>
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
                  <th>Blog Title</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <?php if(isset($view_blog)){
                  $i=1;
                  foreach ($view_blog as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $i; $i++;?></td>
                       <td><?php echo isset($value['Blog']['title'])? $value['Blog']['title']:"N/A";?></td>
					  <td>
                        <?php echo isset($value['Blog']['content'])? $value['Blog']['content']:"N/A";?>
                      </td> 
                      
                      <td><?php if($value['Blog']['status']==1){
                        echo "Active";
                      }else if($value['Blog']['status']==2){
                        echo "Deactive";
                      } ?></td>
                      <td>
                        <?php echo $this->Html->link('Edit', array('controller'=>'Admins', 'action'=>'EditBlog/'.base64_encode(convert_uuencode($value['Blog']['id']))))?> 
                        |
                        <?php echo $this->Html->link('Delete',array('controller'=>'Admins','action'=>
						'DeleteBlog/'.base64_encode(convert_uuencode($value['Blog']['id']))))?> 
                        |
                        <?php if($value['Blog']['status']==1){
                          echo $this->Html->link('Deactivate', array('controller'=>'Admins', 'action'=>'DeactBlog/'.base64_encode(convert_uuencode($value['Blog']['id']))));
                        }else if($value['Blog']['status']==2){
                          echo $this->Html->link('Activate', array('controller'=>'Admins', 'action'=>'DeactBlog/'.base64_encode(convert_uuencode($value['Blog']['id']))));
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
  