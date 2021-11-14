<?php 
class Tokosepatu extends CI_controller
{
	public function index()

	{
		$this->load->view('view-form-tokosepatu');
	}

	public function cetak()
	{
        	$this->load->model('ModelTokosepatu');
            $data = [ 
                'nama' => $this->input->post('nama'), 
                'nohp' => $this->input->post('nohp'), 
                'merek' => $this->input->post('merek'), 
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->ModelTokosepatu->hargaSepatu($this->input->post('merek'))
            ]; 

             $this->load->view('view-data-tokosepatu', $data);
        
	}
}