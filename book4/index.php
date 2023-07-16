<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>นายแรง</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>

    <?php
    $folder = '../assets/image_4';  // ชื่อโฟลเดอร์ที่ต้องการดึงไฟล์

    // ดึงรายการไฟล์ทั้งหมดในโฟลเดอร์
    $files = scandir($folder);

    // เรียงลำดับชื่อไฟล์
    natcasesort($files);

    // Array Push File
    $Array_Push_file = array(
        // Develop !!!!!!!!
        // "show_game_2_20025",

        "01.png",
        "02.png",
        "03.png",
        // 4
        "show_game_2_2001",
        // 5
        "show_game_2_2002",
        "06.png",
        // 7
        "show_game_2_2003",
        "08.png",
        // 9
        "show_game_2_2004",
        // 10
        "show_game_2_2005",
        "11.png",
        "12.png",
        "13.png",
        "14.png",
        // 15
        "show_game_2_2006",
        "16.png",
        // 17
        "show_game_2_2007",
        "18.png",
        // 19
        "show_game_2_2008",
        // 20
        "show_game_2_2009",
        // 21
        "show_game_2_20010",
        // 22
        "show_game_2_20011",
        // 23
        "show_game_2_20012",
        // 24
        "show_game_2_20013",
        "25.png",
        "26.png",
        "27.png",
        // 28
        "show_game_2_20014",
        // 29
        "show_game_2_20015",
        "30.png",
        "31.png",
        // 32
        "show_game_2_20016",
        "33.png",
        "34.png",
        "35.png",
        "36.png",
        "37.png",
        // 38
        "show_game_2_20017",
        // 39
        "show_game_2_20018",
        // 40
        "show_game_2_20019",
        // 41
        "show_game_2_20020",
        // 42
        "show_game_2_20021",
        "43.png",
        "44.png",
        "45.png",
        // 46
        "show_game_2_20022",
        "47.png",
        // 48
        "show_game_2_20023",
        // 49
        "show_game_2_20024",
        // 50
        "show_game_2_20025",
        "51.png",
        "52.png"
    );

    // // วนลูปเพื่อแสดงรายการไฟล์ที่ดึงมา
    // foreach ($files as $file) {
    //     if (
    //         $file !== '.' && $file !== '..' && $file !== '.DS_Store'
    //     ) {
    //         array_push($Array_Push_file, $file);
    //     }
    // }

    $Array_Game = array(
        "show_game_2_2001",
        "show_game_2_2002",
        "show_game_2_2003",
        "show_game_2_2004",
        "show_game_2_2005",
        "show_game_2_2006",
        "show_game_2_2007",
        "show_game_2_2008",
        "show_game_2_2009",
        "show_game_2_20010",
        "show_game_2_20011",
        "show_game_2_20012",
        "show_game_2_20013",
        "show_game_2_20014",
        "show_game_2_20015",
        "show_game_2_20016",
        "show_game_2_20017",
        "show_game_2_20018",
        "show_game_2_20019",
        "show_game_2_20020",
        "show_game_2_20021",
        "show_game_2_20022",
        "show_game_2_20023",
        "show_game_2_20024",
        "show_game_2_20025"
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
                    <img style="height: 100vw;" src="../assets/image_4/01.png" alt="">
                </div>
            </div>
            <!-- /Start -->

            <!-- Content -->
            <?php foreach ($Array_Push_file as $keyArray_Push_file => $valueArray_Push_file) { ?>
                <?php if ($valueArray_Push_file != '01.png') { ?>
                    <?php if (!in_array($valueArray_Push_file, $Array_Game)) { ?>

                        <div class="page">
                            <div class="page-content">
                                <img style="height: 100vw;" src="../assets/image_4/<?= $valueArray_Push_file ?>" alt="">


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