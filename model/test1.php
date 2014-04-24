<?php
include ('student.php');
$Sto=getStory(1);
$add=$Sto['bitdetail'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script src="http://coinwidget.com/widget/coin.js"></script>
<script>
CoinWidgetCom.go({
  wallet_address: "<?php echo $add; ?>"
  , currency: "bitcoin"
  , counter: "count"
  , alignment: "bl"
  , qrcode: true
  , auto_show: false
  , lbl_button: "Donate Us"
  , lbl_address: "My Bitcoin Address:"
  , lbl_count: "donations"
  , lbl_amount: "BTC"
});
</script>
</body>
</html>    


  