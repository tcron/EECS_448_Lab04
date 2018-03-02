<?php
echo "Thank you for your purchase <br>";

$username = $_POST['email']; 
$password = $_POST['password'];
$baseballQ = $_POST['baseballQuantity'];
$footballQ = $_POST['footballQuantity'];
$basketballQ = $_POST['basketballQuantity'];

$shippingOption = $_POST['shipping'];

$shippingC = 0;

if($shippingOption == "7Day")
{
    $shippingC = 0;
}

if($shippingOption == "3Day")
{
    $shippingC = 5;
}

if($shippingOption == "Overnight")
{
    $shippingC = 50;
}

$shippingStr = "$$shippingC.00";

echo "Username: $username <br>";
echo "Password: $password <br>";

$baseballC = $baseballQ * 3;
$baseballStr = "$$baseballC.00";

$footballC = $footballQ * 5;
$footballStr = "$$footballC.00";

$basketballC = $basketballQ * 7;
$basketballStr = "$$basketballC.00";

$totalC = $basketballC + $footballC + $baseballC + $shippingC;
$totalStr = "$$totalC.00";

echo '
<table border=\"1\">
<tr> <td>Item</td>
<td>Quantity</td>
<td>Cost per Item</td>
<td>Subtotal</td></tr>
  <tr>
    <td>Baseball</td>
    <td>', $baseballQ, '</td>
    <td>', "$3.00", '</td>
    <td>', $baseballStr, '</td>
  </tr>
  <tr>
    <td>Football</td>
    <td>', $footballQ, '</td>
    <td>', "$5.00", '</td>
    <td>', $footballStr, '</td>
  </tr>
  <tr>
    <td>Basketball</td>
    <td>', $basketballQ, '</td>
    <td>', "$7.00", '</td>
    <td>', $basketballStr, '</td>
  </tr>
  <tr>
    <td>Shipping</td>
    <td>', $shippingOption, '</td>
    <td>', "", '</td>
    <td>', $shippingStr, '</td>
  </tr>
  <tr>
    <td>Total Cost</td>
    <td>', "", '</td>
    <td>', "", '</td>
    <td>', $totalStr , '</td>
  </tr>
</table>';


?>