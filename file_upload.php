<?php
$username = $_POST['username'];
$profile_image = $_FILES['profile_image'];

echo 'username : ' . $username . '<br/>';
echo "<pre>";
print_r($profile_image);
echo "</pre";