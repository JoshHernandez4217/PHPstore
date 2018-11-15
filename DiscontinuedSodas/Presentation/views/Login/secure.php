<?php

include_once '../Header.php';

if(isset($_SESSION['principal']) == false || $_SESSION['principal'] == null){
    
    header( "refresh:6;url=../../../Index.html" );
    
    
}

?>