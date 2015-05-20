<?php

require_once '../functions.php';

$registered_users = get_registered_users();

require_once 'registered_users.tmpl.php';
