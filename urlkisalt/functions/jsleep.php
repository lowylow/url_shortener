<?php
    function jsleep($sleep_ms){
        echo "<script> 
        function sleep(ms){
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        async function main(){
            await sleep($sleep_ms);
        }
        main();
        </script>";
    }
?>
