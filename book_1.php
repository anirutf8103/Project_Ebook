<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- import css -->
    <link rel="stylesheet" href="./assets/css/css.css">
    <!-- import icon -->
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <!-- import ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- import chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- import gif -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>

    <?php
    $folder = './assets/image_1';  // ชื่อโฟลเดอร์ที่ต้องการดึงไฟล์

    // ดึงรายการไฟล์ทั้งหมดในโฟลเดอร์
    $files = scandir($folder);

    // เรียงลำดับชื่อไฟล์
    natcasesort($files);

    // Array Push File
    $Array_Push_file = array();

    // วนลูปเพื่อแสดงรายการไฟล์ที่ดึงมา
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && $file !== '.DS_Store' && $file !== '04.png' && $file !== '07.png') {
            array_push($Array_Push_file, $file);
        }
    }

    // แทรก "show_game_1_1001"
    array_splice($Array_Push_file, 2, 0, "show_game_1_1001");
    // แทรก "show_game_1_1001"
    array_splice($Array_Push_file, 4, 0, "show_game_1_1002");
    ?>

    <div class="offcanvas offcanvas-top offcanvas_book" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasTopLabel"><b class="text-light"><span class="iconify" data-icon="mingcute:menu-fill"></span> Menu</b></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <a href="./" class="menu_home w-100">
                            <div class="card menu_home_col w-100">
                                <div class="card-body">
                                    <center>
                                        <span class="iconify" data-icon="ic:round-home" data-width="40" data-height="40"></span>
                                        <br>
                                        <h5><b>หน้าหลัก</b></h5>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 card-glass">
        <div class="card-body">
            <!-- <div class="card">
                <div class="card-body">
                    <?= print_r($Array_Push_file) ?>
                </div>
            </div> -->
            <button class="btn btn-light floatingactionBTN" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><span class="iconify" data-icon="mingcute:menu-fill"></span></button>
            <center>
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <a type="button" class="text-white" id="prevImageLink">
                            <span class="iconify" data-icon="teenyicons:left-solid" data-width="40" data-height="40"></span>
                        </a>
                    </div>
                    <div class="col-8 d-flex justify-content-center align-items-center">
                        <!-- card game -->
                        <div class="card_show" id="cardShow"></div>
                        <!-- show image -->
                        <img src="./assets/image_1/<?= $Array_Push_file[0] ?>" alt="" id="currentImage">
                        <div class="number_page">
                            <span id="currentPage"></span>
                            <span id="totalPages"></span>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <a type="button" class="text-white" id="nextImageLink">
                            <span class="iconify" data-icon="teenyicons:left-solid" data-width="40" data-height="40" data-rotate="180deg"></span>
                        </a>
                    </div>
                </div>
            </center>
        </div>
    </div>

    <!-- ***************************** -->

    <!-- ***************************** -->

    <script>
        var show_game_1_1001 = `
        <center>
            <div class="card card_game_main card_game" id="cardElement" style="background-image: url('./assets/image_1/04.png');">
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-1"></div>
                        <div class="col-2 col_image">
                            <center>
                                <a type="button" onclick="Select_option('1')" class="btn-img-game-1" id="option_game_1_1001">
                                    <img class="image_top_1" src="./assets/image_1_sub/ใบกล้วย.png" alt="">
                                </a>
                                <div hidden id="result_1_1001">
                                    <div class="image-container">
                                        <img class="image_top_sub_1" src="./assets/image_1_sub/ใบกล้วย.png" alt="Image">
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
                                    <img class="image_top_1" src="./assets/image_1_sub/กล้วย.jpg" alt="">
                                </a>
                                <div hidden id="result_1_1002">
                                    <div class="image-container">
                                        <img class="image_top_sub_1" src="./assets/image_1_sub/กล้วย.jpg" alt="Image">
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
                                                <img src="./assets/image_1_sub/1001.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div class="col-2 col_image">
                            <center>
                                <a type="button" onclick="Select_option('3')" class="btn-img-game-1" id="option_game_1_1003">
                                    <img class="image_top_1" src="./assets/image_1_sub/ปลีของกล้วย.png" alt="">
                                </a>
                                <div hidden id="result_1_1003">
                                    <div class="image-container">
                                        <img class="image_top_sub_1" src="./assets/image_1_sub/ปลีของกล้วย.png" alt="Image">
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
                                    <img class="image_top_1" src="./assets/image_1_sub/หน่อกล้วย.jpg" alt="">
                                </a>
                                <div hidden id="result_1_1004">
                                    <div class="image-container">
                                        <img class="image_top_sub_1" src="./assets/image_1_sub/หน่อกล้วย.jpg" alt="Image">
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
                                    <img class="image_top_1" src="./assets/image_1_sub/ลำต้นกล้วย.jpg" alt="">
                                </a>
                                <div hidden id="result_1_1005">
                                    <div class="image-container">
                                        <img class="image_top_sub_1" src="./assets/image_1_sub/ลำต้นกล้วย.jpg" alt="Image">
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
                                                <img src="./assets/image_1_sub/1002.jpg">
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
        `;

        var show_game_1_1002 = `
        <center>
            <div class="card card_game_main card_game" id="cardElement" style="background-image: url('./assets/image_1/07.png');">
                <div class="card-body">
                    
                </div>
            </div>
        </center>
        `;
    </script>

    <script>
        var images = <?= json_encode($Array_Push_file) ?>; // รายการไฟล์ภาพทั้งหมด

        var currentImageIndex = 0; // ดัชนีภาพปัจจุบัน

        var prevImageLink = document.getElementById('prevImageLink');
        var nextImageLink = document.getElementById('nextImageLink');
        var currentImage = document.getElementById('currentImage');
        var currentPage = document.getElementById('currentPage');
        var totalPages = document.getElementById('totalPages');
        var cardShow = document.getElementById('cardShow');

        // กำหนดจำนวนหน้าทั้งหมด
        totalPages.textContent = '/' + images.length;

        // ซ่อนปุ่ม 'ก่อนหน้า' เมื่อเป็นภาพแรก
        if (currentImageIndex === 0) {
            prevImageLink.style.display = 'none';
        }

        // กำหนดภาพปัจจุบันตามดัชนีภาพปัจจุบัน
        currentImage.src = './assets/image_1/' + images[currentImageIndex];

        // แสดงหมายเลขหน้าปัจจุบัน
        currentPage.textContent = (currentImageIndex + 1);

        // กำหนดเหตุการณ์คลิกปุ่ม 'ก่อนหน้า' เพื่อเปลี่ยนเป็นภาพก่อน
        prevImageLink.addEventListener('click', function(event) {
            event.preventDefault(); // ป้องกันการเปลี่ยนเส้นทางของลิงก์

            if (currentImageIndex > 0) {
                currentImageIndex--;
                if (images[currentImageIndex] === 'show_game_1_1001') {
                    currentImage.src = '';
                    cardShow.innerHTML = show_game_1_1001;
                    cardShow.style.minWidth = '100%';
                    window.addEventListener('resize', setCardHeight);
                    setCardHeight();
                } else if (images[currentImageIndex] === 'show_game_1_1002') {
                    currentImage.src = '';
                    cardShow.innerHTML = show_game_1_1002;
                    cardShow.style.minWidth = '100%';
                    window.addEventListener('resize', setCardHeight);
                    setCardHeight();
                } else {
                    currentImage.src = './assets/image_1/' + images[currentImageIndex];
                    cardShow.innerHTML = ''; // ลบ HTML ของแคร์ทิ้งเมื่อเป็นรูปภาพที่ไม่ใช่ "show_game_1_1001"
                    cardShow.style.minWidth = '0%';
                }
            }

            // ซ่อนปุ่ม 'ก่อนหน้า' เมื่อเป็นภาพแรก
            if (currentImageIndex === 0) {
                prevImageLink.style.display = 'none';
            }

            // แสดงปุ่ม 'ถัดไป' เมื่อไม่ได้เป็นภาพสุดท้าย
            if (currentImageIndex < images.length - 1) {
                nextImageLink.style.display = 'inline-block';
            }

            // แสดงหมายเลขหน้าปัจจุบัน
            currentPage.textContent = (currentImageIndex + 1);
        });

        // ซ่อนปุ่ม 'ถัดไป' เมื่อเป็นภาพสุดท้าย
        if (currentImageIndex === images.length - 1) {
            nextImageLink.style.display = 'none';
        }

        // กำหนดเหตุการณ์คลิกปุ่ม 'ถัดไป' เพื่อเปลี่ยนเป็นภาพถัดไป
        nextImageLink.addEventListener('click', function(event) {
            event.preventDefault(); // ป้องกันการเปลี่ยนเส้นทางของลิงก์

            if (currentImageIndex < images.length - 1) {
                currentImageIndex++;
                if (images[currentImageIndex] === 'show_game_1_1001') {
                    currentImage.src = '';
                    cardShow.innerHTML = show_game_1_1001;
                    cardShow.style.minWidth = '100%';
                    window.addEventListener('resize', setCardHeight);
                    setCardHeight();
                } else if (images[currentImageIndex] === 'show_game_1_1002') {
                    currentImage.src = '';
                    cardShow.innerHTML = show_game_1_1002;
                    cardShow.style.minWidth = '100%';
                    window.addEventListener('resize', setCardHeight);
                    setCardHeight();
                } else {
                    currentImage.src = './assets/image_1/' + images[currentImageIndex];
                    cardShow.innerHTML = ''; // ลบ HTML ของแคร์ทิ้งเมื่อเป็นรูปภาพที่ไม่ใช่ "show_game_1_1001"
                    cardShow.style.minWidth = '0%';
                }
            }

            // แสดงปุ่ม 'ก่อนหน้า' เมื่อไม่ได้เป็นภาพแรก
            if (currentImageIndex > 0) {
                prevImageLink.style.display = 'inline-block';
            }

            // ซ่อนปุ่ม 'ถัดไป' เมื่อเป็นภาพสุดท้าย
            if (currentImageIndex === images.length - 1) {
                nextImageLink.style.display = 'none';
            }

            // แสดงหมายเลขหน้าปัจจุบัน
            currentPage.textContent = (currentImageIndex + 1);
        });
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
    </script>


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
</body>

</html>