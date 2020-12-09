<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <tbody>  
        <tr>
            <th><?php echo $this->lang->line('academic_year'); ?></th>
            <td><?php echo $complain->session_year; ?></td>
        </tr>
        <tr>
            <th><?php echo $this->lang->line('complain'); ?> <?php echo $this->lang->line('type'); ?></th>
            <td><?php echo $complain->type; ?></td>
        </tr>
        
        <tr>
            <th><?php echo $this->lang->line('complain'); ?></th>
            <td><?php echo $complain->description; ?></td>
        </tr>
        <tr>
            <th><?php echo $this->lang->line('complain'); ?> <?php echo $this->lang->line('date'); ?></th>
            <td><?php echo date($this->tekso_setting->sms_date_format, strtotime($complain->complain_date)); ?></td>
        </tr>
        <?php if($complain->action_note){ ?>
        <tr>
            <th><?php echo $this->lang->line('action'); ?> <?php echo $this->lang->line('note'); ?></th>
            <td><?php echo $complain->action_note; ?></td>
        </tr>
        <tr>
            <th><?php echo $this->lang->line('action'); ?> <?php echo $this->lang->line('date'); ?></th>
            <td><?php echo date($this->tekso_setting->sms_date_format, strtotime($complain->action_date)); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
