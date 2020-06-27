
<?php
class Model_data extends CI_Model

{
 public function penduduk()
 {
 	$query = $this->db->query("select * from data_penduduk");
 	$hasil = $query->result();
 	$query->free_result();
 	return $hasil;
 }
  
  public function getpenduduk()
  {
  	$this->db->select('nama_kecamatan, jumlah_ODP, jumlah_PDP, jumlah_positif,tanggal_update');
  	$query = $this->db->get('data_penduduk');
  	$hasil = $query->result();
  	$query->free_result();
  	return $hasil;
  }
 

  
}