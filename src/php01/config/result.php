<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "私の名前は、" . $company;
echo "<br />";
$radio = htmlspecialchars($_POST["radio"], ENT_QUOTES);
print "ご注文の商品は、". $radio;
echo "<br />";
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);
print "注文数は、". $number;