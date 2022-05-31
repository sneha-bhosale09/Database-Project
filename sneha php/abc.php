<html>
<head><title>hello</title>
</head>
<body>
<?php
$num=14597;
$sum=0; $rem=0;
for($i=0; i<=strlen($num); $i++)
{$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;
}
echo"the sum of digits 14597 is $num";
?>
</body>
</html>