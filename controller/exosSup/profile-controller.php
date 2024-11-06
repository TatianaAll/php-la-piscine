<?php
require_once('../../config/config.php');

$profile = [
    "firstName" => "David",
    "lastName" => "Robert",
    "age" => 34,
    "job" => "dev",
    "skills" => [
        "PHP", "Node.js", "React.js"
    ],
    "isPublished" => true,
];

$isPublished = false;
if ($profile['isPublished']) {
    $isPublished = true;
}

$nameConnected = $profile['firstName'] . " " . $profile['lastName'];
?>

<?php require_once('../view/profile-view.php'); ?>