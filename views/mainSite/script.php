<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 08.03.2018
 * Time: 9:45
 */
?>
<script type="text/javascript">
    window.onload = function() {
        var description = document.getElementsByClassName('description');
        for(var i = 0, item; item = description.item(i); i++){
            if(item.innerText === ''){
                item.style.padding = 0;
            }
        }
    }
</script>
