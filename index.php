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
       

        <div id="page_main" data-role="page">
            <div class="ui-content" ui-body-b>
                <?php echo '<img class="header ui-grid-a" src="img/header.jpg"/>';?>  

                
                <input type="search" name="search" id="search-basic" value="" data-theme="a"/>

                <?php
                $queryHome = "SELECT * FROM item";
                $resultHome = mysqli_query($link, $queryHome) or die(mysqli_error($link));

                while ($rowItem = mysqli_fetch_array($resultHome)) { ?>
                
                    <ul id="itemList" data-role="listview" data-inset="true" data-theme="a  ">
                        <li><a href="#reservation">
                                <?php echo '<img class="thumbnail ui-grid-a" src="img/' . $rowItem['item_pic'] . '"/>';?>  
                                
                                <h2><?php echo '<h4>' . $rowItem['item_name'] . '</h4>';?></h2>
                                
                                <?php $availability = $rowItem['item_avail'];
                                    if ($availability == 1) {
                                        $available = "Available";
                                    } else {
                                        $available = "Reserved";
                                    }
                              ?>
                                <p> <?php echo '<p>' . $available  . '</p> <hr />';?></p>
                            </a>
                        </li>
                    </ul>

                <?php   
                }
                ?>
                
                
            </div>
        </div>
        
           <!-- Page for Reservation -->
        <div id="reservation" data-role="page">
            <div class="ui-content">
                
                <h4>Need the item? Reserve it with us! We'll contact you for the collection as soon as it's ready.</h4>

                <form method="post" action="doReserve.php" data-ajax="false">
                    <div class="ui-field-contain">
                        <select name="itemName" id="itemName">
                        
                <?php
                $queryHome = "SELECT * FROM item";
                $resultHome = mysqli_query($link, $queryHome) or die(mysqli_error($link));
                $number = 0;

                while ($rowItem = mysqli_fetch_array($resultHome)) {             
                    $option = $rowItem['item_name'];
                    $currentItemDesc = $rowItem['item_desc'];
                    $number + 1;
                    ?>
                 <option value="itemName"><?php echo '<p>' . $option  . '</p>'?></option>
               


                <?php 
                }
                ?>
                    </select>
                </br>

                    <label for="name">Name *:</label>
                    <input type="text" name="name" id="name" value="">
                    

                    <label for="email">Email *:</label>
                    <input type="text" name="email" id="email" value="">
                    
                    <label for="num">Phone Number *:</label>
                    <input type="number" name="num" id="num" value="">
                    
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>Choice Of Contact:</legend>
                        <input type="radio" name="contact" id="contact-1" value="email">
                        <label for="contact-1">Email</label>

                        <input type="radio" name="contact" id="contact-2" value="telephone" >
                        <label for="contact-2">Call</label>
                      </fieldset>

                    </br>
                    <label for="textarea">Additional Information:</label>
                    <textarea name="textarea" id="textarea" value="info"></textarea>

                        <br/>
                        <input type="submit" value="Reserve"/>

                    </div>
                    </form>

            </div>
        </div>

    </body>
</html>
<?php
mysqli_close($link);
?>