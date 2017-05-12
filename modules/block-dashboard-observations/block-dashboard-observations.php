<?php function telabotanica_module_block_dashboard_observations($data) {
	$defaults = [
		'title' => [],
		'modifiers' => ['block-dashboard-observations'],
		'iframe_url' => 'https://www.tela-botanica.org/widget:cel:cartoPoint?utilisateur=' . bp_get_displayed_user_email() . '&logo=0',
		'api_url' => '/wp-content/themes/telabotanica/modules/block-dashboard-observations/test.json'
	];

	$data = telabotanica_styleguide_data($defaults, $data);

	// Add the API url as a data-* attribute
	$data->extra_attributes['data-api-url'] = $data->api_url;
	unset($data->api_url);

	// Add the iframe to the content
	$data->html_content = sprintf(
		'<iframe src="%s"></iframe>',
		$data->iframe_url
	);

	the_telabotanica_module('block-dashboard', $data);
}
