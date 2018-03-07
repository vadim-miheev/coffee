<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 19:36
 */
?>
<script type="text/javascript">
    window.onload = function() {
        var button = document.getElementById('buttonEmail');
        var button2 = document.getElementById('buttonPassword');
        var emailField = document.getElementById('emailField');
        var passwordField = document.getElementById('passwordField');
        var email = emailField.innerHTML;

        button.onclick = function (ev) {
            changeEmailField();
            if(button2.innerHTML === 'Отмена') {
                changePasswordField();
            }
        };

        button2.onclick = function (ev) {
            changePasswordField();
            if(button.innerHTML === 'Отмена') {
                changeEmailField();
            }
        };

        function changeEmailField() {
            if(button.innerHTML === 'Изменить')  {
                emailField.style.borderBottomColor = "white";
                emailField.innerHTML = "<form action='http://<?=
                    $_SERVER['SERVER_NAME']
                    ?>/user/profile' method='post'><input type='email' name='newEmail'></form>";
                button.innerText = 'Отмена';
            } else {
                emailField.style.borderBottomColor = "";
                emailField.innerHTML = email;
                button.innerText = 'Изменить';
            }
        }

        function changePasswordField() {
            if(button2.innerHTML === 'Изменить')  {
                passwordField.style.borderBottomColor = "white";
                passwordField.innerHTML = "<form action='http://<?=
                    $_SERVER['SERVER_NAME']
                    ?>/user/profile' method='post'><input type='password' name='newPassword'></form>";
                button2.innerText = 'Отмена';
            } else {
                passwordField.style.borderBottomColor = "";
                passwordField.innerHTML = '********';
                button2.innerText = 'Изменить';
            }
        }
    }
</script>