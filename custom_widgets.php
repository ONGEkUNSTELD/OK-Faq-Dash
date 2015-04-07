<?php
	
	$custom_dashboard_widgets = array(
    'ok-dash-widget' => array(
	'title' => 'ONGEkUNSTELD FAQ',
	'callback' => 'dashboardWidgetContent'
    )
	);
	
	function dashboardWidgetContent() {
		$user = wp_get_current_user();
		$url = home_url( $path = '/', $scheme = https );
		echo $url;
		echo "Hoi <strong>" . $user->user_firstname . "</strong>, hier vind je antwoorden op de meest gestelde vragen en alle handleidingen. </br>";
		echo '</br>';
		echo '<ul>';
		echo '<lh>Kies een van de opties:</lh>';
		echo "<li><a href=\"http://www.ongekunsteld.net/handleiding-redigeren/\">Handleiding Redigeren</a></li>";
		echo "<li><a href=\"http://www.ongekunsteld.net/handleiding-beeldmakers/\">Handleiding Beeldmakers</a></li>";
		echo '</ul>';
	}
	
?>