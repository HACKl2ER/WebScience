<?php 

session_start();

        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM student
                  WHERE  Username='".$username."' 
                  AND   Password='".$password."' ";
                  $result = mysqli_query($con,$sql);

                  $sqlT="SELECT * FROM teacher
                  WHERE  Username='".$username."' 
                  AND   Password='".$password."' ";
                  $resultT = mysqli_query($con,$sqlT);
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["ID"] = $row["IdStudent"];
                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];
                     
                      
                      if($_SESSION["level"]=="1"){ 
                        Header("Location: ");    
                      }  
                      if ($_SESSION["level"]=="student"){ 

                        Header("Location: homeeditstudent.php?id=$username");
                      }
                  }if(mysqli_num_rows($resultT)==1){
                    $rowt =mysqli_fetch_array($resultT);
                    $idt = $rowt['IDT'];
                    Header("Location: editteacher.php?id=$username");
                    
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: indexlogin.php"); //user & password incorrect back to login again
 
        }   
session_start();

?>