
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>
 
    <!--Core CSS -->
    <?php echo $this->Html->css('font-awesome'); 
            echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('style');
            echo $this->Html->css('style-responsive'); 
			echo $this->Html->css('my-custom'); ?>

</head>

  <body class="login-body">

    <div class="container">

      
	   <?php echo $this->Form->create('Admins', array('class'=>'form-signin')); ?>
        <h2 class="form-signin-heading">Login now</h2>
		
        <div class="login-wrap">
		 
            <div class="user-login-info">
			<div style="color:red;text-align:center;">
			<?php echo  $this->Session->flash(); ?>
                </div>            
                <?php echo $this->Form->input('username', array('label' => false,'div'=>false, 'class' => 'form-control','placeholder'=>'User name','required'=>true));?> 
				<?php echo $this->Form->input('password', array('label' => false,'div'=>false, 'class' => 'form-control','placeholder'=>'Password','required'=>true));?> 
                
            </div>
            
                <?php /*echo $this->Form->input('rememberme', array('label' => false,'type'=>'checkbox','div'=>false));
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span> */?>
            </label>
           
			<?php echo $this->Form->submit(
                                'LOGIN TO YOUR ACCOUNT', 
                                array('class' => 'btn btn-lg btn-login btn-block', 'title' => 'Sign in')
                            );?>
			

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <?php 
       
			echo $this->Html->script('jquery');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('jquery.dcjqaccordion.2.7');
			echo $this->Html->script('jquery.nicescroll');
			echo $this->Html->script('scripts');
?>

  </body>
</html>
