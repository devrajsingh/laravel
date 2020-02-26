<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-md-12" style="padding-top:15px">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i></a></li>
          <li><a href="#">Homes</a></li>
          <li class="active">Plans</li>
        </ol>
      </div>
      <div class="col-md-0" style="padding-left:0">
        <!--<ul class="nav">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle text-center" href="#" style="padding:10px; background-color:#c0cad3; color:#fff;">
              <span>
                Actions
                <i class="fa fa-angle-down"></i>
              </a>
               <ul class="dropdown-menu extended new-ext logout">
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
              </ul> -
            </li>
          </ul>-->
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
                      <?php echo $this->Html->link('Add New Plan', array('controller'=>'Admins', 'action'=>'AddPlans'), array('class'=>'btn btn-addnew'))?>
                    </div>
                    <div class="col-md-2">
                      <!-- <ul class="nav">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle text-center" href="#" style="padding:10px; background-color:#c0cad3; color:#fff;">
                            <span>
                              Actions
                              <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu extended new-ext logout">
                              <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                              <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                              <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            </ul>
                          </li>
                        </ul> -->
                      </div>
                    </div>

                  </div>
                  <table class="table table-striped table-bordered">
                    <tr>
                      <th>S.no</th>
                      <th>Plan name</th>
                      <th>Validity</th>
                      <th>Plan Price</th>
                      <th>Description</th>
                      <th>No. operators</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Bronze</td>
                      <td>30 Days</td>
                      <td>7 $</td>
                      <td>full support 8 operator</td>
                      <td>7</td>
                      <td><a href="javascript:;">Edit</a> / <a href="javascript:;">Delete</a></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>