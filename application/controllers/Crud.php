<?php 
 
 
class Crud extends CI_Controller{

 
	public function index(){
		$this->load->view('admin_input');
	}
 
 
	public function cetak()
    {

        $data = [
		    'nama' => $this->input->post('nama'),
		    'nis' => $this->input->post('nis'),
		    'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            't_lahir' => $this->input->post('t_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('v_tampil',$data);
        
	}
 
}