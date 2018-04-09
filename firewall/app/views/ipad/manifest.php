<?php header('Content-type:text/cache-manifest');
?>CACHE MANIFEST

?favicons&<?php e($this->get_col('last_cached_on_time', 'favicons', '1 ORDER BY `last_cached_on_time` DESC'));?>

firewall/app/views/ipad/styles/ipad.css?v=<?php e($this->version);?>

firewall/app/views/ipad/scripts/fever.js?v=<?php e($this->version);?>

firewall/app/views/ipad/scripts/ipad.js?v=<?php e($this->version);?>

<?php

// could not get this working in mobile or desktop safari

$images_dir = 'firewall/app/views/ipad/styles/images/';
if ($dir = opendir($images_dir))
{
	while (($image = readdir($dir)) !== false)
	{
		if (m('#^\.#', $image, $m))
		{
			continue;
		}
		e("{$images_dir}{$image}?v={$this->version}\n");
	}
	closedir($dir);
}


?>