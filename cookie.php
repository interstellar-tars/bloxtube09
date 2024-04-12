<?php
$cookie_name = "user";
$cookie_value = "Username=Demo Channel 1; id=12345";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
