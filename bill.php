<?php

require '_dbconnect.php'; 
include_once('tcpdf/tcpdf.php');           

	//----- Code for generate pdf
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);  
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$pdf->SetDefaultMonospacedFont('helvetica');  
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	$pdf->setPrintHeader(false);  
	$pdf->setPrintFooter(false);  
	$pdf->SetAutoPageBreak(TRUE, 10);  
	$pdf->SetFont('helvetica', '', 12);  
	$pdf->AddPage(); //default A4
	
	$content = ''; 

	$content .= '
	<style type="text/css">
	body{
	font-size:12px;
	line-height:24px;
	font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	color:#000;
	}
	h2{
		background-color : lightgray;
	}
	</style>    
	<table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;" id="content">
	<table style="width:100%;" >
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td colspan="2" align="center"><h1><b>WE FOR YOU</b></h1></td></tr>
	<tr><td colspan="2" align="center">PHONE NO.: +91 9082689552</td></tr>
	<tr><td colspan="2" align="center"> MULUND (WEST), MUMBAI-80.</td></tr><br><br>
	<tr><td colspan="2"><b>NAME: </b>'.$_POST['name'].' </td></tr>
	<tr><td colspan="2"><b>PHONE NO.: </b>'.$_POST['phone'].' </td></tr>
	<tr><td colspan="2" align="right"><b>BILL DATE.: </b>'.date("d-m-Y").' </td></tr><br><br>
	<tr><td colspan="2" align="center"><h2><b>INVOICE</b></h2></td></tr><br>
	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
			NO. OF PACKETS
		</td>
		<td align="right">
			AMOUNT
		</td>
	</tr><br>';
		
		$content .= '
		  <tr class="itemrows">
			  <td>
				  '.$_POST['packets'].'
				  <br>
			  </td>
			  <td align="right">
				  '.$_POST['amount'].'
			  </td>
		  </tr>';
		$total=$_POST['amount'];
		
		$content .= '<tr class="total"><td colspan="2" align="right">------------------------</td></tr>
		<tr><td colspan="2" align="right"><b>GRAND&nbsp;TOTAL:&nbsp;'.$total.'</b></td></tr>
		<tr><td colspan="2" align="right">------------------------</td></tr>
	<tr><td colspan="2" align="right"></td></tr>
	<tr><td colspan="2">&nbsp;</td></tr><br><br>
	<tr><td colspan="2" align="center"><b>THANK YOU ! DONATE AGAIN</b></td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	</table>
</table>'; 
$pdf->writeHTML($content);
$pdf->Output('bill.pdf', 'I');

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$packets = $_POST['packets'];
	$amount = $_POST['amount'];
  
	$conn = mysqli_connect("localhost", "root", "", "ngo");
  
	$sql = "INSERT INTO donation_form(name, email, phone, packets, amount) values ('$name', '$email', '$phone', '$packets', '$amount')";
  
	mysqli_query($conn, $sql);
  
	echo '<script>alert("Thank you for your Donation..")</script>';
  }
?>
<script>
  $(document).ready(function() {
  // Refresh the page when navigating back
  $(window).on('popstate', function(e) {
    location.reload(true);
  });

  // Dismiss content when returning to the page
  $(window).on('load', function() {
    if (performance && performance.navigation.type === 2) {
      dismissPreviousContent();
    }
  });

  // Function to dismiss the previous content
  function dismissPreviousContent() {
    // Perform an AJAX request to clear the content
    $.ajax({
      url: 'http://localhost/Project1/donateform.php', // Replace with your server-side script or endpoint
      type: 'POST',
      success: function(response) {
        // Handle the response or perform any necessary UI updates
        console.log('Previous content dismissed');
      },
      error: function(xhr, status, error) {
        // Handle the error if AJAX request fails
        console.error('Error dismissing previous content:', error);
      }
    });
  }
});

</script>
