<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Web Console</font><b>
<hr width="100%" size=1 color="blue">
<META HTTP-EQUIV="refresh" CONTENT="30">

<tr><td align=center valign=middle><img src="images/mhvtl.png" ></td></tr>

<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2');
echo "<pre><b><FONT COLOR=purple>Release$output</FONT></b></pre>";
?>
<br>

<table border="2" align="center" valign="middle" width="65%" height="60%" >

<tr>
<td>
<INPUT TYPE="button" VALUE="  Control Center  " class="sameSize" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='frame_a.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Configuration " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Operator Panel " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Hardware " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='hardware.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Remote Clients " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='scsi_target.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE="Live Update" class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='update.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Help " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='online-support.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" About " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='about.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE="Exit" class="sameSize" style="color: #FF0000" ONCLICK="parent.frames[1].location.href='logout.php'" target="showframe">
</td>
</tr>

</table>

<br>
<?php
$output = `cat ../version`;
echo "<pre><b><FONT COLOR=#0000FF>Console Version<br>$output</FONT></b></pre>";
?>

</center>

</body>
</html>