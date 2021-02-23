<?php
if(isset($_POST['submit'])){
    $inp = $_POST['input'];
    if($inp == ''){header("location:index.php?res=Unknown error!");die();}
    if($_POST['calc'] == 'c'){
        $res = ($inp - 32) * 5 / 9;
    }elseif($_POST['calc'] == 'f'){
        $res = $inp * 9 / 5 + 32;
    }else {
        header("location:index.php?res=Wrong operation!");
        die();
    }
    header("location:index.php?res=$res");
}else{
    header("location:index.php?res=Unknown error!");
    die();
}