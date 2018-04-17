<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('template');
			$this->load->model('webmodel');
			$this->load->library('session');
			$this->load->helper(array('form', 'url'));
		}

	public function index()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				redirect(site_url('admin/dashboard'));
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}
	}

	public function login()
	{
		$this->load->view('admin/v_login');
	}

		public function dashboard()
	{

		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datapesan'] = $this->webmodel->jumlahpesan();
				$data['datajoin'] = $this->webmodel->jumlahjoinemail();
				$data['databerita'] = $this->webmodel->jumlahberita();
				$this->template->halamanadmin('admin/v_dashboard',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url("admin/login"));
	}

	public function aksilogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->webmodel->ceklogin("tabel_admin",$where)->num_rows();
		if($cek > 0){

			$query = $this->db->get('tabel_admin');
			$datauser = $query->row_array();

			$nama = $datauser['nama'];
			$foto 	  = $datauser['foto'];
			$email    = $datauser['email'];

			$data_session = array(
				'nama'	=> $nama,
				'foto' 	=> $foto,
				'email'	=> $email,
				'isLogedIn' => true
				);

			$this->session->set_userdata($data_session);

			redirect(site_url("admin/dashboard"));

		}else{
			$this->session->set_flashdata('sukses','Oops...Username/password salah');
		 	redirect(site_url('admin/login'));
		}
	}

	public function visimisi()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datavisimisi'] = $this->webmodel->tampilvisimisi();
				$this->template->halamanadmin('admin/v_visimisi',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}
	}

	public function sejarah()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datasejarah'] = $this->webmodel->tampilsejarah();
				$this->template->halamanadmin('admin/v_sejarah',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function strukturorganisasi()
	{

		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {

				$this->load->database();
				$jumlahdataso = $this->webmodel->jumlahdataso();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'admin/strukturorganisasi';
				$config['total_rows'] = $jumlahdataso;
				$config['per_page'] = 3;

				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = '&laquo; First';
				$config['first_tag_open'] = '<li class="prev page">';
				$config['first_tag_close'] = '</li>';

				$config['last_link'] = 'Last &raquo;';
				$config['last_tag_open'] = '<li class="next page">';
				$config['last_tag_close'] = '</li>';

				$config['next_link'] = 'Next &rarr;';
				$config['next_tag_open'] = '<li class="next page">';
				$config['next_tag_close'] = '</li>';

				$config['prev_link'] = '&larr; Prev';
				$config['prev_tag_open'] = '<li class="prev page">';
				$config['prev_tag_close'] = '</li>';

				$config['cur_tag_open'] = '<li class="current"><a href="">';
				$config['cur_tag_close'] = '</a></li>';

				$config['num_tag_open'] = '<li class="page">';
				$config['num_tag_close'] = '</li>';

				$from =$this->uri->segment(3);
				$this->pagination->initialize($config);

				$data['dataso'] 		= $this->webmodel->tampilso($config['per_page'],$from);
				$this->template->halamanadmin('admin/v_strukturorganisasi',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function layanan()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datalayanan'] 		= $this->webmodel->tampillayanan();
				$this->template->halamanadmin('admin/v_layanan',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function gallery()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {

				$this->load->database();
				$jumlahdatagallery = $this->webmodel->jumlahdatagallery();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'admin/gallery';
				$config['total_rows'] = $jumlahdatagallery;
				$config['per_page'] = 8;

				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = '&laquo; First';
				$config['first_tag_open'] = '<li class="prev page">';
				$config['first_tag_close'] = '</li>';

				$config['last_link'] = 'Last &raquo;';
				$config['last_tag_open'] = '<li class="next page">';
				$config['last_tag_close'] = '</li>';

				$config['next_link'] = 'Next &rarr;';
				$config['next_tag_open'] = '<li class="next page">';
				$config['next_tag_close'] = '</li>';

				$config['prev_link'] = '&larr; Prev';
				$config['prev_tag_open'] = '<li class="prev page">';
				$config['prev_tag_close'] = '</li>';

				$config['cur_tag_open'] = '<li class="current"><a href="">';
				$config['cur_tag_close'] = '</a></li>';

				$config['num_tag_open'] = '<li class="page">';
				$config['num_tag_close'] = '</li>';

				$from =$this->uri->segment(3);
				$this->pagination->initialize($config);
				$data['datagallery'] 		= $this->webmodel->tampilgallerypagination($config['per_page'],$from);
				$this->template->halamanadmin('admin/v_gallery',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function contact()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datacontact']	= $this->webmodel->tampilcontact();
				$this->template->halamanadmin('admin/v_contact',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function header()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['dataheader'] = $this->webmodel->tampilheader();
				$this->template->halamanadmin('admin/v_header',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function slideshow()
	{
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {

				$this->load->database();
				$jumlahdataslideshow = $this->webmodel->jumlahdataslideshow();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'admin/slideshow';
				$config['total_rows'] = $jumlahdataslideshow;
				$config['per_page'] = 5;

				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = '&laquo; First';
				$config['first_tag_open'] = '<li class="prev page">';
				$config['first_tag_close'] = '</li>';

				$config['last_link'] = 'Last &raquo;';
				$config['last_tag_open'] = '<li class="next page">';
				$config['last_tag_close'] = '</li>';

				$config['next_link'] = 'Next &rarr;';
				$config['next_tag_open'] = '<li class="next page">';
				$config['next_tag_close'] = '</li>';

				$config['prev_link'] = '&larr; Prev';
				$config['prev_tag_open'] = '<li class="prev page">';
				$config['prev_tag_close'] = '</li>';

				$config['cur_tag_open'] = '<li class="current"><a href="">';
				$config['cur_tag_close'] = '</a></li>';

				$config['num_tag_open'] = '<li class="page">';
				$config['num_tag_close'] = '</li>';

				$from =$this->uri->segment(3);
				$this->pagination->initialize($config);

				$data['dataslideshow'] = $this->webmodel->tampilslideshowpagination($config['per_page'],$from);
				$this->template->halamanadmin('admin/v_slideshow',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}
	}

	public function menu()
	{
		$this->load->database();
		$jumlahdatamenu = $this->webmodel->jumlahdatamenu();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'admin/menu';
		$config['total_rows'] = $jumlahdatamenu;
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Prev';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="current"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$from =$this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['datamenu'] = $this->webmodel->tampilmenupagination($config['per_page'],$from);
		$this->template->halamanadmin('admin/v_menu',$data);
	}

	public function berita()
	{

		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {

				$this->load->database();
				$datajurnalberita = $this->webmodel->jumlahdataberita();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'admin/berita';
				$config['total_rows'] = $datajurnalberita;
				$config['per_page'] = 3;

				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = '&laquo; First';
				$config['first_tag_open'] = '<li class="prev page">';
				$config['first_tag_close'] = '</li>';

				$config['last_link'] = 'Last &raquo;';
				$config['last_tag_open'] = '<li class="next page">';
				$config['last_tag_close'] = '</li>';

				$config['next_link'] = 'Next &rarr;';
				$config['next_tag_open'] = '<li class="next page">';
				$config['next_tag_close'] = '</li>';

				$config['prev_link'] = '&larr; Prev';
				$config['prev_tag_open'] = '<li class="prev page">';
				$config['prev_tag_close'] = '</li>';

				$config['cur_tag_open'] = '<li class="current"><a href="">';
				$config['cur_tag_close'] = '</a></li>';

				$config['num_tag_open'] = '<li class="page">';
				$config['num_tag_close'] = '</li>';

				$from =$this->uri->segment(3);
				$this->pagination->initialize($config);

				$data['databerita']		= $this->webmodel->tampilberita($config['per_page'],$from);
				$data['datamenurow'] 	= $this->webmodel->tampilmenurow();
				$data['datamenu'] 		= $this->webmodel->tampilmenu();
				$this->template->halamanadmin('admin/v_berita',$data);

			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
				redirect(site_url('admin/login'));
			}


	}

	public function footer()
	{

		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datacopyright'] 		= $this->webmodel->tampilcopyright();
				$data['datamedsos'] 	= $this->webmodel->tampilmedsos();
				$this->template->halamanadmin('admin/v_pengaturanfooter',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}

	}

	public function pengaturanadmin()
	{

		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['dataadmin'] = $this->webmodel->tampildataadmin();
				$this->template->halamanadmin('admin/v_pengaturanadmin',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}


	}



	public function aksivisimisi()
	{
			$config['upload_path']          = './assets/admin/img/penyimpananfoto';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 70680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);



			if ( ! $this->upload->do_upload('userfile')) {
				$datavisimisi = array(
				'visi' 					=> $this->input->post('visi'),
				'misi'						=> $this->input->post('misi'),
				'create_at'			=> date('Y-m-d H:i:s'),
				 );
			 	$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
				$this->session->set_flashdata('data',$datavisimisi);
		 		redirect(site_url('admin/visimisi'));

			  }else {
					$datavisimisi = array(
					'visi' 					=> $this->input->post('visi'),
					'misi'						=> $this->input->post('misi'),
					'create_at'			=> date('Y-m-d H:i:s'),
					'foto_visimisi' =>  $this->upload->data()['file_name'],
					 );
			  	$this->webmodel->tambahvisimisi($datavisimisi);
					$this->session->set_flashdata('sukses','Anda Berhasil Create Visi Misi');
					redirect(site_url('admin/visimisi'));
		}
	}

	public function editvisimisi($id)
	{
		$idnya = array('id_visimisi' => $id);
	  $data['editvisimisi'] = $this->webmodel->editvisimisi($idnya,'tabel_visimisi')->row();
	  $this->template->halamanadmin('admin/v_editvisimisi',$data);
	}

	public function updatevisimisi()
	{



				$config['upload_path']          = './assets/admin/img/penyimpananfoto';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10240;
        $config['max_width']            = 5000000;
        $config['max_height']           = 5000000;

				$this->upload->initialize($config);
				$this->load->library('upload',$config);
				$id = $this->input->post('id');



			if ( ! $this->upload->do_upload('userfile')) {
						 $error =  $this->upload->display_errors();
						 $result = str_word_count($error);
						 if ( $result === 10 ) {
							 $datavisimisi = array(
								'visi'					=> $this->input->post('visi'),
								'misi'					=> $this->input->post('misi'),
								'update_at'			=> date('Y-m-d H:i:s'),
								);

							 $where = array(

							'id_visimisi' => $id

							);
						 }else {
							$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
 					 		redirect(site_url('admin/editvisimisi').'/'.$id);
						 }
			} else {

					$id = $this->input->post('id');

					 $datavisimisi = array(

						'visi'					=> $this->input->post('visi'),
						'misi'					=> $this->input->post('misi'),
						'update_at'			=> date('Y-m-d H:i:s'),
						'foto_visimisi'	=> $this->upload->data()['file_name'],
						);

					 $where = array(

					'id_visimisi' => $id

					);

			}
							$this->session->set_flashdata('sukses','Anda Berhasil Update Visi Misi');
							$this->webmodel->updatevisimisi($datavisimisi,$where);
							redirect(site_url('admin/visimisi'));
	}

	public function hapusvisimisi($id)
	{
		$this->webmodel->hapusvisimisi($id);
	  redirect(site_url('admin/visimisi'));
	}



	public function aksisejarah()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);



		if ( ! $this->upload->do_upload('userfile')) {
			$datasejarah = array(
			'sejarah' 				=> $this->input->post('sejarah'),
			'create_at'			=> date('Y-m-d H:i:s'),
			 );
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			$this->session->set_flashdata('data',$datasejarah);
			redirect(site_url('admin/sejarah'));

			}else {

				$datasejarah = array(
				'sejarah' 				=> $this->input->post('sejarah'),
				'create_at'				=> date('Y-m-d H:i:s'),
				'foto_sejarah'		=> $this->upload->data()['file_name'],
				 );
				 $this->session->set_flashdata('sukses','Anda Berhasil Create Sejarah');
				$this->webmodel->tambahsejarah($datasejarah);
				redirect(site_url('admin/sejarah'));
			}
	}

	public function editsejarah($id)
	{
		$idnya = array('id_sejarah' => $id);
	  $data['editsejarah'] = $this->webmodel->editsejarah($idnya,'tabel_sejarah')->row();
	  $this->template->halamanadmin('admin/v_editsejarah',$data);
	}

	public function updatesejarah()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');

	if ( ! $this->upload->do_upload('userfile')) {

		$error =  $this->upload->display_errors();
		$result = str_word_count($error);
		if ( $result === 10 ) {
			$datasejarah = array(
				'sejarah'				=> $this->input->post('sejarah'),
				'update_at'			=> date('Y-m-d H:i:s'),
			 );

			$where = array(

		 'id_sejarah' => $id
		 );
		}else {
		 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
		 redirect(site_url('admin/editsejarah').'/'.$id);
		}

	} else {

			$id = $this->input->post('id');


		 $datasejarah = array(

			'sejarah'				=> $this->input->post('sejarah'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'foto_sejarah'	=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_sejarah' => $id

		);
	 }
	  $this->session->set_flashdata('sukses','Anda Berhasil update Sejarah');
		$this->webmodel->updatesejarah($datasejarah,$where);
		redirect(site_url('admin/sejarah'));
	}

	public function hapussejarah($id)
	{
		$this->webmodel->hapussejarah($id);
	  redirect(site_url('admin/sejarah'));
	}

	public function aksiso(){
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);


		if ( ! $this->upload->do_upload('userfile')) {
			$data = array(
			'name' 				=> $this->input->post('nama'),
			'posisi' 				=> $this->input->post('posisi'),
			'keterangan' 		=> $this->input->post('keterangan'),
			'create_at'			=> date('Y-m-d H:i:s'),
			 );
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			$this->session->set_flashdata('data',$data);
			redirect(site_url('admin/strukturorganisasi'));

			}else {

				$data = array(
				'name' 				=> $this->input->post('nama'),
				'posisi' 				=> $this->input->post('posisi'),
				'keterangan' 		=> $this->input->post('keterangan'),
				'create_at'			=> date('Y-m-d H:i:s'),
				'foto'		=> $this->upload->data()['file_name'],
				 );

				$this->webmodel->tambahstrukturorganisasi($data);
				$this->session->set_flashdata('sukses','Anda Berhasil Create Struktur Organisasi');
				redirect(site_url('admin/strukturorganisasi'));
			}
	}

	public function aksiuploadpicture()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('sukses','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan gambar');
			redirect(site_url('admin/strukturorganisasi'));

			}else {

			 $data = array(
			 'create_at'			=> date('Y-m-d H:i:s'),
			 'picture'		=> $this->upload->data()['file_name'],
				);

				$this->webmodel->tambahpicture($data);
				redirect(site_url('admin/strukturorganisasi'));
			}
	}

	public function editso($id)
	{
		$idnya = array('id_strukturorganisasi' => $id);
	  $data['editso'] = $this->webmodel->editso($idnya,'tabel_strukturorganisasi')->row();
	  $this->template->halamanadmin('admin/v_editso',$data);
	}

	public function updateso()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');

	if ( ! $this->upload->do_upload('userfile')) {
		$error =  $this->upload->display_errors();
		$result = str_word_count($error);
		if ( $result === 10 ) {
			$dataso = array(

			 'name'					=> $this->input->post('nama'),
			 'posisi'				=> $this->input->post('posisi'),
			 'keterangan'				=> $this->input->post('keterangan'),
			 'update_at'			=> date('Y-m-d H:i:s'),
			 );
			$where = array(

		 'id_strukturorganisasi' => $id
		 );
		}else {
		 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
		 redirect(site_url('admin/editso').'/'.$id);
		}
	} else {

			$id = $this->input->post('id');


		 $dataso = array(

			'name'					=> $this->input->post('nama'),
			'posisi'				=> $this->input->post('posisi'),
			'keterangan'				=> $this->input->post('keterangan'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'foto'					=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_strukturorganisasi' => $id

		);
	 }

		$this->webmodel->updateso($dataso,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update Struktur Organisasi');
		redirect(site_url('admin/strukturorganisasi'));
	}

	public function hapusso($id)
	{
		$this->webmodel->hapusso($id);
	  redirect(site_url('admin/strukturorganisasi'));
	}

	public function editpictureso($id)
	{
		$idnya = array('id_picture' => $id);
		$data['editpictureso'] = $this->webmodel->editpictureso($idnya,'picture_so')->row();
		$this->template->halamanadmin('admin/v_editpictureso',$data);
	}
	public function updatepictureso()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

	if ( ! $this->upload->do_upload('userfile')) {

		 $id = $this->input->post('id');


		 $datapictureso = array(

			 'update_at'		=> date('Y-m-d H:i:s'),
			 'picture'			=> $this->input->post('oldfile'),
			);

		 $where = array(
			'id_picture' => $id
		);

	} else {

			$id = $this->input->post('id');


		 $datapictureso = array(


			'update_at'			=> date('Y-m-d H:i:s'),
			'picture'				=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_picture' => $id

		);
	 }

		$this->webmodel->updatepictureso($datapictureso,$where);
		redirect(site_url('admin/strukturorganisasi'));
	}

	public function hapuspictureso($id)
	{
		$this->webmodel->hapuspictureso($id);
	  redirect(site_url('admin/strukturorganisasi'));
	}

	public function aksilayanan()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 102400;
		$config['max_height']           = 706800;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);


		if ( ! $this->upload->do_upload('userfile')) {
			$data = array(
			'layanan' 					=> $this->input->post('layanan'),
			'create_at'				=> date('Y-m-d H:i:s'),
			 );
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			$this->session->set_flashdata('data',$data);
			redirect(site_url('admin/layanan'));

			}else {

			 $data = array(

			 'layanan' 					=> $this->input->post('layanan'),
 			 'create_at'				=> date('Y-m-d H:i:s'),
			 'picture'		=> $this->upload->data()['file_name'],
				);


				$this->webmodel->tambahlayanan($data);
				$this->session->set_flashdata('sukses','Anda Berhasil Create layanan');
				redirect(site_url('admin/layanan'));
			}
	}

	public function editlayanan($id)
	{
		$idnya = array('id_layanan' => $id);
		$data['editlayanan'] = $this->webmodel->editlayanan($idnya,'tabel_layanan')->row();
		$this->template->halamanadmin('admin/v_editlayanan',$data);
	}

	public function updatelayanan()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');

	if ( ! $this->upload->do_upload('userfile')) {

		$error =  $this->upload->display_errors();
		$result = str_word_count($error);
		if ( $result === 10 ) {
			$datalayanan = array(

			 'layanan'				=> $this->input->post('layanan'),
			 'update_at'			=> date('Y-m-d H:i:s'),
			 );
			$where = array(

		 'id_layanan' => $id
		 );
		}else {
		 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
		 redirect(site_url('admin/editlayanan').'/'.$id);
		}

	} else {

			$id = $this->input->post('id');


		 $datalayanan = array(

			'layanan'				=> $this->input->post('layanan'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'picture'				=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_layanan' => $id

		);
	 }

		$this->webmodel->updatelayanan($datalayanan,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update layanan');
		redirect(site_url('admin/layanan'));
	}

	public function hapuslayanan($id)
	{
		$this->webmodel->hapuslayanan($id);
	  redirect(site_url('admin/layanan'));
	}

	public function aksigallery()
	{
			$config['upload_path']          = './assets/admin/img/penyimpananfoto';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 70680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);

			if ( ! $this->upload->do_upload('userfile')) {
				$datagallery = array(
				'judul' 				=> $this->input->post('title'),
				'keterangan'		=> $this->input->post('keterangan'),
				'create_at'		=> date('Y-m-d H:i:s'),
				 );
  			$error = array('error' => $this->upload->display_errors());
  			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
  			$this->session->set_flashdata('data',$datagallery);
  			redirect(site_url('admin/gallery'));

			  }else {

			  	$judullayanan =	$this->input->post('title');

			  	$this->db->like('judul',$judullayanan);
			  	$query = $this->db->get('tabel_gallery');
					$jumlahtitle = $query->num_rows();



			   $datagallery = array(
			   'judul' 				=> $this->input->post('title'),
			   'keterangan'		=> $this->input->post('keterangan'),
			   'create_at'		=> date('Y-m-d H:i:s'),
			   'foto'				=> $this->upload->data()['file_name'],
			  	);


			   if ($jumlahtitle != 0) {

			  	$datagallery['slug'] =  $this->input->post('title').$jumlahtitle;

			  	} else{
			  	 $datagallery['slug'] = $this->input->post('title');
			  	}

			  	$this->webmodel->tambahgallery($datagallery);
					$this->session->set_flashdata('sukses','Anda Berhasil Create Picture ');
				redirect(site_url('admin/gallery'));

			 }
	}

	public function editgallery($id)
	{
		$idnya = array('id_gallery' => $id);
		$data['editgallery'] = $this->webmodel->editgallery($idnya,'tabel_gallery')->row();
		$this->template->halamanadmin('admin/v_editgallery',$data);
	}

	public function updategallery()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);
			$id 					= $this->input->post('id');

		if ( ! $this->upload->do_upload('userfile')) {

			$error =  $this->upload->display_errors();
			$result = str_word_count($error);
			if ( $result === 10 ) {
				$datagallery = array(
				 'judul' 				=> $this->input->post('title'),
				 'keterangan'		=> $this->input->post('keterangan'),
				 'update_at'			=> date('Y-m-d H:i:s'),
				 );
				$where = array(

			 'id_gallery' => $id
			 );
			}else {
			 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			 redirect(site_url('admin/editgallery').'/'.$id);
			}
		} else {

				$judul  = $this->input->post('title');
				$this->db->like('judul',$judul);
				$query 	= $this->db->get('tabel_gallery');
				$jumlahdatajudul = $query->num_rows();

				$id 					= $this->input->post('id');

			 $datagallery = array(
				'judul' 				=> $this->input->post('title'),
				'keterangan'		=> $this->input->post('keterangan'),
				'update_at'			=> date('Y-m-d H:i:s'),
				'foto'					=> $this->upload->data()['file_name'],
				);

			 if ($jumlahdatajudul != 0) {
					$datagallery['slug'] =  $this->input->post('title').$jumlahdatajudul;
				} else{
					$datagallery['slug'] =  $this->input->post('title');
				}

			 $where = array(
				 'id_gallery' => $id
			);


		 }

			$this->webmodel->updategallery($datagallery,$where);
			$this->session->set_flashdata('sukses','Anda Berhasil Update Picture ');
			redirect(site_url('admin/gallery'));
	}

	public function hapusgallery($id)
	{
		$this->webmodel->hapusgallery($id);
	  redirect(site_url('admin/gallery'));
	}

	public function aksicontact()
	{

			 $data = array(
			 'address' 					=> $this->input->post('address'),
			 'phone' 						=> $this->input->post('phone'),
			 'email' 						=> $this->input->post('email'),
			 'fax' 							=> $this->input->post('fax'),
			 'maps'							=> $this->input->post('maps'),
			 'create_at'				=> date('Y-m-d H:i:s'),
			);


				$this->webmodel->tambahcontact($data);
				$this->session->set_flashdata('sukses','Anda Berhasil Create Contact');
				redirect(site_url('admin/contact'));

	}

	public function editcontact($id)
	{
		$idnya = array('id_contact' => $id);
		$data['editcontact'] = $this->webmodel->editcontact($idnya,'tabel_contact')->row();
		$this->template->halamanadmin('admin/v_editcontact',$data);
	}

	public function updatecontact($id)
	{


		 $id = $this->input->post('id');


		 $datacontact = array(

			 'address'		=> $this->input->post('address'),
			 'phone'			=> $this->input->post('phone'),
			 'email'			=> $this->input->post('email'),
			 'fax'			=> $this->input->post('fax'),
			 'maps'				=> $this->input->post('maps'),
			 'update_at'	=> date('Y-m-d H:i:s'),
			);

		 $where = array(
			'id_contact' => $id
		);

		$this->webmodel->updatecontact($datacontact,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update Contact');
		redirect(site_url('admin/contact'));
	}

	public function hapuscontact($id)
	{
		$this->webmodel->hapuscontact($id);
	  redirect(site_url('admin/contact'));
	}

	public function aksiheader()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$dataheader = array(
			'nama_perusahaan' 		=> $this->input->post('perusahaan'),
			'tagline' 						=> $this->input->post('tagline'),
			'create_at'					=> date('Y-m-d H:i:s'),
			 );
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			$this->session->set_flashdata('data',$dataheader);
			redirect(site_url('admin/header'));

			}else {

			 $dataheader = array(
			 'nama_perusahaan' 		=> $this->input->post('perusahaan'),
			 'tagline' 						=> $this->input->post('tagline'),
			 'create_at'					=> date('Y-m-d H:i:s'),
			 'logo'								=> $this->upload->data()['file_name'],
				);

				$this->webmodel->tambahheader($dataheader);
				$this->session->set_flashdata('sukses','Anda Berhasil Create Header');
				redirect(site_url('admin/header'));
			}
	}

	public function editheader($id)
	{
		$idnya = array('id_header' => $id);
		$data['editheader'] = $this->webmodel->editheader($idnya,'tabel_header')->row();
		$this->template->halamanadmin('admin/v_editheader',$data);
	}

	public function updateheader($id)
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');

	if ( ! $this->upload->do_upload('userfile')) {

		$error =  $this->upload->display_errors();
		$result = str_word_count($error);
		if ( $result === 10 ) {
			$dataheader = array(
				'nama_perusahaan'		=> $this->input->post('perusahaan'),
				'tagline'						=> $this->input->post('tagline'),
				'update_at'					=> date('Y-m-d H:i:s'),
			 );

			$where = array(

		 'id_header' => $id

		 );
		}else {
		 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
		 redirect(site_url('admin/editheader').'/'.$id);
		}

	} else {

			$id = $this->input->post('id');


		 $dataheader = array(

			 'nama_perusahaan'		=> $this->input->post('perusahaan'),
			 'tagline'						=> $this->input->post('tagline'),
			 'update_at'					=> date('Y-m-d H:i:s'),
			 'logo'								=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_header' => $id

		);
	 }

		$this->webmodel->updateheader($dataheader,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update Header');
		redirect(site_url('admin/header'));
	}

	public function hapusheader($id)
	{
		$this->webmodel->hapusheader($id);
	  redirect(site_url('admin/header'));
	}
	public function aksislideshow()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {

			$dataslideshow = array(
			'judul' 							=> $this->input->post('judul'),
			'keterangan' 				=> $this->input->post('keterangan'),
			'create_at'					=> date('Y-m-d H:i:s'),
			 );
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			$this->session->set_flashdata('data',$dataslideshow);
			redirect(site_url('admin/slideshow'));
			}else {

			 $dataslideshow = array(
			 'judul' 							=> $this->input->post('judul'),
			 'keterangan' 				=> $this->input->post('keterangan'),
			 'create_at'					=> date('Y-m-d H:i:s'),
			 'picture'						=> $this->upload->data()['file_name'],
				);

				$this->webmodel->tambahslideshow($dataslideshow);
				$this->session->set_flashdata('sukses','Anda Berhasil Create Slideshow');
				redirect(site_url('admin/slideshow'));
			}
	}
	public function editslideshow($id)
	{
		$idnya = array('id_slideshow' => $id);
		$data['editslideshow'] = $this->webmodel->editslideshow($idnya,'tabel_slideshow')->row();
		$this->template->halamanadmin('admin/v_editslideshow',$data);
	}
	public function updateslideshow($id)
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 76800;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');

	if ( ! $this->upload->do_upload('userfile')) {

		 $error =  $this->upload->display_errors();
 		$result = str_word_count($error);
 		if ( $result === 10 ) {
			$dataslideshow = array(

				'judul'							=> $this->input->post('judul'),
				'keterangan'					=> $this->input->post('keterangan'),
				'update_at'					=> date('Y-m-d H:i:s'),
			 );
 			$where = array(

 		 'id_slideshow' => $id
 		 );
 		}else {
 		 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
 		 redirect(site_url('admin/editslideshow').'/'.$id);
 		}

	} else {

			$id = $this->input->post('id');


		 $dataslideshow = array(

			 'judul'							=> $this->input->post('judul'),
			 'keterangan'					=> $this->input->post('keterangan'),
			 'update_at'					=> date('Y-m-d H:i:s'),
			 'picture'						=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_slideshow' => $id

		);
	 }

		$this->webmodel->updateslideshow($dataslideshow,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update Slideshow');
		redirect(site_url('admin/slideshow'));
	}

	public function hapusslideshow($id)
	{
		$this->webmodel->hapusslideshow($id);
	  redirect(site_url('admin/slideshow'));
	}

	public function aksimenu()
	{

			 $datamenu = array(
			 'nama_menu' 					=> $this->input->post('menu'),
			 'url'		 						=> $this->input->post('url'),
			 'aktif'							=> $this->input->post('status')
				);

				$this->webmodel->tambahmenu($datamenu);
				$this->session->set_flashdata('sukses','Anda Berhasil Create Menu');
				redirect(site_url('admin/menu'));

	}

	public function editmenu($id)
	{
		$idnya = array('id_menu' => $id);
	  $data['editmenu'] = $this->webmodel->editmenu($idnya,'tabel_menu')->row();
	  $this->template->halamanadmin('admin/v_editmenu',$data);
	}

	public function updatemenu()
	{

		$id = $this->input->post('id');
		$datamenu = array(

		'nama_menu'		=> $this->input->post('menu'),
		'url'					=> $this->input->post('url'),
		'aktif'				=> $this->input->post('status'),
				);

		$where = array(
		'id_menu' => $id
		);

			$this->webmodel->updatemenu($datamenu,$where);
			$this->session->set_flashdata('sukses','Anda Berhasil Update Menu');
			redirect(site_url('admin/menu'));
	}

	public function hapusmenu($id)
	{
		$this->webmodel->hapusmenu($id);
	  redirect(site_url('admin/menu'));
	}

	public function aksiberita()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 102400;
		$config['max_height']           = 706800;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$data = array(
			'nama_penulis' 	=> $this->input->post('penulis'),
			'judul_berita' 	=> $this->input->post('judul'),
			'isi_berita' 		=> $this->input->post('berita'),
			'id_menu' 				=> $this->input->post('menu'),
			'create_at'			=> date('Y-m-d H:i:s'),
			 );
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			$this->session->set_flashdata('data',$data);
			redirect(site_url('admin/berita'));
			}else {

				$judul =	$this->input->post('judul');
				$judulslug = strtolower(preg_replace("/[^a-zA-Z0-9]+/", '-', $judul));

			  $this->db->like('judul_berita',$judul);
			  $query = $this->db->get('tabel_berita');
				$jumlahjudul = $query->num_rows();

			 $data = array(
			 'nama_penulis' 	=> $this->input->post('penulis'),
			 'judul_berita' 	=> $this->input->post('judul'),
			 'isi_berita' 		=> $this->input->post('berita'),
			 'id_menu' 				=> $this->input->post('menu'),
			 'create_at'			=> date('Y-m-d H:i:s'),
			 'foto'						=> $this->upload->data()['file_name'],

				);

				if ($jumlahjudul != 0) {

				 $data['slug'] =  $judulslug.'-'.$jumlahjudul;

				 } else{
					$data['slug'] = $judulslug;
				 }


				$this->webmodel->tambahberita($data);
				$this->session->set_flashdata('sukses','Anda Berhasil Create Berita');
				redirect(site_url('admin/berita'));
			}
	}

	public function editberita($id)
	{
		$idnya = array('id_berita' => $id);
		$data['datamenurow'] 	= $this->webmodel->tampilmenurow();
		$data['datamenu'] 		= $this->webmodel->tampilmenu();
		$data['editberita'] = $this->webmodel->editberita($idnya,'tabel_berita')->row();
		$this->template->halamanadmin('admin/v_editberita',$data);
	}

	public function hapusberita($id)
	{
		$this->webmodel->hapusberita($id);
	  redirect(site_url('admin/berita'));
	}

	public function updateberita($id)
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');

	if ( ! $this->upload->do_upload('userfile')) {
		$error =  $this->upload->display_errors();
 		$result = str_word_count($error);
 		if ( $result === 10 ) {

			$judul = $this->input->post('judul');
			$judulslug = strtolower(preg_replace("/[^a-zA-Z0-9]+/", '-', $judul));

			$this->db->like('judul_berita',$judul);
			$query 	= $this->db->get('tabel_berita');
			$jumlahjudul = $query->num_rows();
			$databerita = array(

				'nama_penulis' 	=> $this->input->post('penulis'),
				'judul_berita' 	=> $this->input->post('judul'),
				'isi_berita' 		=> $this->input->post('berita'),
				'id_menu' 				=> $this->input->post('menu'),
				'update_at'			=> date('Y-m-d H:i:s'),
			 );

			 if ($jumlahjudul != 0) {
			  		$databerita['slug'] =  $judulslug.'-'.$jumlahjudul;
			  	} else{
			  	 	$databerita['slug'] =  $judulslug;
			  	}

 			$where = array(
 		 	'id_berita' => $id
 		 	);

 		}else {
 		 $this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
 		 redirect(site_url('admin/editberita').'/'.$id);
 		}

	} else {

		$judul = $this->input->post('judul');
		$judulslug = strtolower(preg_replace("/[^a-zA-Z0-9]+/", '-', $judul));
		$this->db->like('judul_berita',$judul);
		$query 	= $this->db->get('tabel_berita');
		$jumlahjudul = $query->num_rows();

		$id = $this->input->post('id');

		 $databerita = array(

			 'nama_penulis' 	=> $this->input->post('penulis'),
			 'judul_berita' 	=> $this->input->post('judul'),
			 'isi_berita' 		=> $this->input->post('berita'),
			 'id_menu' 				=> $this->input->post('menu'),
			 'update_at'			=> date('Y-m-d H:i:s'),
			 'foto'						=> $this->upload->data()['file_name'],
			);

			if ($jumlahjudul != 0) {
				$databerita['slug'] =  $judulslug.'-'.$jumlahjudul;
			} else{
				$databerita['slug'] =  $judulslug;
			}

		 $where = array(
		'id_berita' => $id

		);
	 }

		$this->webmodel->updateberita($databerita,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update Berita');
		redirect(site_url('admin/berita'));
	}

	public function aksijoinemail()
	{

		$dataemail = array(
			'email_join' 		=> $this->input->post('email'),
			'create_at'			=> date('Y-m-d H:i:s'),
		);

		$this->webmodel->tambahjoinemail($dataemail);
		redirect(site_url('web'));
	}

	public function aksipesan()
	{
		$datapesan = array(
			'name' 				=> $this->input->post('nama'),
			'phone' 			=> $this->input->post('phone'),
			'email' 			=> $this->input->post('email'),
			'pesan' 			=> $this->input->post('pesan'),
			'create_at'		=> date('Y-m-d H:i:s'),
		);

		$this->webmodel->tambahpesan($datapesan);
		redirect(site_url('web/contact'));
	}

	public function aksimediasosial()
	{
		$datamedsos = array(
			'icon' 				=> $this->input->post('icon'),
			'link' 			=> $this->input->post('link'),
		);

		$this->webmodel->tambahmediasosial($datamedsos);
		$this->session->set_flashdata('sukses','Anda Berhasil Create Media Sosial');
		redirect(site_url('admin/footer'));
	}

	public function aksicopyright()
	{
		$datacopyright = array(
			'copyright' 				=> $this->input->post('copyright'),
		);

		$this->webmodel->tambahcopyright($datacopyright);
		$this->session->set_flashdata('sukses','Anda Berhasil Create Copyright');
		redirect(site_url('admin/footer'));
	}

	public function editmedsos($id)
	{
		$idnya = array('id_medsos' => $id);
	  $data['editmedsos'] = $this->webmodel->editmedsos($idnya,'tabel_medsos')->row();
	  $this->template->halamanadmin('admin/v_editmedsos',$data);
	}
	public function updatemedsos()
	{
		$id = $this->input->post('id');
		$datamedsos = array(

		'icon'		=> $this->input->post('icon'),
		'link'		=> $this->input->post('link'),
				);

		$where = array(
		'id_medsos' => $id
		);

			$this->webmodel->updatemedsos($datamedsos,$where);
			$this->session->set_flashdata('sukses','Anda Berhasil Update Media Sosial ');
			redirect(site_url('admin/footer'));
	}
	public function hapusmedsos($id)
	{
		$this->webmodel->hapusmedsos($id);
	  redirect(site_url('admin/footer'));
	}
	public function editcopyright($id)
	{
		$idnya = array('id_footer' => $id);
	  $data['editcopyright'] = $this->webmodel->editcopyright($idnya,'tabel_footer')->row();
	  $this->template->halamanadmin('admin/v_editcopyright',$data);
	}
	public function updatecopyright()
	{
		$id = $this->input->post('id');
		$datacopyright = array(

		'copyright'		=> $this->input->post('copyright'),
				);

		$where = array(
		'id_footer' => $id
		);

			$this->webmodel->updatecopyright($datacopyright,$where);
			$this->session->set_flashdata('sukses','Anda Berhasil Update Copyright');
			redirect(site_url('admin/footer'));
	}
	public function hapuscopyright($id)
	{
		$this->webmodel->hapuscopyright($id);
	  redirect(site_url('admin/footer'));
	}

	public function aksipengaturanadmin()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 102400;
		$config['max_height']           = 706800;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('sukses','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan gambar');
			redirect(site_url('admin/pengaturanadmin'));

			}else {

				$password = $this->input->post('password');

			 $dataadmin = array(
			 'nama' 					=> $this->input->post('nama'),
			 'email' 					=> $this->input->post('email'),
			 'username' 			=> $this->input->post('username'),
			 'password' 			=> md5($password),
			 'create_at'			=> date('Y-m-d H:i:s'),
			 'foto'						=> $this->upload->data()['file_name'],


				);


				$this->webmodel->tambahadmin($dataadmin);
				redirect(site_url('admin/pengaturanadmin'));
			}
	}

	public function aksigantipassword()
	{
		$query = $this->db->get('tabel_admin');
		$dataadmin = $query->row();
		$passwordold = $dataadmin->password;
		$id = $dataadmin->id_admin;

		$password = $this->input->post('passwordlama');
		$passwordlama = md5($password);
		$passwordbaru = $this->input->post('password');

		if ($passwordold == $passwordlama) {

			$datapass = array(

			'password'		=> md5($passwordbaru),
					);

			$where = array(
			'id_admin' => $id
			);

				$this->webmodel->updatepassword($datapass,$where);
				$this->session->set_flashdata('sukses','ubah password anda sukses');
				redirect(site_url('admin/pengaturanadmin'));

		}else {
			$this->session->set_flashdata('sukses','Oops...password lama anda salah');
		 	redirect(site_url('admin/pengaturanadmin'));
		}
	}

	public function editadmin($id)
	{
		$idnya = array('id_admin' => $id);
	  $data['editadmin'] = $this->webmodel->editadmin($idnya,'tabel_admin')->row();
	  $this->template->halamanadmin('admin/v_editadmin',$data);

	}

	public function updateadmin()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$id = $this->input->post('id');


	if ( ! $this->upload->do_upload('userfile')) {

		 $error =  $this->upload->display_errors();
		 $result = str_word_count($error);
		 if ( $result === 10 ) {
			 $dataadmin = array(

				'nama'					=> $this->input->post('nama'),
				'email'					=> $this->input->post('email'),
				'update_at'			=> date('Y-m-d H:i:s'),
				);
			 $where = array(

			'id_admin' => $id
			);
		 }else {
			$this->session->set_flashdata('error','ukuran gambar anda terlalu besar, coba sesuaikan denggan ketentuan ukuran gambar');
			redirect(site_url('admin/editadmin').'/'.$id);
		 }
	} else {

			$id = $this->input->post('id');


		 $dataadmin = array(

			'nama'					=> $this->input->post('nama'),
			'email'					=> $this->input->post('email'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'foto'					=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_admin' => $id

		);
	 }

		$this->webmodel->updateadmin($dataadmin,$where);
		$this->session->set_flashdata('sukses','Anda Berhasil Update Admin');
		redirect(site_url('admin/pengaturanadmin'));
	}

	public function pesan()
	{
		$data['datapesan'] = $this->webmodel->tampilpesan();
		$this->template->halamanadmin('admin/v_pesan',$data);
	}
	public function hapuspesan($id)
	{
		$this->webmodel->hapuspesan($id);
	  redirect(site_url('admin/pesan'));
	}

	public function joinemail()
	{
		$data['datajoinemail'] = $this->webmodel->tampiljoinemail();
		$this->template->halamanadmin('admin/v_joinemail',$data);
	}
	public function hapusjoinemail($id)
	{
		$this->webmodel->hapusjoinemail($id);
	  redirect(site_url('admin/joinemail'));
	}

	public function aksipopular($id)
	{

		 $datapopular = array(
			'popular'					=> 1,
			);

		 $where = array(

		'id_berita' => $id

		);

		$this->webmodel->aksipopular($datapopular,$where);
		redirect(site_url('admin/berita'));
	}

	public function hapuspopular($id)
	{
		$datapopular = array(
		 'popular'					=> 0,
		 );

		$where = array(

	 'id_berita' => $id

	 );

	 $this->webmodel->hapuspopular($datapopular,$where);
	 redirect(site_url('admin/berita'));
	}
}
