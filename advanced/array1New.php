<?php
$str= '[{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Telesolutions 2","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"QuinStreet","lead_payIn":"44.00"},{"partner_name":"QuinStreet","lead_payIn":"40.00"},{"partner_name":"Education Source","lead_payIn":"40.00"},{"partner_name":"Liquid Education","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Silverback","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"SilverTap LLC","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"SilverTap LLC","lead_payIn":"30.00"},{"partner_name":"QuinStreet Web","lead_payIn":"25.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"}]';


    $array= json_decode($str, TRUE);

    $revenue = [];
foreach ($array as $transaction) {
    $partner = $transaction['partner_name'];
    $lead_payIn = floatval($transaction['lead_payIn']);
    if (isset($revenue[$partner])) {
        $revenue[$partner] += $lead_payIn;
    } else {
        $revenue[$partner] = $lead_payIn;
    }
}

echo "<table><tr><th>Partner Name</th><th>Total PayIn Revenue</th></tr>";
foreach ($revenue as $partner => $lead_payIn) {
    echo "<tr><td>$partner</td><td>$lead_payIn</td></tr>";
    // echo"$partner" ."<br>";
    // echo" $lead_payIn";
}
echo "</table>";
?>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
    