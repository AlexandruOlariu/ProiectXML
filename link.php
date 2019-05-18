<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $xslDoc=new DOMDocument();
       $xslDoc->load("link.xsl");
       
       $xmlDoc=new DOMDocument();
       $xmlDoc->load("link.xml");
       
       $proc=new XSLTProcessor();
       $proc->importStylesheet($xslDoc);
       echo $proc->transformToXml($xmlDoc);
        ?>
    </body>
</html>
