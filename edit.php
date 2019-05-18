<?php
if(isset($_POST['submit'])) {
$id=$_POST['id'];
 $data=simplexml_load_file('admin.xml');
foreach($data->date as $date){
    if($date->id==$id){
 $date->Nume=$_POST['Nume'];
 $date->tip=$_POST['tip'];
 $date->Pret=$_POST['Pret'];
 $date->Producator=$_POST['Producator'];
 $date->Descriere=$_POST['Descriere'];
 

           $target="./PHP IMAGINI/".basename($_FILES['image']['name']);
          
 $date->Imagine=$target;
    }
}
$handle=fopen("admin.xml","wb");
fwrite($handle,$data->asXML());
fclose($handle);
header('location:index.php');
}
  ?>
<?php
$id=$_GET['id'];
$data=simplexml_load_file('admin.xml');
foreach($data->date as $date){
    if($date->id==$id){
?>
<form method="post" enctype="multipart/form-data">
<input type = "hidden" name = "id" value="<?php echo $date->id; ?>"> 
Nume: <br>
<input type = "text" name = "Nume" value="<?php echo $date->Nume; ?>"> <br><br>
TIP: <br>
<input type = "text" name = "tip" value="<?php echo $date->tip; ?>"> <br><br>
Pret: <br>
<input type = "text" name = "Pret" value="<?php echo $date->Pret; ?>"><br><br>
Producator: <br>
<input type = "text" name = "Producator" value="<?php echo $date->Producator; ?>"><br><br>
Descriere: <br>
<input type = "text" name = "Descriere" value="<?php echo $date->Descriere; ?>"><br><br>
Imagine:<br>
<input type="file" name="image" value="<?php echo $date->Imagine; ?>"><br><br>

<input type="submit" name="submit" value="Update">
</form>
<?php
    }
}
?>