<?php
require_once __DIR__ . '/vendor/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '261693064440687',
  'app_secret' => '6f58016913946dc39adb11931e3cda66',
  'default_graph_version' => 'v2.2',
]);
$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('localhost/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>
