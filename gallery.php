<?php

$directory_open = @opendir("../gallery/") or die("Unable to open \"" . $directory . "\"...");

for ($i = 0; $directory_item = readdir($directory_open); $i++) {
	if ($directory_item != "." && $directory_item != "..") {
		$contents_directories[$i] = $directory_item;
	}
	else {
		$i--;
	}
}

closedir($directory_open);

if (sizeof($contents_directories) > 0) {
	sort($contents_directories);
}

echo '<img src="images/gallery.jpg" alt="Gallery" width="449" height="64" /><div align="center"><table border="0" cellspacing="1" cellpadding="1"><tr>';

for ($i = 0; $i < sizeof($contents_directories); $i++) {
	echo '<td><a href="images/' . $contents_directories[$i] . '"><img src="images/' . $contents_directories[$i] . '" width="100" height="100" /></a></td>';
	if ($i + 1 % 5 == 0) {
		echo '</tr><tr>';
	}
}

echo '</tr></table></div>';

?>