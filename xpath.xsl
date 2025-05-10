<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <body>
            <table border="1">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                </tr>
                <xsl:for-each select="//student">
                    <tr>
                        <td><xsl:value-of select="rollno"/></td>
                        <td ><xsl:value-of select="name"/></td>
                    </tr>
                </xsl:for-each>
            </table>
            <h1>X Path Predicates</h1>
            <p>Selecting value of 2nd record</p>
            <xsl:value-of select="/class/student[2]"/>
            <p>Selecting value of last record</p>
            <xsl:value-of select="/class/student[last()]"/>
            <p>Selecting value of Roll no = 08</p>
            <xsl:value-of select="/class/student[rollno='08']"/>

            <h1>X Path Axes</h1>
            <p>Self (Current student name for roll no 02): </p>
            <xsl:value-of select="//student[rollno='02']/self::student/name"/>

            <p>Parent of 'rollno' for roll no 02: </p>
            <xsl:value-of select="//student[rollno='02']/rollno/parent::student/name"/>

            <p>Child of student[3]:</p>
            <xsl:value-of select="//student[3]/child::name"/>

            <p>Ancestor of student : </p>
            <xsl:value-of select="/class/student[1]/ancestor::class"/>

            <h1>Functions</h1>
            <xsl:value-of select="node()"/>
            <xsl:value-of select="//comment()"/>
            <xsl:value-of select="position()"/>
            
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>