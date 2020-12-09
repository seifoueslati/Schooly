<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *****************Welcome.php**********************************
	
 * ********************************************************** */

class Welcome extends CI_Controller {
    /*     * **************Function index**********************************
     * @type            : Function
     * @function name   : index
     * @description     : this function load login view page            
     * @param           : null; 
     * @return          : null 
     * ********************************************************** */

    public $tekso_setting = array();
    public function index() {

        if (logged_in_user_id()) {
            redirect('dashboard');
        }
        
        $tekso_setting = $this->db->get_where('settings',array('status'=>1))->row();
        if($tekso_setting){           
            $this->tekso_setting = $tekso_setting;            
            date_default_timezone_set($this->tekso_setting->default_time_zone);
        }
        
        $this->load->view('login', array('login'));
    }

}
