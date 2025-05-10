<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <head>
            <title>Bookstore</title>
            <style> 
                table{border-collapse:collapse; width:50%;}
                th,td{border:1px solid black; padding:8px; text-align:left;}
                th{background-color:#f2f2f2;}
            </style>
        </head>
        <body>
            <h2>Bookstore catalog</h2>
            <table>
                <tr>    
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
                <xsl:for-each select="bookstore/book">
                    <xsl:sort select="price" data-type="number" order="ascending"/>
                    
                    <tr>
                        <td><xsl:value-of select="title"/></td>
                        <td><xsl:value-of select="author"/></td>
                        <td><xsl:value-of select="price"/></td>
                       

                        <td>
                        <xsl:choose>
                            <xsl:when test="genre='Fiction'">Novel</xsl:when>
                            <xsl:when test="genre='Dystopian'">Sci-Fi</xsl:when>
                            <xsl:when test="genre='Classic'">Literature</xsl:when>
                            <xsl:otherwise>General</xsl:otherwise>
                        </xsl:choose>
                        </td>

                    </tr>
                </xsl:for-each>
            </table>

            <xsl:if test="count(bookstore/book) &gt; 3">
            <p><b>Note:</b>we have a large selection of books!</p>
            </xsl:if>
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>