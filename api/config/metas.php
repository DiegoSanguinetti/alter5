<?php

/* 
* --------------------------------------------------------------------------
* METAS
* --------------------------------------------------------------------------
*
* En "defecto" se definen los valores por defecto para cada metaetiqueta. 
* 
* En "secciones" se definen los valores pora cada meta por sección. Estos
* pueden sobreescribirse desde la configuración de cada página.
*
* En "plantilla" se define la base para todas la metas en donde {valor} se 
* reemplaza por el valor que se le asigna a las metas en "secciones".
*
*/

$empresa = Config::obtener('empresa');

return array(

	'defecto' => array(
		'es' => array(
			'titulo' => '',
			'descripcion' => '',
			'img' => BASE_URL.'images/favicons/android-chrome-256x256.png',
		)
	),

	'plantilla' => array(
		'titulo' => '{valor} | '. $empresa->nombre,
		'descripcion' => '{valor}',
		'img' => '{valor}',
	),

	'secciones' => array(
		'home' => array(
			'es' => array(
				'titulo' => 'Home',
				'descripcion' => '',
				'img' => '',
			),
		),
		'promotores' => array(
			'es' => array(
				'titulo' => 'Promotores',
				'descripcion' => '',
				'img' => '',
			),
		),
		'promotores-avales' => array(
			'es' => array(
				'titulo' => 'Promotores Avales',
				'descripcion' => '',
				'img' => '',
			),
		),
		'promotores-clean-energy' => array(
			'es' => array(
				'titulo' => 'Promotores Clean Energy',
				'descripcion' => '',
				'img' => '',
			),
		),
		'promotores-compraventas' => array(
			'es' => array(
				'titulo' => 'Promotores Compraventas',
				'descripcion' => '',
				'img' => '',
			),
		),
		'promotores-financiacion' => array(
			'es' => array(
				'titulo' => 'Promotores Financiacion',
				'descripcion' => '',
				'img' => '',
			),
		),
		'inversores' => array(
			'es' => array(
				'titulo' => 'Inversores',
				'descripcion' => '',
				'img' => '',
			),
		),
		'inversores-alter5-impact' => array(
			'es' => array(
				'titulo' => 'Inversores Impact',
				'descripcion' => '',
				'img' => '',
			),
		),
		'inversores-equity-debt' => array(
			'es' => array(
				'titulo' => 'Inversores Equity',
				'descripcion' => '',
				'img' => '',
			),
		),
		'inversores-european-clean-energy' => array(
			'es' => array(
				'titulo' => 'Inversores European Clean Energy',
				'descripcion' => '',
				'img' => '',
			),
		),
		'compania' => array(
			'es' => array(
				'titulo' => 'Compania',
				'descripcion' => '',
				'img' => '',
			),
		),
		'news-insight' => array(
			'es' => array(
				'titulo' => 'News & Insights',
				'descripcion' => '',
				'img' => '',
			),
		),
		'contacto' => array(
			'es' => array(
				'titulo' => 'Contacto',
				'descripcion' => '',
				'img' => '',
			),
		),
		'legal' => array(
			'es' => array(
				'titulo' => 'Legal',
				'descripcion' => '',
				'img' => '',
			),
		),
		'privacy' => array(
			'es' => array(
				'titulo' => 'Privacy',
				'descripcion' => '',
				'img' => '',
			),
		),
		// Array de ejemplo para agregar si se agrega un página nueva
		// 'nombre-de-la-sección' => array(
		// 	'es' => array(
		// 		'titulo' => '',
		// 		'descripcion' => '',
		// 		'img' => '',
		// 	),
		// ),
	)

);