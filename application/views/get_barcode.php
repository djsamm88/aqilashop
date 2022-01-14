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

    echo "<table>";
    for ($i=0; $i < $value['jumlah_barcode'] ; $i++) { 
      echo "<tr>";
      echo "<td>";
      echo "<center><small>Rp.".rupiah($barang->harga_retail)."</small></center>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<img src='".base_url()."assets/barcode/barcode.php?codetype=Code128&size=40&text=$nama_barang&print=true'> <br>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      //echo rupiah($barang->harga_retail)."<br>";
      echo "</td>";
      echo "</tr>";

      
      
    }
    
    echo"<br><br>";

  }
?>