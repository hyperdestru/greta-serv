<?php
session_start();

/**
 * Display alert message
 */
function alert() {
	if (!empty($_POST)) :
		if (empty($_POST['email']) || empty($_POST['password'])) :
			$result = '<div class="alert alert-danger" role="alert">';
				$result .= 'Merci de renseigner une adresse email et un mot de passe.';
			$result .= '</div>';
		else :
			$result = 'Success';
		endif;

		return $result;
	endif;
}


function alert2() {
	if (!empty($_SESSION['alert'])) :
		if (empty($_SESSION['alert']['type'])) :
			$_SESSION['alert']['type'] = 'danger';
		endif;

		$result = '<div class="alert alert-' . $_SESSION['alert']['type'] . '" role="alert">';
			$result .= $_SESSION['alert']['message'];
		$result .= '</div>';

		unset($_SESSION['alert']);
		return $result;
	endif;
}



if (!empty($_POST)) :
	if (empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		$data = ['email' => $_POST['email']];

		$sql = 'SELECT id, firstname, lastname, role_id, password FROM users WHERE email = :email';
		$request = $db->prepare($sql);
		$request->execute($data);
		$result = $request->fetch();

		if (!empty($result)) {
			if (password_verify($_POST['password'], $result['password'])) {
				$_SESSION['alert']['message'] = 'Vous êtes bien connecté.';
				$_SESSION['alert']['type'] = 'success';
				header('Location: test.php');
				die();
			}
			else {
				$_SESSION['alert']['message'] = 'Mauvais mot de passe';
			}
		}
		else {
			$_SESSION['alert']['message'] = 'Mauvais email !';
		}
	}
	elseif (!empty($_POST['firstname'])) {
		$_SESSION['alert']['message'] = 'Success honey pot';
		$_SESSION['alert']['type'] = 'success';
	}
endif;