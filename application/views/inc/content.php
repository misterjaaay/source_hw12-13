	<h1>Welcome to my Blog!</h1>
<?php
foreach ( $posts as $post => $value ) {
	echo '<b>';
	echo $value ['title'];
	echo "</b><br />";
	echo $value ['text'];
	echo "<br /><br />";
}
?>
