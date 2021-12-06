<html>
<head>
<style>
    input[type=text],[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  font-size: 20px;
  border-radius: 4px;
  cursor: pointer;
}
input[type=lable]{
  text-align: left;
}
div {
  margin: auto;
  background-color: #f2f2f2;
  border-radius: 5px;
  width:40%;
  padding: 20px;
}
button{
             background-color: Blue;
             color: white;
             padding:14px 50px;
             margin: 15px 0;
             cursor: pointer;
             width: 100%;
            }
            button:hover {
              opacity: 0.8;
             }

</style>
</head>
<body>
<center><h1>Login Page</h1></center>
	<form action="" method="post">
    <?php
    session_start();
    $message="";
    if(isset($_POST['submit'])){
            $name=$_POST['userID'];
            $pass=$_POST['password']; 
        try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select uname,password from users_details');
        while($r=$query->fetch()){
            $uname=$r['uname'];
            $password=$r['password'];
            if($name==$uname && $pass==$password)
            {
                if ($_POST['vercode'] != $_SESSION['vercode'] OR $_SESSION['vercode']=='')  {
                       $message="Incorrect verification code.";
               }
               else {
               $_SESSION['uname']=$name;
               $_SESSION['password']=$pass; 
               header("Location: Logined.php");
               }
            }
          }
          if($message==""){
          $message="Enter valid Username or password.";
          }
        
}

catch(PDOException $e){
	echo $e->getMessage();
	die();
}
    }
      if(isset($_SESSION['log_out']))
          {
           unset($_SESSION['log_out']);
           $message="You are Successfully LogOut.";
          }
?>      
     <?php echo "<center><font color=red>$message</font></center>";  ?>          
    <div>
     <label for="uname">UserID</label>
    <input type="text" id="uname" name="userID" placeholder="UserID" required>

     <label for="password">Password</label>
    <input type="password" id="pass" name="password" placeholder="Enter password" required>
    
    <label for="captcha">Enter Verify Code</label>
    <img src="captcha.php"/>
    <input type="text" name="vercode" placeholder="Enter code" required>
    <input type="submit" name="submit" value="SIGN IN">
        </form>	
<form action="registration.php" method="post">
            <button type="submit">New User</button>
        </form>
    </div>
    </body>
</html>        