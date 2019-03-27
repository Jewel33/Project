<?php

$link = mysqli_connect('localhost', 'root', '', 'demo');

if(isset($_POST['btn'])) {



    $directory = "images/";
    $imageUrl = $directory . $_FILES['imageFile']['name'];
    $fileType = pathinfo($_FILES['imageFile']['name'], PATHINFO_EXTENSION);
    $check = getimagesize($_FILES['imageFile']['tmp_name']);

    if ($check) {
        if (file_exists($imageUrl)) {
            die('already exist');
        } else {
            if ($_FILES['imageFile']['size'] > 1000000) {
                die('file is too large.upload an image within 10kb');
            } else {
                if ($fileType != 'jpg' && $fileType != 'png') {
                    die('Image type is not supported');
                } else {
                    move_uploaded_file($_FILES['imageFile']['tmp_name'], $imageUrl);

                    $sql = "insert into image(imageFile) values('$imageUrl')";
                    mysqli_query($link, $sql);
                    echo "image upload & save successfully";

                }
            }
        }
    } else {
        die('please upload a image file');
    }
}


?>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>select file</td>
            <td><input type="file" name="imageFile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
<?php
$sql = "select * from image";
$result = mysqli_query($link, $sql);
?>

<table>
    <?php
      while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><img src="<?php echo  $row['imageFile']; ?>" height="100" width="100" ></td>
    </tr>
    <?php }?>

</table>
