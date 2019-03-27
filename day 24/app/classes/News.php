<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/25/2019
 * Time: 12:32 PM
 */

namespace App\classes;
use App\Classes\Connection;

class News
{
    public function saveNewsInfo(){
        $fileName = $_FILES['news_image']['name'];
        $directory = "../assets/images/";
        $imageUrl = $directory . $fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['news_image']['tmp_name']);

        if ($check) {
            if (file_exists($imageUrl)) {
                die('already exist');
            } else {
                if ($_FILES['news_image']['size'] > 1000000) {
                    die('file is too large.upload an image within 10kb');
                } else {
                    if ($fileType != 'jpg' && $fileType != 'png') {
                        die('Image type is not supported');
                    } else {
                        move_uploaded_file($_FILES['news_image']['tmp_name'], $imageUrl);
                        $sql = "Insert into news(news_title, news_description, news_image, status)
              values ('$_POST[news_title]', '$_POST[news_description]', '$imageUrl', '$_POST[status]')";
                        if(mysqli_query(Connection::dbConnection(), $sql)){
                            $msg = "news info saved successfully";
                            return $msg;
                        }else{
                            die('Query problem'.mysqli_error(Connection::dbConnection()));
                        }
                    }
                }
            }
        } else {
            die('please upload a image file');
        }


    }

    public  function selectNewsInfo(){
        $sql = "select * from news";
        if(mysqli_query(Connection::dbConnection(), $sql)){
            $result = mysqli_query(Connection::dbConnection(), $sql);
            return $result;
        }else{
            die('query problem'.mysqli_error(Connection::dbConnection()));
        }
    }

    public function allPublishNews(){
        $sql = "select * from news where status = 0";
        if(mysqli_query(Connection::dbConnection(), $sql)){
            $result = mysqli_query(Connection::dbConnection(),$sql);
            return $result;
        }else{
            die('query problem'.mysqli_error(Connection::dbConnection()));
        }
    }
}