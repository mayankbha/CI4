<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Email_model extends CI_Model
{

    

    function __construct()
    {
        parent::__construct();
    }

    

    function do_email($from = '', $from_name = '', $to = '', $sub = '', $msg = '',$mail_type = 'html')
    {
        $config = array();
        $smtp_config = array();
        $protocol = $this->db->get_where('general_settings', array('type' => 'mail_status'))->row()->value;

        if (!empty($protocol)) {
            if ($protocol == 'smtp') {
                $smtp_config = $this->get_smtp_config();
            }
        }

         // echo "<pre>";
         // print_r($smtp_config);die();


        $this->load->library('email');
        $this->email->set_newline("\r\n");

        $config['priority'] = 1;
            $config['mailtype'] = $mail_type ? $mail_type : 'text';
        $config['charset'] = "iso-8859-1";
         


        if (!empty($smtp_config)) {
            $from = $smtp_config['smtp_user'];
            $config = array_merge($config,$smtp_config);
        }

        if (!empty($config)) {
            $this->email->initialize($config);
        }

        // echo "<pre>";
        //print_r($config);

        $this->email->from($from, $from_name);
        $this->email->to($to);
        $this->email->subject($sub);
        $this->email->message($msg);

        if ($this->email->send()) {
            //echo $this->email->print_debugger();exit;
            return true;
        } else {
            //echo $this->email->print_debugger();exit;
            return false;
        }

		//echo $this->email->print_debugger(); die;
    }

    public function get_smtp_config()
    {
        $config = array();
        $flag_count = 0;

        $smtp_host = $this->db->get_where('general_settings', array('type' => 'smtp_host'))->row()->value;
        $smtp_port = $this->db->get_where('general_settings', array('type' => 'smtp_port'))->row()->value;
        $smtp_user = $this->db->get_where('general_settings', array('type' => 'smtp_user'))->row()->value;
        $smtp_pass = $this->db->get_where('general_settings', array('type' => 'smtp_pass'))->row()->value;


        if (!empty($smtp_host)) {

            $config['smtp_host'] = $smtp_host;
            $flag_count++; // 1

        }

        if (!empty($smtp_port)) {

            $config['smtp_port'] = $smtp_port;
            $flag_count++; // 2

        }

        if (!empty($smtp_user)) {

            $config['smtp_user'] = $smtp_user;
            $flag_count++; // 3

        }

        if (!empty($smtp_pass)) {

            $config['smtp_pass'] = $smtp_pass;
            $flag_count++; // 4

        }

        if ($flag_count < 4) {
            $config = array();
        }

        return $config;
    }



    function password_reset_email($account_type = '', $id = '', $pass = '')
    {
        //$this->load->database();
        $from_name  = $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;
        $protocol = $this->db->get_where('general_settings', array('type' => 'mail_status'))->row()->value;
        if($protocol == 'smtp'){
            $from = $this->db->get_where('general_settings',array('type' => 'smtp_user'))->row()->value;
        }
        else if($protocol == 'mail'){
            $from = $this->db->get_where('general_settings', array('type' => 'system_email'))->row()->value;
        }

        $query  = $this->db->get_where($account_type, array($account_type . '_id' => $id));

        if ($query->num_rows() > 0){

            $sub    = $this->db->get_where('email_template', array('email_template_id' => 1))->row()->subject;
            $to     = $query->row()->email;
			if($account_type == 'user'){
				$to_name	= $query->row()->username;
			}else{
				$to_name	= $query->row()->name;
			}
			$email_body      = $this->db->get_where('email_template', array('email_template_id' => 1))->row()->body;
			$email_body      = str_replace('[[to]]',$to_name,$email_body);
			$email_body      = str_replace('[[account_type]]',$account_type,$email_body);
			$email_body      = str_replace('[[password]]',$pass,$email_body);
			$email_body      = str_replace('[[from]]',$from_name,$email_body);

            $background = $this->db->get_where('ui_settings',array('type' => 'email_theme_style'))->row()->value;
			if($background !== 'style_1'){
				$final_email = $this->db->get_where('ui_settings',array('type' => 'email_theme_'.$background))->row()->value;
				$final_email = str_replace('[[body]]',$email_body,$final_email);
				$send_mail  = $this->do_email($from,$from_name,$to, $sub, $final_email);
			}else{
				$send_mail  = $this->do_email($from,$from_name,$to, $sub, $email_body);
			}

            return $send_mail;
        }
        else {
            return false;
        }
    }

    function account_opening($account_type = '', $email = '', $pass = '')
    {
        //$this->load->database();
        $from_name  = $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;
        $protocol = $this->db->get_where('general_settings', array('type' => 'mail_status'))->row()->value;
        if($protocol == 'smtp'){
            $from = $this->db->get_where('general_settings',array('type' => 'smtp_user'))->row()->value;
        }
        else if($protocol == 'mail'){
            $from = $this->db->get_where('general_settings', array('type' => 'system_email'))->row()->value;
        }

        $to   = $email;
        $query = $this->db->get_where($account_type, array('email' => $email));

        // echo "<pre>";print_r($from);
        // die();

        if ($query->num_rows() > 0) {
  			if($account_type == 'admin'){
                  $to_name    = $query->row()->name;
                  $url        = "<a href='".base_url()."admin/'>".base_url()."admin</a>";

                  $sub        = $this->db->get_where('email_template', array('email_template_id' => 6))->row()->subject;
                  $email_body      = $this->db->get_where('email_template', array('email_template_id' => 6))->row()->body;
  			}
  			if($account_type == 'vendor'){
  				$to_name	= $query->row()->name;
  				$url 		= "<a href='".base_url()."vendor/'>".base_url()."vendor</a>";

                  $sub        = $this->db->get_where('email_template', array('email_template_id' => 4))->row()->subject;
  				$email_body = $this->db->get_where('email_template', array('email_template_id' => 4))->row()->body;
  			}
  			if($account_type == 'user'){
  				$to_name	= $query->row()->username;
  				$url 		   = "<a href='".base_url()."home/login_set/login'>".base_url()."home/login_set/login</a>";

          $sub             = $this->db->get_where('email_template', array('email_template_id' => 5))->row()->subject;
  				$email_body      = $this->db->get_where('email_template', array('email_template_id' => 5))->row()->body;
  			}

            $email_body      = str_replace('[[to]]',$to_name,$email_body);
            $email_body      = str_replace('[[sitename]]',$from_name,$email_body);
            $email_body      = str_replace('[[account_type]]',$account_type,$email_body);
            $email_body      = str_replace('[[email]]',$to,$email_body);
            $email_body      = str_replace('[[password]]',$pass,$email_body);
            $email_body      = str_replace('[[url]]',$url,$email_body);
            $email_body      = str_replace('[[from]]',$from_name,$email_body);

	          $background = $this->db->get_where('ui_settings',array('type' => 'email_theme_style'))->row()->value;
      			if($background !== 'style_1'){
      				$final_email = $this->db->get_where('ui_settings',array('type' => 'email_theme_'.$background))->row()->value;
      				if($background == 'style_4'){
      					$home_top_logo = $this->db->get_where('ui_settings',array('type' => 'home_top_logo'))->row()->value;
      					$logo =base_url().'uploads/logo_image/logo_'.$home_top_logo.'.png';
      					$final_email = str_replace('[[logo]]',$logo,$final_email);
      				}
      				$final_email = str_replace('[[body]]',$email_body,$final_email);
      				$send_mail  = $this->do_email($from,$from_name,$to, $sub, $final_email);
      			}else{
      				$send_mail  = $this->do_email($from,$from_name,$to, $sub, $email_body);
      			}

            return $send_mail;
        }
        else {
            return false;
        }
    }


    function newsletter($title = '', $text = '', $email = '', $from = '')
    {
        $from_name  = $this->db->get_where('general_settings', array('type' => 'system_name'))->row()->value;
        $this->do_email($from, $from_name, $email, $title, $text,"html");
    }


}
