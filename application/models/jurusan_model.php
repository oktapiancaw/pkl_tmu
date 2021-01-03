<?php

class jurusan_model extends My_Model
{

     public function __construct()
     {
          parent::__construct();

          $this->table_name = "data_jurusan";
     }
     public function jurusansekolah()
     {
          $sql = "SELECT djr.* , skl.nama_sekolah FROM `data_jurusan` djr LEFT JOIN `data_sekolah` skl ON djr.id_sekolah = skl.id";
          return $this->exec_query($sql);
     }
}
