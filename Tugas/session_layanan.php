<html>
<center>
<table border="1" cellpadding="2" cellspacing="4">
  <?php
  $nama = $_POST['nama'];
  $tgl = $_POST['tgl'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $handphone = $_POST['handphone'];

  foreach($nama as $key => $val){
  ?>
  <div>
  <tr>
    <td align="center" colspan="2">
      <?php 
      echo '<b>Pemesanan berhasil dengan detail sebagai berikut</b><br>';?>   
    </td>
  </tr>
  <tr>
    <td><?php echo 'Nama'?></td>
    <td><?php echo $nama[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'Tanggal';?></td>
    <td><?php echo $tgl[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'Jenis Kelamin';?></td>
    <td><?php echo $jk;?></td>
  </tr>
  <tr>
    <td><?php echo 'Alamat';?></td>
    <td><?php echo $alamat[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'No Handphone';?></td>
    <td><?php echo $handphone[$key];?></td>
  </tr>
  <?php 
    }
   ?>
</table>
</center>
</html>