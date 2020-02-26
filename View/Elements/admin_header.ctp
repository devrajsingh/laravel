<?php $type=$this->Session->read('Admin');

?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<header class="header fixed-top clearfix">
  <div class="brand">
    <?php echo  $this->Html->link('<h1>SACHAIT</h1>', array('controller'=>'Admins', 'action'=>'index'), array('class'=>'logo','escape'=>false));?>
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars"></div>
    </div>
  </div>
  <div class="top-nav clearfix">
    <div class="row">
      <div class="col-md-3">
        <div class="search-new">
        <!-- <input type="text" placeholder="Search..."> -->
        </div>
      </div>
      <div class="col-md-6">
        <ul class="nav pull-right top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <?php echo $this->Html->image('image.PNG');?>

              <span class="username">
              <?php echo ucfirst($type['Admin']['username']);?>
               <!-- <i class="fa fa-user"></i> -->
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu extended logout">
               <!-- <li>
                 <?php echo $this->Html->link('<i class="fa fa-suitcase"></i>
                 Change Password', array('controller'=>'Admins','action'=>'ChangePassword'), array('escape'=>false));?>
               </li>-->
<!--                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> -->
                <li><?php echo $this->Html->link('<i class="fa fa-suitcase"></i>
                ChangePassword', array('controller'=>'Admins','action'=>'ChangePassword'), array('escape'=>false));?></li>
               <li><?php echo $this->Html->link('<i class="fa fa-key"></i>
                Logout', array('controller'=>'Admins','action'=>'logout'), array('escape'=>false));?></li>
              </ul>
            </li> 
          </ul>
        </div>
      </div>

    </div>
  </header>
