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
// show_game_5_5001
if (isset($_GET['show_game_5_5001'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/04.png');">
            <div class="card-body">

                <a onclick="js_game_5001(1)" type="button" class="btn_game_5001_1"></a>
                <a onclick="js_game_5001(2)" type="button" class="btn_game_5001_2"></a>
                <a onclick="js_game_5001(3)" type="button" class="btn_game_5001_3"></a>
                <a onclick="js_game_5001(4)" type="button" class="btn_game_5001_4"></a>
                <a onclick="js_game_5001(5)" type="button" class="btn_game_5001_5"></a>

                <b class="label5001" id="label5001" hidden></b>

                <a type="button" class="btn_game_5002 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5001">
                    <img class="icon_5" style="width: 11vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5001 -->
                <div class="modal fade" id="Modal5001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>นักเรียนคิดว่าสิ่งเหล่านี้ เกี่ยวข้องกับนิทานเรื่องนี้อย่างไร</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5001 -->

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_5_5002
if (isset($_GET['show_game_5_5002'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/05.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_5002001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพวัว</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="image-container2">
                                    <a onclick="playSound5002()" type="button" class="mb-3">
                                        <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                                    </a>
                                    <img class="w-100" src="../assets/image_5_sub/5001.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->
                <audio id="sound5002" src="../assets/image_5_sub/5002.mp3"></audio>

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_5_5003
if (isset($_GET['show_game_5_5003'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/07.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_5003001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพม้า</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="image-container2">
                                    <a onclick="playSound5004()" type="button" class="mb-3">
                                        <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                                    </a>
                                    <img class="w-100" src="../assets/image_5_sub/5003.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal5002001 -->
                <audio id="sound5004" src="../assets/image_5_sub/5004.mp3"></audio>

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_5_5004
if (isset($_GET['show_game_5_5004'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/09.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_5003001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ พระราชา</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>พระเจ้าแผ่นดิน, พระมหากษัตริย์, กษัตริย์</b></h5>
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
// show_game_5_5005
if (isset($_GET['show_game_5_5005'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/10.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_5005001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/4008001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ภาพเรือเดินทะเล</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="../assets/image_5_sub/5005.jpg" alt="">
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
// show_game_5_5006
if (isset($_GET['show_game_5_5006'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/12.png');">
            <div class="card-body">

                <a onclick="playSound5006()" type="button" class="fix_btn_5006001 btn_set_main">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/5001.png" alt="">
                </a>
                <audio id="sound5006" src="../assets/image_5_sub/5006.mp3"></audio>

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_5_5007
if (isset($_GET['show_game_5_5007'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/14.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_5007001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 10vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่าต้นไม้ศักดิ์สิทธิ์โกรธพระราชา เพราะอะไร</b></h5>
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
// show_game_5_5008
if (isset($_GET['show_game_5_5008'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/15.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_5008001 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal5002001">
                    <img class="icon_5" style="width: 5vw;" src="../assets/icon/4008007.png" alt="">
                </a>
                <!-- Modal5002001 -->
                <div class="modal fade" id="Modal5002001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">ความหมายของ ไม่รู้จักพอ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>คนที่ไม่รู้จักพอเพียง ไม่รู้จักพออยู่ พอกิน <br><br>เมื่อพบอะไรก็ไขว่คว้าเรื่อยไป</b></h5>
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
// show_game_5_5009
if (isset($_GET['show_game_5_5009'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/17.png');">
            <div class="card-body">

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

                <a type="button" class="fix_btn_5009_1 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal2004">
                    <img class="icon_2001" style="width: 6vw;" src="../assets/icon/4008006.png" alt="">
                </a>
                <!-- Modal2004 -->
                <div class="modal fade" id="Modal2004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">โลภมาก..ลาภหาย</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/T-TdMDhzvPQ" frameborder="0"></iframe>
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
// show_game_5_50010
if (isset($_GET['show_game_5_50010'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/18.png');">
            <div class="card-body">

                <a type="button" class="fix_btn_50010_1 btn_set_main" data-bs-toggle="modal" data-bs-target="#Modal2004">
                    <img class="icon_5" style="width: 11vw;" src="../assets/icon/3001.png" alt="">
                </a>
                <!-- Modal2004 -->
                <div class="modal fade" id="Modal2004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border:  3px solid #C6E19F;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">คำถามชวนคิด</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5><b>นักเรียนคิดว่า หมาป่ามีลักษณะนิสัยอย่างไร</b></h5>
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
// show_game_5_50011
if (isset($_GET['show_game_5_50011'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/19.png');">
            <div class="card-body">

                <style>
                    #A1 {
                        position: absolute;
                        top: 50%;
                        left: 30%;
                    }

                    #A2 {
                        position: absolute;
                        top: 66%;
                        left: 48%;
                    }

                    #B1 {
                        position: absolute;
                        top: 70%;
                        left: 30%;
                    }

                    #B2 {
                        position: absolute;
                        top: 86%;
                        left: 48%;
                    }

                    #C1 {
                        position: absolute;
                        top: 90%;
                        left: 30%;
                    }

                    #C2 {
                        position: absolute;
                        top: 47%;
                        left: 48%;
                    }
                </style>

                <a id="A1" onclick="showALine('A1','A2','myLine')">
                    <img class="icon_5" style="width: 3vw;" src="../assets/icon/5002.png" alt="">
                </a>
                <a id="A2">
                    <img class="icon_5" style="width: 3vw;" src="../assets/icon/5002.png" alt="">
                </a>

                <a id="B1" onclick="showALine('B1','B2','myLine2')">
                    <img class="icon_5" style="width: 3vw;" src="../assets/icon/5002.png" alt="">
                </a>
                <a id="B2">
                    <img class="icon_5" style="width: 3vw;" src="../assets/icon/5002.png" alt="">
                </a>

                <a id="C1" onclick="showALine('C1','C2','myLine3')">
                    <img class="icon_5" style="width: 3vw;" src="../assets/icon/5002.png" alt="">
                </a>
                <a id="C2">
                    <img class="icon_5" style="width: 3vw;" src="../assets/icon/5002.png" alt="">
                </a>

                <div id="myLine" style="background-color: black; position: absolute; height: 2px;"></div>
                <div id="myLine2" style="background-color: black; position: absolute; height: 2px;"></div>
                <div id="myLine3" style="background-color: black; position: absolute; height: 2px;"></div>

                <script>
                    function connect(A1, A2, line) {
                        var A1Rect = A1.getBoundingClientRect();
                        var A2Rect = A2.getBoundingClientRect();

                        var A1CentreX = A1Rect.left + A1Rect.width / 2;
                        var A1CentreY = A1Rect.top + A1Rect.height / 2;
                        var A2CentreX = A2Rect.left + A2Rect.width / 2;
                        var A2CentreY = A2Rect.top + A2Rect.height / 2;

                        line.style.width = Math.sqrt(Math.pow(A2CentreX - A1CentreX, 2) + Math.pow(A2CentreY - A1CentreY, 2)) + 'px';

                        var angle = Math.atan2(A2CentreY - A1CentreY, A2CentreX - A1CentreX) * 180 / Math.PI;
                        line.style.transform = 'rotate(' + angle + 'deg)';

                        line.style.top = (A1CentreY + A2CentreY) / 2 - 1 + 'px'; // "- 1" is to offset the line's own height
                        line.style.left = (A1CentreX + A2CentreX) / 2 - line.offsetWidth / 2 + 'px';
                    }

                    window.onload = function() {
                        var lines = ['myLine', 'myLine2', 'myLine3'];
                        var pairs = [
                            ['A1', 'A2'],
                            ['B1', 'B2'],
                            ['C1', 'C2']
                        ];

                        lines.forEach(function(lineId, index) {
                            var A1 = document.getElementById(pairs[index][0]);
                            var A2 = document.getElementById(pairs[index][1]);
                            var line = document.getElementById(lineId);
                            line.style.visibility = "hidden";

                            connect(A1, A2, line);
                        });
                    };

                    window.onresize = function() {
                        var lines = ['myLine', 'myLine2', 'myLine3'];
                        var pairs = [
                            ['A1', 'A2'],
                            ['B1', 'B2'],
                            ['C1', 'C2']
                        ];

                        lines.forEach(function(lineId, index) {
                            var A1 = document.getElementById(pairs[index][0]);
                            var A2 = document.getElementById(pairs[index][1]);
                            var line = document.getElementById(lineId);

                            connect(A1, A2, line);
                        });
                    };

                    function showALine(id1, id2, lineId) {
                        var A1 = document.getElementById(id1);
                        var A2 = document.getElementById(id2);
                        var line = document.getElementById(lineId);

                        connect(A1, A2, line);
                        line.style.visibility = "visible";
                    }
                </script>

            </div>
        </div>
    </center>
<?php
}
?>
<?php
// show_game_5_50012
if (isset($_GET['show_game_5_50012'])) {
?>
    <center>
        <div class="card card_game_main card_game" id="cardElement" style="background-image: url('../assets/image_5/20.png');">
            <div class="card-body">

                <style>
                    .card_game_50012 {
                        height: 70vh;
                    }

                    .cardgame50012 {
                        border: 3px solid #ffabab;
                        background-color: #ffabab;
                        width: 30vw;
                        height: 30vw;
                        border-radius: 50%;
                    }

                    #shownumber12{
                        font-size: 80px;
                    }
                </style>

                <div class="card_game_50012">
                    <center>
                        <div class="col-4">
                            <div class="card cardgame50012 mt-5">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <h1>
                                        <b id="shownumber12">
                                            <h3>ผู้โชคดีคือ...</h3>
                                        </b>
                                    </h1>
                                </div>
                            </div>
                            <button onclick="random12()" class="btn_set_main mt-3 btn btn-lg btn-danger"><span class="iconify" data-icon="fad:random-1dice"></span> สุ่ม</button>
                        </div>
                    </center>

                    <script>
                        let myInterval;
                        let numbers;

                        function random12() {
                            // Clear interval if it already exists
                            if (myInterval) {
                                clearInterval(myInterval);
                            }

                            // Initialize or re-initialize the numbers array
                            numbers = Array.from({
                                length: 30
                            }, (_, i) => i + 1);

                            // Generate a new random number every 0.2 seconds
                            myInterval = setInterval(function() {
                                // Get a random index
                                let randomIndex = Math.floor(Math.random() * numbers.length);
                                let randomNumber = numbers[randomIndex];

                                // Remove the number from the array
                                numbers.splice(randomIndex, 1);

                                // Show the number in the HTML
                                document.getElementById('shownumber12').innerHTML = randomNumber;
                            }, 100); // 200 milliseconds = 0.2 seconds

                            // After 3 seconds, stop the interval
                            setTimeout(function() {
                                clearInterval(myInterval);
                            }, 3000); // 3000 milliseconds = 3 seconds
                        }
                    </script>




                </div>

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

    function playSound5002() {
        let sound = document.getElementById('sound5002');
        sound.play();
    }

    function playSound5004() {
        let sound = document.getElementById('sound5004');
        sound.play();
    }

    function playSound5006() {
        let sound = document.getElementById('sound5006');
        sound.volume = 1.0; // เพิ่มระดับเสียงที่สูงที่สุด
        sound.play();
    }

    function js_game_5001(value) {
        var array = {
            1: 'วัว',
            2: 'ม้า',
            3: 'พระราชา',
            4: 'ต้นไม้ศักดิ์สิทธิ์',
            5: 'หมาป่า'
        }

        var label = document.getElementById("label5001");
        label.hidden = false;
        label.innerHTML = array[value];
    }
</script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>