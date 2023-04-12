<?php
$str='{"movies":[{"id":0,"title":"The Godfather","director":"Francis Ford Coppola","cast":["Marlon Brando","Al Pacino","James Caan","Richard S. Castellano"],"yearReleased":"1972","score":9.2,"img":"https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg"},{"id":1,"title":"The Wizard of Oz","director":"Victor Fleming","cast":["Judy Garland","Frank Morgan","Ray Bolger","Bert Lahr"],"yearReleased":"1939","score":8.0,"img":"https://m.media-amazon.com/images/M/MV5BNjUyMTc4MDExMV5BMl5BanBnXkFtZTgwNDg0NDIwMjE@._V1_SX300.jpg"},{"id":2,"title":"Citizen Kane","director":"Orson Welles","cast":["Joseph Cotten","Dorothy Comingore","Agnes Moorehead","Ruth Warrick"],"yearReleased":"1941","score":8.3,"img":"https://m.media-amazon.com/images/M/MV5BYjBiOTYxZWItMzdiZi00NjlkLWIzZTYtYmFhZjhiMTljOTdkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg"},{"id":3,"title":"The Shawshank Redemption","director":"Frank Darabont","cast":["Tim Robbins","Morgan Freeman","Bob Gunton","William Sadler"],"yearReleased":"1994","score":9.3,"img":"https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg"},{"id":4,"title":"Pulp Fiction","director":"Quentin Tarantino","cast":["Tim Roth","Amanda Plummer","Laura Lovelace","John Travolta"],"yearReleased":"1994","score":8.9,"img":"https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg"},{"id":5,"title":"Casablanca","director":"Michael Curtiz","cast":["Humphrey Bogart","Ingrid Bergman","Paul Henreid","Claude Rains"],"yearReleased":"1942","score":8.5,"img":"https://m.media-amazon.com/images/M/MV5BY2IzZGY2YmEtYzljNS00NTM5LTgwMzUtMzM1NjQ4NGI0OTk0XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SX300.jpg"},{"id":6,"title":"The Godfather: Part II","director":"Francis Ford Coppola","cast":["Al Pacino","Robert Duvall","Diane Keaton","Robert De Niro"],"yearReleased":"1974","score":9.0,"img":"https://m.media-amazon.com/images/M/MV5BMWMwMGQzZTItY2JlNC00OWZiLWIyMDctNDk2ZDQ2YjRjMWQ0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg"},{"id":7,"title":"E.T. the Extra-Terrestrial","director":"Steven Spielberg","cast":["Dee Wallace","Henry Thomas","Peter Coyote","Robert MacNaughton"],"yearReleased":"1982","score":7.9,"img":"https://m.media-amazon.com/images/M/MV5BMTQ2ODFlMDAtNzdhOC00ZDYzLWE3YTMtNDU4ZGFmZmJmYTczXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg"},{"id":8,"title":"2001: A Space Odyssey","director":"Stanley Kubrick","cast":["Keir Dullea","Gary Lockwood","William Sylvester","Daniel Richter"],"yearReleased":"1968","score":8.3,"img":"https://m.media-amazon.com/images/M/MV5BMmNlYzRiNDctZWNhMi00MzI4LThkZTctMTUzMmZkMmFmNThmXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg"},{"id":9,"title":"Schindlers List","director":"Steven Spielberg","cast":["Liam Neeson","Ben Kingsley","Ralph Fiennes","Caroline Goodall"],"yearReleased":"1993","score":8.9,"img":"https://m.media-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg"},{"id":10,"title":"Star Wars: Episode IV - A New Hope","director":"George Lucas","cast":["Harrison Ford","Mark Hamill","Carrie Fisher"],"yearReleased":"1977","score":8.6,"img":"https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UX182_CR0,0,182,268_AL_.jpg"}]}';

$array= json_decode($str, TRUE);

// echo "<pre>"; print_r($array);echo "</pre>";
// exit();
// echo var_dump($array);

// foreach($array as $movies){
	
// 	$Title = $array['title'];
// 	$Release_date =$array['yearReleased'];
// 	$Director =$array['director'];	
// 	$Cast =$array['cast'];
// 	echo "$Title: " . $array['title'] . "<br>";
// 	echo "$Release_date: " . $array['yearReleased'] . "<br>";
// 	echo "$Director: " . $array['director'] . "<br>";

// 	echo "Cast: " . $array['cast']. "<br><br>";
//   }


foreach($array as $row)

{
	// echo "<pre>";

	// print_r($row);
	foreach($row as  $k) {
		// echo"<br>";
		// echo "<pre>kkk";
		// print_r($k['title']);
		echo "ID: " . $k['id'] . "<br>";
		echo "Title: " . $k['title']. " ".  "(" . ($k['yearReleased']). ")" ."<br>" ;
	// echo "Release date: " . $k['yearReleased'] . "<br>";
	echo "Director: " . $k['director'] . "<br>";
	// echo "Cast: " . $k['cast'] . "<br>";
	echo "Cast: " .implode(", ",$k['cast']). "<br><br>";


	// echo "Cast: " . implode(', ', $k['cast']) . "<br><br>";
	
	}
}exit;
?>