<?php
    function asleep($sec){
        ob_flush();
        flush();
        sleep($sec);
        ob_end_flush();
        ob_get_clean();
        ob_clean();
    }
?>