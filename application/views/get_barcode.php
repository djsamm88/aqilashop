<script type="text/javascript">window.print();</script>
<style type="text/css">
  html,body{
    margin:0 !important;
    padding: 0 !important;
  }
  div{
    padding: 0px !important;
  }
</style>
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
      $margin=0;
      $spasi = "&nbsp";
      if($i>0)
      {
        $margin+=0;
        $spasi = "&nbsp&nbsp&nbsp&nbsp&nbsp";
      }
      echo "<div style='text-align:center;'>";
      echo " <img style='padding:2mm;width:35mm; margin:0mm; ' src='".base_url()."assets/barcode/barcode.php?codetype=Code128&size=40&text=$nama_barang&print=true'>";
      echo "</div>";
      
    } 
    
  }
?>