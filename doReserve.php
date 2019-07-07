<?php
include ("dbconn.php");

$message = "";

if (isset($_POST['itemName']) && strlen($_POST['itemName'])) {
    $itemName = $_POST['itemName'];
} else {
    $message = $message . "Item name is required. <br/>";
}

if (isset($_POST['name']) && strlen($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $message = $message . "Email is required. <br/>";
}

if (isset($_POST['email']) && strlen($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $message = $message . "Email is required. <br/>";
}

if (isset($_POST['num']) && strlen($_POST['num'])) {
    $num = $_POST['num'];
} else {
    $message = $message . "Number is required. <br/>";
}


$choice = "Not Selected;";
if (isset($_POST['contact']) && strlen($_POST['contact'])) {
    $choice = $_POST['contact'];
}

$additionalinformation = "Empty;";
if (isset($_POST['textarea']) && strlen($_POST['textarea'])) {
    $additionalinformation = $_POST['textarea'];
}




if (strlen($message) == 0) {
    $query = "INSERT into reservation (reservation_item, reservation_name, reservation_email, reservation_num, reservation_contact_choice, reservation_add_info) VALUES ('$itemName', '$name', '$email', '$num', '$choice', '$additionalinformation')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result == 1) {
        $message = "Successfully Reserved! <br /> We will contact you shortly. <br/>";
    } else {
        $message = "Unable to make reservation. Please try again. <br/>";
    }
}
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
        <div id="subscribe" data-role="page" data-theme="c">
            <div data-role="header">
                <h2>Donare</h2>
                <a href="" data-rel="back" rel="external" class="ui-btn ui-icon-back ui-corner-all ui-btn-icon-notext">Back</a>

            </div>
            <div class="ui-content">
                <div class="ui-body ui-body-c">
                    <?php
                    echo $message;
                    ?>
                </div>
                <a href="index.php" rel="external" class="ui-btn ui-btn-inline ui-icon-home ui-corner-all ui-btn-icon-left">Home</a>
            </div>
        </div>

    </body>
</html>
<?php
mysqli_close($link);
?>