
<html>
<head><title>Preferences Set</title></head>
<body>
<?php
session_start();
$colors = array(
  'black'=> "#000000",
   'white'=> "#ffffff",
    'red'=> "#ff0000",
     'blue'=> "#0000ff"
);


$backgroundName = $_POST['background'];
$foregroundName = $_POST['foreground'];
$_SESSION['backgroundName'] = $backgroundName;
$_SESSION['foregroundName'] = $foregroundName;
?>
<p>Thank you. Your preferences have been changed to:<br />
Background: <?php echo $backgroundName; ?><br />
Foreground: <?php echo $foregroundName; ?></p>
<p>Click <a href="test.php">here</a> to see the preferences
in action.</p>
</body>
</html>
