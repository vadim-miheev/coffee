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

        var login = document.getElementById('login');
        var password = document.getElementById('password');
        var password2 = document.getElementById('password2');

        login.onclick = function(ev) {checkLogin(ev);};
        login.onkeyup = function(ev) {checkLogin(ev);};
        password.onclick = function(ev) {checkPassword(ev);};
        password.onkeyup = function(ev) {checkPassword(ev);};
        password2.onclick = function(ev) {checkPassword2(ev);};
        password2.onkeyup = function(ev) {checkPassword2(ev);};

        function checkPassword(ev) {
            if(password.value.length > 5){
                password.style.border = '1px solid green';
            }else {
                password.style.border = '2px solid red';
            }
        }

        function checkPassword2(ev) {
            if(password.value === password2.value){
                password2.style.border = '1px solid green';
            }else {
                password2.style.border = '2px solid red';
            }
        }

        function checkLogin (ev) {
            if(login.value.indexOf('@') > -1) {
                while (login.value.indexOf('@') > -1){
                    login.value = login.value.substring(0, login.value.length - 1);
                }
                document.getElementById('err').innerHTML = "Логин не может содержать символ '@'";
            }
        }
    }
</script>
