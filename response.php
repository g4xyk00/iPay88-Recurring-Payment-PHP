<?php
if(isset($_POST['MerchantCode']) 
  && isset($_POST['RefNo'])
  && isset($_POST['SubscriptionNo']) 
  && isset($_POST['FirstPaymentDate']) 
  && isset($_POST['Currency']) 
  && isset($_POST['Amount']) 
  && isset($_POST['NumberOfPayments']) 
  && isset($_POST['Frequency']) 
  && isset($_POST['TransId']) 
  && isset($_POST['AuthCode'])
  && isset($_POST['Desc'])
  && isset($_POST['Status'])
  && isset($_POST['ErrDesc'])
  ){
	  
  $Status = $_POST['Status'];
  $ErrDesc = $_POST['ErrDesc'];
  $TransId = $_POST['TransId'];

  if($Status == "00"){
	 echo 'Success.';
  }else{
		echo 'Failed';
  }
}
?>