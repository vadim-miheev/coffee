<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 13:40
 */
?>

<nav>
    <a href="http://<?=$_SERVER['SERVER_NAME']?>/authorization/logout"><li class="headerText">Выход</li></a>
    <a href="http://<?=$_SERVER['SERVER_NAME']?>/authorization/login"><li class="headerText"><?=ucfirst($_SESSION['login'])?></li></a>
</nav>
