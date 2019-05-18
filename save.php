<?php
$id=$_POST['id'];
$nume=$_POST['image_name'];
$image='./PHP IMAGINI/'.basename($_FILES['image']['name']);
$tip=$_POST['tip'];
$producator=$_POST['producator'];
$pret=$_POST['pret'];
$description=$_POST['description'];





$xml= simplexml_load_file('admin.xml');

$date=$xml->addChild('date');

$date->addChild('id',$id);
$date->addChild('Nume',$nume);
$date->addChild('Imagine',$image);
$date->addChild('tip',$tip);
$date->addChild('Producator',$producator);
$date->addChild('Pret',$pret);
$date->addChild('Descriere',$description);


$date->addChild('view','view.php?id='.$id);
$date->addChild('edit','edit.php?id='.$id);
$date->addChild('delete','delete.php?id='.$id);
$date->addChild('confirm','return confirm("Are you sure you want to delete this item?")');
$date->addChild('back','index.php');
file_put_contents('admin.xml', $xml->asXML());
header('location:index.php');
?>