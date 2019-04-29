<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function process(){
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');

	    $where = array(
	        'username' => $username
        );

	    $result = $this->model_all->show($where, 'tb_akun')->result();

	    foreach ($result as $item){
	        if($item->password == md5($password)){

	            $data_session = array(
                    'username'  => $item->username,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($data_session);


                redirect('product');
            }
	        else{
                redirect('login');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        return redirect('login');
    }
}
