<?php 

$name = "GAGA";
$first_name = "GAWEL";

echo("My name is $name $first_name.<br>");

echo("<hr>");/*********************************************************************/

for ($i = 0; $i <= 10; $i++) {
	if ($i % 2 == 0) {
		echo("<strong>$i est pair</strong> <br>");
	} else {
		echo ("<a href=\"\">$i est impair</a> <br>");
	}
}

echo("<hr>");/*********************************************************************/

//On peut optimiser un peu tout ça en traiter en premier les cas les plus courants
//par exemple tester la note entre 7 et 9 (3 notes possibles) en premier.
$grade = 5;
echo("J'ai eu $grade/10 :");

if ($grade >= 0) {

	if ($grade < 4) {

		echo("<br>$grade/10 : Not good man, not doog.<br>");

	} else if ($grade >= 4 && $grade <= 6) {

		if ($grade == 5) {

			echo "<br>Pile la moyenne c'est good.<br>";

		} else {

			echo("<br>$grade/10 : Moyen Moyen<br>");
		}

	} else if ($grade >= 7 && $grade <= 9) {

		echo("<br>$grade/10 : Nice duuuude<br>");

	} else if ($grade == 10) {

		echo("<br>$grade/10 : Yeaaaaaahhhhh man. PERFEKT MATE !<br>");

	} else if ($grade > 10) {

		echo("<br>$grade/10 : don't bullshit me bro.<br>");
	}

} else {

	echo("<br>$grade/10 : you gave me a negative number man.");
}

echo("<hr>");/*********************************************************************/

$langs = [
	'C', 
	'C++', 
	'Java', 
	'C#', 
	'Clojure',
	'Haskell',
	'Cobol',
	'Fortran',
	'PHP', 
	'Javascript',
	'Go',
	'Rust',
	'ASM',
	'Algol',
	'Delphi',
	'Brainfuck',
	'Swift',
	'Kotlin',
	'Basic'
];

$langs_len = count($langs);
$rand_lang = $langs[rand(0, $langs_len-1)];

echo("
	<h3>Aujourd'hui tu dois apprendre le ... 
	<a href=\"https://en.wikipedia.org/wiki/$rand_lang\">$rand_lang</a>
	</h3>
");

echo("<hr>");/*********************************************************************/

$fav_dessert = ["le russe", 
"l'eclair au café", 
"la tropezienne", 
"le fondant au chocolat", 
"la tarte aux fraises"];

echo("Nos desserts pref :<br>");

foreach ($fav_dessert as $d) {
	echo("$d, ");
}

echo("<hr>");/*********************************************************************/

/*
Prend un tableau d'entiers ou de flottants en parametre
Calcule la moyenne de ce tableau et l'arrondi à la decimale donnée en parametre (optionnel)
Renvoi la moyenne arrondie.
*/
function average($p_array, $p_dec = null) {
	$tot = 0;
	$result = 0;
	$arr_len = count($p_array);

	if ($arr_len > 1) {
		foreach ($p_array as $g) {
			$tot = $tot + $g;
		}
	} else {
		echo("Pas de notes fournies.");
	}

	$result = $tot / $arr_len;

	return round($result, $p_dec);
}

$students_entry = [
	[
		'name' => 'Laurence',
		'grades' => [15, 14, 13, 11, 9]
	],
	[
		'name' => 'Henrietta',
		'grades' => [20, 5, 12, 16, 14.5]
	],
	[
		'name' => 'Alexandra',
		'grades' => [9, 7, 8, 9.5, 11]
	],
	[
		'name' => 'Stanislas',
		'grades' => [11, 12, 10.5, 9, 16]
	]
];

/*
Creer dynamiquement un champ 'average' (comme 'name' et 'grades')
dans le tableau $students_entry
Dans ce champ 'average' on y met la moyenne du tableau 'grades'
*/
foreach ($students_entry as $key => $value) {
	/*Ici $value est chaque top element de students entry*/
	$students_entry[$key]['average'] = average($value['grades'], 1);
}

/*
Pour debug et mettre en forme la sortie
*/
/*echo '<pre>';
print_r($students_entry);
echo '</pre>';*/

$averages = [];

foreach ($students_entry as $key => $value) {
	array_push($averages, average($students_entry[$key]['grades'], 1));
}

/*A mettre a jour*/
foreach($averages as $key => $value) {
	echo($students_entry[$key]['name'] . " average grade = $value<br>");
}

$classroom_average = average($averages, 1);
echo("<h3>Moyenne de la classe = $classroom_average</h3>");

echo("<hr>");/*********************************************************************/

function __max($p_array) {
	$max = 0;
	if (count($p_array) > 0) {
		foreach ($p_array as $value) {
			if($value > $max) {
				$max = $value;
			}
		}
	}

	return $max;
}

function __min($p_array) {
	$min = $p_array[0];
	if (count($p_array) > 0) {
		foreach ($p_array as $value) {
			if($value < $min) {
				$min = $value;
			}
		}
	}

	return $min;
}

$nb_sample = [15, 14, -89, 0, -1, 0, -7, 25, 1, 0.4, 0.663, 0.08, -0.7, 15];
foreach ($nb_sample as $value) {
	echo("$value / ");
}

$max = __max($nb_sample);
$min = __min($nb_sample);
echo("<br>Nombre max du tableau = $max | Nombre min du tableau = $min");

echo("<hr>");/*********************************************************************/

function __shuffle($p_array) {
	$arr = $p_array;

	if(count($arr) > 0) {
		for($i = 0; $i < count($arr); $i++) {
			$rand_i = rand(0, count($arr) - 1);
			$temp = $arr[$i];
			$arr[$i] = $arr[$rand_i];
			$arr[$rand_i] = $temp;
		}
	}

	return $arr;
}

$reg_array = [0,1,2,3,4,5,6,7,8,9,10];

echo("Tableau dans l'ordre : ");
foreach ($reg_array as $value) {
	echo("$value / ");
}

echo("<br>");

echo("Tableau melangé aleatoirement : ");
foreach (__shuffle($reg_array) as $value) {
	echo("$value / ");
}

echo("<hr>");/*********************************************************************/

class Star {

	public $earth_distance;

	function set_dist($p_dist) {
		$this->earth_distance = $p_dist;
	}

	function get_dist() {
		return $this->earth_distance;
	}

}

$sun = new Star;
$sun->set_dist(1);
echo("Distance Soleil - Terre (UA) = " . $sun->get_dist());
?>