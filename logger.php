<?php 

function write_log($type, $username, $message, $state){
    if (empty($username)) {
        $username = "unknown";
    }

    $ip = $_SERVER['REMOTE_ADDR'];

    $date = date("Y-m-d H:i:s");
    $fp = fopen('app.log', 'a');
    fwrite($fp, "[".$date."] - ".$type." - ".$ip." - ".$username." - ".$message." : ".$state."\n");
    fclose($fp);
}

?>