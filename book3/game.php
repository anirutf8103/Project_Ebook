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
// show_game_3_3001
if (isset($_GET['show_game_3_3001'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/04.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3001001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
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
                                <h5><b>ถ้านักเรียนเลือกได้ 1 สิ่ง นักเรียนจะเลือกสิ่งใด เพราะเหตุใด</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->

                <b id="label3001001" hidden class="label3001 label3001001"><span class="iconify" data-icon="solar:money-bag-bold"></span> เงิน</b>
                <b id="label3001002" hidden class="label3001 label3001002"><span class="iconify" data-icon="emojione-v1:family"></span> ครอบครัว</b>
                <b id="label3001003" hidden class="label3001 label3001003"><span class="iconify" data-icon="material-symbols:work"></span> การงาน</b>
                <b id="label3001004" hidden class="label3001 label3001004"><span class="iconify" data-icon="fluent-emoji:love-letter"></span> ความรัก</b>
                <b id="label3001005" hidden class="label3001 label3001005"><span class="iconify" data-icon="game-icons:three-friends"></span> เพื่อน</b>

                <a onclick="label_3001('1')" id="label_btn_3001001" type="button" class="label3001 label3001001"><span class="iconify" data-icon="solar:money-bag-bold"></span></span></a>
                <a onclick="label_3001('2')" id="label_btn_3001002" type="button" class="label3001 label3001002"><span class="iconify" data-icon="emojione-v1:family"></span></span></a>
                <a onclick="label_3001('3')" id="label_btn_3001003" type="button" class="label3001 label3001003"><span class="iconify" data-icon="material-symbols:work"></span></span></a>
                <a onclick="label_3001('4')" id="label_btn_3001004" type="button" class="label3001 label3001004"><span class="iconify" data-icon="fluent-emoji:love-letter"></span></span></a>
                <a onclick="label_3001('5')" id="label_btn_3001005" type="button" class="label3001 label3001005"><span class="iconify" data-icon="game-icons:three-friends"></span></span></a>
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3002
if (isset($_GET['show_game_3_3002'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/05.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3002001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3002001">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal3002001 -->
                <div class="modal fade" id="Modal3002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ทะเลไทย (ชายฝั่งอันดามัน/อ่าวไทย)</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/9mSuLypDzHw" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3002001 -->
                <a type="button" class="fix_btn_3002002 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3002002">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal3002002 -->
                <div class="modal fade" id="Modal3002002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ชาวไทยมุสลิม</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_3_sub/3002003.jpg" alt="">
                                <img class="w-100" src="../assets/image_3_sub/3002004.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3002002 -->
                <a type="button" class="fix_btn_3002003 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3002003">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal3002003 -->
                <div class="modal fade" id="Modal3002003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ชาวไทยพุทธ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_3_sub/3002002.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3002003 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3003
if (isset($_GET['show_game_3_3003'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/06.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3003001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3003001">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008005.png" alt="">
                </a>
                <!-- Modal3003001 -->
                <div class="modal fade" id="Modal3003001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพแผนที่บ้านพระม่วง อ.กันตัง จ.ตรัง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_3_sub/3003001.png" alt="">
                                <img class="w-100" src="../assets/image_3_sub/3003002.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3003001 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3004
if (isset($_GET['show_game_3_3004'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/07.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3004001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3004001">
                    <img class="icon_2001" style="width: 5vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal3004001 -->
                <div class="modal fade" id="Modal3004001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ บุตรบุญธรรม</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>บุตรของผู้อื่นที่บุคคลได้จดทะเบียนรับเป็นบุตรของตน</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3004001 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3005
if (isset($_GET['show_game_3_3005'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/09.png');">
            <div class="card-body">

                <div class="money-rain" id="money-rain" hidden>
                    <!-- ตัวองค์ประกอบอื่น ๆ ที่คุณต้องการให้เหมือนเงินตกลงมาจากฟ้า -->
                </div>
                <a type="button" class="fix_btn_6002 btn_set_main" onclick="On_Money_Drop()">
                    <span class="iconify" data-icon="emojione:money-bag" data-width="45" data-height="45"></span>
                </a>

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3006
if (isset($_GET['show_game_3_3006'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/11.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3006001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3006001">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal3006001 -->
                <div class="modal fade" id="Modal3006001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่า เหตุใดสามีจึงบ่ายเบี่ยงไม่ให้ไปหา</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3006001 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3007
if (isset($_GET['show_game_3_3007'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/13.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3007001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3007001">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal3007001 -->
                <div class="modal fade" id="Modal3007001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพท่าเรือกันตัง</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_3_sub/3007001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3007001 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3008
if (isset($_GET['show_game_3_3008'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/16.png');">
            <div class="card-body">

                <a onclick="play_sound_3008001()" type="button" class="fix_btn_3008001 btn_set_main">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/5001.png" alt="">
                </a>

                <audio id="sound3008001" src="../assets/image_3_sub/3008001.mp3"></audio>

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_3009
if (isset($_GET['show_game_3_3009'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/17.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_3009001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3009001">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal3009001 -->
                <div class="modal fade" id="Modal3009001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">อุทยานแห่งชาติหมู่เกาะเภตรา</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/slNdepXZU2c" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3009001 -->
                <a type="button" class="fix_btn_3009002 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal3009002">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008002.png" alt="">
                </a>
                <!-- Modal3009002 -->
                <div class="modal fade" id="Modal3009002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">เกาะสุกร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://ww2.trang.go.th/travel/detail/4/data.html" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal3009002 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_30010
if (isset($_GET['show_game_3_30010'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/18.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_30010001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal30010001">
                    <img class="icon_5" style="width: 6vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal30010001 -->
                <div class="modal fade" id="Modal30010001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเขาทะนาน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_3_sub/30010001.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal30010001 -->
                <a type="button" class="fix_btn_30010002 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal30010002">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal30010002 -->
                <div class="modal fade" id="Modal30010002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">เขาทะนาน อ.ทุ่งหว้า จ.สตูล</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/x747lVnap7c" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal30010002 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_30011
if (isset($_GET['show_game_3_30011'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/19.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_30011001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal30011001">
                    <img class="icon_2001" style="width: 5vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal30011001 -->
                <div class="modal fade" id="Modal30011001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ ปักกลด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>การกางร่มกลด (ร่มที่พระใช้ขณะเดินทาง) ใต้ต้นไม้</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal30011001 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_30012
if (isset($_GET['show_game_3_30012'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/20.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_1_30012001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal30012001">
                    <img class="icon_2001" style="width: 9vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal30012001 -->
                <div class="modal fade" id="Modal30012001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #6888A1;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นิทานเรื่องนี้ ปรากฏข้อคิดในเรื่องใดบ้าง</b></h5>
                                <hr>
                                <h5 class="text-danger">* ลองกดที่ลูกโป่งดูสิ <span class="iconify" data-icon="fluent-emoji:balloon"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal30012001 -->

                <a onclick="label_30012('1')" type="button" class="fix_btn_30012001"></a>
                <a onclick="label_30012('2')" type="button" class="fix_btn_30012002"></a>
                <a onclick="label_30012('3')" type="button" class="fix_btn_30012003"></a>
                <a onclick="label_30012('4')" type="button" class="fix_btn_30012004"></a>
                <a onclick="label_30012('5')" type="button" class="fix_btn_30012005"></a>
                <a onclick="label_30012('6')" type="button" class="fix_btn_30012006"></a>
                <a onclick="label_30012('7')" type="button" class="fix_btn_30012007"></a>
                <a onclick="label_30012('8')" type="button" class="fix_btn_30012008"></a>

                <img id="fix_img_30012001" hidden class="fix_img_30012001" style="width: 5vw;" src="../assets/icon/20013001.png" alt="">
                <img id="fix_img_30012002" hidden class="fix_img_30012002" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">
                <img id="fix_img_30012003" hidden class="fix_img_30012003" style="width: 5vw;" src="../assets/icon/20013001.png" alt="">
                <img id="fix_img_30012004" hidden class="fix_img_30012004" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">
                <img id="fix_img_30012005" hidden class="fix_img_30012005" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">
                <img id="fix_img_30012006" hidden class="fix_img_30012006" style="width: 5vw;" src="../assets/icon/20013001.png" alt="">
                <img id="fix_img_30012007" hidden class="fix_img_30012007" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">
                <img id="fix_img_30012008" hidden class="fix_img_30012008" style="width: 5vw;" src="../assets/icon/20013001.png" alt="">
            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_30013
if (isset($_GET['show_game_3_30013'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/23.png');">
            <div class="card-body">

                <a onclick="label_30013('1')" type="button" class="label_30013001">ไก่ย่าง</a>
                <a onclick="label_30013('2')" type="button" class="label_30013002">ปลาทอด</a>
                <a onclick="label_30013('3')" type="button" class="label_30013003">หมูย่าง</a>
                <a onclick="label_30013('4')" type="button" class="label_30013004">แกงส้ม</a>

                <img id="fix_img_30013001" hidden class="fix_img_30013001" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">
                <img id="fix_img_30013002" hidden class="fix_img_30013002" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">
                <img id="fix_img_30013003" hidden class="fix_img_30013003" style="width: 5vw;" src="../assets/icon/20013001.png" alt="">
                <img id="fix_img_30013004" hidden class="fix_img_30013004" style="width: 5vw;" src="../assets/icon/20013002.png" alt="">

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_3_30014
if (isset($_GET['show_game_3_30014'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_3/24.png');">
            <div class="card-body" style="padding: 0px;">

                <div class="row" id="row_game_1005" style="height: 33.33vh;">
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('1')" id="this_label_1">
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014">
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
                            <div class="card card_game_30014_re">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <center>
                                        <h3 class="text_Label_1005">ภาพที่อยู่ด้านหลังป้ายนี้เป็นเหตุการณ์ตอนใด และเพราะเหตุใดถึงเกิดเหตุการณ์นั้น</h3>
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

<script>
    function open_label(value) {
        if (value >= 1 && value <= 8) {
            document.getElementById("this_label_" + value).hidden = true;
        } else {
            for (let index = 1; index <= 9; index++) {
                document.getElementById("this_label_" + index).hidden = true;
            }
        }
    }

    function label_30013(value) {
        document.getElementById("fix_img_3001300" + value).hidden = false;
    }

    function label_30012(value) {
        document.getElementById("fix_img_3001200" + value).hidden = false;
    }

    function play_sound_3008001() {
        let sound = document.getElementById('sound3008001');
        sound.play();
    }

    function On_Money_Drop() {
        var money = document.getElementById("money-rain").hidden = false;
        const myTimeout = setTimeout(myGreeting, 3000);
    }

    function myGreeting() {
        document.getElementById("money-rain").hidden = true;
    }

    function label_3001(value) {
        document.getElementById("label_btn_300100" + value).hidden = true;
        document.getElementById("label300100" + value).hidden = false;
    }
</script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>