<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Order View Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc
	  $content = ob_get_contents();
	$content .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="margin:0px; padding:0px;color: #616f77;font-family: "Dosis"; font-style: normal; font-weight: 300; src: local("Dosis Light"), local("Dosis-Light"), url(http://fonts.gstatic.com/s/dosis/v4/SHQzTQBI7152hSrIuGUiVPesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");" >

<div style="width:1095px; background:#e5e9ea; margin:0 auto;padding-bottom:20px;padding-top:20px;">
<div style="background:#fff; width:1000px; margin:0 auto;padding:10px;">
<h1 style="color:#616f77; font-size:15px;">STATUS</h1>
<h1 style="color:#8ed78e; font-size:25px; font-weight:normal;margin:0px;padding:0px;">ALLOCATED</h1>
<h1 style="color:#616f77; font-size:25px; font-weight:normal;padding:0px;">Order : <strong>690331-001</strong></h1>
<hr style="border-top:1px solid #f3f3f3; ">
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="float:left;" >
  <tr>
    <td ><table width="29%" border="0" align="left" cellpadding="2" cellspacing="2" style=" margin-right:45px;">
      <tr>
        <td align="left"><strong>INVOICE NUMBER(S)</strong></td>
      </tr>
      <tr>
        <td align="left" style="color:#a4ada8;">Invoice Number:842557</td>
      </tr>
      <tr>
        <td align="left" style="color:#a4ada8;">Order Number:690331</td>
      </tr>
      <tr>
        <td align="left" style="color:#a4ada8;"> Order Date:12/22/2015</td>
      </tr>
    </table>
      <table width="33%" border="0" align="left" cellpadding="2" cellspacing="2"  >
      <tr>
        <td align="left"><strong>BILLING ADDRESS</strong></td>
      </tr>
      <tr>
        <td align="left" style="color:#a4ada8;">GBS INC</td>
      </tr>
      <tr>
        <td align="left" style="color:#a4ada8;">ATTNlACCOUNTS PAYABLE</td>
      </tr>
      <tr>
        <td align="left" style="color:#a4ada8;">POBOX 2340</td>
      </tr>
    </table>
      <table width="25%" border="0" align="right" cellpadding="2" cellspacing="2"  >
        <tr>
          <td align="left"><strong>SHIPPING ADDRESS</strong></td>
        </tr>
        <tr>
          <td align="left" style="color:#a4ada8;">GM FT WAYNE ASSEMBLY</td>
        </tr>
        <tr>
          <td align="left" style="color:#a4ada8;">ATTN: REL#4100207787</td>
        </tr>
        <tr>
          <td align="left" style="color:#a4ada8;">12200 LAFAYETTE CENTER RD</td>
        </tr>
      </table></td>
  </tr>
</table>
</div>
<br/>
<div style="background:#fff; width:1000px; margin:0 auto;padding:10px;">
<h1 style="color:#616f77; font-size:25px; font-weight:normal;">Items On Order:1</h1>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">

</table>

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="left"><strong>Item NO</strong></td>
    <td align="left"><strong>Product Code</strong></td>
    <td align="left"><strong>Qty</strong></td>
    <td align="left"><strong>Unit Size</strong></td>
    <td align="left"><strong>Unit Price</strong></td>
    <td align="left"><strong>Total Price</strong></td>
    <td align="left"><strong>Status</strong></td>
    <td align="left"><strong>Product Descriptin</strong></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">10</td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">255048GM</td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">8</td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">PK</td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">159</td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">1272</td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;"><span style="font-size:12px; background:#d34e53;border-radius: 2px;padding: 5px; color:#fff;">Invoiced</span></td>
    <td align="left" bgcolor="#f9f9f9" style="border-top:2px solid #dedfe1;border-bottom:1px solid #dedfe1;">4PACK HIGH YIELD RIBBON </td>
  </tr>
</table>
<br/>

</div>

</div>

</body>
</html>
';
  
ob_end_clean();
$obj_pdf->writeHTML($content);
$obj_pdf->Output('output.pdf', 'I');


?>