<?php

include_once('core/Formulario.php');

$form_contacto_cc = new Formulario(
	array(
		'destinatarios' => array(
 			'miguel.solana@alter-5.com',
 			'manuel.rojo@alter-5.com'
		),
		'asunto' 	=> 'Contacto - '.Config::obtener('empresa')->nombre,
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
$form_contacto_cc->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre',
			'label' 	=> 'Apellido y Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'numero',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			'validar' 	=> array('requerido'),
		),		

		array(
			'name' 		=> 'correo',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('formato', 'requerido'),
		),

		array(
			'name' 		=> 'empresa',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),
				array(
			'name' 		=> 'comentario',
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
if( isset($_POST['enviar_contacto_cc']) ){
	$form_contacto_cc->enviar();
}
