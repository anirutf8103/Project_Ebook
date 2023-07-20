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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/04.png');">
            <div class="card-body">

                <a onclick="playSound5002('1')" class="btn_fix_btn_2001_1 btn_set_main" type="button" class="mb-3">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>
                <a onclick="playSound5002('2')" class="btn_fix_btn_2001_2 btn_set_main" type="button" class="mb-3">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>
                <a onclick="playSound5002('3')" class="btn_fix_btn_2001_3 btn_set_main" type="button" class="mb-3">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>
                <a onclick="playSound5002('4')" class="btn_fix_btn_2001_4 btn_set_main" type="button" class="mb-3">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>
                <a onclick="playSound5002('5')" class="btn_fix_btn_2001_5 btn_set_main" type="button" class="mb-3">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>
                <a onclick="playSound5002('6')" class="btn_fix_btn_2001_6 btn_set_main" type="button" class="mb-3">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>

                <a type="button" onclick="open_label_2001('1')" id="btn_fix_c_btn_2001_1" class="btn_fix_c_btn_2001_1 d-flex justify-content-center align-items-center"></a>
                <a type="button" onclick="open_label_2001('2')" id="btn_fix_c_btn_2001_2" class="btn_fix_c_btn_2001_2 d-flex justify-content-center align-items-center"></a>
                <a type="button" onclick="open_label_2001('3')" id="btn_fix_c_btn_2001_3" class="btn_fix_c_btn_2001_3 d-flex justify-content-center align-items-center"></a>
                <a type="button" onclick="open_label_2001('4')" id="btn_fix_c_btn_2001_4" class="btn_fix_c_btn_2001_4 d-flex justify-content-center align-items-center"></a>
                <a type="button" onclick="open_label_2001('5')" id="btn_fix_c_btn_2001_5" class="btn_fix_c_btn_2001_5 d-flex justify-content-center align-items-center"></a>
                <a type="button" onclick="open_label_2001('6')" id="btn_fix_c_btn_2001_6" class="btn_fix_c_btn_2001_6 d-flex justify-content-center align-items-center"></a>

                <audio id="myAudio1" src="../assets/image_2_sub/เสียงหนู.mp3" preload="auto"></audio>
                <audio id="myAudio2" src="../assets/image_2_sub/เสียงไก่.mp3" preload="auto"></audio>
                <audio id="myAudio3" src="../assets/image_2_sub/เสียงวัว.mp3" preload="auto"></audio>
                <audio id="myAudio4" src="../assets/image_2_sub/เสียงนก.mp3" preload="auto"></audio>
                <audio id="myAudio5" src="../assets/image_2_sub/เสียงหมา.mp3" preload="auto"></audio>
                <audio id="myAudio6" src="../assets/image_2_sub/เสียงแมว.mp3" preload="auto"></audio>
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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/05.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2002001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเมืองจีน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_2_sub/2001.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/07.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2003001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 10vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่าหมากับแมวกลับบ้านด้วยวิธีใด</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/08.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2004001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 10vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่าหมากับแมวสามารถเอาดวงแก้ววิเศษมาได้หรือไม่</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/11.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2005001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 10vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>จากข้อความนี้ นักเรียนคิดว่าหนูมีลักษณะนิสัยเช่นไร</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/12.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2005001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 10vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่า เหตุการณ์ต่อไปจะเกิดอะไรขึ้น</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/13.png');">
            <div class="card-body" style="padding: 0px;">

                <div class="row" id="row_game_1005" style="height: 33.33vh;">
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('1')" id="this_label_1">
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007">
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
                            <div class="card card_game_2007_re">
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
// show_game_2_2008
if (isset($_GET['show_game_2_2008'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/14.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2008001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเกาะหนู เกาะแมว</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_2_sub/2002.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

                <a type="button" class="fix_btn_2008002 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008002.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">เกาะหนู-เกาะแมว อันซีนแห่งใหม่สงขลา</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.khaosod.co.th/newspaper/newspaper-inside-pages/news_7050481" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal2003 -->

                <a type="button" class="fix_btn_2008003 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal2004">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008009.png" alt="">
                </a>
                <!-- Modal2004 -->
                <div class="modal fade" id="Modal2004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">เพลง เกาะหนู เกาะแมว</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/ICz2jlY2tSM" frameborder="0"></iframe>
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
// show_game_2_2009
if (isset($_GET['show_game_2_2009'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/15.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2005001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 10vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่า "หมา" หายไปไหน</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

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
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/16.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_2008001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขาตังกวน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_2_sub/2003.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

                <a type="button" class="fix_btn_20010002 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008002.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">เขาตังกวน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.songkhlacity.go.th/2020/travel/detail/7/data.html" frameborder="0"></iframe>
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
// show_game_2_20011
if (isset($_GET['show_game_2_20011'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/17.png');">
            <div class="card-body">

                <a type="button" class=" btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal2003">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal2003 -->
                <div class="modal fade" id="Modal2003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">หาดทรายแก้ว สิงหนคร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/SUiaJaXEuL0" frameborder="0"></iframe>
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
// show_game_2_20012
if (isset($_GET['show_game_2_20012'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/18.png');">
            <div class="card-body">

                <div class="row" id="row_game_1005" style="height: 50vh;">
                    <div class="col-12 col_game_20012"></div>
                    <div class="col-12 col_game_20012_card">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label_One()" id="this_label_9">
                            <div class="card card_game_20012_re">
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
// show_game_2_20013
if (isset($_GET['show_game_2_20013'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_2/19.png');">
            <div class="card-body">

                

            </div>
        </div>
    </center>
<?php
}
?>

<script>
    function open_label_One() {
        document.getElementById("this_label_9").hidden = true;
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

    function open_label_2001(value) {
        if (value == "1" || value == "5" || value == "6") {
            document.getElementById("btn_fix_c_btn_2001_" + value).innerHTML = '<span class="iconify" data-icon="ep:success-filled" style="color: #7ab317;" data-width="60" data-height="60"></span>';
        } else {
            document.getElementById("btn_fix_c_btn_2001_" + value).innerHTML = '<span class="iconify text-danger" data-icon="mi:circle-error" data-width="60" data-height="60"></span>';
        }
    }

    function playSound5002(value) {
        var sound = document.getElementById("myAudio" + value);
        sound.play();
    }
</script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>