<!doctype html>
<html>
   <head>
           <title>CR Gourmet Coffee</title>
           <meta charset='utf-8'>
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="css/bootstrap.css" />
           <link rel="stylesheet" href="css/crgourmetcoffee.css" />
	   <script src='js/jquery-3.1.0.min.js'></script>
	   <script src='js/bootstrap.js'></script>
    </head>  
    <body>
       <div id="header">
            <?php
                include('common/navbar.html');
            ?>
        </div>
        <div id="content">
            <?php
                   (isset($_GET['content']))? include('content/' . $_GET['content'] . '.php') : include('content/home.php');
              ?>
        </div>
        <div id="footer">
            <?php
                  include('common/footer.html');
              ?>
        </div>
    </body>
</html>
