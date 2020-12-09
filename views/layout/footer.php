<footer>
    <div class="pull-right">
        <?php if(isset($this->tekso_setting->footer) && !empty($this->tekso_setting->footer)){ ?>                            
            <?php echo $this->tekso_setting->footer; ?>                
        <?php }else{ ?>  
            ©<?php date('Y'); ?>  <a class="blue" target="_blank" href=""></a>
        <?php } ?>
    </div>
    <div class="clearfix"></div>
</footer>