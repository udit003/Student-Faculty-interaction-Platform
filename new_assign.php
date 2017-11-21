<?php
	 date_default_timezone_set("Asia/Kolkata");
	include 'config.php';

	$error_present = false;
  function clean_data(&$data)
  {
      $data = trim($data);
      $data = strip_tags($data);
      $data = htmlspecialchars($data); 
  }


if( isset($_POST['assign-title']) ) 
{ 

    $assign_title = $_POST['assign-title'];
    
    clean_data($assign_title);
    

  
    if(empty($assign_title))
    {
        $error_present = true;
        $title_error= "Please enter assignment title";
        
    } 
   
}

if( isset($_POST['assign-ques']) ) 
{ 

    $assign_ques = $_POST['assign-ques'];
    
    clean_data($assign_ques);
    

  
    if(empty($assign_ques))
    {
        $error_present = true;
        $ques_error= "Please enter assignment question";
        
    } 
   
}

if( isset($_POST['start-date']) ) 
{ 

    $start_date = $_POST['start-date'];
    
    clean_data($start_date);
    $start_date = date('Y-m-d', strtotime(str_replace('-', '/', $start_date)));


   
}

if( isset($_POST['start-time']) ) 
{ 

    $start_time = $_POST['start-time'];
    
    clean_data($start_time);
   $start_time=date('H:i:s',strtotime($start_time));
    
   
}

if( isset($_POST['end-date']) ) 
{ 

    $end_date = $_POST['end-date'];
    
    clean_data($end_date);
    $end_date = date('Y-m-d', strtotime(str_replace('-', '/', $end_date)));
 
}

if( isset($_POST['end-time']) ) 
{ 

    $end_time = $_POST['end-time'];
    
    clean_data($end_time);
    $end_time=date('H:i:s',strtotime($end_time));
}



if (!$error_present) 
{
        $start = $start_date.' '.$start_time;
        $start = date("Y-m-d H:i:s",strtotime($start));

        $end = $end_date.' '.$end_time;
        $end = date("Y-m-d H:i:s",strtotime($end));
       

        $now_=date('Y-m-d H:i:s');
        $error=false;
        if($start<$now_)
        {
          $error=true;
          $start_time_error="Invalid start date or time";
        }
        if($end<$start)
        {
          $error=true;
          $end_time_error="Invalid end date or time";
        }
        if(!$error)
        {
          $course_id=$_GET['course'];
    		  $sql="insert into assignments (title,assignment_ques,course_id,start_date,end_date)values('$assign_title','$assign_ques','$course_id','$start','$end')";
         
          $result=$conn->query($sql);
          if($result)
           {
                header("Location: faculty_assignment.php?course=".$_SESSION['create_assign_course']);
                die();
            }  
              else 
                echo $conn->error;
          }
    
    

}
?>