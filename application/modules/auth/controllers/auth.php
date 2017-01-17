<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function Auth()
	{

	 parent::__construct();
	}
	public function index()
	{
		$this->load->view("login");
    }	
    /*
      @it's used check weather the enter user exist or not if exist then make them login
    */	
	public function login()
	{
      $username=$this->input->post("username");
      $password=$this->input->post("password");	  
	  $this->load->model("login_model","auth");
	  if($this->auth->userExists($username,$password))
	   {
		 $userdata = array(
                   'username'  => $username,
                   'password'     => $password,
                   'auth' => TRUE
               );
         $this->session->set_userdata($userdata); 
		 redirect(site_url()."/cms/update");
	   }
	   else 
	   {
	     redirect(site_url()."/auth");
	   }
	}
	public function logout(){
		
		$userdata = array(
                   'username'  =>'',
                   'password'     =>'',
                   'auth' =>''
               );
        $this->session->unset_userdata($userdata);
		redirect(site_url()."/auth");
		
	}//end method
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */