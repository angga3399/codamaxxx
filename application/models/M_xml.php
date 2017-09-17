<?php
class M_xml extends CI_Model{

   function tampilXML()
   {
      	$query = ('SELECT * FROM carfree');
    	return $this->db->query($query);
   }

}
?>