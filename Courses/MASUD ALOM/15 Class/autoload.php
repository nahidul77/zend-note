<?php

spl_autoload_register(function ($className) {
    include_once "$className.php";
});


$member = new Member;

$member->username = "Saiful Islam";

$member->login();

echo $member->isLoggedIn() ? 'logged in' : 'logged out';

$member->logout();

echo $member->isLoggedIn() ? 'logged in' : 'logged out';


$admin = new Administrator;

$admin->username = "nahidul islam";

$admin->login();

echo $admin->isLoggedIn() ? 'logged in as a Admin' : 'logged out as a Admin';

$admin->logout();

echo $admin->isLoggedIn() ? 'logged in as a Admin' : 'logged out as a Admin';
