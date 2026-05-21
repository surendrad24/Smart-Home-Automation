<?php
// multiple recipients
$to  = 'nandudeserves@gmail.com' . ', '; // note the comma
$to .= 'sanjupasuparthy@gmail.com';

// subject
$subject = 'Order Cylinder';

// message
$message = '
<html>
<head>
  <title>S.C.P</title>
</head>
<body>
  <p>Your Order for new Gas Cylinder is successful!</p>
  <table>
    <tr>
      <th>ID</th><th>Name</th><th>Mobile</th><th>E-mail</th><th>Address</th>Order-Date<th></th>
    </tr>
    <tr>
      <td>101</td><td>Nandan</td><td>+91-9176270693</td><td>nandudeserves@gmail.com</td><td>SSN College of Engineering</td><td>26-sept-2014</td>
    </tr>
	
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

// insert into gas station table as well to dislay the orders in gas station interface

?>