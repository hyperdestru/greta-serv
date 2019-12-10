<?php
	function debug($string) {
		echo '<pre>';
			print_r($string);
		echo '</pre>';
	}



	/**
	 * Call an api and return the results
	 * 
	 * @param string $baseUrl
	 * @param array $params custom url params 
	 */
	function getCurl($baseUrl, $options = []) {
		$url = $baseUrl;

		// Add params into url api
		if (!empty($options)) :
			$url .= '?';
			foreach ($options as $key => $value) :
				$url .= $key . '=' . $value . '&';
			endforeach;
			$url = rtrim($url, '&');
		endif;

		// Curl init
		$curl = curl_init($url);

		// Curl options
		curl_setopt_array($curl, [
			CURLOPT_CAINFO         => __DIR__ . '/cert.cer',
			CURLOPT_RETURNTRANSFER => true
		]);

		// Curl execution
		$data = curl_exec($curl);

		// Return Curl
		if ($data) :
			$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			if ($httpCode === 200) :
				curl_close($curl);
				return json_decode($data, true);
			else :
				echo 'Erreur : ' . $httpCode;
			endif;
		else :
			echo curl_error($curl);
		endif;

		curl_close($curl);
	}
