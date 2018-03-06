<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 15:46
 */

session_destroy();
header("Location: http://" . $_SERVER["SERVER_NAME"]);