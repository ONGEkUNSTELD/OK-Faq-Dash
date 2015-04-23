<?php
	
	$custom_dashboard_widgets = array(
    'ok-dash-widget' => array(
	'title' => 'ONGEkUNSTELD FAQ',
	'callback' => 'dashboardWidgetContent'
    )
	);
	
	function dashboardWidgetContent() {
		$user = wp_get_current_user();
		echo "Hoi <strong>" . $user->user_firstname . "</strong>, hier vind je antwoorden op de meest gestelde vragen en alle handleidingen. </br>";
		echo '<ul>';	
		echo "<li><a href=\"https://www.ongekunsteld.net/handleiding-tekst/\">Teksten schrijven</a></li>";
		echo "<li><a href=\"https://www.ongekunsteld.net/verdieping/\">Schrijftips</a></li>";
		echo "<li><a href=\"https://www.ongekunsteld.net/handleiding-beeld/\">Beelden maken</a></li>";
		echo "<li><a href=\"https://www.ongekunsteld.net/handleiding-feedback/\">Teksten redigeren</a></li>";
		echo "<li><a href=\"https://www.ongekunsteld.net/email/\">Neem contact op</a></li>";
		echo "<li><a href=\"https://www.ongekunsteld.net/overzicht-aanvragen/\">Zie alle recensie-aanvragen</a></li>";
		echo "<li><a href=\"https://www.ongekunsteld.net/help/\">Bugs doorgeven</a></li>";
		echo '</ul>';
	}
	
?>