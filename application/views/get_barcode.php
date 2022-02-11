<link rel="stylesheet" href="<?php echo base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css">
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
<div class="row" style="width:100mm !important">
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

    $tebal_border = 0;
    for ($i=0; $i < $value['jumlah_barcode'] ; $i++) { 

      $tebal_border =1.5;
      //echo "<center><b>Rp.".rupiah($barang->harga_retail)."</b></center>";
      $margin=0;
      $spasi = "&nbsp";
      
      if($i>0)
      {
        $margin+=0;
        $spasi = "&nbsp&nbsp&nbsp&nbsp&nbsp";
        
      }

      echo "<div class='col-xs-4' style='padding:5mm'>";
      
      echo " <img style='padding-top:0mm;width:30 mm;' src='".base_url()."assets/barcode/barcode.php?codetype=Code128&size=40&text=$nama_barang&print=true'>";
      echo "<br><span>Rp.".rupiah($barang->harga_retail)."</span>";

     echo "</div>";

    } 
    
  }
?>
</div>