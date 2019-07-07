<?php
include ("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Donare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>
        <?php include ("header.php"); ?>
        <?php include ('footer.php');?>

        <!-- Page for about us -->
        <div id="aboutus" data-role="page">
            <div class="ui-content" data-theme="b">

                <img class="logo" src="img/aboutcenter.jpg"/>
                <h4>Donare is an anti-trafficking body that aims to celebrate and protect a migrant worker’s dignity and rights. With about 1.2 million migrant workers in Singapore, HOME has helped countless migrants, some of whom are survivors of human trafficking or forced labour. HOME also provides shelter, health screenings and a variety of vocational courses through HOME Academy.</h3>

          
                <h4>Opening Hours:</h4>
                <p>9.00am to 10.00pm, Monday to Friday</p>
                
                <h4>Visit us:</h4>
                <p>CWO Centre at 96 Waterloo Street, S(187967)</p>

                <div id="googleMap" style="width:100%;height:400px;"></div>

                <script>
                    
                function myMap() {
                    
                    
                var mapProp= {
                  center:new google.maps.LatLng(1.299710, 103.852030),
                  zoom:15,
                };
                
              
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                 var myLatLng = {lat: 1.299710, lng: 103.852030};

                
                  var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Hello World!'
                  });
                
                }
                
                 
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAneYlThFaTOduri4FXRjifKHGDYXI9pUU&callback=myMap"></script>


            </div>
        </div>

    </body>
</html>
<?php
mysqli_close($link);
?>