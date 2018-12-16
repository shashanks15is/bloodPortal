<?php
         
          session_start();
          if(isset($_POST['btt']))
          {
            mysql_connect("localhost","root") or die(mysql_error());
            mysql_select_db("bloodbank") or die(mysql_error());


            $username=$_POST['user'];
            $password=$_POST['pwd'];
            
            
            //$query=mysql_query("select * from admin where user='$username' and pwd='$password'");
            $query=mysql_query("CALL search('$username','$password')");
            if(mysql_num_rows($query)==1)
            {
              
              $_SESSION['username']=$username;
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                     sessionStorage.setItem('login', 'success');
                     localStorage['login']='success';
                     window.location.replace('adminForm.php');
                     </SCRIPT>");
            }
            else
            {
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                     window.alert('Incorrect Username or Password')
                     window.location.href='index.php';
                     </SCRIPT>");
            }
          }
          if(isset($_GET['logout']))
          {
            session_unregister('username');
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                     localStorage.removeItem('login');
                     window.location.replace('index.php');
                     </SCRIPT>");
          }
?>