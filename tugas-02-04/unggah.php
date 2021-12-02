<form method="post" action="" enctype="multipart/form-data">
 <table>
  <tr>
   <td>Nama File</td>
   <td>:</td>
   <td><input type="text" name="nama"></td>
  </tr>
  <tr>
   <td>Ukuran File</td>
   <td>:</td>
   <td><input type="text" name="file"></td>
  </tr>
  <tr>
   <td>Type File</td>
   <td>:</td>
   <td><input type="file" name="file"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="hasil" value="kirim"</td>
  <tr>
 </table>
</form>

<?php
     if (isset($_POST["hasil"])) {
     
     $nama = $_POST["nama"];
     $file = $_POST["file"];
    
     $file = $_FILES["file"]["name"];
     $tmp_name = $_FILES["file"]["tmp_name"];
   
     move_uploaded_file($tmp_name, "images/".$file);
?>
  <table border="1" cellspacing="0">
      <tr>
         <td>nama file</td>
         <td>jenis file</td>
         <td>file</td>
       </tr>
       <tr>
          <td><?php echo $nama ?></td>
          <td><?php echo $file ?></td>
          <td><img src="images/<?php echo $file ?></td>
       </tr>
  </table>

<?php } ?>