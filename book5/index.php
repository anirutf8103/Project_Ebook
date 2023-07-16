<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>หมาป่ากับต้นไม้ศักดิ์สิทธิ์</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>

    <?php

    // Array Push File
    $Array_Push_file = array(
        // Develop !!!!!!!!
        // "show_game_5_50010",

        "01.png",
        "02.png",
        "03.png",
        // 4
        "show_game_5_5001",
        // 5
        "show_game_5_5002",
        "06.png",
        // 7
        "show_game_5_5003",
        "08.png",
        // 9
        "show_game_5_5004",
        // 10
        "show_game_5_5005",
        "11.png",
        // 12
        "show_game_5_5006",
        "13.png",
        // 14
        "show_game_5_5007",
        // 15
        "show_game_5_5008",
        "16.png",
        // 17
        "show_game_5_5009",
        // 18
        "show_game_5_50010",
        "19.png",
        "20.png",
        "21.png",
        "22.png"
    );

    $Array_Game = array(
        "show_game_5_5001",
        "show_game_5_5002",
        "show_game_5_5003",
        "show_game_5_5004",
        "show_game_5_5005",
        "show_game_5_5006",
        "show_game_5_5007",
        "show_game_5_5008",
        "show_game_5_5009",
        "show_game_5_50010"
    );

    // print_r($Array_Push_file);
    ?>

    <!-- menu main -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a href="../index.php"><iconify-icon icon="ic:baseline-home"></iconify-icon> หน้าหลัก</a>
        <div id="btn_on_s">
            <a type="button" onclick="onSound()"><iconify-icon icon="teenyicons:sound-on-solid"></iconify-icon> เปิดเสียง</a>
        </div>
        <div id="btn_off_s" hidden>
            <a type="button" onclick="offSound()"><iconify-icon icon="teenyicons:sound-off-solid"></iconify-icon> ปิดเสียง</a>
        </div>
        <audio id="audioPlayer" src="../assets/sound/1.mp3" autoplay></audio>
    </div>

    <button onclick="openNav()" class="menu_main"><span class="iconify" data-icon="ep:menu" data-width="30" data-height="30"></span></button>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

        function onSound() {
            document.getElementById("btn_on_s").hidden = true;
            document.getElementById("btn_off_s").hidden = false;
            audioPlayer.muted = true;
        }

        function offSound() {
            document.getElementById("btn_off_s").hidden = true;
            document.getElementById("btn_on_s").hidden = false;
            audioPlayer.muted = false;
        }
    </script>
    <!-- /Menu Main -->

    <!-- partial:index.partial.html -->
    <div class="container mx-auto my-10">
        <div class="flip-book" id="demoBookExample">

            <!-- Start -->
            <div class="page page-cover page-cover-top">
                <div class="page-content">
                    <img style="height: 100vw;" src="../assets/image_5/01.png" alt="">
                </div>
            </div>
            <!-- /Start -->

            <!-- Content -->
            <?php foreach ($Array_Push_file as $keyArray_Push_file => $valueArray_Push_file) { ?>
                <?php if ($valueArray_Push_file != '01.png') { ?>
                    <?php if (!in_array($valueArray_Push_file, $Array_Game)) { ?>

                        <div class="page">
                            <div class="page-content">
                                <img style="height: 100vw;" src="../assets/image_5/<?= $valueArray_Push_file ?>" alt="">


                                <div class="page-footer"><?= $keyArray_Push_file ?></div>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="page">
                            <div class="page-content">
                                <?php
                                // echo $valueArray_Push_file
                                ?>

                                <iframe style="height: 100vw;width: 100%;" src="./game.php?<?= $valueArray_Push_file ?>" frameborder="0"></iframe>

                                <div class="page-footer"><?= $keyArray_Push_file ?></div>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            <?php } ?>
            <!-- /Content -->

            <!-- End -->
            <!-- <div class="page page-cover page-cover-bottom">
                <div class="page-content">
                    <h2>THE END</h2>
                </div>
            </div> -->
            <!-- /End -->

        </div>

        <!-- button next -->
        <div style="margin-top: 10%;">
            <div style="float: right;">
                <button id="nextPageButton">ถัดไป ></button>
            </div>
            <div style="float: left;">
                <button id="prevPageButton">
                    < ก่อนหน้า</button>
            </div>
        </div>

    </div>
    <!-- partial -->

    <script src='https://cdn.jsdelivr.net/npm/page-flip/dist/js/page-flip.browser.min.js'>
    </script>
    <!-- <script src="./script.js"></script> -->
    <script>
        const pageFlip = new St.PageFlip(document.getElementById("demoBookExample"), {
            width: 600, // base page width
            height: 450, // base page height

            size: "stretch",
            // set threshold values:
            minWidth: 315,
            maxWidth: 1000,
            minHeight: 420,
            maxHeight: 1350,

            maxShadowOpacity: 0.2, // Half shadow intensity
            showCover: true,
            mobileScrollSupport: false, // disable content scrolling on mobile devices

            controlsProps: {
                nextBtn: "#nextPageButton", // เลือกองค์ประกอบที่คุณต้องการเป็นปุ่มเปิดหน้าถัดไป
                nextBtn: "#prevPageButton", // เลือกองค์ประกอบที่คุณต้องการเป็นปุ่มเปิดหน้าถัดไป
            },
        });

        // load pages
        pageFlip.loadFromHTML(document.querySelectorAll(".page"));

        // document.querySelector(".page-total").innerText = pageFlip.getPageCount();

        // document.querySelector(".btn-prev").addEventListener("click", () => {
        //     pageFlip.flipPrev(); // Turn to the previous page (with animation)
        // });

        // document.querySelector(".btn-next").addEventListener("click", () => {
        //     pageFlip.flipNext(); // Turn to the next page (with animation)
        // });

        document.querySelector("#nextPageButton").addEventListener("click", () => {
            pageFlip.flipNext(); // Turn to the next page (with animation)
        });

        document.querySelector("#prevPageButton").addEventListener("click", () => {
            pageFlip.flipPrev(); // Turn to the next page (with animation)
        });

        // // เพิ่มการฟังก์ชันการคลิกปุ่ม
        // document.querySelector("#nextPageButton").addEventListener("click", function() {
        //     pageFlip.flipNext(); // เรียกใช้เมธอด flipNext() เพื่อเปลี่ยนหน้าถัดไป
        // });

        // // triggered by page turning
        // pageFlip.on("flip", (e) => {
        //     document.querySelector(".page-current").innerText = e.data + 1;
        // });

        // // triggered when the state of the book changes
        // pageFlip.on("changeState", (e) => {
        //     document.querySelector(".page-state").innerText = e.data;
        // });

        // // triggered when page orientation changes
        // pageFlip.on("changeOrientation", (e) => {
        //     document.querySelector(".page-orientation").innerText = e.data;
        // });
    </script>
</body>

</html>