<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>กล้วยสองปลี</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    $folder = '../assets/image_1';  // ชื่อโฟลเดอร์ที่ต้องการดึงไฟล์

    // ดึงรายการไฟล์ทั้งหมดในโฟลเดอร์
    $files = scandir($folder);

    // เรียงลำดับชื่อไฟล์
    natcasesort($files);

    // Array Push File
    $Array_Push_file = array();

    // วนลูปเพื่อแสดงรายการไฟล์ที่ดึงมา
    foreach ($files as $file) {
        if (
            $file !== '.' && $file !== '..' && $file !== '.DS_Store' && $file !== '04.png' &&
            $file !== '07.png' && $file !== '09.png' && $file !== '10.png' && $file !== '11.png' &&
            $file !== '14.png' && $file !== '18.png' && $file !== '19.png' && $file !== '23.png' && $file !== '24.png'
        ) {
            array_push($Array_Push_file, $file);
        }
    }

    // Array Game
    $Array_Game = array(
        'show_game_1_1001',
        'show_game_1_1002',
        'show_game_1_1003',
        'show_game_1_1004',
        'show_game_1_1005',
        'show_game_1_1006',
        'show_game_1_1007',
        'show_game_1_1008',
        'show_game_1_1009',
        'show_game_1_1010'
    );

    // แทรก "show_game_1_1001"
    array_splice($Array_Push_file, 2, 0, $Array_Game[0]);
    // แทรก "show_game_1_1002"
    array_splice($Array_Push_file, 4, 0, $Array_Game[1]);
    // แทรก "show_game_1_1003"
    array_splice($Array_Push_file, 5, 0, $Array_Game[2]);
    // แทรก "show_game_1_1004"
    array_splice($Array_Push_file, 6, 0, $Array_Game[3]);
    // แทรก "show_game_1_1005"
    array_splice($Array_Push_file, 7, 0, $Array_Game[4]);
    // แทรก "show_game_1_1006"
    array_splice($Array_Push_file, 9, 0, $Array_Game[5]);
    // แทรก "show_game_1_1007"
    array_splice($Array_Push_file, 12, 0, $Array_Game[6]);
    // แทรก "show_game_1_1008"
    array_splice($Array_Push_file, 13, 0, $Array_Game[7]);
    // แทรก "show_game_1_1009"
    array_splice($Array_Push_file, 15, 0, $Array_Game[8]);
    // แทรก "show_game_1_1010"
    array_splice($Array_Push_file, 16, 0, $Array_Game[9]);
    ?>

    <!-- partial:index.partial.html -->
    <div class="container mx-auto my-10">
        <div class="flip-book" id="demoBookExample">

            <!-- Start -->
            <div class="page page-cover page-cover-top">
                <div class="page-content">
                    <img style="height: 100vw;" src="../assets/image_1/01.png" alt="">
                </div>
            </div>
            <!-- /Start -->

            <!-- Content -->
            <?php foreach ($Array_Push_file as $keyArray_Push_file => $valueArray_Push_file) { ?>
                <?php if ($valueArray_Push_file != '01.png') { ?>
                    <?php if (!in_array($valueArray_Push_file, $Array_Game)) { ?>

                        <div class="page">
                            <div class="page-content">
                                <img style="height: 100vw;" src="../assets/image_1/<?= $valueArray_Push_file ?>" alt="">


                                <div class="page-footer"><?= $keyArray_Push_file ?></div>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="page">
                            <div class="page-content">
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

    </div>
    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/npm/page-flip/dist/js/page-flip.browser.min.js'>
    </script>
    <script src="./script.js"></script>

</body>

</html>