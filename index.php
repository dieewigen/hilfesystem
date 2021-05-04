<!DOCTYPE HTML>
<html>
<head>
<?php
include "cssinclude.php";
?>
<title>BGAM.ES Hilfesystem / help system</title>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

if($_REQUEST["thread"]=="")$_REQUEST["thread"]="de_de";
if($_REQUEST["post"]=="")$_REQUEST["post"]=0;

//Top-Bereich
echo '
	<div id="top">
		<div id="top_info">
			<div id="top_content">
				BGAM.ES Hilfesystem / help system
			</div>
			<div id="fbr"></div>
		</div>
	</div>	
';

//Men�container
echo '
<div id="menu">
	<a href="index.php?thread=de_de">Die Ewigen</a>
	<a href="index.php?thread=abl_de">Die Ewigen - EA</a>
	<a href="index.php?thread=alu_de">Die Ewigen - EFTA</a>
	<a href="index.php?thread=and_de">Andalur</a>
</div>';
//<a href="index.php?thread=de_en">Die Ewigen (EN)</a>
//<a href="index.php?thread=se_de">Stolen Empires</a>
echo '<div id="content_bg"><div id="content">';

//linke seite einbinden
echo '<div id="left">';

$filename='content/'.$_REQUEST["thread"].'/contentindex.inc.php';
if (file_exists($filename))
{
  //inhaltverszeichnis ausgeben
  include_once($filename);
  for($i=0;$i<count($indexdata);$i++)
  {
    echo '<a href="index.php?thread='.$_REQUEST["thread"].'&post='.$indexdata[$i][1].'">'.$indexdata[$i][0].'</a><br>';
  }

}
//div contentright end
echo '</div>';

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
//rechte seite einbinden
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
echo '<div id="right">';
$filename='content/'.$_REQUEST["thread"].'/contentindex.inc.php';
if (file_exists($filename))
{
  $filename='content/'.$_REQUEST["thread"].'/'.$_REQUEST["post"].'.inc.php';
  if (file_exists($filename))
  {
    echo nl2br(umlaut(file_get_contents($filename)));
  }
}
//div contentright end
echo '</div>';




//footer
echo '
<div id="footer">
				<br>&copy; <a href="http://www.die-ewigen.com" target="_new">Die Ewigen</a>
				- <a href="http://stolen-empires.de" target="_new">Stolen Empires</a>
				- <a href="http://ablyon.de" target="_new">Ablyon</a>
				- <a href="http://andalur.de" target="_new">Andalur</a>
				All Rights reserved.
				- <a href="http://bgam.es/impressum.php" target="_blank">Impressum</a></span>
</div>';

//content-div
echo '</div>';

?>
</body>
</html>
<?php 
function umlaut($fieldname){
  global $soudb;
    /*
    $fieldname = str_replace ("�", "&auml;", $fieldname);
    $fieldname = str_replace ("�", "&Auml;", $fieldname);
    $fieldname = str_replace ("�", "&ouml;", $fieldname);
    $fieldname = str_replace ("�", "&Ouml;", $fieldname);
    $fieldname = str_replace ("�", "&uuml;", $fieldname);
    $fieldname = str_replace ("�", "&Uuml;", $fieldname);
    $fieldname = str_replace ("�", "&szlig;", $fieldname);
    */
    $fieldname = str_replace ("ä", "&auml;", $fieldname);
    $fieldname = str_replace ("Ä", "&Auml;", $fieldname);
    $fieldname = str_replace ("ö", "&ouml;", $fieldname);
    $fieldname = str_replace ("Ö", "&Ouml;", $fieldname);
    $fieldname = str_replace ("ü", "&uuml;", $fieldname);
    $fieldname = str_replace ("Ü", "&Uuml;", $fieldname);
    $fieldname = str_replace ("ß", "&szlig;", $fieldname);
    $fieldname = str_replace ("³", "&sup3;", $fieldname);
    $fieldname = str_replace ("²", "&sup2;", $fieldname);
    return $fieldname;
} 
?>