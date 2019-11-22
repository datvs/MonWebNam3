<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SinhVien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lop_model');
		$this->load->model('Sinhvien_model');
		$this->load->model('Diem_model');
	}

	public function index()
	{
		$data = $this->Sinhvien_model->getAll();
		$data['data_sinhvien'] = $data;

		$data1 = $this->Lop_model->getAll();
		$data['data_lop'] = $data1;

		$this->load->view('Sinhvien/sinhvien_view', $data);
	}

	function add()
	{
		$object = $this->input->post();
		if ($this->Sinhvien_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Thành Công")';
			echo '</script>';
			redirect('SinhVien','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Không Thành Công")';
			echo '</script>';
			redirect('SinhVien','refresh');
		}
	}

	function delete($id)
	{
		if ($this->Sinhvien_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Thành Công")';
			echo '</script>';
			redirect('SinhVien','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Không Thành Công")';
			echo '</script>';
			redirect('SinhVien','refresh');
		}
	}

	function laydulieu($id)
	{
		$data = $this->Sinhvien_model->laydulieu($id);
		$data['data_suasinhvien'] = $data;

		$data1 = $this->Lop_model->getAll();
		$data['data_lop'] = $data1;

		$data2 = $this->Diem_model->getAll();
		$data['data_diem'] = $data2;

		$this->load->view('Sinhvien/suasinhvien_view', $data);
	}

	function update()
	{
		$data = $this->input->post();
		if ($this->Sinhvien_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('SinhVien','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Không Thành Công")';
			echo '</script>';
			redirect('SinhVien','refresh');
		}
		
		
	}

}



/* End of file SinhVien.php */
/* Location: ./application/controllers/SinhVien.php */