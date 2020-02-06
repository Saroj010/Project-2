<?php 
error_reporting(0);
?>
<!DOCTYPE html>
 <html>
 <head>
     <title>weather app</title>
 </head>
 <link rel="stylesheet" type="text/css" href="../css/images/style.css">
 <body>
    <div class="container">
        <form action="" method="POST">
             <div class="form-group">
                <input type="text" class="form-input" name="name" id="text" placeholder="Enter Location"/>
              </div>
             <div class="form-group">
                 <button type="submit" name="submit" id="submit" class="form-submit">Submit</button>
             </div>
             <div class="Temperataure">
             	<h1>
                    <?php 
                    require_once __DIR__ . '/vendor/autoload.php';
                    $hello = new Pradip\tempture\Temperature;
                    ?>
                    </h1>
             </div>
        </form>
        </div>
</body>
</html>
