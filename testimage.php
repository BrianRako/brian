<?php
include_once 'includes/class/bdd.php';
$msg = "";

// If upload button is clicked ... 
if (isset($_POST['upload'])) {
    if (isset($_FILES['uploadfile']) && !empty($_FILES['uploadfile']['name'])) {

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/produit/" . $filename;

        $stmt = $bdd->prepare('INSERT INTO produit (images) VALUES( ?)');
        $stmt->execute(array("https://rakowitsch-brian.go.yj.fr/images/produit/" .  $filename));


        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
        
        echo "Pas d'image selectionnez";
    }
}

$data = $bdd->prepare('SELECT * FROM produit');
$data->execute();
?>

<!DOCTYPE html>
<html>
<style>
    #content {
        width: 50%;
        margin: 20px auto;
        border: 1px solid #cbcbcb;
    }

    form {
        width: 50%;
        margin: 20px auto;
    }

    form div {
        margin-top: 5px;
    }

    #img_div {
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #cbcbcb;
    }

    #img_div:after {
        content: "";
        display: block;
        clear: both;
    }

    img {
        float: left;
        margin: 5px;
        width: 300px;
        height: 140px;
    }
</style>

<head>
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="content">

        <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="uploadfile" value="" />

            <div>
                <button type="submit" name="upload">
                    UPLOAD
                </button>
            </div>
        </form>
        <?php foreach ($data as $row) { ?>
            <img src="<?= $row['images']; ?>" alt="" srcset="">

        <?php } ?>
    </div>
</body>

</html>