<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['adminId']))
{
	header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/home</title>
    <link rel="stylesheet"type="text/css" href="css/style.css">

	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.cont-body{
			background-image: url("Admin-Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;
	font-size: large;
	height: auto;
		}
		.admin__main-body{
    

    justify-content: center;
    align-items: center;
       }
		.admin__main-body .admi__navbar{
    background-color: black;
    color: white;
    display: grid;
    grid-template-columns: 5fr 1fr 1fr 1fr;
	justify-content: center;
	align-items: center;
	
	
}
.logoutAdmin{
	padding: 10px 5px;
}
/* .logoutAdmin button{
	
} */

.admin-form a{
        background-color: yellow;
        color: black;
        align-items: center;
        border-radius: 10px;
        padding: 6px 20px;
        text-decoration: none;

   }
  .admin-form a:hover{
        background-color:white;
        color: black;
        
}
.admi__navbar a{
	display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    padding: 2px 2px;
    font-size: large;
    border: none;
    outline: none;
    border-radius: 4px;
    background: #b4aa3a;
    background: -webkit-linear-gradient(to right,#fcb045,#eee7e7,#b4aa3a);
    background: linear-gradient(to right,#fcb045,#f7f5f5,#b0b43a);
    color: black;
    transition: all 0.3s ease;

}
.admi__navbar a:hover{
	display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    padding: 2px 2px;
    font-size: large;
    border: none;
    outline: none;
    border-radius: 4px;
	background: #3ab469;
    
    color: #ffffff;
    transition: all 0.3s ease;

}
	</style>
</head>
<body>

   <div class="admin__main-body">
   <div class="admi__navbar">
       <div class="">
           <h1 style="padding-left: 20px;">Welcome Admin</h1>      
       </div>
	  
                    
                       
                    <div class="products">
					          <button> <a href='index.php?info=add_products'>Add Products</a></button>
                    </div>

										<!-- <div class="products">
											<button><a href='index.php?info=view_products'>View Products</a></button>

										</div>

										<div class="products">
											<button><a href='index.php?info=delete_products'>Delete Products</a></button>

										</div>

										<div class="comments">
											<button><a href='index.php?info=view_fake_comments'>View Fake Comments</a></button>

										</div> -->
										
										<div class="notification">
                    <button> <a href='index.php?info=comments'>Send notification</a></button>
                     </div>
                       

	       <div class="logoutAdmin">
			 <div class="log">
				 <button><a href="../logout.php">Logout</a></button>
			 </div>

		   </div>

		  </div>
		
		  <div class="cont-body">
       <div class="admin__main-section">
             <div class="admin-links">

			 <div class="faculty">
                     <a href="index.php?info=products">Products</a>
                 </div>

			 <div class="department">
                     <a href="index.php?info=order">Order</a>
                 </div>
                

                 <div class="Program">
                    <a href="index.php?info=products">View</a>
                </div>

                <div class="lecturer">
                    <a href="index.php?info=products">Delete</a>
                </div>

                <div class="Course">
                    <a href="index.php?info=comments">Comments</a>
                </div>
                 
				<!-- <div class="courseStudy">
                    <a href="index.php?info=courseStudy">Course</a>
                </div>
				<div class="semester">
                    <a href="index.php?info=session">Session</a>
                </div>
                <div class="timetable">
                    <a href="index.php?info=timetable">Timetable</a>
                </div>
             </div> -->

             <div class="admin-form">
                  <div id="">
				  <?php
                       $sql= mysqli_query($conn,"SELECT * FROM reserve WHERE results='pending'");
					  if(mysqli_num_rows($sql)>0){
                              ?>
                           <h1 style="text-align:center ;">  <a href="index.php?info=reseveSlot">Reservation of a new slot</a></h1> 
							  <?php
					   }
					?>
                  <?php 

				@$info=$_REQUEST['info'];
				if($info!="")
				{
					if($info=="faculty")
				{
					include('faculty.php');
					}

				if($info=="department")
				{
					include('department.php');
					}

                    if($info=="program")
				{
					include('program.php');
					}

				elseif($info=="session")
				{
					include('session.php');
					}
				elseif($info=="comments")
				{
					include('comments.php');
				     }
					 
					 elseif($info=="room")
				{
					include('room.php');
				     }
			    elseif($info=="courseStudy")
				{
					include('courseStudy.php');
					}
				elseif($info=="lecturer")
				{
					include('lecturer.php');
					}
				elseif($info=="timetable")
				{
					include('timetable.php');
					}


					elseif($info=="add_products")
					{
						include('add_products.php');
						}
					
				elseif($info=="view_products")
				{
					include('view_products.php');
					}
					
			    elseif($info=="view_order")
				{
					include('view_order.php');
					}

					elseif($info=="delete_product")
				{
					include('delete_product.php');
					}
					
				elseif($info=="view_comments")
				{
					include('view_comments.php');
					}
					
				// elseif($info=="add_lecturer")
				// {
				// 	include('add_lecturer.php');
				// 	}
					
				// elseif($info=="add_student")
				// {
				// 	include('add_student.php');
				// 	}
					
					
				// elseif($info=="add_timetable")
				// {
				// 	include('add_timetable.php');
				// 	}

				// 	elseif($info=="add_program")
				// 	{
				// 		include('add_program.php');
				// 		 }

        //         elseif($info=="updatecourse")
				// {
				// 	include('updatecourse.php');
				//      }
              
        //         elseif($info=="updatesemester")
				// {
				// 	include('updatesemester.php');
				//      }

        //         elseif($info=="reseveSlot")
				// {
				// 	include('reseveSlot.php');
				//      }					 
					
				// elseif($info=="updatestudent")
				// {
				// 	include('updatestudent.php');
				//      }

        //         elseif($info=="updateteacher")
				// {
				// 	include('updateteacher.php');
				//      }

        //         elseif($info=="updatetimetable")
				// {
				// 	include('update_timetable.php');
				//      }

					
					 
					}
				else
				{
				?>

                 <?php
                }
                ?>
                  </div>
             </div>
       </div>

  
   <div class="footer" style="background-color: black; height:40px">
   <p style="text-align: center; color:white; font-size:larger; padding-top:5px"> Designed by JEREMIAH students at Meru University of Science and Technology, 2022 ?? copyright</p>
    </div>
	</div>
  </div>
</body>

</html>
<?php

?>