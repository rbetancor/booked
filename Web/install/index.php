<?php
define('ROOT_DIR', '../../');
$smartyTemplateCacheDir = ROOT_DIR . 'tpl_c';

if (SmartyPermissionsAreOk($smartyTemplateCacheDir))
{
	require_once(ROOT_DIR . 'Pages/InstallPage.php');

	$page = new InstallPage();
	$page->PageLoad();
}
else
{
	echo "The web server must have write access to $smartyTemplateCacheDir";
	echo "The permissions are currently set to " + substr(sprintf('%o', fileperms($smartyTemplateCacheDir)), -4);
}

function SmartyPermissionsAreOk($smartyTemplateCacheDir)
{
	return is_writable($smartyTemplateCacheDir);
}
?>