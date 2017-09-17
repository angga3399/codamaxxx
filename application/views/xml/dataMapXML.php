<?php
 
     // Parsing Karakter-Karakter Khusus
     function parseToXML($htmlStr)
     {
          $xmlStr=str_replace('<','<',$htmlStr);
          $xmlStr=str_replace('>','>',$xmlStr);
          $xmlStr=str_replace('"','"',$xmlStr);
          $xmlStr=str_replace("'",'"',$xmlStr);
          $xmlStr=str_replace("&",'&',$xmlStr);
          return $xmlStr;
     }
 
      
     

     // Header File XML
     header("Content-type: text/xml");
 
     // Parent node XML
     echo '<markers>';
 
     // Iterasi baris, masing-masing menghasilkan node-node XML
     foreach ($xml->result() as $x):
 
          // Menambahkan ke node dokumen XML
          echo '<marker ';
          echo 'id="' . parseToXML($x->idCarFree) . '" ';
          echo 'name="' . parseToXML($x->namaCFD) . '" ';
          echo 'lat="' . $x->lat . '" ';
          echo 'lng="' . $x->lng . '" ';
          echo 'deskrip="' . parseToXML($x->deskrip) . '" ';
          echo '/>';
 
     // Akhir File XML (tag penutup node)
     endforeach;     
     echo '</markers>';
 
?>