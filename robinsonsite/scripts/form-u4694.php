<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.1.2.344
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Robinson Hall  Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'v.zervakos@gmail.com',
		'to' => 'v.zervakos@gmail.com'
	),
	'fields' => array(
		'custom_U4695' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U4708' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Cell Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Cell Phone\' is required.'
			)
		),
		'custom_U4713' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Home Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Home Phone\' is required.'
			)
		),
		'custom_U4699' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Company',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company\' is required.'
			)
		),
		'custom_U5304' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Work Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Work Phone\' is required.'
			)
		),
		'custom_U4846' => array(
			'order' => 6,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'10:30',
				'10:45',
				'11:00'
			),
			'errors' => array(
				'required' => 'Field \'Radio Button Group\' is required.',
				'format' => 'Field \'Radio Button Group\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
