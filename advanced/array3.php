<?php
$str = '[{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Higher Level Education","lead_payIn":"25.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"}]';

$array = json_decode($str, TRUE);
echo "<pre>";
print_r($array);
echo "</pre>";


$total_Edufficient = 0;
$total_Ronin_Revenue = 0;
$total_QMP = 0;
$total_Higher_Level_Education = 0;

// --------------------
foreach ($array as $row){
    if ($row['vendor_name'] === 'Edufficient') {
        $total_Edufficient += $row['lead_payIn'];
        "<br>";
    }
if ($row['vendor_name'] === 'Ronin Revenue') {
    $total_Ronin_Revenue += $row['lead_payIn'];
    "<br>";
}
if ($row['vendor_name'] === 'QMP') {
    $total_QMP += $row['lead_payIn'];
    "<br>";
}
if ($row['vendor_name'] === 'Higher Level Education') {
    $total_Higher_Level_Education += $row['lead_payIn'];
}

}

echo "Total value for Edufficient: $total_Edufficient" ."<br>";
echo "Total value for Ronin Revenue: $total_Ronin_Revenue"."<br>";
echo "Total value for QMP: $total_QMP"."<br>";
echo "Total value for Higher Level Education: $total_Higher_Level_Education";
exit;






?>