<?php 

class kelompok_model extends My_Model 
{

     public function __construct()
     {
          parent::__construct();

          $this->table_name = "data_kelompok";
     }

     public function jurusankelompok($id = NULL)
     {
          $sql = " SELECT dkl.*, skl.nama_sekolah, jrs.nama_jurusan FROM `data_kelompok` dkl LEFT JOIN `data_sekolah` skl ON dkl.id_sekolah = skl.id LEFT JOIN `data_jurusan` jrs ON dkl.id_jurusan = jrs.id ";

          if ($id != NULL) {
               $sql .= " WHERE dkl.id = '".$id."' ";
          }
       
          return $this->exec_query($sql);
     }
}