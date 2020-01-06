<?php

$sellingPoints = [
	[
		'icon' => 'earth.png',
		'title' => 'Whole world',
		'textContent' => 'Proin umcorper urna et felisstibulum iaculis lacinia 
			est. Proin dictum elem entum velit fusce euismod. 
			Aenean commodo ligula eget dolor.'
	],

	[
		'icon' => 'suitcase.png',
		'title' => 'Confidentially',
		'textContent' => 'Proin umcorper urna et felisstibulum iaculis lacinia 
			est. Proin dictum elem entum velit fusce euismod. 
			Aenean commodo ligula eget dolor.'
	],

	[
		'icon' => 'pictures.png',
		'title' => 'Good previews',
		'textContent' => 'Proin umcorper urna et felisstibulum iaculis lacinia 
			est. Proin dictum elem entum velit fusce euismod. 
			Aenean commodo ligula eget dolor.'
	],

	[
		'icon' => 'drawer.png',
		'title' => 'Confidentially',
		'textContent' => 'Proin umcorper urna et felisstibulum iaculis lacinia 
			est. Proin dictum elem entum velit fusce euismod. 
			Aenean commodo ligula eget dolor.'
	],
];

$houses = [
	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '1450 Cloudcroft Drop',
		'state' => 'Illinois',
		'city' => 'Chicago',
		'price' => 250000,
		'description' => ['3400 Sq Ft', '2 Bedrooms', '1 Bathroom'],
		'highlight' => true,
		'featured' => true
	],

	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '120 Anastasia Avenue',
		'state' => 'Florida',
		'city' => 'Coral gables',
		'price' => 625000,
		'description' => ['4600 Sq Ft', '5 Bedrooms', '2 Bathrooms'],
		'highlight' => true,
		'featured' => false
	],

	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '1450 Cloudcroft Drop',
		'state' => 'Illinois',
		'city' => 'Chicago',
		'price' => 250000,
		'description' => ['3400 Sq Ft', '2 Bedrooms', '1 Bathroom'],
		'highlight' => true,
		'featured' => true
	],

	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '1450 Cloudcroft Drop',
		'state' => 'Illinois',
		'city' => 'Chicago',
		'price' => 250000,
		'description' => ['3400 Sq Ft', '2 Bedrooms', '1 Bathroom'],
		'highlight' => false,
		'featured' => true
	],

	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '1450 Cloudcroft Drop',
		'state' => 'Illinois',
		'city' => 'Chicago',
		'price' => 250000,
		'description' => ['3400 Sq Ft', '2 Bedrooms', '1 Bathroom'],
		'highlight' => false,
		'featured' => true
	],

	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '1450 Cloudcroft Drop',
		'state' => 'Illinois',
		'city' => 'Chicago',
		'price' => 250000,
		'description' => ['3400 Sq Ft', '2 Bedrooms', '1 Bathroom'],
		'highlight' => false,
		'featured' => true
	],

	[	
		'img' => 'house1.jpg',
		'slideImg' => 'slide1.jpg',
		'address' => '1450 Cloudcroft Drop',
		'state' => 'Illinois',
		'city' => 'Chicago',
		'price' => 250000,
		'description' => ['3400 Sq Ft', '2 Bedrooms', '1 Bathroom'],
		'highlight' => true,
		'featured' => true
	]
];

$highlightHouses = [];

foreach ($houses as $key => $house) {
	if ($house['highlight'] === true) {
		$highlightHouses[$key] = $house;
	}
}

$featuredHouses = [];

foreach ($houses as $key => $house) {
	if ($house['featured'] === true) {
		$featuredHouses[$key] = $house;
	}
}

$agents = [
	[
		'name' => 'Lisa gerrard',
		'description' => 'Lorem ipsum sit amet, consectetuer adipiscing elit.',
		'img' => 'agent1.png',
		'phonePrefix' => '+7(123)',
		'phone' => '456-78-99',
		'email' => 'lisa.gerrard@realhome.com'
	]
];