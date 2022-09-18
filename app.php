<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title> Tracker APP</title>
    <link rel="stylesheet" type="text/css" href="map.css">
</head>

<?php   
ob_start();
include("data.php");
$arr=json_decode(ob_get_clean());
?>

<body>
    <div>
        
        <h1>Tracker</h1>
        
    </div>
    
    <div>
        <h3>Latitude : <span id="Latitude"><?php echo $arr->{"Latitude"}?></span></h3>

    </div>
    
    <div>
        <h3>Longitude : <span id="Longitude"><?php echo $arr->{"Longitude"}?></span> </h3>
    </div>

    <div>
        <h3>Date/Hour : <span id="Date"><?php echo $arr->{"Date"}?></span></h3>
    </div>

    <div id="map"></div>

<script src="/data.js">
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHDHGpcsDEOlqBbnL1BkZlL2Tfpu8XVuM&callback=iniciarMap">    
</script>
    
</body>


</html>