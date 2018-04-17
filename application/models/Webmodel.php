<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webmodel extends CI_Model {

	public function tambahvisimisi($data)
	{
	   $this->db->insert('tabel_visimisi',$data);
	}

	public function ceklogin($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

  public function tampilvisimisi()
  {
    $query = $this->db->get('tabel_visimisi');
		$datavisimisi = $query->row_array();
		return $datavisimisi;
  }

  public function editvisimisi($idnya, $table)
  {
    return $this->db->get_where($table,$idnya);
  }

	public function updatevisimisi($datavisimisi,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_visimisi', $datavisimisi);
	}

	public function hapusvisimisi($id)
	{
		$this->db->where('id_visimisi',$id);
		$this->db->delete('tabel_visimisi');
	}

	public function tambahsejarah($data)
	{
		$this->db->insert('tabel_sejarah',$data);
	}

	public function tampilsejarah()
	{
		$query = $this->db->get('tabel_sejarah');
		$datasejarah = $query->row_array();
		return $datasejarah;
	}

	public function editsejarah($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatesejarah($datasejarah,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_sejarah', $datasejarah);
	}

	public function hapussejarah($id)
	{
		$this->db->where('id_sejarah',$id);
		$this->db->delete('tabel_sejarah');
	}

	public function tambahstrukturorganisasi($data)
	{
		$this->db->insert('tabel_strukturorganisasi',$data);
	}

	public function tambahpicture($data)
	{
		$this->db->insert('picture_so',$data);
	}

	public function tampilso($number,$offset)
	{
		$query = $this->db->get('tabel_strukturorganisasi',$number,$offset);
		$dataso = $query->result_array();
		return $dataso;
	}

	public function tampildatapejabat()
	{
		$this->db->where('status','pejabat');
		$query = $this->db->get('tabel_strukturorganisasi');
		$datapejabat = $query->result_array();
		return $datapejabat;
	}

	public function tampilpictureso()
	{
		$query = $this->db->get('picture_so');
		$pictureso = $query->row_array();
		return $pictureso;
	}

	public function editso($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updateso($dataso,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_strukturorganisasi', $dataso);
	}

	public function hapusso($id)
	{
		$this->db->where('id_strukturorganisasi',$id);
		$this->db->delete('tabel_strukturorganisasi');
	}
	public function editpictureso($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatepictureso($datapictureso,$where)
	{
		$this->db->where($where);
		$this->db->update('picture_so', $datapictureso);
	}

	public function hapuspictureso($id)
	{
		$this->db->where('id_picture',$id);
		$this->db->delete('picture_so');
	}

	public function tambahlayanan($data)
	{
		$this->db->insert('tabel_layanan',$data);
	}

	public function tampillayanan()
	{
		$query = $this->db->get('tabel_layanan');
		$datalayanan = $query->row_array();
		return $datalayanan;
	}

	public function editlayanan($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatelayanan($datalayanan,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_layanan', $datalayanan);
	}

	public function hapuslayanan($id)
	{
		$this->db->where('id_layanan',$id);
		$this->db->delete('tabel_layanan');
	}

	public function tambahgallery($data)
	{
		$this->db->insert('tabel_gallery',$data);
	}

	public function tampilgallery()
	{
		$query = $this->db->get('tabel_gallery');
		$datagallery = $query->result_array();
		return $datagallery;
	}

	public function editgallery($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updategallery($datagallery,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_gallery', $datagallery);
	}

	public function hapusgallery($id)
	{
		$this->db->where('id_gallery',$id);
		$this->db->delete('tabel_gallery');
	}

	public function tambahcontact($data)
	{
		$this->db->insert('tabel_contact',$data);
	}
	public function tampilcontact()
	{
		$query = $this->db->get('tabel_contact');
		$datacontact = $query->row_array();
		return $datacontact;
	}

	public function editcontact($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatecontact($datacontact,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_contact', $datacontact);
	}
	public function hapuscontact($id)
	{
		$this->db->where('id_contact',$id);
		$this->db->delete('tabel_contact');
	}

	public function tambahheader($data)
	{
		$this->db->insert('tabel_header',$data);
	}

	public function tampilheader()
	{
		$query = $this->db->get('tabel_header');
		$dataheader = $query->row_array();
		return $dataheader;
	}
	public function editheader($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updateheader($dataheader,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_header', $dataheader);
	}

	public function hapusheader($id)
	{
		$this->db->where('id_header',$id);
		$this->db->delete('tabel_header');
	}
	public function tambahslideshow($data)
	{
		 $this->db->insert('tabel_slideshow',$data);
	}

	public function tampilslideshow()
	{
		$query = $this->db->get('tabel_slideshow');
		$dataslideshow = $query->result_array();
		return $dataslideshow;
	}

	public function editslideshow($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updateslideshow($dataslideshow,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_slideshow', $dataslideshow);
	}
	public function hapusslideshow($id)
	{
		$this->db->where('id_slideshow',$id);
		$this->db->delete('tabel_slideshow');
	}

	public function tambahmenu($data)
	{
		$this->db->insert('tabel_menu',$data);
	}

	public function tampilmenu()
	{
		$query = $this->db->get('tabel_menu');
		$datamenu = $query->result_array();
		return $datamenu;
	}

	public function tampilmenurow()
	{
		$query = $this->db->get('tabel_menu');
		$datamenurow = $query->row_array();
		return $datamenurow;
	}


	public function editmenu($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatemenu($datamenu,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_menu', $datamenu);
	}

	public function hapusmenu($id)
	{
		$this->db->where('id_menu',$id);
		$this->db->delete('tabel_menu');
	}

	public function tambahberita($data)
	{
		$this->db->insert('tabel_berita',$data);
	}
	public function tampilberita($number,$offset)
	{
		$this->db->order_by("popular", "desc");
		$this->db->order_by("id_berita", "desc");
		$query = $this->db->get('tabel_berita',$number,$offset);
		$databerita = $query->result_array();
		return $databerita;
	}

	public function tampilberitapagination($number,$offset)
	{
		$this->db->order_by("popular", "desc");
		$this->db->order_by("id_berita", "desc");
		$query = $this->db->get('tabel_berita',$number,$offset);
		$databerita = $query->result_array();
		return $databerita;
	}

	public function editberita($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function hapusberita($id)
	{
		$this->db->where('id_berita',$id);
		$this->db->delete('tabel_berita');
	}

	public function updateberita($databerita,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_berita', $databerita);
	}

	public function tampilberitaweb($menu,$number,$offset)
	{
		$this->db->order_by("popular", "desc");
		$this->db->order_by("id_berita", "desc");
		$query = $this->db->select('*')
		->join('tabel_menu','tabel_berita.id_menu = tabel_menu.id_menu' )
		->where('url', $menu)
		->get('tabel_berita',$number,$offset);
		$databerita = $query->result_array();
		return $databerita;
	}

	public function tampilreadmore($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function tampilberitaterbaru()
	{
		$this->db->order_by("popular", "desc");
		$this->db->order_by("id_berita", "desc");
		$data = $this->db->get('tabel_berita', 6);
		if($data->num_rows() > 0){
 		foreach ($data->result_array() as $baris) {
		$databeritaterbaru[] = $baris;
 		}
		return $databeritaterbaru;
	}
}

public function tampilgalleryterbaru()
{
	$this->db->order_by("id_gallery", "desc");
	$data = $this->db->get('tabel_gallery',12);
	if($data->num_rows() > 0){
	foreach ($data->result_array() as $baris) {
	$datagalleryterbaru[] = $baris;
	}
	return $datagalleryterbaru;
}
}

public function jumlahdataberita()
{
	$query = $this->db->get('tabel_berita');
	$datajurnalberita = $query->num_rows();
	return $datajurnalberita;
}

public function jumlahdataberita1($menu)
{
	$query = $this->db->select('*')
	->join('tabel_menu','tabel_berita.id_menu = tabel_menu.id_menu' )
	->where('url', $menu)
	->get('tabel_berita');
	$jumlahdataberita1 = $query->num_rows();
	return $jumlahdataberita1;

}

public function jumlahdataso()
{
	$query = $this->db->get('tabel_strukturorganisasi');
	$jumlahdataso = $query->num_rows();
	return $jumlahdataso;
}

public function jumlahdatagallery()
{
	$query = $this->db->get('tabel_gallery');
	$jumlahdatagallery = $query->num_rows();
	return $jumlahdatagallery;
}

public function tampilgallerypagination($number,$offset)
{
	$this->db->order_by("id_gallery", "desc");
	$query = $this->db->get('tabel_gallery',$number,$offset);
	$datagallery = $query->result_array();
	return $datagallery;
}

public function jumlahdatamenu()
{
	$query = $this->db->get('tabel_menu');
	$jumlahdatamenu = $query->num_rows();
	return $jumlahdatamenu;
}
public function tampilmenupagination($number,$offset)
{
	$query = $this->db->get('tabel_menu',$number,$offset);
	$datamenu = $query->result_array();
	return $datamenu;
}
public function jumlahdataslideshow()
{
	$query = $this->db->get('tabel_slideshow');
	$jumlahdataslideshow = $query->num_rows();
	return $jumlahdataslideshow;
}

public function tampilslideshowpagination($number,$offset)
{
	$query = $this->db->get('tabel_slideshow',$number,$offset);
	$dataslideshow = $query->result_array();
	return $dataslideshow;
}
public function tambahjoinemail($dataemail)
{
	$this->db->insert('tabel_joinemail',$dataemail);
}

public function tambahpesan($datapesan)
{
	$this->db->insert('tabel_pesan',$datapesan);
}

public function tambahmediasosial($datamedsos)
{
	$this->db->insert('tabel_medsos',$datamedsos);
}
public function tambahcopyright($datacopyright)
{
	$this->db->insert('tabel_footer',$datacopyright);
}
public function tampilcopyright()
{
	$query = $this->db->get('tabel_footer');
	$datacopyright = $query->row_array();
	return $datacopyright;
}
public function tampilmedsos()
{
	$query = $this->db->get('tabel_medsos');
	$datamedsos = $query->result_array();
	return $datamedsos;
}
public function editmedsos($idnya,$table)
{
	return $this->db->get_where($table,$idnya);
}

public function updatemedsos($datamedsos,$where)
{
	$this->db->where($where);
	$this->db->update('tabel_medsos', $datamedsos);
}
public function hapusmedsos($id)
{
	$this->db->where('id_medsos',$id);
	$this->db->delete('tabel_medsos');
}
public function editcopyright($idnya,$table)
{
	return $this->db->get_where($table,$idnya);
}
public function updatecopyright($datacopyright,$where)
{
	$this->db->where($where);
	$this->db->update('tabel_footer',$datacopyright);
}
public function hapuscopyright($id)
{
	$this->db->where('id_footer',$id);
	$this->db->delete('tabel_footer');
}
public function tambahadmin($dataadmin)
{
	$this->db->insert('tabel_admin',$dataadmin);
}
public function tampildataadmin()
{
	$query = $this->db->get('tabel_admin');
	$dataadmin = $query->row_array();
	return $dataadmin;
}
public function updatepassword($datapass,$where)
{
	$this->db->where($where);
	$this->db->update('tabel_admin',$datapass);
}

public function editadmin($idnya,$table)
{
	return $this->db->get_where($table,$idnya);
}
public function updateadmin($dataadmin,$where)
{
	$this->db->where($where);
	$this->db->update('tabel_admin',$dataadmin);
}
public function jumlahpesan()
{
	$query = $this->db->get('tabel_pesan');
	$datapesan = $query->num_rows();
	return $datapesan;
}

public function jumlahjoinemail()
{
	$query = $this->db->get('tabel_joinemail');
	$datajoin = $query->num_rows();
	return $datajoin;
}

public function jumlahberita()
{
	$query = $this->db->get('tabel_berita');
	$databerita = $query->num_rows();
	return $databerita;
}
public function fungsipencarian($cari)
{
	$this->db->like('judul_berita',$cari);
	$query = $this->db->get('tabel_berita');
	$databerita = $query->result_array();
	return $databerita ;
}
public function tampilpesan()
{
	$query = $this->db->get('tabel_pesan');
	$datapesan = $query->result_array();
	return $datapesan;
}
public function hapuspesan($id)
{
	$this->db->where('id_pesan',$id);
	$this->db->delete('tabel_pesan');
}
public function tampiljoinemail()
{
	$query = $this->db->get('tabel_joinemail');
	$datajoinemail = $query->result_array();
	return $datajoinemail;
}
public function hapusjoinemail($id)
{
	$this->db->where('id_joinemail',$id);
	$this->db->delete('tabel_joinemail');
}

public function aksipopular($datapopular,$where)
{
	$this->db->where($where);
	$this->db->update('tabel_berita', $datapopular);
}

public function hapuspopular($datapopular,$where)
{
	$this->db->where($where);
	$this->db->update('tabel_berita', $datapopular);
}
}
