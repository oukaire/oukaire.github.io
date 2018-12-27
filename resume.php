<!DOCTYPE HTML>
<html>
  <head>
    <title>Onyi Ukay</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="author" content="Onyi Ukay" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/leaf.css" />
    <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
  </head>
  <body class="is-preload">
    <div id="bg"></div>
    <div id="wrapper">
      <div class="book">
        <div class="leaf">

          <section class="first" id="cv">
            <h2>curriculum vitae</h2>
            <div class="content">
              <?php include 'html/cv.html'; ?>
            </div>
            <footer id="footer">
              <ul class="icons">
               <li><a href="index.php" class="fa-home" role="button"></a></li>
              </ul>
              <ul class="copyright">
                <li>&copy; 2018 Onyi Ukay</li>
                <li>Theme: <a href="https://html5up.net/identity" target="_blank">HTML5 UP</a></li>
              </ul>
            </footer>
          </section>

          <section class="second">
            <h2>courses</h2>
            <div class="content">
              <?php include 'html/courses.html'; ?>
            </div>
            <footer id="footer">
              <ul class="icons">
               <li><a href="#" class="fa-hand-o-left" role="button" onclick="flip()"></a></li>
              </ul>
            </footer>
          </section>

        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="src/main.js" type="text/javascript"></script>
    <script src="src/leaf.js" type="text/javascript"></script>
  </body>
</html>
