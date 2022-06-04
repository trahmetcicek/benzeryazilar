<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muhakkik Raporu</title>
<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
</head>
<body>
<?php
$muadi=$_POST['muadi'];
$mutarih=$_POST['mutarih'];
$musayi=$_POST['musayi'];
$mudus=$_POST['mudus'];
$delil=$_POST['delil'];
$tutanak=$_POST['tutanak'];
$hukadi=$_POST['hukadi'];
$iftar=$_POST['iftar'];
$ifade=$_POST['ifade'];
$madde=$_POST['madde'];
$bent=$_POST['bent'];
$fikra=$_POST['fikra'];
$eylem=$_POST['eylem'];
$ceza=$_POST['ceza'];
?>
<table border="1">
  <tr>
  <td width="500" height="700" valign="top"><table cellspacing="0" cellpadding="0">
    <tr>
      <td height="20" width="52"><strong>Say&#305;&nbsp;&nbsp;   :</strong></td>
    </tr>
  </table>
    <table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="52"><strong>Konu :</strong></td>
		<td>Muhakkik Raporu</td>
      </tr>
    </table>
     <p>&nbsp;</p>
     <table cellspacing="0" cellpadding="0">
      <col width="35" />
      <col width="91" />
      <col width="71" />
      <col width="66" />
      <col width="75" />
      <col width="90" />
      <col width="64" />
      <col width="38" />
      <col width="64" />
      <tr height="20">
        <td width="594" height="20" colspan="9" align="center"><strong>D&#304;S&#304;PL&#304;N    KURULU BA&#350;KANLI&#286;INA</strong></td>
      </tr>
      <tr height="20">
        <td height="20" colspan="9" align="center"><strong>(Disiplin Soru&#351;turma    Raporu)</strong></td>
      </tr>
    </table>    
    <table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="21">&#304;lgi:</td> <td><?php echo $mutarih; ?> tarih</td> <td><?php echo $musayi; ?> sayili yaziniz.</td> 
      </tr>
	  
	 
    </table>     
    <p class="style1">&nbsp;</p></td>
  </tr>
</table>
<A HREF="javascript:javascript:history.go(-1)">Geri dön</A>

</body>
</html>
