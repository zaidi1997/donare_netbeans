<?php
include ("dbconn.php");

$message = "";


if (isset($_POST['name']) && strlen($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $message = $message . "Name is required. <br/>";
}

if (isset($_POST['desc']) && strlen($_POST['desc'])) {
    $description = $_POST['desc'];
} else {
    $message = $message . "Description is required. <br/>";
}


//$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["image"]["name"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//    if($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;
//    }
//}
//// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
//// Check file size
//if ($_FILES["image"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
//// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//}
//// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//} else {
//    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
//        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
//    } else {
//        echo "Sorry, there was an error uploading your file.";
//    }
//}


if (isset($_POST['collection_address']) && strlen($_POST['collection_address'])) {
    $collection_address = $_POST['collection_address'];
} else {
    $message = $message . "Name is required. <br/>";
}

if (isset($_POST['collection_date']) && strlen($_POST['collection_date'])) {
    $collection_date = $_POST['collection_date'];
} else {
    $message = $message . "Name is required. <br/>";
}


if (strlen($message) == 0) {
    $query = "INSERT into item (item_name, item_desc, item_collection_address, item_collection_date) VALUES ('$name', '$description', '$collection_address', '$collection_date')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result == 1) {
        $message = "Successfully placed for donation! <br /> We will contact you shortly. <br/>";
    } else {
        $message = "Unable to make donation. Please try again. <br/>";
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