<?php
require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config.php');
if(isset($_POST['Submit']))
{
$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
if(in_array($_FILES["file"]["type"],$mimes))
{
$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);
$Reader = new SpreadsheetReader($uploadFilePath);

$totalSheet = count($Reader->sheets());
echo "You have total ".$totalSheet." sheets".

$html="<table border='1'>";
$html.="<tr><th>Title</th><th>Description</th></tr>";

/* For Loop for all sheets */
for($i=0;$i<$totalSheet;$i++)
{
$Reader->ChangeSheet($i);
foreach ($Reader as $Row)
{
$html.="<tr>";
$IDATE = isset($Row[0]) ? $Row[0] : '';
$INUMBER = isset($Row[1]) ? $Row[1] : '';
$SPOS = isset($Row[2]) ? $Row[2] : '';
$ITYPE = isset($Row[3]) ? $Row[3] : '';
$MYGSTIN = isset($Row[4]) ? $Row[4] : '';
$IMPORTTYPE = isset($Row[5]) ? $Row[5] : '';
$BILLEPC = isset($Row[6] ? $Row[6]) : '';
$BILLEN = isset($Row[7]) ? $Row[7] : '';
$BILLED = isset($Row[8]) ? $Row[8] : '';
$SNAME = isset($Row[9]) ? $Row[9] : '';
$SGSTIN = isset($Row[10]) ? $Row[10] : '';
$SADDRESS = isset($Row[11]) ? $Row[11] : '';
$SCITY = isset($Row[12]) ? $Row[12]: '';
$SSTATE = isset($Row[13]) ? $Row[13]: '';
$ITEMQUANTITY = isset($Row[14]) ? $Row[14]: '';
$ITEMUOM = isset($Row[15]) ? $Row[15]: '';
$ITEMRATE = isset($Row[16]) ? $Row[16]: '';
$GORS = isset($Row[17]) ? $Row[17]: '';
$ITEMDESC = isset($Row[18]) ? $Row[18]: '';
$HSNORSAC = isset($Row[19]) ? $Row[19]: '';
$CGSTRATE =	isset($Row[20]) ? $Row[20]: '';
$CGSTAMT = isset($Row[21]) ? $Row[21]: '';
$SGSTRATE = isset($Row[22]) ? $Row[22]: '';
$SGSTAMT = isset($Row[23]) ? $Row[23]: '';
$IGSTRATE = isset($Row[24]) ? $Row[24]: '';
$IGSTAMT = isset($Row[25]) ? $Row[25]: '';
$CESSRATE = isset($Row[26]) ? $Row[26]: '';
$CESSAMT = isset($Row[27]) ? $Row[27]: '';
$ITEMTV = isset($Row[28]) ? $Row[28]: '';
$IDISAMT = isset($Row[29]) ? $Row[29]: '';
$EXEMPT = isset($Row[30]) ? $Row[30]: '';
$TOTALTV = isset($Row[31]) ? $Row[31]: '';
$ITCCLAIMTYPE = isset($Row[32]) ? $Row[32]: '';
$CGSTCLAIMAMT = isset($Row[33]) ? $Row[33]: '';
$SGSTCLAIMAMT = isset($Row[34]) ? $Row[34]: '';
$IGSTCLAIMAMT = isset($Row[35]) ? $Row[35]: '';
$CESSITAMAT	= isset($Row[36]) ? $Row[36]: '';
$CLAIMAMT = isset($Row[37]) ? $Row[37]: '';
$html.="<td>".$IDATE."</td>";
$html.="<td>".$NUMBER."</td>";
$html.="<td>".$SPOS."</td>";
$html.="<td>".$ITYPE."</td>";
$html.="<td>".$MYGSTIN."</td>";
$html.="<td>".$IMPORTTYPE."</td>";
$html.="<td>".$BILLEPC."</td>";
$html.="<td>".$BILLEN."</td>";
$html.="<td>".$BILLED."</td>";
$html.="<td>".$SNAME."</td>";
$html.="<td>".$SGSTIN."</td>";
$html.="<td>".$SADDRESS."</td>";
$html.="<td>".$SCITY."</td>";
$html.="<td>".$SSTATE."</td>";
$html.="<td>".$ITEMQUANTITY."</td>";
$html.="<td>".$ITEMUOM."</td>";
$html.="<td>".$ITEMRATE."</td>";
$html.="<td>".$GORS."</td>";
$html.="<td>".$ITEMDESC."</td>";
$html.="<td>".$HSNORSAC."</td>";
$html.="<td>".$CGSTRATE."</td>";
$html.="<td>".$CGSTAMT."</td>";
$html.="<td>".$SGSTRATE."</td>";
$html.="<td>".$SGSTAMT."</td>";
$html.="<td>".$IGSTRATE."</td>";
$html.="<td>".$IGSTAMT."</td>";
$html.="<td>".$CESSRATE."</td>";
$html.="<td>".$CESSAMT."</td>";
$html.="<td>".$ITEMTV."</td>";
$html.="<td>".$IDISAMT."</td>";
$html.="<td>".$EXEMPT."</td>";
$html.="<td>".$TOTALTV."</td>";
$html.="<td>".$ITCCLAIMTYPE."</td>";
$html.="<td>".$CGSTCLAIMAMT."</td>";
$html.="<td>".$SGSTCLAIMAMT."</td>";
$html.="<td>".$IGSTCLAIMAMT."</td>";
$html.="<td>".$CESSITAMAT."</td>";
$html.="<td>".$CLAIMAMT."</td>";
$html.="</tr>";

#$query = "insert into 2a(IDATE,INUMBER,SPOS,ITYPE,MYGSTIN,IMPORTTYPE,BILLEPC,BILLEN,BILLED,SNAME,SGSTIN,SADDRESS,SCITY,SSTATE,ITEMQUANTITY,ITEMUOM,ITEMRATE,GORS,ITEMDESC,HSNORSAC,CGSTRATE,CGSTAMT,SGSTRATE,SGSTAMT,IGSTRATE,IGSTAMT,CESSRATE,CESSAMT,ITEMTV,IDISAMT,EXEMPT,TOTALTV,ITCCLAIMTYPE,CGSTCLAIMAMT,SGSTCLAIMAMT,IGSTCLAIMAMT,CESSITAMAT,CLAIMAMT) values('".$IDATE."','".$INUMBER."','".$SPOS."','".$ITYPE."','".$MYGSTIN."','".$IMPORTTYPE."','".$BILLEPC."','".$BILLEN."','".$BILLED."','".$SNAME."','".$SGSTIN."','".$SADDRESS."','".$SCITY."','".$SSTATE."','".$ITEMQUANTITY."','".$ITEMUOM."','".$ITEMRATE."','".$GORS."','".$ITEMDESC."','".$HSNORSAC."','".$CGSTRATE."','".$CGSTAMT."','".$SGSTRATE."','".$SGSTAMT."','".$IGSTRATE."','".$IGSTAMT."','".$CESSRATE."','".$CESSAMT."','".$ITEMTV."','".$IDISAMT."','".$EXEMPT."','".$TOTALTV."','".$ITCCLAIMTYPE."','".$CGSTCLAIMAMT."','".$SGSTCLAIMAMT."','".$IGSTCLAIMAMT."','".$CESSITAMAT."','".$CLAIMAMT."')";
$query = "INSERT INTO `2a`(`IDATE`, `INUMBER`, `SPOS`, `ITYPE`, `MYGSTIN`, `IMPORTTYPE`, `BILLEPC`, `BILLEN`, `BILLED`, `SNAME`, `SGSTIN`, `SADDRESS`, `SCITY`, `SSTATE`, `ITEMQUANTITY`, `ITEMUOM`, `ITEMRATE`, `GORS`, `ITEMDESC`, `HSNORSAC`, `CGSTRATE`, `CGSTAMT`, `SGSTRATE`, `SGSTAMT`, `IGSTRATE`, `IGSTAMT`, `CESSRATE`, `CESSAMT`, `ITEMTV`, `IDISAMT`, `EXEMPT`, `TOTALTV`, `ITCCLAIMTYPE`, `CGSTCLAIMAMT`, `SGSTCLAIMAMT`, `IGSTCLAIMAMT`, `CESSITAMAT`, `CLAIMAMT`) VALUES ('".$IDATE."','".$INUMBER."','".$SPOS."','".$ITYPE."','".$MYGSTIN."','".$IMPORTTYPE."','".$BILLEPC."','".$BILLEN."','".$BILLED."','".$SNAME."','".$SGSTIN."','".$SADDRESS."','".$SCITY."','".$SSTATE."','".$ITEMQUANTITY."','".$ITEMUOM."','".$ITEMRATE."','".$GORS."','".$ITEMDESC."','".$HSNORSAC."','".$CGSTRATE."','".$CGSTAMT."','".$SGSTRATE."','".$SGSTAMT."','".$IGSTRATE."','".$IGSTAMT."','".$CESSRATE."','".$CESSAMT."','".$ITEMTV."','".$IDISAMT."','".$EXEMPT."','".$TOTALTV."','".$ITCCLAIMTYPE."','".$CGSTCLAIMAMT."','".$SGSTCLAIMAMT."','".$IGSTCLAIMAMT."','".$CESSITAMAT."','".$CLAIMAMT."')"
$mysqli->query($query);
}
}
$html.="</table>";

echo "<br />Data Inserted in dababase";
}
else
{
die("<br/>Sorry, File type is not allowed. Only Excel file.");
}
}
?>