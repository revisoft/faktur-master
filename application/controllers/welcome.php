<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
	    /*   
	    $d['judul'] = $this->config->item('nama_app');
        $d['licensi']= $this->config->item('licensi');   
		$this->load->view('welcome_message',$d);
        */
        $cek    = $this->session->userdata('logged_in');
        if(empty($cek))
        {
            $d['judul'] = 'Login - '.$this->config->item('nama_app');
            $d['perusahaan'] = $this->config->item('perusahaan');
            $d['alamat'] = $this->config->item('alamat');
            $d['lisensi'] = $this->config->item('licensi');
            
            // Buat Attribut Form
            $frm['UserID'] = array('name' => 'UserID',
                'id' => 'UserID',
                'type' => 'text',
                'class' => 'input-text-login',
                'autocomplete' => 'off',
                'placeholder' => 'Masukkan User ID......');
            $frm['Pass']   = array('name' => 'Pass',
                'id' => 'Pass',
                'type' => 'password',
                'class' => 'input-text-login',
                'autocomplete' => 'off',
                'placeholder' => 'Masukkan Password.....');
            
            $this->form_validation->set_rules('userid', 'UserID', 'required');
            $this->form_validation->set_rules('pass', 'Pass', 'required');
            
            if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('global/bg_top',$d);
				$this->load->view('front/bg_login',$frm);
				$this->load->view('global/bg_footer',$d);
			}
			else
			{
				$u = $this->input->post('username');
				$p = $this->input->post('password');
				$this->app_model->getLoginData($u,$p);
			}     
        }
        else
		{
			$st = $this->session->userdata('stts');
			if($st=='admin')
			{
				header('location:'.base_url().'app');
			}
			else
			{
				header('location:'.base_url().'front');
			}
		
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */