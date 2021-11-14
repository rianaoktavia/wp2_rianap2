<?php
class Matakuliah extends CI_Controller
{
	public function index()
	{
		$this->load->view('view_validation')
	}
	public function cetak()
	{
		$this->form_validation->set_rules('kode','kode Matakuliah','required|min_leght[3]',[
			'required'-> 'kode Matakuliah Harus Diisi',
			'min_leght'-> 'kode terlalu pendek'
		]);
	
	$this->form_validation->set_rules('kode','nama Matakuliah','required|min_leght[3]',[
			'required'-> 'nama Matakuliah Harus Diisi',
			'min_leght'-> 'nama terlalu pendek'
		]);	
	if (this->form_validation->run()!= True){
		this->load->view('view-form-matakuliah');
	}else {
		$data = [
			'kode'->$this->input->post('kode')
			'nama'->$this->input->post('nama')
			'sks'->$this->input->post('sks')
		];

		$this->node->view(view-data-matakuliah',$data)
		}
	}
	

	
}