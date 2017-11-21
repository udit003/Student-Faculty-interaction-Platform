<?php
	session_start();
	include 'config.php';

	$error_present = false;
  function clean_data(&$data)
  {
      $data = trim($data);
      $data = strip_tags($data);
      $data = htmlspecialchars($data); 
  }


if( isset($_POST['course_id']) ) 
{ 

    $course_id = $_POST['course_id'];
    
    clean_data($course_id);
    

  
    if(empty($course_id))
    {
        $error_present = true;
        $id_error= "Please enter course id";
        
    } 
   
}

if( isset($_POST['course_name']) ) 
{ 

    $course_name = $_POST['course_name'];
    clean_data($course_name);

  
    
    if(empty($course_name))
    {
       $error_present = true;
       $name_error = "Enter the course name";
    }

}

if (!$error_present) 
{

   $sql = "select course_id from courses where course_id='$course_id'";
   $result=$conn->query($sql);

   if($result->num_rows!=0)
    {
    	$id_error= "Course already available";
    }
  	else
    {
      $course_status="open";
      $dept=$_SESSION['department_id'];
  		 $sql="insert into courses values('$course_id','$course_name','$course_status','$dept')";
       echo $sql;
       $result=$conn->query($sql);

       
        if($result)
         {
            header("Location: faculty_dash.php");
            die();
         }
    }
    

}
?>