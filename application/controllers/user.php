<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login(){
		if($this->session->userData('UID'))
			redirect(base_url().'user/dashboard');
		else
			$this->load->view('login');
	}

	public function authenticate(){
		$data['username'] 	=	$this->input->post('username');
		$data['password']	=	$this->input->post('password');

		$userDetails 		=	$this->user_model->validateUser($data);

		if($userDetails){
			$this->session->set_userData('UID',$userDetails[0]->id);
			redirect(base_url().'user/dashboard');
		}else{
			$this->session->set_userData('error','Invalid user credentials');
			redirect(base_url().'user/login');
		}
	}

	public function dashboard(){
		if(!$this->session->userData('UID'))
			redirect(base_url().'user/login');
		
		$id = $this->session->userData('UID');
		$viewData['contactsCount'] = $this->user_model->getContactsCount($id);
		$viewData['plansCount'] = $this->user_model->getPlansCount($id);
		$this->load->view('user/dashboard',$viewData);
	}

	public function logout(){
		$this->session->unset_userData('UID');
		redirect(base_url().'user/login');
	}

	public function contacts(){
		$userContacts 		=	$this->user_model->getAllContacts($this->session->userData('UID'));
		print_r($userContacts);
		$this->load->view('user/contacts', $userContacts);
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */