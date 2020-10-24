<?php
    include('style/style.html');
    include('functions/async_sleep.php');
    include('functions/moveback.php');
    include('functions/jsleep.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <style> 
            .intention{
                width: 30vh;
                max-width: 30vh;
                text-align: center;
                color: whitesmoke;
            }
            .intentions{
                margin-top: 20vh;
            }
        </style>
    </head>
    <body>
        <form action='create.php' method='post'>
            <div class='container center centered intentions'>
                <input class='intention' id="shortcode" name='shortcode' placeholder="kısa kod.." maxlength="5" minlength="5" required><br>
                <input class='intention' id="link" name='link' placeholder="hedef url.." required><br>
                <button class="btn intention" id="upload" >oluştur</button>
            </div>
        </form>
    </body>
</html>
