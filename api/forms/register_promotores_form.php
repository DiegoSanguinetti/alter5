<?php

include_once('core/Formulario.php');

$form_contacto = new Formulario(
	array(
		'destinatarios' => array(
			'guillermo.souto@alter-5.com',
			'salvador.carrillo@alter-5.com'
		),
		'asunto' 	=> 'Registro de Promotor - '.Config::obtener('empresa')->nombre,
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
$form_contacto->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre_register_promotores',
			'label' 	=> 'Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'apellido_register_promotores',
			'label' 	=> 'Apellido',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'compania_register_promotores',
			'label' 	=> 'Companía',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
		array(
			'name' 		=> 'telefono_register_promotores',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			'validar' 	=> array('requerido'),
		),		

		array(
			'name' 		=> 'correo_register_promotores',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('formato', 'requerido'),
		),

		array(
			'name' 		=> 'comentarios_register_promotores',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'textarea',
			'validar' 	=> array('requerido'),
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
if( isset($_POST['registra_promotor']) ){
	$form_contacto->enviar();
}
