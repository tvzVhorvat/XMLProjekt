<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
    <head>	
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Naslov</h1>
        <table style="width:100%;">
            <xsl:for-each select="jelovnik/ham">
            <tr>
                <td><xsl:value-of select="ime"/></td>
                <td><xsl:value-of select="cijena"/></td>
                <td><xsl:value-of select="opis"/></td>
                
            </tr>
            </xsl:for-each>
        </table>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>