<?php
class M_listEvent extends CI_Model{


   function getEvent($idJadwal)
   {
        $query = ("SELECT DISTINCT * FROM jadwal,event WHERE event.idJadwal = '$idJadwal' and event.idJadwal = jadwal.idJadwal and event.status = 'Aktif'");
        return $this->db->query($query);
   }

  
}
?>