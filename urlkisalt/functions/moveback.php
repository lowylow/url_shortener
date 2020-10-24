<?php
    function jgoback($sleep_ms){
        echo "<script> 
        function sleep(ms){
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        async function main(){
            await sleep($sleep_ms);
            window.history.back();
        }
        main();
        </script>";
    }
?>
