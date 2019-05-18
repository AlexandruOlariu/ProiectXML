<?php
$nume=$_POST['nume'];
$parola=$_POST['parola'];
$xml = simplexml_load_file('admin.xml');
$date=$xml->addChild('om');
$date->addChild('user', $nume);
$date->addChild('pass', $parola);
file_put_contents('admin.xml', $xml->asXML());
if ($nume=="111" && $parola=="222"){

header("location:index.php");
}
else {
    echo 'wha wha wah';    
}



