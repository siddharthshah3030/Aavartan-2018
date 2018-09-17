<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Dashboard</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
<style>
    body{
        background: url("https://media.giphy.com/media/322Gg7gspi2HlkuqD8/giphy.gif");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;

    }
    table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee;
    color:black;
	}
    th:nth-of-type(even) { 
	background: #eee;
    color:black;
	}




td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>
</head>
<body>
 <center>
<?php
include('connection.php');
session_start();
if(!isset($_SESSION['id'])){
   echo'<h1 class="heading" style="margin:70px 0px 50px 0px;">You must login first to access your dashboard!</h1>';
}
else{ 
     $id = $_SESSION['id'];
   $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<h1 class='heading' style='margin:70px 0px 50px 0px;'>Dashboard</h1>
    <div class='row'>
        <div class='col-lg-7'>
             <h2>Personal Info</h2>
    <table id='personalinfo' class='table table-hover table-bordered' style='text-align: center;'>
        <tr>
            <th>User id</th>
            <td>".$row['id']."</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>".$row['name']."</td>
        </tr>
        <tr>
            <th>College</th>
            <td>".$row['college']."</td>
        </tr>
        <tr>
            <th>Branch</th>
            <td>".$row['branch']."</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>".$row['course']."</td>
        </tr>
        <tr>
            <th>Semester</th>
            <td>".$row['semester']."</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>".$row['email']."</td>
        </tr>
        <tr>
            <th>Phone No.</th>
            <td>+91-<span id='number'>".$row['phoneno']."</span></td>
        </tr>
    </table>
        </div>
        <div class='col-lg-5''>
             <h2>Registered Events</h2>
    <table class='table table-condensed table-hover table-bordered' style='text-align: center;'>";
    
    
    $sql = "SELECT * FROM registered_events WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
    
    
    $sql = "SELECT event_name FROM events";
    $result2 = mysqli_query($link, $sql);
    if(!$result2){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
   
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $sno = 1;
    for($i=1;$i<18;$i++)
    {
        if($row[$i] == 1)
        {
            echo "<tr>
            <th>".$sno."</th>
            <td>".$row2['event_name']."</td>
            </tr>";
            $sno++;
        }
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

    }
        
echo "</table>
        </div>
    </div>";
}
?>
</center>
</body>
</html>