<?php
require('connection.php');
require('admins/admins.php');
require('profile/profile.php');
require('scientific_publications/scientific_publications.php');
require('university_activities/university_activities.php');
require('scientific_activities/scientific_activities.php');
require('sa_branch/sa_branch.php');

$db=new DBController();
$Admin=new Admin($db);
$Profile= new Profile($db);
$SP=new SP($db);
$UA=new UA($db);
$SA=new SA($db);
$SABranch=new SABranch($db);
?>