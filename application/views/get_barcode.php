<script type="text/javascript">window.print();</script>
<?php 
  foreach ($all as $key => $value) {
    //echo ($value['jumlah_barcode']);

    $barang = $this->m_barang->nama_barang($value['id']);

    //echo $barang->nama_barang;
    if($value['is_id']=='barcode')
    {
      $nama_barang = $barang->id_barcode;
    }else{
      $nama_barang = $barang->nama_barang;
    }

    for ($i=0; $i < $value['jumlah_barcode'] ; $i++) { 


      //echo "<center><b>Rp.".rupiah($barang->harga_retail)."</b></center>";
      $margin=2;
      if($i>0)
      {
        $margin+=2;
      }
      echo "<center>";
      echo " <img style='margin:".$margin."px;padding:".$margin."px' src='".base_url()."assets/barcode/barcode.php?codetype=Code128&size=40&text=$nama_barang&print=true'>";
      echo "</center>";
      
    }
    
  }
?>