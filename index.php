<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Longwood Robotics</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
}
body {
	background-color: #006600;
	text-align: center;
}
a:link {
	color: #006600;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #006600;
}
a:hover {
	background-color: #006600;
	color: #FFFF00;
}
a:active {
	text-decoration: none;
}
.style1 {
	font-family: Impact;
	font-size: xx-large;
}
-->
</style></head>

<body>
<div align="center">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="800" valign="middle"><div align="center"><span class="style1">Longwood Robotics</span></div></td>
  </tr>
  <tr>
        <td valign="top">&nbsp;</td>
    </tr>
  </table>
      
      
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" style="background-color: #FFFF00; text-align: center; color: #006600;"><div align="center"><a href="?page=home">Home</a> | <a href="?page=gallery">Gallery</a> | <a href="?page=forum">Forum</a> | <a href="?page=about">About</a> | <a href="?page=contact">Contact</a></div></td>
          </tr>
  </table>
        
      
      <table width="800" border="0" cellspacing="0" cellpadding="0"><tr>
        <td valign="top">&nbsp;</td>
      </tr>
  <tr>
    <td valign="middle">
      <div align="left">
        <?php 
		switch($_GET['page']) {
		  case "":
		    include("home.php");
			break;
		  case "home":
		    include("home.php");
			break;
		  case "gallery":
		    include("gallery.php");
			break;
		  case "forum":
		    include("forum.php");
			break;
		  case "about":
		    include("about.php");
			break;
		  case "contact":
		    include("contact.php");
			break;
		  default:
		    include("404.php");
		}
		?>
        </div></td>
  </tr>
  <tr>
    <td valign="middle">&nbsp;</td>
  </tr>
</table>
      
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="middle" style="background-color: #FFFF00; text-align: center; vertical-align: middle; color: #006600;"><div align="center"><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML" height="31" width="88" border="0" /></a>&nbsp;<a href="http://jigsaw.w3.org/css-validator/"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS" /></a>&nbsp;<a href="http://www.gershowrecycling.com/"><img style="border:0;width:88px;height:31px" src="http://www.longwoodrobotics.org/images/564_2007_4_31-over.gif" alt="Gershow Recycling" /></a></div></td>
          </tr>
  </table>
      
      
</div>
</body>
</html>
