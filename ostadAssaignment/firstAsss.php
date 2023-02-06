<?php
$tuitionFee = 20000;
$discount1 = ($tuitionFee / 100) * 25;
$discount2 = ($tuitionFee / 100) * 20;
$discount3 = ($tuitionFee / 100) * 15;

echo PHP_EOL;

if ($tuitionFee >= 20000) {
    echo "You will get 25% commission.";
} elseif ($tuitionFee >= 10000) {
    echo "You will get 20% commission.";
} elseif ($tuitionFee >= 7000) {
    echo "You will get 15% commission.";
} else {
    echo "You will be invalid.";
}
echo PHP_EOL;

$commCltr = ($tuitionFee >= 20000) ? "25% commission \${$discount1}" : (($tuitionFee >= 10000) ? "20% commission \${$discount2}" : (($tuitionFee >= 7000) ? "15% commission \${$discount3}" : "Not applicable for commission"));

echo $commCltr;