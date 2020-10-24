<?php
    include('style/style.html');
    include('functions/async_sleep.php');
    include('functions/moveback.php');

    $noerror = false;
    if (!empty($_POST['shortcode']) and !empty($_POST['link'])){
        $short = $_POST['shortcode'];
        $link = $_POST['link'];
        if (strlen($short) == 5){
            if (filter_var($link, FILTER_VALIDATE_URL)){
                if (!substr_count($short, '\\') and !substr_count($short, '/') and !substr_count($short, ':') and !substr_count($short, '*') and !substr_count($short, '?') and !substr_count($short, '"') and !substr_count($short, '<') and !substr_count($short, '>') and !substr_count($short, '|')){
                    if (!is_dir("r/$short")){                                                                                                                              
                        $baselink = 'localhost/urlkisalt/'; // CHANGE DEĞİŞTİR DEGISTIR
                        $prefix = 'r/';
                        mkdir("$prefix$short/");
                        $file = fopen("$prefix$short/index.php", 'w');
                        fwrite($file, '
                        <?php
                            include("../../style/style.html");
                            echo "<h1 class=\'success-text\'> Yönlendiriliyor.. </h1>";
                            echo "<script> location.href = \"'.$link.'\" </script>";
                        ?>
                        ');
                        echo "<h1 class='success-text'><span id='shorturl' style='color: green;'>$baselink$prefix$short</span></h1>";
                        //<br><span id='clickcopy' class='btn-flat' style='color: whitesmoke; font-size: 02vh;'> kopyala. </span>
                    }
                    else{
                        echo "<h1 class='error-text'> Kısa kod zaten <strong> sistemimizde kayıtlı! </strong> </h1>";
                        jgoback(2500);
                    }
                }
                else{
                    echo "<h1 class='error-text'> Kısa kodunuzda <strong> özel karakterler </strong> kullanılamaz! </h1>";
                    jgoback(2500);
                }
            }
            else{
                echo "<h1 class='error-text'> Linkiniz <strong> geçerli bir link </strong> olmalıdır! </h1>";
                jgoback(2500);
            }

            
        }
        else{
            echo "<h1 class='error-text'> Kısa kod kısımları <strong> 5 karakter uzunluğunda </strong> olmalıdır! </h1>";
            jgoback(2500);
        }
    }
    else{
        echo "<h1 class='error-text'> Link veya kısa kod kısmını <strong> boş </strong> bırakmayınız! </h1>";
        jgoback(2000);
    }
?>