

    <!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Localisation</title>

  
    </head>
    
    <body>
    
<h1 style='margin-left:43%'>Localisation</h1>
<form class="form-inline" method='post' action='index.php'>
  <div class="form-group mb-2"  style='margin-left:43%;margin-top:5% '>
    <input type='text' name='ip' placeholder='Adresse IP' >
  
  <button name='locate' class="btn btn-primary mb-2" value='' >Locate</button>
  </div>
</form>

</body>
    
    </html>

    <?php
   
    if (isset($_POST['ip'])) {
        $ip = $_POST['ip'];
   
        $url = "http://ip-api.com/json/".$ip."?lang=fr&fields=message,country,city,lat,lon,query";

        $info = file_get_contents($url);
        $file = str_replace('"', '   ', $info);
        echo'<br><center>'.'Les coordonnees correspondant a cette adresse ip sont:.</center><br>';
        
print($file);
    }
    else {
        echo'<center>'.'Vous n\'avez rien encore ecrit.</center>';
    }
    ?>