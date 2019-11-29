<?php
$refNo = '';
$firstPaymentDate = date('dmY');
$Currency = 'MYR';
$Amount = '1.00';
$MerchantCode = '';
$MerchantKey = '';
$NumberOfPayments = '12';
$Frequency = '2';
$FullStringToHash = $MerchantCode.$MerchantKey.$refNo.$firstPaymentDate.$Currency.str_replace('.', '', $Amount).$NumberOfPayments.$Frequency;
$Signature = base64_encode(sha1($FullStringToHash,true ));
?>
<html>
<head>
<title>Merchant HTTPS POST subscription request parameters to iPay88</title>
</head>
<body>
 <form method="POST" action="https://www.ipay88.com/recurringpayment2.0/subscription.asp" name="request">
    <input type="hidden" name="MerchantCode" value="<?php echo $MerchantCode; ?>">
    <input type="hidden" name="RefNo" value="<?php echo $refNo; ?>">
	<input type="hidden" name="FirstPaymentDate" value="<?php echo $firstPaymentDate; ?>">
	<input type="hidden" name="Currency" value="<?php echo $Currency; ?>">
	<input type="hidden" name="Amount" value="<?php echo $Amount; ?>">
	<input type="hidden" name="NumberOfPayments" value="<?php echo $NumberOfPayments; ?>">
	<input type="hidden" name="Frequency" value="2">
    <input type="hidden" name="Desc" value="">
    <input type="hidden" name="CC_Ic" value="">
    <input type="hidden" name="CC_Email" value="">
    <input type="hidden" name="CC_Phone" value="">	
    <input type="hidden" name="P_Name" value="">
    <input type="hidden" name="P_Email" value="">
    <input type="hidden" name="P_Phone" value="">		
    <input type="hidden" name="P_Addrl1" value="">
    <input type="hidden" name="P_Addrl2" value="">
    <input type="hidden" name="P_City" value="">
	<input type="hidden" name="P_State" value="">
	<input type="hidden" name="P_Zip" value="">	
	<input type="hidden" name="P_Country" value="Malaysia">	
    <input type="hidden" name="BackendURL" value="backend.php">
    <input type="hidden" name="Signature" value="<?php echo $Signature; ?>">
    <input type="hidden" name="ResponseURL" value="response.php">
	<button type="submit" value="Submit">Submit</button>
</form>

</body>
</html>