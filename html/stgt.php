<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SCSI Target System</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/scsi_target.png" >
</td>
</tr>

<?php
echo "<pre><b>SCSI target framework (stgt) :</b></pre>";
?>
<br>

<table border="1" >

<td>

<?php
$STGTPROCS = shell_exec('ps -ef | egrep "tgtd"|egrep -v egrep');
if ( '' == $STGTPROCS )
{
echo "<img src='images/red_light.png' align=left /><b><FONT COLOR=#000000 size=2>STATE: </><FONT COLOR=red> STOPPED </FONT></b><td><form action='confirm.start_stgt.php' method=post onsubmit=return ray.ajax()><input TYPE=submit class=sameLook style='color: #0000FF' value=' Start ' ></form></td>";
}
else
{
echo "<img src='images/green_light.png' align=left /><b><FONT COLOR=#000000 size=2>STATE:</><FONT COLOR=green> RUN </FONT></b><td><form action='confirm.stop_stgt.php' method=post onsubmit=return ray.ajax()><input TYPE=submit class=sameLook style='color: #FF0000' value=' Stop '></form></td>";
}
?>
</td>



<td>
<?php $filename = '../ENABLE_TGTD_SCSI_TARGET';if (file_exists($filename))
{
echo "<img src='images/green_light.png' ALIGN='left' /><b><FONT COLOR=#000000 size=2> STATUS:</><FONT COLOR=#347C17> Enabled </FONT></b>"; 
echo "<td><form action='disable_stgt_scsi_target.php' method=post onsubmit=return ray.ajax()><input TYPE=submit class=sameLook style='color: #FF0000' value=' Disable '></form></td>";

}
else
{
echo "<img src='images/red_light.png' ALIGN='left' /><b><FONT COLOR=#000000 size=2> STATUS:</><FONT COLOR=#FF0000> Disabled </FONT></b>";
echo "<td><form action='enable_stgt_scsi_target.php' method=post onsubmit=return ray.ajax()><input TYPE=submit class=sameLook style='color: #347C17' value=' Enable '></form></td>";
}
?>
<td>
</td>


</table>

<table border="0" >

<br>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='confirm.install.standalone.stgt.php'" target="showframe"> Setup ( Standalone )<br>
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #FF0000"" ONCLICK="parent.frames[1].location.href='confirm.install.stgt.php'" target="showframe"> Install New or Upgrade<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #7D1B7E" ONCLICK="parent.frames[1].location.href='form.create.auto.iscsi.config.stgt.php'" target="showframe"> Create Automatic iSCSI Configuration<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.create.iscsi.target.stgt.php'" target="showframe"> Create Cusom iSCSI Target<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.select.iscsi.target.stgt.php'" target="showframe"> Create Custom iSCSI LUNS<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='display_stgt.target.php'" target="showframe"> Display Target Information<br>
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.add.stgt.iscsi.clients.php'" target="showframe"> Add iSCSI Initiator Client Host<br>
</td>
</tr>



<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.remove.iscsi.target.stgt.php'" target="showframe"> Remove iSCSI Target<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.select.iscsi.lun.stgt.php'" target="showframe"> Remove iSCSI LUNS<br>
</td>
</tr>

</table>

<table border="0" >

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.remove.stgt.iscsi.clients.php'" target="showframe"> Remove iSCSI Initiator Client Host<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #347235" ONCLICK="parent.frames[1].location.href='display_stgt.initiator.php'" target="showframe"> Show iSCSI Initiator Client Connections<br>
</td>
</tr>

<!--
<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='save.iscsi.target.config.stgt.php'" target="showframe"> Save Configuration<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='execute.iscsi.target.config.stgt.php'" target="showframe"> Restore Saved Configuration<br>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #FF0000" ONCLICK="parent.frames[1].location.href='reset.iscsi.target.config.stgt.php'" target="showframe"> Reset Saved Configuration<br>
</td>
</tr>
-->


</table>

</body>
</html>