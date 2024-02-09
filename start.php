<?php

elgg_register_event_handler('init', 'system', 'professional_portfolio_init');

function professional_portfolio_init() {
	//$url = elgg_get_plugins_path().'professional_portfolio/js/endorsements/';
	//$url = 'mod/professional_portfolio/js/endorsements/';
	//elgg_unregister_js('gcconnex-profile');
	//elgg_register_js('c_gcconnex-profile', $url . "c_gcconnex-profile.js");

	$action_path = elgg_get_plugins_path().'professional_portfolio/actions/professional_portfolio/';
	elgg_register_action('professional_extended_profile/edit_profile', $action_path.'edit_profile.php');
}