<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('template');
			$this->load->model('webmodel');
			$this->load->library('session');
			$this->load->helper(array('form', 'url'));
		}


	public function pencarian()
	{
		$cari = $this->input->get('cariberita');
	  $data['databerita'] = $this->webmodel->fungsipencarian($cari);
	  $this->template->halamanuser('user/v_pencarian',$data);
	}

	public function index()
	{

					$this->load->database();
					$jumlahdataberita = $this->webmodel->jumlahdataberita();
					$this->load->library('pagination');
					$config['base_url'] = base_url().'web/index';
					$config['total_rows'] = $jumlahdataberita;
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

		$data['datagalleryterbaru']	= $this->webmodel->tampilgalleryterbaru();
		$data['databeritaterbaru']	= $this->webmodel->tampilberitaterbaru();
		$data['databerita']    			= $this->webmodel->tampilberitapagination($config['per_page'],$from);
		$data['dataslideshow'] 			= $this->webmodel->tampilslideshow();
		$this->template->halamanuser('user/v_beranda',$data);
	}

	public function sejarah()
	{
		$data['datasejarah'] = $this->webmodel->tampilsejarah();
		$this->template->halamanuser('user/v_sejarah',$data);
	}

	public function visimisi()
	{
		$data['datavisimisi'] = $this->webmodel->tampilvisimisi();
		$this->template->halamanuser('user/v_visimisi',$data);
	}

	public function strukturorganisasi()
	{
		$this->load->database();
		$jumlahdataso = $this->webmodel->jumlahdataso();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/strukturorganisasi';
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
		$this->template->halamanuser('user/v_strukturorganisasi',$data);
	}

	public function layanan()
	{
		$data['datalayanan'] = $this->webmodel->tampillayanan();
		$this->template->halamanuser('user/v_layanan',$data);
	}
	public function gallery()
	{
		$data['datagallery'] = $this->webmodel->tampilgallery();
		$this->template->halamanuser('user/v_gallery',$data);
	}
	public function contact()
	{
		$data['datacontact'] = $this->webmodel->tampilcontact();
		$this->template->halamanuser('user/v_contact',$data);
	}

	public function berita($menu)
	{
		$this->load->database();
		$jumlahdataberita1 = $this->webmodel->jumlahdataberita1($menu);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/berita'.'/'.$menu;
		$config['total_rows'] = $jumlahdataberita1;
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

		$from =$this->uri->segment(4);
		$this->pagination->initialize($config);

		$data['databerita'] = $this->webmodel->tampilberitaweb($menu,$config['per_page'],$from);
		$this->template->halamanuser('user/v_berita',$data);
	}
	public function readmore($slug)
	{

		$id = $slug;
		$idnya = array('slug' => $id);
		$data['datareadmore'] = $this->webmodel->tampilreadmore($idnya,'tabel_berita')->row_array();
		$this->template->halamanuser('user/v_readmore',$data);
	}
}
