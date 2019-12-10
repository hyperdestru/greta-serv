<?php

$animals = [
	[
		'name' => 'Girafe',
		'zone' => 'Afrique',
		'description' => 'A la naissance le girafon mesure entre 1,50 et 1,80 m. Il grandit d\'environ 20 cm au cours du premier mois. A l\'âge de 6 mois il a déjà pris 1 m. Il commence à manger de la nourriture solide vers l\'âge de 10 jours en parc zoologique (3 semaines dans la nature) et à ruminer vers l\'âge de 2 mois. Il boit entre 2,5 et 10 litres/jour au cours des premières semaines. Le coeur de la girafe pèse 11 kg (celui d’un homme adulte seulement 250 g) et déplace environ 60 litres de sang par minute. Son système sanguin est adapté à sa morphologie afin que son cerveau soit bien irrigué.',
		'category' => 'ongulates',
		'image' => 'girafe.jpg'
	],
	[
		'name' => 'Rhinocéros blanc',
		'zone' => 'Afrique',
		'description' => 'Il existe 5 espèces de rhinocéros. Toutes sont gravement menacées par le braconnage pour leurs cornes, utilisées par la médecine traditionnelle asiatique pour leurs soi-disant propriétés curatives. Le Zoo de La Palmyre a enregistré sa toute première naissance de rhinocéros blanc en novembre 2012.',
		'category' => 'ongulates',
		'image' => 'rhinoceros.jpg'
	],
	[
		'name' => 'Orang-outan de Bornéo',
		'zone' => 'Malaisie',
		'description' => 'Les plantations de palmiers à huile remplacent peu à peu la forêt tropicale malaise. Ne descendant quasi jamais au sol, l\'orang-outan dépend entièrement de la forêt pour s\'alimenter (il consomme plus de 300 aliments différents !), élever ses jeunes et fabriquer les nids où il passe la nuit. La disparition de la forêt entraîne la fragmentation des populations et leur isolement génétique, très problématiques pour leur survie à long terme.',
		'category' => 'primates',
		'image' => 'orang-outan.jpg'
	],
	[
		'name' => 'Gorille',
		'zone' => 'Afrique',
		'description' => 'Sans doute le plus impressionnant des primates. Les mâles peuvent dépasser les 200 kilos. A la naissance en revanche, le petit pèse 100 fois moins : à peine 1,5 kilo ! On recense quatre sous-espèces dont la plus connue est sans doute le gorille de montagne, rendu célèbre par les recherches de Dian Fossey. Les parcs zoologiques hébergent des gorilles des plaines de l\'Ouest. Extrêmement menacés dans leur milieu naturel, ils font l\'objet d\'un Programme d\'Elevage Européen.',
		'category' => 'primates',
		'image' => 'gorille.jpg'
	],
	[
		'name' => 'Ours polaire',
		'zone' => 'Rivages de l’Océan Arctique Circumpolaire',
		'description' => 'Une épaisse couche de graisse et une fourrure dense l\'isolent du froid et des eaux glacées de l\'Arctique. Excellent nageur, il peut plonger en apnée pendant 2 minutes. Certains mâles dépassent les 600 kg. Ils s\'affrontent violemment pour une proie ou pour accéder à une femelle en chaleur. Ils possèdent sans doute l\'odorat le plus fin de tous les mammifères : ils sont capables de sentir un phoque sous la banquise et de suivre une femelle en oestrus sur de très longues distances.',
		'category' => 'mammals',
		'image' => 'ours-polaire.jpg'
	],
	[
		'name' => 'Loutre',
		'zone' => 'Asie',
		'description' => 'La loutre d\'Asie appartient à la famille des Mustélidés. Elle ne vit pas en mer mais dans les rivières et les lacs. Elle présente un certain nombre d\'adaptations morphologiques lui permettant de se propulser efficacement dans l\'eau : un corps mince et fuselé, une longue queue et des pieds partiellement ou intégralement palmés. La loutre d\'Asie se nourrit principalement de crabes et de crustacés qu\'elle réussit à attraper dans d\'étroites fissures grâce à la dextérité de ses doigts. Le groupe de loutres du zoo se compose de 6 individus : 4 femelles et 2 mâles.',
		'category' => 'mammals',
		'image' => 'loutre.jpg'
	],
	[
		'name' => 'Tortue géante d\'Aldabra ',
		'zone' => 'Seychelles',
		'description' => 'Il existe des tortues marines, des tortues d\'eau douce et des tortues terrestres. La tortue géante des Seychelles peut peser jusqu\'à 250 kilos. La femelle pond un maximum de 25 oeufs. Endémique à l\'atoll d\'Aldabra aux Seychelles, l\'espèce est classée vulnérable sur la Liste Rouge de l\'UICN.',
		'category' => 'reptiles',
		'image' => 'tortue.jpg'
	],
	[
		'name' => 'Guépard',
		'zone' => 'Afrique, Asie',
		'description' => 'Rapide et élégant, le guépard n\'en est pas moins extrêmement menacé dans son milieu naturel, victime des autres grands prédateurs (qui lui dérobent souvent ses proies) et d\'un manque de diversité génétique qui le rend plus vulnérable aux maladies et moins adaptable aux perturbations de son environnement.',
		'category' => 'carnivores',
		'image' => 'guepard.jpg'
	],
	[
		'name' => 'Panthère du Sri Lanka',
		'zone' => 'Asie',
		'description' => 'Ce félin opportuniste aux moeurs solitaires est le seul grand carnivore de l\'île. Classé en danger sur la Liste Rouge de l\'UICN, il est menacé par la destruction de son habitat et le braconnage. Ses effectifs sont estimés entre 700 et 950 individus.',
		'category' => 'carnivores',
		'image' => 'panthere.jpg'
	],
	[
		'name' => 'Great Green Macaw',
		'zone' => 'Amérique du Sud',
		'description' => 'Les aras sont les plus gros des perroquets. Le zoo présente 5 des 17 espèces recensées : l\'ara bleu et jaune, l\'ara macao, l\'ara chloroptère, l\'ara hyacinthe et l\'ara de Buffon, ces deux dernières risquant de disparaître à cause de la destruction de leur habitat, du commerce illégal des oiseaux de cage, de la chasse pour leur viande ou leurs plumes.',
		'category' => 'birds',
		'image' => 'great-green-macaw.jpg'
	]
];

$categories = [
	'birds' => 'Oiseaux',
	'carnivores' => 'Carnivores',
	'reptiles' => 'Reptiles',
	'mammals' => 'Mammifères',
	'primates' => 'Primates',
	'ongulates' => 'Ongulés'
];