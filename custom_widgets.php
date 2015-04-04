<?php

$custom_dashboard_widgets = array(
    'my-dashboard-widget' => array(
        'title' => 'ongeKUNSTeld FAQ',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
    $user = wp_get_current_user();
    echo "Hoi <strong>" . $user->user_firstname . "</strong>, hier vind je de antwoorden op de meest gestelde vragen en alle handleidingen. </br>";
	echo 'Verzoeken voor de FAQ kun je doorgeven via meldingen.';
 
 
 
	echo '</br>';
	echo '<ul>';
	echo '<lh>Kies een van de opties:</lh>';
	echo '<li><a href="http://www.ongekunsteld.net/schrijfwijzer-ongekunsteld/">ongeKUNSTeld Schrijfwijzer</a></li>';
	echo '<li><a href="http://www.ongekunsteld.net/handleiding-redigeren/">Handleiding Redigeren</a></li>';
	echo '<li><a href="http://www.ongekunsteld.net/handleiding-beeldmakers/">Handleiding Beeldmakers</a></li>';
	echo '<li><a href="http://www.ongekunsteld.net/wp-admin/admin.php?page=okpress">Perskaartjes</a></li>';
	echo '<li><a href="http://www.ongekunsteld.net/wp-admin/admin.php?page=oksupport">Meldingen</a></li>';
	echo '<li><a href="http://www.ongekunsteld.net/privacy-en-cookies/">Privacy en cookies</a></li>';
	
	echo '</ul>';
}

?>