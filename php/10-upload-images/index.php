<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Upload image</title>
</head>
<body>
	<div class="container mt-5">
		<form class="form" action="" method="post" enctype="multipart/form-data">
			<div class="custom-file mb-4">
				<input type="file" class="custom-file-input" name="photo" id="image">
				<label class="custom-file-label" for="image" data-browse="Parcourir">Télécharger une image</label>
			</div>
			<div>
				<input type="submit" value="Envoyer" class="btn btn-primary">
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


<?php
/**	
 * Upload file
 * 
 * @param string $path to save file
 * @param string $field name of input type file
 */
function uploadFile(string $path, string $field, array $exts = ['jpg', 'png', 'jpeg'], int $maxSize = 2097152): string
{
	// Check submit form with post method
	if (empty($_FILES)) :
		return '';
	endif;
	
	// Check exit directory if not create
	if (!is_dir($path) && !mkdir($path, 0755)) :
		return 'Impossible d\'importer votre fichier.';
	endif;

	// Check not empty input file
	if (empty($_FILES[$field]['name'])) :
		return 'Merci d\'uploader un fichier';
	endif;
	
	// Check exts
	$currentExt = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);
	$currentExt = strtolower($currentExt);
	if (!in_array($currentExt, $exts)) :
		$exts = implode(', ', $exts);
		return 'Merci de charger un fichier avec l\'une de ces extensions : ' . $exts . '.';
	endif;

	// Check no error into current file
	if ($_FILES[$field]['error'] !== UPLOAD_ERR_OK) :
		return 'Merci de sélectionner un autre fichier.';
	endif;

	// Check max size current file
	if ($_FILES[$field]['size'] > $maxSize) :
		return 'Merci de charger un fichier ne dépassant pas cette taille : ' . formatBytes($maxSize);
	endif;

	$filename = pathinfo($_FILES[$field]['name'], PATHINFO_FILENAME);
	$filename = renameFile($filename);
	$targetToSave = $path . '/' . $filename . '.' . $currentExt;
	
	if(move_uploaded_file($_FILES[$field]['tmp_name'], $targetToSave)) :
		return 'Super !';
	endif;

	return '';
}
echo uploadFile('images', 'photo');


function formatBytes($size, $precision = 2) {
	$base     = log($size, 1024);
	$suffixes = ['', 'Ko', 'Mo', 'Go', 'To'];

	return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}


function renameFile(string $name) {
	$name = trim($name);
	$name = strip_tags($name);
	$name = removeAccent($name);
    $name = preg_replace('/[\s-]+/', ' ', $name);  //Clean up multiple dashes and whitespaces
	$name = preg_replace('/[\s_]/', '-', $name); //Convert whitespaces and underscore to dash
	$name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
	$name = strtolower($name);
	$name = trim($name, '-');

	return $name;
}


function removeAccent($string) {
	$string = str_replace(
		['à','á','â','ã','ä', 'ç', 'è','é','ê','ë', 'ì','í','î','ï', 'ñ', 'ò','ó','ô','õ','ö', 'ù','ú','û','ü', 'ý','ÿ', 'À','Á','Â','Ã','Ä', 'Ç', 'È','É','Ê','Ë', 'Ì','Í','Î','Ï', 'Ñ', 'Ò','Ó','Ô','Õ','Ö', 'Ù','Ú','Û','Ü', 'Ý'], 
		['a','a','a','a','a', 'c', 'e','e','e','e', 'i','i','i','i', 'n', 'o','o','o','o','o', 'u','u','u','u', 'y','y', 'A','A','A','A','A', 'C', 'E','E','E','E', 'I','I','I','I', 'N', 'O','O','O','O','O', 'U','U','U','U', 'Y'], 
		$string
	);
	return $string;
}


var_dump($_FILES);
