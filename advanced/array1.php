<?php
$str= '[{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Telesolutions 2","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"QuinStreet","lead_payIn":"44.00"},{"partner_name":"QuinStreet","lead_payIn":"40.00"},{"partner_name":"Education Source","lead_payIn":"40.00"},{"partner_name":"Liquid Education","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Silverback","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"SilverTap LLC","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"SilverTap LLC","lead_payIn":"30.00"},{"partner_name":"QuinStreet Web","lead_payIn":"25.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"}]';


    $array= json_decode($str, TRUE);

    // echo "<pre>"; print_r($array);echo "</pre>";

    // for ($i = 0; $i < count($array); $i++) {
    //     echo $array[$i] . "<br>";
    // }
    
    // // Using a foreach loop to print each value of the array
    // foreach ($array as $value) {
    //     echo $value . "<br>";
    // }

    $total_liquid_education = 0;
    $total_Telesolutions =0;
    $total_Yodel_Voice =0;
    $total_Silverback =0;

    // --------------------
    foreach($array as $row)

{ 
	// echo "<pre>";

	// print_r($row);
	
		// echo"<br>";
		// echo "<pre>kkk";
		// print_r($k['title']);
        if ($row['partner_name'] === 'Liquid Education') {
            $total_liquid_education += $row['lead_payIn'];"<br>";
          }
          if ($row['partner_name'] === 'Telesolutions') {
            $total_Telesolutions += $row['lead_payIn'];"<br>";
          }
          if ($row['partner_name'] === 'Yodel Voice') {
            $total_Yodel_Voice += $row['lead_payIn'];"<br>";
          }
          if ($row['partner_name'] === 'Silverback') {
            $total_Silverback += $row['lead_payIn'];
          }
		// echo "Partner_name: " .$row['partner_name']  . "<br>";

		// echo "lead_payIn: " . $row['lead_payIn']. "<br>";
	
	// echo "cast: " .implode(" ",$k['cast']). "<br>";


	// echo "Cast: " . implode(', ', $k['cast']) . "<br><br>";
	
	  
}
echo "Total value for Liquid Education: $total_liquid_education" ."<br>";
echo "Total value for total_Telesolutions: $total_Telesolutions"."<br>";
echo "Total value for total_Yodel_Voice: $total_Yodel_Voice"."<br>";
echo "Total value for Silverback: $total_Silverback";
exit;
?>
