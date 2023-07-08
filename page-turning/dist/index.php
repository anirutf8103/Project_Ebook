<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Page Turning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container mx-auto my-20">
    <div class="flip-book" id="demoBookExample">

        <div class="page page-cover page-cover-top">
            <div class="page-content">
                <img src="../../assets/image_1/01.png" alt="">
            </div>
        </div>

        <div class="page">
            <div class="page-content">
                <!-- <div class="page-text"> -->
                    <img src="../../assets/image_1/02.png" alt="">
                <!-- </div> -->
            
               
                <div class="page-footer">2</div>
            </div>
        </div>
        <div class="page">
            <div class="page-content">
                <!-- <h2 class="page-header">Page header - 2</h2> -->
                
                <!-- <div class="page-text"> -->
                    <img src="../../assets/image_1/04.png" alt="">
                <!-- </div> -->
                <div class="page-footer">3</div>
            </div>
        </div>
        <div class="page">
            <div class="page-content">
                <!-- <div class="page-text"> -->
                    <img src="../../assets/image_1/05.png" alt="">
                <!-- </div> -->

                <div class="page-footer">4</div>
            </div>
        </div>

        <div class="page page-cover page-cover-bottom">
            <div class="page-content">
                <h2>THE END</h2>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/page-flip/dist/js/page-flip.browser.min.js'>
  </script><script  src="./script.js"></script>

</body>
</html>
