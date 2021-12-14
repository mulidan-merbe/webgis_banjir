<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan extends CI_Controller {

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
		$this->load->view('view_belajar');
	}

	public function sensor(){
		$this->load->model('m_belajar');
		if ($_GET['data'] || $_GET['data2'] ||  $_GET['data3'] == !null) {
			//echo "OK";
			$panjang1 = $this->input->get('data');
			$panjang2 = $this->input->get('data2');
			$panjang3 = $this->input->get('data3');
			//echo $panjang;

			$datasensor = array(
				'data_sensor1' => $panjang1,
				'data_sensor2' => $panjang2,
				'data_sensor3' => $panjang3,
				'waktu' => date('Y-m-d H:i:s')
			);

			if($this->m_belajar->save($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}

			// if($datasensor){
			// 	echo $datasensor['data_sensor1'];
			// 	echo $datasensor['data_sensor2'];
			// 	echo $datasensor['data_sensor3'];
			// }else{
			// 	echo "ERROR";
			// }
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function tampilan(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('m_belajar');

		$data['sensor'] = $this->m_belajar->ambildata();
// var_dump($data['sensor']);
		$this->load->view('view_belajar', $data);

		// foreach $sensor as $data {
		// 	$sensor1 = $data->data_sensor1;
		// 	$sensor2 = $data->data_sensor2;
		// 	$sensor3 = $data->data_sensor3;

		// 	$s = ".$sensor1.",".$sensor2.",".$sensor3".
		// }

		// var_dump($s);
		// die;
	}
}
