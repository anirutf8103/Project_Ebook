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
// show_game_1_1001
if (isset($_GET['show_game_1_1001'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/04.png');">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-1"></div>
                    <div class="col-2 col_image">
                        <center>
                            <a type="button" onclick="Select_option('1')" class="btn-img-game-1" id="option_game_1_1001">
                                <img class="image_top_1" src="../assets/image_1_sub/ใบกล้วย.png" alt="">
                            </a>
                            <div hidden id="result_1_1001">
                                <div class="image-container">
                                    <img class="image_top_sub_1" src="../assets/image_1_sub/ใบกล้วย.png" alt="Image">
                                    <div class="caption">
                                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ddxv3rxw.json" loop background="transparent" speed="1" style="width: 100%" autoplay></lottie-player>
                                    </div>
                                </div>
                            </div>
                            <a type="button" class="button" data-bs-toggle="modal" data-bs-target="#Modal1001">
                                <span class="iconify" data-icon="majesticons:link-circle" style="color: red;" data-width="45" data-height="45" data-rotate="180deg"></span>
                            </a>
                            <div class="modal fade" id="Modal1001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="fxemoji:banana"></span> ความสำคัญของใบกล้วย</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe class="iframe1001" src="http://blog.arda.or.th/%E0%B9%83%E0%B8%9A%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B8%A2-%E0%B8%AA%E0%B8%B3%E0%B8%84%E0%B8%B1%E0%B8%8D%E0%B9%84%E0%B8%89%E0%B8%99/" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-2 col_image">
                        <center>
                            <a type="button" onclick="Select_option('2')" class="btn-img-game-1" id="option_game_1_1002">
                                <img class="image_top_1" src="../assets/image_1_sub/กล้วย.jpg" alt="">
                            </a>
                            <div hidden id="result_1_1002">
                                <div class="image-container">
                                    <img class="image_top_sub_1" src="../assets/image_1_sub/กล้วย.jpg" alt="Image">
                                    <div class="caption">
                                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ddxv3rxw.json" loop background="transparent" speed="1" style="width: 100%" autoplay></lottie-player>
                                    </div>
                                </div>
                            </div>
                            <a type="button" class="button" data-bs-toggle="modal" data-bs-target="#Modal1002">
                                <span class="iconify" data-icon="vscode-icons:file-type-image" data-width="45" data-height="45"></span>
                            </a>
                            <div class="modal fade" id="Modal1002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="fxemoji:banana"></span> ชนิดของกล้วย</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../assets/image_1_sub/1001.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-2 col_image">
                        <center>
                            <a type="button" onclick="Select_option('3')" class="btn-img-game-1" id="option_game_1_1003">
                                <img class="image_top_1" src="../assets/image_1_sub/ปลีของกล้วย.png" alt="">
                            </a>
                            <div hidden id="result_1_1003">
                                <div class="image-container">
                                    <img class="image_top_sub_1" src="../assets/image_1_sub/ปลีของกล้วย.png" alt="Image">
                                    <div class="caption">
                                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_atippmse.json" background="transparent" speed="1" style="width: 100%" autoplay></lottie-player>
                                    </div>
                                </div>
                            </div>
                            <a type="button" class="button" data-bs-toggle="modal" data-bs-target="#Modal1003">
                                <span class="iconify" data-icon="mdi:text-box" data-width="45" data-height="45"></span>
                            </a>
                            <div class="modal fade" id="Modal1003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="fxemoji:banana"></span> ความหมายของปลีกล้วย</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="t-al-l">
                                                <b style="margin-left: 40px;">หัวปลี หรือ ปลีกล้วย</b> คือส่วนที่เป็นดอกของต้นกล้วย ซึ่งจะคลี่กาบที่มีผลกล้วยซ่อนอยู่ภายในหลายๆ ผลรวมกัน เรียกว่า หวี มันจะเจริญงอกงามคลี่กาบหวีกล้วยออกไปเรื่อยๆ หลายๆ หวีรวมกัน เรียกว่าเครือ ในตอนท้ายๆ ของเครือ ดอกกล้วย มักจะหยุดการคลี่กาบและ จะไม่มีผลกล้วยออกมาแล้ว เจ้าของที่ดูแลเอาใจใส่ต้นกล้วยจะต้องตัดปลีกล้วยออกมา เพราะถ้าไม่ตัดออกปลีกล้วยส่วนนี้จะไปแย่งอาหารมาจากผลกล้วยเสียหมด
                                                <br><br>
                                                <b>ที่มาของข้อมูล :</b> สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-2 col_image">
                        <center>
                            <a type="button" onclick="Select_option('4')" class="btn-img-game-1" id="option_game_1_1004">
                                <img class="image_top_1" src="../assets/image_1_sub/หน่อกล้วย.jpg" alt="">
                            </a>
                            <div hidden id="result_1_1004">
                                <div class="image-container">
                                    <img class="image_top_sub_1" src="../assets/image_1_sub/หน่อกล้วย.jpg" alt="Image">
                                    <div class="caption">
                                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ddxv3rxw.json" loop background="transparent" speed="1" style="width: 100%" autoplay></lottie-player>
                                    </div>
                                </div>
                            </div>
                            <a type="button" class="button" data-bs-toggle="modal" data-bs-target="#Modal1004">
                                <span class="iconify" data-icon="carbon:video-filled" style="color: red;" data-width="45" data-height="45"></span>
                            </a>
                            <div class="modal fade" id="Modal1004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="fxemoji:banana"></span> หน่อกล้วยเพื่อสร้างรายได้</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe class="iframe1002" src="https://www.youtube.com/embed/U1MRe0YaE-U" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-2 col_image">
                        <center>
                            <a type="button" onclick="Select_option('5')" class="btn-img-game-1" id="option_game_1_1005">
                                <img class="image_top_1" src="../assets/image_1_sub/ลำต้นกล้วย.jpg" alt="">
                            </a>
                            <div hidden id="result_1_1005">
                                <div class="image-container">
                                    <img class="image_top_sub_1" src="../assets/image_1_sub/ลำต้นกล้วย.jpg" alt="Image">
                                    <div class="caption">
                                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ddxv3rxw.json" loop background="transparent" speed="1" style="width: 100%" autoplay></lottie-player>
                                    </div>
                                </div>
                            </div>
                            <a type="button" class="button" data-bs-toggle="modal" data-bs-target="#Modal1005">
                                <span class="iconify" data-icon="vscode-icons:file-type-image" data-width="45" data-height="45"></span>
                            </a>
                            <div class="modal fade" id="Modal1005" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="fxemoji:banana"></span> สมุนไพรจากหยวกกล้วย</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../assets/image_1_sub/1002.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-1"></div>
                </div>

                <a type="button" class="fix_btn_1" data-bs-toggle="modal" data-bs-target="#Modal1006">
                    <span class="iconify" data-icon="logos:youtube-icon" style="color: red;" data-width="45" data-height="45"></span>
                </a>
                <div class="modal fade" id="Modal1006" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="fxemoji:banana"></span> กล้วยสองปลี ฉบับการ์ตูน</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="iframe1002" src="https://www.youtube.com/embed/vZks_ev0xVU" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}

// show_game_1_1002
if (isset($_GET['show_game_1_1002'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/07.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_2" data-bs-toggle="modal" data-bs-target="#Modal2001">
                    <span class="iconify" data-icon="mdi:user-help" style="color: red;" data-width="45" data-height="45"></span>
                </a>
                <div class="modal fade" id="Modal2001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="mdi:user-help"></span> ความหมายของหมอเสน่ห์</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="t-al-l">
                                    <center>
                                        <h3>น. ผู้ที่เชื่อกันว่ารู้วิชาอาคมทำให้คนรักกันหรือชังกัน.</h3>
                                    </center>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}

// show_game_1_1003
if (isset($_GET['show_game_1_1003'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/09.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_3" data-bs-toggle="modal" data-bs-target="#Modal3001">
                    <span class="iconify" data-icon="logos:imagemin" data-width="45" data-height="45"></span>
                </a>
                <div class="modal fade" id="Modal3001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="logos:imagemin"></span> ภาพกล้วยสองปลี</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../assets/image_1_sub/2001.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}

// show_game_1_1004
if (isset($_GET['show_game_1_1004'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/10.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_4" data-bs-toggle="modal" data-bs-target="#Modal4001">
                    <span class="iconify" data-icon="pajamas:question" data-width="45" data-height="45"></span>
                </a>
                <div class="modal fade" id="Modal4001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="pajamas:question"></span> คำถามชวนคิด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>นักเรียนคิดว่า ไชชายจะทำอย่างไรต่อไป ?</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}

// show_game_1_1005
if (isset($_GET['show_game_1_1005'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/11.png');">
            <div class="card-body" style="padding: 0px;">
                <div class="row" id="row_game_1005" style="height: 33.33vh;">
                    <div class="col-3 col_game_5">
                        <a type="button" class="w-100 h-100 text-dark" onclick="open_label('1')" id="this_label_1">
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005">
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
                            <div class="card card_game_1005_re">
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

// show_game_1_1006
if (isset($_GET['show_game_1_1006'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/14.png');">
            <div class="card-body">
                <a type="button" class="fix_btn_6001" data-bs-toggle="modal" data-bs-target="#Modal6001">
                    <span class="iconify" data-icon="pajamas:question" style="color: red;" data-width="45" data-height="45"></span>
                </a>
                <div class="modal fade" id="Modal6001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><span class="iconify" data-icon="pajamas:question"></span> คำถามชวนคิด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="t-al-l">
                                    <center>
                                        <h3>นักเรียนคิดว่า เพราะเหตุใดไชชายถึงได้ร่ำรวยเป็นมหาเศรษฐี</h3>
                                    </center>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
<?php
}

// show_game_1_1007
if (isset($_GET['show_game_1_1007'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/18.png');">
            <div class="card-body">
                <div class="money-rain" id="money-rain" hidden>
                    <!-- ตัวองค์ประกอบอื่น ๆ ที่คุณต้องการให้เหมือนเงินตกลงมาจากฟ้า -->
                </div>
                <a type="button" class="fix_btn_6002" onclick="On_Money_Drop()">
                    <span class="iconify" data-icon="emojione:money-bag" data-width="45" data-height="45"></span>
                </a>
            </div>
        </div>
    </center>
<?php
}

// show_game_1_1008
if (isset($_GET['show_game_1_1008'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/19.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_8001" id="fix_btn_8001" onclick="open_label_8('1')">
                    <img class="img_8001" src="../assets/image_1_sub/23001.png" alt="">
                </a>

                <a type="button" class="fix_btn_8002" id="fix_btn_8002" onclick="open_label_8('2')">
                    <img class="img_8002" src="../assets/image_1_sub/23002.png" alt="">
                </a>

                <a type="button" class="fix_btn_8003" id="fix_btn_8003" onclick="open_label_8('3')">
                    <img class="img_8003" src="../assets/image_1_sub/23003.png" alt="">
                </a>

                <a type="button" class="fix_btn_8004" id="fix_btn_8004" onclick="open_label_8('4')">
                    <img class="img_8004" src="../assets/image_1_sub/23004.png" alt="">
                </a>

                <div class="card border-0 card_tt_8001" id="card_tt_8001" hidden>
                    <div class="card-body t-al-c">
                        ขยันหมั่นเพียร
                    </div>
                </div>
                <div class="card border-0 card_tt_8001" id="card_tt_8002" hidden>
                    <div class="card-body t-al-c">
                        ตั้งใจ
                    </div>
                </div>
                <div class="card border-0 card_tt_8001" id="card_tt_8003" hidden>
                    <div class="card-body t-al-c">
                        อดทน
                    </div>
                </div>
                <div class="card border-0 card_tt_8001" id="card_tt_8004" hidden>
                    <div class="card-body t-al-c">
                        พยายาม
                    </div>
                </div>

            </div>
        </div>
    </center>
<?php
}

// show_game_1_1009
if (isset($_GET['show_game_1_1009'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/23.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_9001" onclick="playSound('audio_8002')">
                    <span class="iconify text-success icon900" data-icon="ep:success-filled" data-width="40" data-height="40"></span>
                </a>
                <a type="button" class="fix_btn_9002" onclick="playSound('audio_8001')">
                    <span class="iconify text-danger icon900" data-icon="healthicons:no" data-width="40" data-height="40"></span>
                </a>

                <a type="button" class="fix_btn_9003" onclick="playSound('audio_8001')">
                    <span class="iconify text-success icon900" data-icon="ep:success-filled" data-width="40" data-height="40"></span>
                </a>
                <a type="button" class="fix_btn_9004" onclick="playSound('audio_8002')">
                    <span class="iconify text-danger icon900" data-icon="healthicons:no" data-width="40" data-height="40"></span>
                </a>

                <a type="button" class="fix_btn_9005" onclick="playSound('audio_8001')">
                    <span class="iconify text-success icon900" data-icon="ep:success-filled" data-width="40" data-height="40"></span>
                </a>
                <a type="button" class="fix_btn_9006" onclick="playSound('audio_8002')">
                    <span class="iconify text-danger icon900" data-icon="healthicons:no" data-width="40" data-height="40"></span>
                </a>

                <audio id="audio_8001" src="../assets/image_1_sub/9true.mp3"></audio>
                <audio id="audio_8002" src="../assets/image_1_sub/9false.mp3"></audio>

            </div>
        </div>
    </center>
<?php
}

// show_game_1_1010
if (isset($_GET['show_game_1_1010'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_1/24.png');">
            <div class="card-body">

                <!-- <img class="img_marker" src="../assets/image_1_sub/23004.png" alt=""> -->

                <a type="button" class="fix_btn_10001" id="fix_btn_10001" onclick="open_label_10('text_10001')">
                    <img class="img_10001" src="../assets/image_1_sub/10/1.png" alt="">
                </a>
                <a type="button" class="fix_btn_10002" id="fix_btn_10002" onclick="open_label_10('text_10002')">
                    <img class="img_10002" src="../assets/image_1_sub/10/2.png" alt="">
                </a>
                <a type="button" class="fix_btn_10003" id="fix_btn_10003" onclick="open_label_10('text_10003')">
                    <img class="img_10003" src="../assets/image_1_sub/10/3.png" alt="">
                </a>
                <a type="button" class="fix_btn_10004" id="fix_btn_10004" onclick="open_label_10('text_10004')">
                    <img class="img_10004" src="../assets/image_1_sub/10/4.png" alt="">
                </a>
                <a type="button" class="fix_btn_10005" id="fix_btn_10005" onclick="open_label_10('text_10005')">
                    <img class="img_10005" src="../assets/image_1_sub/10/5.png" alt="">
                </a>
                <a type="button" class="fix_btn_10006" id="fix_btn_10006" onclick="open_label_10('text_10006')">
                    <img class="img_10006" src="../assets/image_1_sub/10/66.png" alt="">
                </a>
                <a type="button" class="fix_btn_10007" id="fix_btn_10007" onclick="open_label_10('text_10007')">
                    <img class="img_10007" src="../assets/image_1_sub/10/7.png" alt="">
                </a>
                <a type="button" class="fix_btn_10008" id="fix_btn_10008" onclick="open_label_10('text_10008')">
                    <img class="img_10008" src="../assets/image_1_sub/10/66.png" alt="">
                </a>
                <a type="button" class="fix_btn_10009" id="fix_btn_10009" onclick="open_label_10('text_10009')">
                    <img class="img_10009" src="../assets/image_1_sub/10/9.png" alt="">
                </a>
                <a type="button" class="fix_btn_10010" id="fix_btn_10010" onclick="open_label_10('text_10010')">
                    <img class="img_10010" src="../assets/image_1_sub/10/10.png" alt="">
                </a>
                <a type="button" class="fix_btn_10011" id="fix_btn_10011" onclick="open_label_10('text_10011')">
                    <img class="img_10011" src="../assets/image_1_sub/10/11.png" alt="">
                </a>
                <a type="button" class="fix_btn_10012" id="fix_btn_10012" onclick="open_label_10('text_10012')">
                    <img class="img_10012" src="../assets/image_1_sub/10/66.png" alt="">
                </a>

                <div class="card text_10001" id="text_10001" hidden>
                    <div class="card-body">
                        <h6>จุดเริ่มต้น</h6>
                    </div>
                </div>
                <div class="card text_10002" id="text_10002" hidden>
                    <div class="card-body">
                        <h6>หลงรักลูกสาวเศรษฐี</h6>
                    </div>
                </div>
                <div class="card text_10003" id="text_10003" hidden>
                    <div class="card-body">
                        <h6>หาหมอเสน่ห์</h6>
                    </div>
                </div>
                <div class="card text_10004" id="text_10004" hidden>
                    <div class="card-body">
                        <h6>เจอยายแก่</h6>
                    </div>
                </div>
                <div class="card text_10005" id="text_10005" hidden>
                    <div class="card-body">
                        <h6>หากล้วยสองปลี</h6>
                    </div>
                </div>
                <div class="card text_10006" id="text_10006" hidden>
                    <div class="card-body">
                        <h6>หาไม่เจอ</h6>
                    </div>
                </div>
                <div class="card text_10007" id="text_10007" hidden>
                    <div class="card-body">
                        <h6>ปลูกกล้วย</h6>
                    </div>
                </div>
                <div class="card text_10008" id="text_10008" hidden>
                    <div class="card-body">
                        <h6>หาไม่เจอ</h6>
                    </div>
                </div>
                <div class="card text_10009" id="text_10009" hidden>
                    <div class="card-body">
                        <h6>ขายกล้วย</h6>
                    </div>
                </div>
                <div class="card text_10010" id="text_10010" hidden>
                    <div class="card-body">
                        <h6>รำ่รวย</h6>
                    </div>
                </div>
                <div class="card text_10011" id="text_10011" hidden>
                    <div class="card-body">
                        <h6>แต่งงาน</h6>
                    </div>
                </div>
                <div class="card text_10012" id="text_10012" hidden>
                    <div class="card-body">
                        <h6>หาไม่เจอ</h6>
                    </div>
                </div>

            </div>
        </div>
    </center>
<?php
}
?>
<script>
    function open_label_10(cardId) {
        var cardNames = [
            'text_10001',
            'text_10002',
            'text_10003',
            'text_10004',
            'text_10005',
            'text_10006',
            'text_10007',
            'text_10008',
            'text_10009',
            'text_10010',
            'text_10011',
            'text_10012'
        ];

        // วนลูปเช็คและปรับสถานะการซ่อนของ card
        cardNames.forEach(function(name) {
            var card = document.getElementById(name);
            if (name === cardId) {
                card.hidden = false; // เปิดแสดง card
            } else {
                card.hidden = true; // ซ่อน card
            }
        });

    }
</script>

<script>
    function playSound(audioId) {
        var audio = document.getElementById(audioId);
        audio.play();
    }
</script>

<script>
    var images = []; // รายการไฟล์ภาพทั้งหมด

    var currentImageIndex = 0; // ดัชนีภาพปัจจุบัน

    var prevImageLink = document.getElementById('prevImageLink');
    var nextImageLink = document.getElementById('nextImageLink');
    var currentImage = document.getElementById('currentImage');
    var currentPage = document.getElementById('currentPage');
    var totalPages = document.getElementById('totalPages');
    var cardShow = document.getElementById('cardShow');

    // cardShow.style.minWidth = '100%';
    // window.addEventListener('resize', setCardHeight);
    // setCardHeight();

    // // กำหนดจำนวนหน้าทั้งหมด
    // totalPages.textContent = '/' + images.length;

    // // ซ่อนปุ่ม 'ก่อนหน้า' เมื่อเป็นภาพแรก
    // if (currentImageIndex === 0) {
    //     prevImageLink.style.display = 'none';
    // }

    // // กำหนดภาพปัจจุบันตามดัชนีภาพปัจจุบัน
    // currentImage.src = './assets/image_1/' + images[currentImageIndex];

    // // แสดงหมายเลขหน้าปัจจุบัน
    // currentPage.textContent = (currentImageIndex + 1);

    // // กำหนดเหตุการณ์คลิกปุ่ม 'ก่อนหน้า' เพื่อเปลี่ยนเป็นภาพก่อน
    // prevImageLink.addEventListener('click', function(event) {
    //     event.preventDefault(); // ป้องกันการเปลี่ยนเส้นทางของลิงก์

    //     if (currentImageIndex > 0) {
    //         currentImageIndex--;
    //         if (images[currentImageIndex] === 'show_game_1_1001') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1001;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1002') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1002;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1003') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1003;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1004') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1004;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1005') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1005;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //             window.addEventListener('resize', setCardHeight1005);
    //             setCardHeight1005();
    //         } else if (images[currentImageIndex] === 'show_game_1_1006') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1006;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1007') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1007;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1008') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1008;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1009') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1009;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1010') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1010;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else {
    //             currentImage.src = './assets/image_1/' + images[currentImageIndex];
    //             cardShow.innerHTML = ''; // ลบ HTML ของแคร์ทิ้งเมื่อเป็นรูปภาพที่ไม่ใช่ "show_game_1_1001"
    //             cardShow.style.minWidth = '0%';
    //         }
    //     }

    //     // ซ่อนปุ่ม 'ก่อนหน้า' เมื่อเป็นภาพแรก
    //     if (currentImageIndex === 0) {
    //         prevImageLink.style.display = 'none';
    //     }

    //     // แสดงปุ่ม 'ถัดไป' เมื่อไม่ได้เป็นภาพสุดท้าย
    //     if (currentImageIndex < images.length - 1) {
    //         nextImageLink.style.display = 'inline-block';
    //     }

    //     // แสดงหมายเลขหน้าปัจจุบัน
    //     currentPage.textContent = (currentImageIndex + 1);
    // });

    // // ซ่อนปุ่ม 'ถัดไป' เมื่อเป็นภาพสุดท้าย
    // if (currentImageIndex === images.length - 1) {
    //     nextImageLink.style.display = 'none';
    // }

    // // กำหนดเหตุการณ์คลิกปุ่ม 'ถัดไป' เพื่อเปลี่ยนเป็นภาพถัดไป
    // nextImageLink.addEventListener('click', function(event) {
    //     event.preventDefault(); // ป้องกันการเปลี่ยนเส้นทางของลิงก์

    //     if (currentImageIndex < images.length - 1) {
    //         currentImageIndex++;
    //         if (images[currentImageIndex] === 'show_game_1_1001') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1001;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1002') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1002;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1003') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1003;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1004') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1004;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1005') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1005;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //             window.addEventListener('resize', setCardHeight1005);
    //             setCardHeight1005();
    //         } else if (images[currentImageIndex] === 'show_game_1_1006') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1006;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1007') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1007;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1008') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1008;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1009') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1009;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else if (images[currentImageIndex] === 'show_game_1_1010') {
    //             currentImage.src = '';
    //             cardShow.innerHTML = show_game_1_1010;
    //             cardShow.style.minWidth = '100%';
    //             window.addEventListener('resize', setCardHeight);
    //             setCardHeight();
    //         } else {
    //             currentImage.src = './assets/image_1/' + images[currentImageIndex];
    //             cardShow.innerHTML = ''; // ลบ HTML ของแคร์ทิ้งเมื่อเป็นรูปภาพที่ไม่ใช่ "show_game_1_1001"
    //             cardShow.style.minWidth = '0%';
    //         }
    //     }

    //     // แสดงปุ่ม 'ก่อนหน้า' เมื่อไม่ได้เป็นภาพแรก
    //     if (currentImageIndex > 0) {
    //         prevImageLink.style.display = 'inline-block';
    //     }

    //     // ซ่อนปุ่ม 'ถัดไป' เมื่อเป็นภาพสุดท้าย
    //     if (currentImageIndex === images.length - 1) {
    //         nextImageLink.style.display = 'none';
    //     }

    //     // แสดงหมายเลขหน้าปัจจุบัน
    //     currentPage.textContent = (currentImageIndex + 1);
    // });
</script>

<script>
    function setCardHeight() {
        var card = document.getElementById('cardElement');
        var backgroundImage = new Image();
        backgroundImage.src = card.style.backgroundImage.slice(4, -1).replace(/"/g, '');

        backgroundImage.onload = function() {
            var cardWidth = card.offsetWidth;
            var imageWidth = backgroundImage.width;
            var imageHeight = backgroundImage.height;
            var cardHeight = (cardWidth / imageWidth) * imageHeight;

            card.style.height = cardHeight + 'px';
        };
    }

    function setCardHeight1005() {
        var card = document.getElementById('cardElement');
        var row = document.getElementById('row_game_1005');
        var backgroundImage = new Image();
        backgroundImage.src = card.style.backgroundImage.slice(4, -1).replace(/"/g, '');

        backgroundImage.onload = function() {
            var cardWidth = card.offsetWidth;
            var imageWidth = backgroundImage.width;
            var imageHeight = backgroundImage.height;
            var cardHeight = (cardWidth / imageWidth) * imageHeight;

            row.style.height = cardHeight + 'px';
        };
    }
</script>

<script>
    function Select_option(value) {
        if (value == '1') {
            document.getElementById("option_game_1_1001").hidden = true;
            document.getElementById("result_1_1001").hidden = false;
        } else if (value == '2') {
            document.getElementById("option_game_1_1002").hidden = true;
            document.getElementById("result_1_1002").hidden = false;
        } else if (value == '3') {
            document.getElementById("option_game_1_1003").hidden = true;
            document.getElementById("result_1_1003").hidden = false;
        } else if (value == '4') {
            document.getElementById("option_game_1_1004").hidden = true;
            document.getElementById("result_1_1004").hidden = false;
        } else if (value == '5') {
            document.getElementById("option_game_1_1005").hidden = true;
            document.getElementById("result_1_1005").hidden = false;
        }
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

    function On_Money_Drop() {
        var money = document.getElementById("money-rain").hidden = false;
        const myTimeout = setTimeout(myGreeting, 3000);
    }

    function myGreeting() {
        document.getElementById("money-rain").hidden = true;
    }
</script>

<script>
    function open_label_8(value) {
        var cardTt8001 = document.getElementById('card_tt_8001');
        var cardTt8002 = document.getElementById('card_tt_8002');
        var cardTt8003 = document.getElementById('card_tt_8003');
        var cardTt8004 = document.getElementById('card_tt_8004');

        if (value == '1') {
            cardTt8002.hidden = true;
            cardTt8003.hidden = true;
            cardTt8004.hidden = true;
            cardTt8001.hidden = !cardTt8001.hidden;
        }

        if (value == '2') {
            cardTt8001.hidden = true;
            cardTt8003.hidden = true;
            cardTt8004.hidden = true;
            cardTt8002.hidden = !cardTt8002.hidden;
        }

        if (value == '3') {
            cardTt8001.hidden = true;
            cardTt8002.hidden = true;
            cardTt8004.hidden = true;
            cardTt8003.hidden = !cardTt8003.hidden;
        }

        if (value == '4') {
            cardTt8001.hidden = true;
            cardTt8002.hidden = true;
            cardTt8003.hidden = true;
            cardTt8004.hidden = !cardTt8004.hidden;
        }
    }
</script>

<!-- JS Pages Tap -->
<!-- <script>
    var bottomMenu = document.querySelector('.bottom-menu');
    var slideshow = document.querySelector('.slideshow');
    var currentImage = document.querySelector('#currentImage');

    var images = [];

    // สร้างสไลด์รูปภาพ
    images.forEach(function(item) {
        var img = document.createElement('img');

        // กำหนดคลาส 'slideshow-container' ให้กับ slideshow
        slideshow.classList.add('slideshow-container');

        // ตรวจสอบว่าเป็นชื่อไฟล์ภาพหรือคีย์เวิร์ด
        if (item.endsWith('.png')) {
            img.src = "./assets/image_1/" + item;
        } else {
            if (item === 'show_game_1_1001') {
                img.src = "./assets/image_1/04.png";
            } else if (item === 'show_game_1_1002') {
                img.src = "./assets/image_1/07.png";
            } else if (item === 'show_game_1_1003') {
                img.src = "./assets/image_1/09.png";
            }
        }

        slideshow.appendChild(img);
    });

    // กำหนดคลิกเหตุการณ์ให้กับแต่ละภาพ
    var imagesList = slideshow.querySelectorAll('img');
    imagesList.forEach(function(image, index) {
        image.addEventListener('click', function() {
            setCurrentImage(index);
        });
    });

    // กำหนดภาพปัจจุบันด้วยค่าเริ่มต้น
    setCurrentImage(0);

    // ฟังก์ชันเปลี่ยนภาพปัจจุบัน
    function setCurrentImage(index) {
        // ลบคลาส 'active' จากภาพปัจจุบัน
        var currentActiveImage = slideshow.querySelector('.active');
        if (currentActiveImage) {
            currentActiveImage.classList.remove('active');
        }

        // กำหนดคลาส 'active' ให้กับภาพที่เลือก
        var newActiveImage = slideshow.querySelectorAll('img')[index];
        if (newActiveImage) {
            newActiveImage.classList.add('active');
            currentImage.src = newActiveImage.src;
        }
    }

    window.addEventListener('mousemove', function(event) {
        if (event.clientY >= window.innerHeight - 10) {
            bottomMenu.classList.add('active');
        } else if (!bottomMenu.contains(event.target)) {
            bottomMenu.classList.remove('active');
        }
    });
</script> -->

<!-- script ป้องกัน -->
<script language="JavaScript1.2">
    function disableselect(e) {
        return false
    }

    function reEnable() {
        return true
    }
    //if IE4+
    document.onselectstart = new Function("return false")
    //if NS6
    if (window.sidebar) {
        document.onmousedown = disableselect
        document.onclick = reEnable
    }

    // window.addEventListener('beforeunload', function(event) {
    //     event.preventDefault();
    //     event.returnValue = '';
    //     return 'คุณกำลังออกจากหน้าเว็บไซต์ คุณต้องการทำต่อหรือไม่?';
    // });
</script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>