<?php

require_once('../config.php');
	
require_once('auth.php');

$allowedExts = array("pdf", "doc","docx","PDF","DOC","DOCX");
$temp = explode(".", $_FILES["file"]["name"]);

$extension = end($temp);

$file_name=$_FILES["file"]["name"];

if (in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
	
	else if ($_FILES["file"]["size"] > 1000000) {
    $_SESSION['large_file'] = 1;

		session_write_close();

		header("location: upload.php");

		exit();
}
  else
    {
   
    if (file_exists("resumes/" . $_FILES["file"]["name"]))
      {
      $_SESSION['exist'] = 1;

		session_write_close();

		header("location: upload_resume.php");

		exit();
      }
    else
      {
	  
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "resumes/" . $_FILES["file"]["name"]);
	  $query=mysql_query("update t_employee set Resume='resumes/$file_name' where User_id=$uid");
		
		if($query==true)
		{
		
		$_SESSION['uploaded_success']=1;
		session_write_close();
		header("location: upload_resume.php");
		exit();
		
		
		}
 
      }
    }
  }
else
  {
  $_SESSION['invalid'] = 1;

		session_write_close();

		header("location: upload_resume.php");

		exit();
  }
?>