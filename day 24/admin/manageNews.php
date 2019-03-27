<?php
session_start();
if($_SESSION == null){
    header('Location:login.php');
}

require_once "../vendor/autoload.php";
use App\Classes\Login;
use App\Classes\News;

$news = new News();
$result = $news->selectNewsInfo();

$login = new Login();
if(isset($_GET['logout'])){
    $login->adminLogout();
}
/*use App\classes\Student;

$message='';
if(isset($_POST['btn'])){
    $student = new Student();
    $message = $student->saveStudentInfo();
}
*/
?>

<html>
<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'include/menu.php'; ?>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Sl No.</th>
                                <th>News Title</th>
                                <th>News Drescription</th>
                                <th>News Image</th>
                                <th>Publication Status</th>

                            </tr>
                            <?php while ($newsInfo = mysqli_fetch_assoc($result)){

                            ?>
                            <tr>
                                <td><?php  echo $newsInfo['id']; ?></td>
                                <td><?php  echo $newsInfo['news_title']; ?></td>
                                <td><?php  echo $newsInfo['news_description']; ?></td>
                                <td><img src="<?php  echo $newsInfo['news_image']; ?>" height="100" width="100" ></td>
                                <td>
                                    <?php
                                    if($newsInfo['status'] ==0){
                                        echo "published";
                                        }
                                        else{
                                            echo "unpublished";
                                        } ?>

                                </td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
