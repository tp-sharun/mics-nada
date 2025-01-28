<?xml version="1.0" encoding="UTF-8"?>
<!--
Converts the study/document description into an array 

Author:	 IHSN
Version: MAY 2010
Platform: XSL 1.0

License: 
	Copyright 2010 The World Bank

    This program is free software; you can redistribute it and/or modify it under the terms of the
    GNU Lesser General Public License as published by the Free Software Foundation; either version
    2.1 of the License, or (at your option) any later version.
  
    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
    without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Lesser General Public License for more details.
  
    The full text of the license is available at http://www.gnu.org/copyleft/lesser.html
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format" xmlns:ddi="http://www.icpsr.umich.edu/DDI" exclude-result-prefixes="ddi">
<xsl:output method="xml" version="1.0" encoding="UTF-8" />	
	<xsl:variable name="from">></xsl:variable>
	<xsl:variable name="to"></xsl:variable>
	<xsl:variable name="codebook_id" select="ddi:codeBook/@ID"/>
	<xsl:param name="column-seperator" select="'{TAB}'"/>

<xsl:template match="/">
	<xsl:apply-templates select="ddi:codeBook" />
</xsl:template>

<xsl:template match="ddi:codeBook">
    <!-- ID -->
    <xsl:value-of select="normalize-space(//ddi:codeBook/@ID)" /><xsl:value-of select="$column-seperator"/>
    <!-- titl -->
    <xsl:apply-templates select="ddi:stdyDscr/ddi:citation/ddi:titlStmt/ddi:titl"/><xsl:value-of select="$column-seperator"/>
	<!--titlStmt -->
     <xsl:apply-templates select="ddi:stdyDscr/ddi:citation/ddi:titlStmt"/><xsl:value-of select="$column-seperator"/>
    <!-- authEnty -->    
	<xsl:call-template name="primary-investigator" /><xsl:value-of select="$column-seperator"/>
	<!-- geogcover -->    
	<xsl:apply-templates select="ddi:stdyDscr/ddi:stdyInfo/ddi:sumDscr/ddi:geogCover"/><xsl:value-of select="$column-seperator"/>
	<!-- nation -->    
	<xsl:apply-templates select="ddi:stdyDscr/ddi:stdyInfo/ddi:sumDscr/ddi:nation"/><xsl:value-of select="$column-seperator"/>
	<!-- topic -->    
    <xsl:call-template name="topics"/>
    <!--<xsl:apply-templates select="ddi:stdyDscr/ddi:stdyInfo//ddi:topcClas"/>--><xsl:value-of select="$column-seperator"/>
    <!-- Scope and keywords-->   
    <xsl:apply-templates select="ddi:stdyDscr/ddi:stdyInfo/ddi:notes"/>
    <xsl:call-template name="keywords"/><xsl:value-of select="$column-seperator"/>
<!--type/serName-->
    <xsl:value-of select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:serStmt/ddi:serName)" /><xsl:value-of select="$column-seperator"/>
<!-- producer -->    
    <xsl:apply-templates select="ddi:docDscr/ddi:citation/ddi:prodStmt/ddi:producer"/><xsl:value-of select="$column-seperator"/>
    <!-- Reference no -->	
	<xsl:variable name="refid">
			<xsl:choose>
				<xsl:when test="normalize-space(ddi:stdyDscr/ddi:citation/ddi:titlStmt/ddi:IDNo )">
					<xsl:value-of select="translate(normalize-space(ddi:stdyDscr/ddi:citation/ddi:titlStmt/ddi:IDNo ),$from, $to)"/>
				</xsl:when>
				<xsl:otherwise>
					<xsl:value-of select="@ID"/>
				</xsl:otherwise> 
			</xsl:choose>
	</xsl:variable>
	<xsl:value-of select="$refid"/><xsl:value-of select="$column-seperator"/>

    <!-- prodDate -->
	<xsl:value-of select="normalize-space(ddi:stdyDscr/ddi:stdyInfo/ddi:sumDscr/ddi:collDate[@event='start']/@date)"/><xsl:value-of select="$column-seperator"/>
    <!-- sponsor-->
    <xsl:apply-templates select="//ddi:stdyDscr/ddi:citation/ddi:prodStmt/ddi:fundAg"/>
</xsl:template>

<xsl:template match="ddi:fundAg">
		<xsl:variable name="fundAg">
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(concat(., ' - ', @abbr, ' - ' , @role ))"/>
			</xsl:call-template>
		</xsl:variable>	
<xsl:value-of select="$fundAg"/>
		
<!--	<xsl:value-of select="translate(normalize-space(concat(., ' - ', @abbr, ' - ' , @role )),$from, $to)"/>-->
</xsl:template>


<xsl:template match="ddi:titl">
    <xsl:variable name="subtitl">
        <xsl:if test="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:titlStmt/ddi:subTitl)">
        <!--
            <xsl:call-template name="escape-apos" >
                <xsl:with-param name="string" select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:titlStmt/ddi:subTitl)"/>
            </xsl:call-template>        -->
            <xsl:value-of select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:titlStmt/ddi:subTitl)"/>
        </xsl:if>
	</xsl:variable>
    <xsl:variable name="titl"><!--
        <xsl:call-template name="escape-apos" >
            <xsl:with-param name="string" select="normalize-space(.)"/>
        </xsl:call-template>-->
        <xsl:value-of select="normalize-space(.)"/>
    </xsl:variable> 
    <xsl:value-of select="$titl"/>
    <xsl:if test="normalize-space($subtitl)">
		<xsl:value-of select="concat(', ', $subtitl)"  />
    </xsl:if>
</xsl:template>

<xsl:template match="ddi:subTitl">
			<!--
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>-->
			<xsl:value-of select="normalize-space(.)"/>
</xsl:template>


<xsl:template match="ddi:titlStmt">
<!--
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:titlStmt[*/@* | *])"/>
			</xsl:call-template>-->
			<xsl:value-of  select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:titlStmt[*/@* | *])"/>
</xsl:template>

<xsl:template match="ddi:AuthEnty">
			<!--
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>-->
			<xsl:value-of select="normalize-space(.)"/>
</xsl:template>

<xsl:template match="ddi:geogCover">
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="substring(normalize-space(.),1,100)"/>
			</xsl:call-template>			
</xsl:template>

<xsl:template match="ddi:nation">
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>
</xsl:template>

<xsl:template match="ddi:topcClas"><!--
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>-->
			<xsl:value-of select="normalize-space(.)"/>
</xsl:template>

<xsl:template name="topics">

	<!--get topics as xml elements-->
    <xsl:call-template name="toxml">
        <xsl:with-param name="path" select="//ddi:stdyDscr/ddi:stdyInfo//ddi:topcClas"/>
        <xsl:with-param name="name" select="'topics'"/>
        <xsl:with-param name="sub-name" select="'topic'"/>
    </xsl:call-template>

	<!--topics as plain text-->
    <!--
    <xsl:for-each select="//ddi:stdyDscr/ddi:stdyInfo//ddi:topcClas">
    	<xsl:value-of select="normalize-space(.)"/><xsl:text> </xsl:text>
    </xsl:for-each>
    -->
</xsl:template>

<xsl:template name="keywords">	
		<xsl:variable name="keywords">
		<xsl:for-each select="//ddi:stdyDscr/ddi:stdyInfo//ddi:keyword">
			<xsl:text> </xsl:text><xsl:value-of select="normalize-space(.)"/> <xsl:text> </xsl:text>
		</xsl:for-each>
		</xsl:variable>
		<xsl:value-of select="normalize-space($codebook_id)"/>
</xsl:template>


<xsl:template match="ddi:notes"><!--
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>-->
			<xsl:value-of select="normalize-space(.)"/>
</xsl:template>

<xsl:template match="ddi:serName">
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>
</xsl:template>

<xsl:template match="ddi:producer">	<!--
			<xsl:call-template name="escape-apos" >
				<xsl:with-param name="string" select="normalize-space(.)"/>
			</xsl:call-template>-->
			<xsl:value-of select="normalize-space(.)"/>
</xsl:template>

<!-- primary investigator - returns the first one -->
<xsl:template name="primary-investigator">
	<xsl:variable name="pi">
		<!--
		<xsl:call-template name="escape-apos" >
		<xsl:with-param name="string" select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty)"/>
		</xsl:call-template>-->
		<xsl:value-of select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty)"/>
	</xsl:variable>
	
		<xsl:choose>
			<xsl:when test="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty/@affiliation)">            
                <xsl:variable name="affiliation">
                    <!--<xsl:call-template name="escape-apos" >
                    <xsl:with-param name="string" select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty/@affiliation)"/>
                    </xsl:call-template>--><xsl:value-of  select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty/@affiliation)"/>
                </xsl:variable>        
                <xsl:value-of select="concat($pi, ', ',$affiliation ) "	/>	            
			</xsl:when>
			<xsl:otherwise>
                <xsl:variable name="auth"><!--
                    <xsl:call-template name="escape-apos" >
                    <xsl:with-param name="string" select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty)"/>
                    </xsl:call-template>--><xsl:value-of select="normalize-space(//ddi:codeBook/ddi:stdyDscr/ddi:citation/ddi:rspStmt/ddi:AuthEnty)"/>
                </xsl:variable>
				<xsl:value-of select="normalize-space($auth)"/>
			</xsl:otherwise>
		</xsl:choose>

</xsl:template>


<xsl:template name="search-and-replace">
     <xsl:param name="input"/>
     <xsl:param name="search-string"/>
     <xsl:param name="replace-string"/>
     <xsl:choose>
          <!-- See if the input contains the search string -->
          <xsl:when test="$search-string and 
                           contains($input,$search-string)">
          <!-- If so, then concatenate the substring before the search
          string to the replacement string and to the result of
          recursively applying this template to the remaining substring.
          -->
               <xsl:value-of 
                    select="substring-before($input,$search-string)"/>
               <xsl:value-of select="$replace-string"/>
               <xsl:call-template name="search-and-replace">
                    <xsl:with-param name="input"
                    select="substring-after($input,$search-string)"/>
                    <xsl:with-param name="search-string" 
                    select="$search-string"/>
                    <xsl:with-param name="replace-string" 
                        select="$replace-string"/>
               </xsl:call-template>
          </xsl:when>
          <xsl:otherwise>
               <!-- There are no more occurrences of the search string so 
               just return the current input string -->
               <xsl:value-of select="$input"/>
          </xsl:otherwise>
     </xsl:choose>
</xsl:template>

<!-- replace function -->
<xsl:template name="replace-string">
    <xsl:param name="text"/>
    <xsl:param name="replace"/> 
    <xsl:param name="with"/>
    <xsl:choose>
      <xsl:when test="contains($text,$replace)">
        <xsl:value-of select="substring-before($text,$replace)"/>
        <xsl:value-of select="$with"/>
        <xsl:call-template name="replace-string">
          <xsl:with-param name="text"
select="substring-after($text,$replace)"/>
          <xsl:with-param name="replace" select="$replace"/>
          <xsl:with-param name="with" select="$with"/>
        </xsl:call-template>
      </xsl:when>
      <xsl:otherwise>
        <xsl:value-of select="$text"/>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>


<xsl:template name="escape-apos">
   <xsl:param name="string" />
   <xsl:choose>
      <xsl:when test='contains($string, "&apos;")'>
         <xsl:value-of select='substring-before($string, "&apos;")' />
         <xsl:text>''</xsl:text>
         <xsl:call-template name="escape-apos">
            <xsl:with-param name="string"
               select='substring-after($string, "&apos;")' />
         </xsl:call-template>
      </xsl:when>
      <xsl:otherwise>
         <xsl:value-of select="$string" />
      </xsl:otherwise>
   </xsl:choose>
</xsl:template>

<xsl:template name="toxml">
	<xsl:param name="path"/>
    <xsl:param name="name"/>
    <xsl:param name="sub-name"/>
    
    <xsl:element name="{$name}">
        <xsl:for-each select="$path">    	
            <xsl:element name="{$sub-name}">
            <name><xsl:value-of select="normalize-space(.)"/></name>
            <xsl:if test="@*">
            <xsl:for-each select="@*">
              <xsl:element name="{name()}">
                <xsl:value-of select="." />
              </xsl:element>
            </xsl:for-each>
          </xsl:if>
         <xsl:if test="*">
            <xsl:for-each select="*">
              <xsl:element name="{name()}">
                <xsl:value-of select="." />
              </xsl:element>
            </xsl:for-each>
          </xsl:if>

          </xsl:element>
        </xsl:for-each>
   </xsl:element>    
</xsl:template>


</xsl:stylesheet>
