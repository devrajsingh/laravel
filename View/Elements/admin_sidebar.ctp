<style type="text/css">
    .counter{color:#fff;margin: -19px 9px 0 10px;border-radius: 100px;font-size:15px;font-weight:bold;}
</style>

<?php $res=$this->Session->read('Admin');?> 
<!-- left menu starts -->
<aside >
        <div id="sidebar" class="nav-collapse">
          <!-- sidebar menu start-->
          <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
              <li>
                <?php echo $this->Html->link('<i class="fa fa-user"></i>
                  <span>Customer Detail</span>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false));?>
              </li>
              <?php if($res['Admin']['user_type']=='1'){
                ?>
              <li>
                <?php echo $this->Html->link('<i class="fa fa-user"></i>
                  <span>Manage Sub Admin</span>', array('controller'=>'Admins','action'=>'manageSubAdmin'), array('escape'=>false));?>
              </li>
              <li>
                <?php echo $this->Html->link('<i class="fa fa-home"></i>
                  <span>Manage Department</span>', array('controller'=>'Admins','action'=>'manageDepartment'), array('escape'=>false));?>
              </li>
              <?php }?>
              <!-- <li class="sub-menu">
                <?php echo $this->Html->link('<i class="fa fa-list"></i><span>Plans</span>',array('controller'=>'Admins', 'action'=>'PlanList'), array('escape'=>false) );?>
                 <ul class="sub">
                  <li><a href="#">Current Survey</a></li>
                  <li><a href="#">New Survey</a></li>
                  <li><a href="#">Survey history</a></li>
                </ul> 
              </li> -->
                <li>
                <?php echo $this->Html->link('<i class="fa fa-bell"></i>
                  <span> BroadCast Notification</span>', array('controller'=>'Admins','action'=>'viewNotification'), array('escape'=>false));?>
              </li>
              <li>
                <?php echo $this->Html->link('<i class="fa fa-bell"></i>
                  <span> Notification</span>', array('controller'=>'Admins','action'=>'viewEmergencyNotification'), array('escape'=>false));?>
              </li>
              <li>
                <?php echo $this->Html->link('<i class="fa fa-book"></i>
                  <span>Support Request</span><i id="badge" class="fa fa-bell" style="float:right;padding-top:0px;color:red;display:none;" aria-hidden="true"><p id="counter" class="counter"></p></i>', array('controller'=>'Admins','action'=>'supportRequest'), array('escape'=>false));?>
              </li>
              
              <?php /*?>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-book"></i>
                  <span>Message</span>
                </a>
                <!-- <ul class="sub">
                  <li><a href="#">Site1</a></li>
                  <li><a href="#">Site2</a></li>
                  <li><a href="#">Site3</a></li>
                </ul> -->
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-file-text-o"></i>
                  <span>Team</span>
                </a>
                <!-- <ul class="sub">
                  <li><a href="#">Invoice One</a></li>
                  <li><a href="#">Sub Invoice</a></li>
                </ul> -->
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-cogs"></i>
                  <span>Statics</span>
                </a>
               <!--  <ul class="sub">
                  <li><a href="#">First</a></li>
                  <li><a href="#">Second</a></li>
                  <li><a href="#">Third</a></li>
                  <li><a href="#">Fourth</a></li>
                </ul> -->
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-cogs"></i>
                  <span>Online</span>
                </a>
               <!--  <ul class="sub">
                  <li><a href="#">First</a></li>
                  <li><a href="#">Second</a></li>
                  <li><a href="#">Third</a></li>
                  <li><a href="#">Fourth</a></li>
                </ul> -->
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-cogs"></i>
                  <span>Support</span>
                </a>
               <!--  <ul class="sub">
                  <li><a href="#">First</a></li>
                  <li><a href="#">Second</a></li>
                  <li><a href="#">Third</a></li>
                  <li><a href="#">Fourth</a></li>
                </ul> -->
              </li>
              <!-- <li>
                <a href="login.html">
                  <i class="fa fa-user"></i>
                  <span>Login Page</span>
                </a>
              </li> -->
              <?php */ ?>
            </ul>            </div>
            <!-- sidebar menu end-->
          </div>
        </aside>
<!-- left menu ends -->
<script>
setInterval(function () {
  var base_url = '<?php echo HTTP_ROOT;?>';
  $.ajax({
      url: base_url+"admins/unreadSupportRequest",
      type: "POST",
      dataType: "json",
      success: function(data)
        { 
          if(data=='0'){
          $('#badge').hide();
          
          }
         else{
          $('#badge').show();
          $('#counter').html(data);
          }

        }
      });
  },1000);
</script>
