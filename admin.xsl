<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : admin.xsl
    Created on : May 16, 2019, 4:08 PM
    Author     : olari
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Admin</title>
                
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/table.css"/>
      
  
 
            </head>
            <body>
                
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
      <img src="img_avatar2.png" alt="logo" style="width:40px;"/>
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload another ITEM</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="index1.php"><strong>LOG OUT</strong></a>
    </li>
    
  </ul>
</nav>

<div class="container-fluid">
   
    
    <br/><br/> 
   
                <table rules="rows">
                    <tr >
                        <th style="width:100px">Nume</th>
                        <th style="width:100px">Producator</th>
                        <th style="width:100px">Pret</th>
                        <th style="width:100px">Imagine</th>
                         <th style="width:200px" colspan="3" align="center">Actions</th> 
                    </tr>
                    <xsl:for-each select="root/date">
                        <tr>
                            <td style="width:100px"><xsl:value-of select="Nume"/></td>
                            <td style="width:100px"><xsl:value-of select="Producator"/></td>
                            <td style="width:100px"><xsl:value-of select="Pret"/></td>
                            <td style="width:100px"><img><xsl:attribute name="src"><xsl:value-of select="Imagine"/></xsl:attribute> <xsl:attribute name="height">
                 100
              </xsl:attribute >
              <xsl:attribute name="width">
                 100
              </xsl:attribute ></img></td>
                           <td style="width:100px">
                                <xsl:element name="a">
                                <xsl:attribute name="href">
                                    <xsl:value-of select="view"/>
                                </xsl:attribute>
                                <span>View</span>
                                </xsl:element>
</td>
<td style="width:100px">
                                <xsl:element name="a">
                                <xsl:attribute name="href">
                                    <xsl:value-of select="edit"/>
                                </xsl:attribute>
                                <span>Edit</span>
                                </xsl:element>
</td>
 <td style="width:100px">
                                <xsl:element name="a">
                                <xsl:attribute name="href">
                                    <xsl:value-of select="delete"/>
                                </xsl:attribute>
                                <xsl:attribute name="onclick">
                                    <xsl:value-of select="confirm"/>
                                </xsl:attribute>
                                <span>Delete</span>
                                </xsl:element>
</td> 
</tr>
                        </xsl:for-each>
                </table><br/>
                Au incercat sa intre<br/>
                <table >
                    <tr >
                        <th style="width:100px">Nume</th>
                        <th style="width:100px">Parola</th>
                    </tr>
                    
                         <xsl:for-each select="root/om">
                        <tr>
                            <td style="width:100px"><xsl:value-of select="user"/></td>
                            <td style="width:100px"><xsl:value-of select="pass"/></td>
                    </tr>
                         </xsl:for-each>
                </table>
                
                
                
                
                
                <xsl:element name="a">
                    <xsl:attribute name="href">
                <xsl:value-of select="root/OnlineResource/@xlink:href" xmlns:xlink="http://www.w3.org/1999/xlink" />
                    </xsl:attribute>
</xsl:element>

Ai vizitat de <xsl:value-of select="root/track/contor"/> ori

</div>

            </body>
        </html>
    </xsl:template>
    
    
</xsl:stylesheet>
