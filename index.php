<?php
    require_once "saiyajin.php";
    require_once "superSaiyajin.php";

    $superGoku = new SuperSaiyajin();
    $superGoku->changeBigMonkey();
    $superGoku->setModel();

    $superGoku->model->echoName();

//    $goku = new Saiyajin(); //サイヤ人をインスタンス化して$gokuに入れました
//    $goku->changeBigMonkey();
//    $goku->shotKamehameha();
//    $goku->pullTail();
//    $goku->dropTail();
//    echo $goku->star;
//    $goku->star = "月出身";
//    echo $goku->star;

?>
