<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $this->lang->line('login'). ' | ' . SMS;  ?></title>
        
        <?php if($this->tekso_setting->favicon_icon){ ?>
            <link rel="icon" href="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $this->tekso_setting->favicon_icon; ?>" type="image/x-icon" />             
        <?php }else{ ?>
            <link rel="icon" href="<?php echo IMG_URL; ?>favicon.ico" type="image/x-icon" />
        <?php } ?>
            
        <link rel="stylesheet" href="./LOGINn/style.css">
        <link rel="stylesheet" href="./LOGINn/style.scss">
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./loginn/script.js"></script>
   
    </head>

    <body class="login">     

        <div class="login_wrapper wrapper ">
            




            <div class="form login_form container">
                 <center>
                    <?php if(isset($this->tekso_setting->brand_logo) && !empty($this->tekso_setting->brand_logo)){ ?>
                      <div class="foo">  <img  src="<?php echo UPLOAD_PATH.'logo/'.$this->tekso_setting->brand_logo; ?>" style="max-width: 250px;" alt=""></div>
                    <?php }else{ ?>
                        <img  width="100" height="100" src="<?php echo IMG_URL; ?>/sms-logo.png">
                    <?php } ?>
                </center>
                <section><h1 HIDDEN class="text-center"><?php echo $this->lang->line('login'); ?></h1></section>  
                  
                <section class="login_content">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="red"><?php echo $this->session->flashdata('error'); ?></p>
                        <p class="green"><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                    <section>
               
            </section>
                    <?php echo form_open(site_url('auth/login'), array('name' => 'login', 'id' => 'login'), ''); ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" name="email" class="form-control has-feedback-left" placeholder="<?php echo "Your Id"/*$this->lang->line('email');*/; ?>">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="password" name="password" class="form-control has-feedback-left" id="inputSuccess2" placeholder="<?php "Your Password"/*echo $this->lang->line('password')*/; ?>">
                        <span class="fa fa-asterisk form-control-feedback left" aria-hidden="true"></span>
                    </div>                    
                   
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="submit" name="submit" value="<?php echo $this->lang->line('login'); ?>" class="btn btn-primary login-button"/>
                    </div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <a class="reset_pass btn btn-primary login-button" HIDDEN href="<?php echo site_url('forgot') ?>"><?php echo $this->lang->line('lost_your_password'); ?></a>
                    </div>
                    <div class="clearfix"></div>                        
                    <?php echo form_close(); ?>
                </section>
            </div>
            
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>

    </ul>
        </div>
    </body>
</html>
