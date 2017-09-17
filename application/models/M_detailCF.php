<?php
class M_detailCF extends CI_Model{

   function kegiatanMen()
   {
        $query = ("SELECT DISTINCT * FROM jadwal,event,carfree WHERE event.idJadwal = jadwal.idJadwal and jadwal.idCarFree = carfree.idCarFree and event.status = 'Aktif'");
        return $this->db->query($query);

   }


   function select($idCarFree)
   {
        return $this->db->get_where('carfree', array('idCarFree'=>$idCarFree))->row();
   }

   function getJadwal($idCarFree)
   {
        $query = ("SELECT * FROM jadwal WHERE idCarFree = '$idCarFree'");
        return $this->db->query($query);
   }

  
}
?>