<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 04.03.2018
 * Time: 16:25
 */
?>

<script type="text/javascript">
    window.onload = function() {
        var password = document.getElementById('password');
        var password2 = document.getElementById('password2');
        password.onkeyup = function (ev) {
            if(password.value.length > 5){
                password.style.border = '1px solid green';
            }else {
                password.style.border = '2px solid red';
            }
        }
        password2.onkeyup = function (ev) {
            if(password.value === password2.value){
                password2.style.border = '1px solid green';
            }else {
                password2.style.border = '2px solid red';
            }
        }
    }
</script>
