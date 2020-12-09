<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * ******************Theme.php*******************************
  	
 * ********************************************************** */

class Theme extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('Theme_Model', 'theme', true);
        $this->data['themes'] = $this->theme->get_list('themes', array('status' => 1), '', '', '', 'id', 'ASC');
    }

    /*     * **************Function index**********************************
     * @type            : Function
     * @function name   : index
     * @description     : this function used to load all default color theme            
     * @param           : null; 
     * @return          : null 
     * ********************************************************** */

    public function index() {

        check_permission(VIEW);

        $this->layout->title($this->lang->line('theme') . ' | ' . SMS);
        $this->layout->view('theme', $this->data);
    }

    /*     * **************Function activate**********************************
     * @type            : Function
     * @function name   : activate
     * @description     : this function used to activate user selected theme  
     *                    after successfully activated color theme it's 
     *                    redirected to all default color theme            
     * @param           : $id integer value; 
     * @return          : null 
     * ********************************************************** */

    public function activate($id = null) {

        check_permission(EDIT);

        if ($id == '') {
            error($this->lang->line('update_failed'));
            redirect('theme');
        }

        $this->theme->update('themes', array('is_active' => 0), array());
        $this->theme->update('themes', array('is_active' => 1), array('id' => $id));
        $theme = $this->theme->get_single('themes', array('is_active' => 1));
        $this->theme->update('settings', array('theme_name' => $theme->slug), array());
        $this->session->unset_userdata('theme');
        $this->session->set_userdata('theme', $theme->slug);
        success($this->lang->line('update_success'));
        create_log('Activate Theme'. $theme->slug);
        redirect('theme');
    }

}
