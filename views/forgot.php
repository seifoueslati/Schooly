<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $this->lang->line('lost_your_password'). ' | ' . SMS;  ?></title>
        <?php if($this->tekso_setting->favicon_icon){ ?>
            <link rel="icon" href="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $this->tekso_setting->favicon_icon; ?>" type="image/x-icon" />             
        <?php }else{ ?>
            <link rel="icon" href="<?php echo IMG_URL; ?>favicon.ico" type="image/x-icon" />
        <?php } ?>
        <!-- Bootstrap -->
        <link href="<?php echo VENDOR_URL; ?>bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo VENDOR_URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">     
        <!-- Custom Theme Style -->
        <link href="<?php echo CSS_URL; ?>custom.css" rel="stylesheet">
        <?php $this->load->view('layout/login-css'); ?>  
    </head>

    <body class="login">     

        <div class="login_wrapper">
            <section>
                <center>
                    <?php if(isset($this->tekso_setting->brand_logo) && !empty($this->tekso_setting->brand_logo)){ ?>
                        <img  src="<?php echo UPLOAD_PATH.'logo/'.$this->tekso_setting->brand_logo; ?>" style="max-width: 100px;" alt="">
                    <?php }else{ ?>
                        <img  width="100" height="100" src="<?php echo IMG_URL; ?>/sms-logo.png">
                    <?php } ?>
                </center>
            </section>
            <div class="form login_form">
                <section><h1 class="text-center"><?php echo $this->lang->line('reset_password'); ?></h1></section>    
                <section class="login_content">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="red"><?php echo $this->session->flashdata('error'); ?></p>
                        <p class="green"><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                    <?php echo form_open(site_url('auth/forgotpass'), array('name' => 'login', 'id' => 'login'), ''); ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" name="email" class="form-control has-feedback-left" placeholder="<?php echo $this->lang->line('email'); ?>">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>
                   
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="submit" name="submit" value="<?php echo $this->lang->line('send'); ?>" class="btn btn-primary login-button"/>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a class="reset_pass btn btn-primary login-button" href="<?php echo site_url('login') ?>"><?php echo $this->lang->line('back_to_login'); ?></a>
                    </div>
                    <div class="clearfix"></div>                        
                    <?php echo form_close(); ?>
                </section>
            </div>
        </div>
    </body>
</html>
