<?php

include_once('core/Formulario.php');

$form_promotor_avales = new Formulario(
	array(
		'destinatarios' => array(
			'guillermo.souto@alter-5.com',
			'salvador.carrillo@alter-5.com'
		),
		'asunto' 	=> 'Promotores Avales - '.Config::obtener('empresa')->nombre,
		'remitente' => array(
			'nombre' => 'Web '.Config::obtener('empresa')->nombre,
			// Completar con el dominio del cliente ej: web@kodent.com.ar
			'email' => 'web@synapsis.com.ar' // Email ficticio 
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false,
			'guardar_contacto' => false,
			'guardar_form' => false
		)
	)
);

// Esto genera el mail que va a llegar al cliente. Levanta los datos del form que está en la web.
$form_promotor_avales->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre',
			'label' 	=> 'Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'apellido',
			'label' 	=> 'Apellido',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'compania',
			'label' 	=> 'Companía',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'correo',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('formato', 'requerido'),
		),
		array(
			'name' 		=> 'telefono',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			'validar' 	=> array('requerido'),
		),		
		array(
			'name' 		=> 'totalidad',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'estudio',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'radio',
			'validar' 	=> array(''),
		),
		array(
			'name' 		=> 'valoracion',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'radio',
			'validar' 	=> array(''),
		),
		array(
			'name' 		=> 'terrenos-asegurados',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'radio',
			'validar' 	=> array(''),
		),
		array(
			'name' 		=> 'comentario',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'text',
			'validar' 	=> array(''),
		),
		array(
			'name' 		=> 'comunicaciones',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array(''),
		),
		array(
			'name' 		=> 'datos-personales',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array(''),
		),

	)
);

// Solo usar si hay idioma
	// $form_contacto->agregarMensajeEstado(
	// 	array (
	// 		'incompleto'       =>  __('msj-incompleto'),
	// 		'error'            =>  __('msj-error'),
	// 		'mail_invalido'    =>  __('msj-mail_invalido'),
	// 		'captcha_invalido' =>  __('msj-captcha_invalido'),
	// 		'ok'               =>  __('msj-ok'),
	// 	)
	// );

// enviar_contacto tiene que corresponder con el name del botón de submit
if( isset($_POST['envia-promotor-avales']) ){
	$form_promotor_avales->enviar();
}
