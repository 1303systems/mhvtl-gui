<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>MHVTL Virtual Devices :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>


<table border="0">
<td>
<div style="overflow:auto;height:325px;width:650px;">
<?php
$output = shell_exec('DEVICES=`sudo -u root -S lsscsi -g | egrep "tape|mediumx"`; if [ -z "$DEVICES" ]; then echo "No MHVTL Virtual Devices Present"; else echo "$DEVICES"; fi');
echo "<pre><B><FONT COLOR=#FFFF00>$output</FONT></B></pre>";
?>
</div>

</td>
</table>

</TR>
</TD>
</TABLE>


<br>
<table border="0" >
<td>
<FORM ACTION="vtlcmd.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>
</td>
</table>
</body>
</html>
