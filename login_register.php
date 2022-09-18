<?php
require('connection.php');
session_start();

#For Log In
if(isset($_POST['signin']))
{
    $query="SELECT * FROM `registered_users` WHERE `Name`='$_POST[your_name_email]' OR `Email`='$_POST[your_name_email]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
       if(mysqli_num_rows($result)==1)
       {
          $result_fetch=mysqli_fetch_assoc($result);
          if(password_verify($_POST['your_pass'],$result_fetch['Password']))
          {
              $_SESSION['logged_in']=true;
              $_SESSION['username']=$result_fetch['Name'];
              header("location:index_Home.php");
          }
          else
          {
            echo"
                 <script>
                 alert('Incorrect Password!!');
                 window.location.href='signin.php';
                 </script>
                 ";
          }
       }
       else
       {
        echo"
                 <script>
                 alert('Email or Name not registered');
                 window.location.href='index.php';
                 </script>
                 ";
       }
    }
    else
    {
        echo"
                 <script>
                 alert('Can not Run Query');
                 window.location.href='index.php';
                 </script>
                 ";
    }
}






#For Registration

if(isset($_POST['signup']))
{
    $user_exist_query="SELECT * FROM `registered_users` WHERE `Name`='$_POST[name]' OR `Email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
             $result_fetch= mysqli_fetch_assoc($result);
             if($result_fetch['Name']==$_POST['name'])
             {
                echo"
                 <script>
                 alert('$result_fetch[Name] - Name already taken, Try another!');
                 window.location.href='index.php';
                 </script>
                ";
             }
             else 
             {
                echo"
                 <script>
                 alert('$result_fetch[Email] - Email already registered, Try another!');
                 window.location.href='index.php';
                 </script>
                ";
             }
        }
        else
        {
            $password=password_hash($_POST['pass'],PASSWORD_BCRYPT);
             $query="INSERT INTO `registered_users`(`Name`, `Email`, `Password`) VALUES ('$_POST[name]','$_POST[email]','$password')";
             if(mysqli_query($con,$query))
             {
                echo"
                <script>
                alert('Registration Successful.');
                window.location.href='index.php';
                </script>
                ";
             }
             else
             {
                echo"
                 <script>
                 alert('Can not Run Query');
                 window.location.href='index.php';
                 </script>
                 ";
             }

        }
    }
    else 
    {
        echo"
         <script>
         alert('Can not Run Query');
         window.location.href='index.php';
         </script>
         ";

    }

}



?>