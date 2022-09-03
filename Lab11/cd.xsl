<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body>
				<h2>
					My CD Collection
				</h2>
				<table border="1">
					<thead>
						<tr bgcolor="#9acd32">
							<th style="text-align:left">
								Title
							</th>
							<th style="text-align:left">
								Artist
							</th>
						</tr>
					</thead>
					<xsl:for-each select="catalog/cd">
						<tbody>
							<tr>
								<td>
									<xsl:value-of select="title" />
								</td>
								<td>
									<xsl:value-of select="artist" />
								</td>
							</tr>
						</tbody>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
