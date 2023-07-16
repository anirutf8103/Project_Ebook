<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- import css -->
<link rel="stylesheet" href="../assets/css/css.css">
<!-- import icon -->
<script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
<!-- import ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- import gif -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<?php

// show_game_2_2001
if (isset($_GET['show_game_2_2001'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/04.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2001" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 10vw;" src="../assets/icon/2001.png" alt="">
                </a>
                <a type="button" class="fix_btn_2002" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 10vw;" src="../assets/icon/2002.png" alt="">
                </a>
                <a type="button" class="fix_btn_2003" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 10vw;" src="../assets/icon/2003.png" alt="">
                </a>
                <a type="button" class="fix_btn_2004" data-bs-toggle="modal" data-bs-target="#Modal2004">
                    <img class="icon_2001" style="width: 10vw;" src="../assets/icon/2004.png" alt="">
                </a>
                <a type="button" class="fix_btn_2005" data-bs-toggle="modal" data-bs-target="#Modal2005">
                    <img class="icon_2001" style="width: 10vw;" src="../assets/icon/2005.png" alt="">
                </a>

                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modalCT" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 c-w" id="exampleModalLabel">วัด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/1001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modalCT" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 c-w" id="exampleModalLabel">เทือกเขา</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/1002.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modalCT" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 c-w" id="exampleModalLabel">ทะเล</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/1003.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2003 -->
                <!-- Modal2004 -->
                <div class="modal fade" id="Modal2004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modalCT" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 c-w" id="exampleModalLabel">ป่าไม้</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/1004.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2004 -->
                <!-- Modal2005 -->
                <div class="modal fade" id="Modal2005" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modalCT" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 c-w" id="exampleModalLabel">แหล่งการค้า</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/1005.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2005 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2002
if (isset($_GET['show_game_2_2002'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/05.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2002_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 9vw;background-image: radial-gradient(circle, #fab005 5%, rgba(255, 135, 135, 0) 95%);" src="../assets/icon/200101.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ สมภาร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        พระที่เป็นเจ้าอาวาส.
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2003
if (isset($_GET['show_game_2_2003'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/07.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2003_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        นักเรียนคิดว่า เพราะเหตุใด ภรรยาถึงกินอาหารได้มากผิดปกติ
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2004
if (isset($_GET['show_game_2_2004'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/09.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2003_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        นักเรียนคิดว่า พ่อกับแม่คิดจะทำอะไรต่อไป
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2005
if (isset($_GET['show_game_2_2005'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/10.png');">
            <div class="card-body" style="padding: 0px;">
                <div class="row" id="row_game_1005" style="height: 33.33vh;">
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('1')" id="this_label_1">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">1</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('2')" id="this_label_2">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">2</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('3')" id="this_label_3">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">3</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('4')" id="this_label_4">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">4</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('5')" id="this_label_5">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">5</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('6')" id="this_label_6">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">6</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('7')" id="this_label_7">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">7</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('8')" id="this_label_8">
                            <div class="card card_game_2001">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">8</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('9')" id="this_label_9">
                            <div class="card card_game_2001_re">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">เฉลย</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2006
if (isset($_GET['show_game_2_2006'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/15.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2003_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        ถ้านักเรียนเป็นพ่อกับแม่ของนายแรง นักเรียนจะรู้สึกอย่างไร
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2007
if (isset($_GET['show_game_2_2007'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/17.png');">
            <div class="card-body">

                <a type="button" data-bs-toggle="modal" data-bs-target="#Modal2007_1" class="fix_btn_2007_1" style="width: 6vw;height: 9vw;"></a>
                <a type="button" data-bs-toggle="modal" data-bs-target="#Modal2007_2" class="fix_btn_2007_2" style="width: 6vw;height: 9vw;"></a>
                <a type="button" data-bs-toggle="modal" data-bs-target="#Modal2007_3" class="fix_btn_2007_3" style="width: 6vw;height: 9vw;"></a>
                <a type="button" data-bs-toggle="modal" data-bs-target="#Modal2007_4" class="fix_btn_2007_4" style="width: 6vw;height: 9vw;"></a>

                <a type="button" class="fix_btn_2003_2" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        จากข้อความข้างต้น นักเรียนคิดว่า นายแรงเป็นคนเช่นไร
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
                <!-- Modal2007_1 -->
                <div class="modal fade" id="Modal2007_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">นายแรงอาสาช่วยชาวบ้าน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        เข็นฟาง
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2007_1 -->
                <!-- Modal2007_2 -->
                <div class="modal fade" id="Modal2007_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">นายแรงอาสาช่วยชาวบ้าน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        เลี้ยงไก่
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2007_2 -->
                <!-- Modal2007_3 -->
                <div class="modal fade" id="Modal2007_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">นายแรงอาสาช่วยชาวบ้าน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        เก็บกล้วย
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2007_3 -->
                <!-- Modal2007_4 -->
                <div class="modal fade" id="Modal2007_4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">นายแรงอาสาช่วยชาวบ้าน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>
                                    <b>
                                        แลกอาหารให้พ่อแม่
                                    </b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2007_4 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2008
if (isset($_GET['show_game_2_2008'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/19.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขาหลักโค</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/8001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_2009
if (isset($_GET['show_game_2_2009'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/20.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขาหลักไก่</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/9001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20010
if (isset($_GET['show_game_2_20010'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/21.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_2" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 7vw;" src="../assets/icon/4008002.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ตำนานคอกควายนายแรง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" style="height: 100vh;" src="https://www.hatyaifocus.com/%E0%B8%9A%E0%B8%97%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1/1645-%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%A7%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88-%E0%B8%95%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%81%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%A3%E0%B8%87%2B%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%B0%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%2B%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B9%81%E0%B8%AA%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%98%E0%B8%B8%E0%B9%8C/" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20011
if (isset($_GET['show_game_2_20011'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/22.png');">
            <div class="card-body">
                <a onclick="playsound11()" type="button" class="fix_btn_2008_3" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 7vw;" src="../assets/icon/4008004.png" alt="">
                </a>
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20012
if (isset($_GET['show_game_2_20012'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/23.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_12_1" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <img class="icon_2001" style="width: 7vw;" src="../assets/icon/4008002.png" alt="">
                </a>
                <!-- Modal2001 -->
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">วัดถ้ำเขารูปช้าง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" style="height: 100vh;" src="http://www.songkhla.go.th/travel/detail/59" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2001 -->
                <a type="button" class="fix_btn_2008_12_2" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเทศบาลเขารูปช้าง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/12001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20013
if (isset($_GET['show_game_2_20013'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/24.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_13_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขาหลักโค</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/13001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20014
if (isset($_GET['show_game_2_20014'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/28.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_14_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/4008005.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขารุน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/14001.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20015
if (isset($_GET['show_game_2_20015'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/29.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_14_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/4008002.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ถ้ำน้ำลอดเขาแดง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" style="height: 100vh;" src="https://th.trip.com/moments/detail/khuha-sawan-1451731-16146689?locale=th-TH" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20016
if (isset($_GET['show_game_2_20016'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/32.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_14_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ตื่นตี5เดินป่าเขาไครพิชิตยอดเขาเสียดฟ้า</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/CPXAi8dTHrc" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20017
if (isset($_GET['show_game_2_20017'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/38.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_17_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 15vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนสังเกตหรือไม่ ว่าชื่อสถานที่ต่าง ๆ เกิดขึ้นได้อย่างไร</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20018
if (isset($_GET['show_game_2_20018'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/39.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_18_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 8vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ เมืองขึ้น</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>ประเทศที่อยู่ในปกครองของประเทศอื่น.</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
                <a type="button" class="fix_btn_2008_18_2" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 8vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ มลายู</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>ชื่อชนชาติหนึ่งอยู่ในประเทศมาเลเซีย และเกาะต่าง ๆ ทางตอนใต้ของแหลมมลายู.</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2003 -->
                <a type="button" class="fix_btn_2008_18_3" data-bs-toggle="modal" data-bs-target="#Modal2004">
                    <img class="icon_2001" style="width: 8vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal2004 -->
                <div class="modal fade" id="Modal2004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ แข็งเมือง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>
                                    <b>
                                        ตั้งตัวเป็นอิสระ, ไม่ยอมเป็นเมืองขึ้นอีกต่อไป.
                                    </b>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2004 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20019
if (isset($_GET['show_game_2_20019'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/40.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_19_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 8vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ เจ้าเมือง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>เจ้าผู้ครองเมือง, เจ้าผู้ครองนคร</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20020
if (isset($_GET['show_game_2_20020'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/41.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2008_20_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 5vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพวัดพระมหาธาตุวรมหาวิหาร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/20001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
                <a type="button" class="fix_btn_2008_20_2" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 5vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">วัดพระมหาธาตุวรมหาวิหาร ศูนย์รวมจิตใจชาวนคร สู่มรดกโลก</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/_D_Ok2X24XI" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2003 -->
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20021
if (isset($_GET['show_game_2_20021'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/42.png');">
            <div class="card-body">
                <div class="money-rain" id="money-rain" hidden>
                    <!-- ตัวองค์ประกอบอื่น ๆ ที่คุณต้องการให้เหมือนเงินตกลงมาจากฟ้า -->
                </div>
                <a type="button" class="fix_btn_2008_21_1" onclick="On_Money_Drop()">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008008.png" alt="">
                </a>

                <a type="button" class="fix_btn_2008_21_2" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพวัดพระมหาธาตุวรมหาวิหาร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/21001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20022
if (isset($_GET['show_game_2_20022'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/46.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2008_22_1" data-bs-toggle="modal" data-bs-target="#Modal2002">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal2002 -->
                <div class="modal fade" id="Modal2002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขาเก้าแสน, วัดเขาเก้าแสน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="w-100" src="../assets/image_4_sub/22001.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="w-100" src="../assets/image_4_sub/22002.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2002 -->
                <a type="button" class="fix_btn_2008_22_2" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ตำนานหินศักดิ์สิทธิ์ "หัวนายแรง"</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/h48G0w_otwg" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2003 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20023
if (isset($_GET['show_game_2_20023'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/48.png');">
            <div class="card-body" style="padding: 0px;">
                <div class="row" id="row_game_1005" style="height: 50vh;">
                    <div class="col-12 col_game_20023"></div>
                    <div class="col-12 col_game_20023_card">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label_One()" id="this_label_9">
                            <div class="card card_game_20023_re">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">นักเรียนได้ข้อคิดอะไร จากนิทานเรื่องนี้</h3>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20024
if (isset($_GET['show_game_2_20024'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/49.png');">
            <div class="card-body" style="padding: 0px;">

                <a type="button" class="fix_btn_2008_24_1" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008005.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">แผนที่ หัวนายแรง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_4_sub/24001.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2003 -->

                <a type="button" class="fix_btn_2008_24_2" data-bs-toggle="modal" data-bs-target="#Modal2004">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008009.png" alt="">
                </a>
                <!-- Modal2004 -->
                <div class="modal fade" id="Modal2004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #fab005;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">เพลง หัวนายแรง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/EdQqXWc7JgE" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2004 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_2_20025
if (isset($_GET['show_game_2_20025'])) {
    // array game 25
    $array_game_25 = array('1', '2', '3', '4', '5');
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_4/50.png');">
            <div class="card-body" style="padding: 0px;">

                <div class="container cardgame25 w-50">
                    <?php foreach ($array_game_25 as $keyarray_game_25 => $valuearray_game_25) { ?>
                        <a onclick="openlabel25(<?= $valuearray_game_25 ?>)" type="button" class="w-100">
                            <div class="card">
                                <div class="card-body cardgamein25">
                                    <center>
                                        <h5 class="h3_25" id="label<?= $valuearray_game_25 ?>"><?= $valuearray_game_25 ?></h5>
                                    </center>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                    <a onclick="openlabelresult25()" type="button" class="w-100 mt-3">
                        <div class="card bg-primary c-w">
                            <div class="card-body cardgamein25">
                                <center>
                                    <h5 class="h3_25" id="labelresult25">เฉลย</h5>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </center>
<?php
}
?>

<script>
    function openlabel25(value) {
        var array = {
            '1': 'มีกำลังมาก',
            '2': 'กินกล้วยครั้งละ 10 หวี',
            '3': 'เป็นเจ้าเมือง',
            '4': 'ศรัทธาในพระพุทธศาสนา',
            '5': 'ชอบกินเนื้อแลน',
        }

        document.getElementById("label" + value).innerHTML = array[value];
    }

    function openlabelresult25() {
        document.getElementById("labelresult25").innerHTML = "นายแรง"
    }

    function open_label(value) {
        if (value >= 1 && value <= 8) {
            document.getElementById("this_label_" + value).hidden = true;
        } else {
            for (let index = 1; index <= 9; index++) {
                document.getElementById("this_label_" + index).hidden = true;
            }
        }
    }

    function open_label_One() {
        document.getElementById("this_label_9").hidden = true;
    }

    function playsound11() {
        var audio = new Audio('../assets/image_4_sub/11001.mp3');

        // เล่นเสียง
        audio.play();
    }

    function On_Money_Drop() {
        var money = document.getElementById("money-rain").hidden = false;
        const myTimeout = setTimeout(myGreeting, 3000);
    }

    function myGreeting() {
        document.getElementById("money-rain").hidden = true;
    }
</script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>