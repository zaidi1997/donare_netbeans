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

        
        
           <!-- Page for Reservation -->
        <div id="donate_page" data-role="page">
            <div class="ui-content">
                
                        <h4>Insert information for the item to be donated</h4>


                <form method="post" action="doDonate.php" data-ajax="false" enctype="multipart/form-data">
                    <label for="name">Item Name *:</label>
                    <input type="text" name="name" id="name" value="">

                    <label for="desc">Item description:</label>
                    <textarea name="desc" id="desc"></textarea>
                    
                    <label for="collection_address">Address:</label>
                    <input type="text" name="collection_address" id="collection_address" value="">
                    
                    
                    <label for="collection_date">Date for us to collect:</label>
                    <input type="text" name="collection_date" id="collection_date" value="">

              
                    <label for="image">Upload image:</label>
                    <input type="file" name="image" id="image">
                         
                     <br/>
                        <input type="submit" value="Donate"/>

                    </div>
                    </form>

            </div>
        </div>

    </body>
</html>
<?php
mysqli_close($link);
?>