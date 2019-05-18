<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : view.xsl
    Created on : May 13, 2019, 8:27 AM
    Author     : olari
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:param name="id"/>
    

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>View a item</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
            </head>
            <body>
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
      <img src="img_avatar2.png" alt="logo" style="width:40px;"/>
  </a>
  
  
  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload another ITEM</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="logout.php"><strong>LOG OUT</strong></a>
    </li>
    
  </ul>
</nav>
<div class="container-fluid">
                 <table border="1">
                    <tr bgcolor="red">
                        <th style="width:100px">Nume</th>
                        <th style="width:100px">Tip</th>
                        <th style="width:100px">Producator</th>
                        <th style="width:100px">Pret</th>
                        <th style="width:100px">Descriere</th>
                        <th style="width:100px">Imagine</th>
                    </tr>
                    <xsl:for-each select="root/date[id=$id]">
                        <tr>
                            <td style="width:100px"><xsl:value-of select="Nume"/></td>
                            <td style="width:100px"><xsl:value-of select="tip"/></td>
                            <td style="width:100px"><xsl:value-of select="Producator"/></td>
                            <td style="width:100px"><xsl:value-of select="Pret"/></td>
                            <td style="width:100px"><xsl:value-of select="Descriere"/></td>
                            <td style="width:100px"><img><xsl:attribute name="src"><xsl:value-of select="Imagine"/></xsl:attribute> <xsl:attribute name="height">
                 100
              </xsl:attribute >
              <xsl:attribute name="width">
                 100
              </xsl:attribute ></img></td>
                            
                        </tr>
                        </xsl:for-each>
                 </table>
                 <xsl:element name="a">
                     <xsl:attribute name="href">
                         <xsl:value-of select="root/date/back"/>
                     </xsl:attribute>
                     <span>Back</span>
                 </xsl:element>
                 
</div>
            </body>
        </html>
    </xsl:template>
    <xsl:template match="date|date">
<xsl:element name="img">
            <xsl:attribute name="src">
                <xsl:value-of select="Imagine"/>
            </xsl:attribute>
</xsl:element>
    </xsl:template>
</xsl:stylesheet>
