<html>
<head>
    <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}
            input[type=text],input[type=password],input[type=date],input[type=email],
            input[type=number]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border:1px solid #ccc;
                box-sizing: border-box;
            }
            .container{padding:16px;}
            button{
             background-color: Green;
             color: white;
             padding:14px 50px;
             margin: 15px 0;
             cursor: pointer;
             width: 100%;
            }
            button:hover {
              opacity: 0.8;
             } 
             div {
		background-color: #f2f2f2;
		}
            .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
             }
              img.avatar {
               width: 20%;
               border-radius: 90%;
              }
        </style>
    </head>
    <body>
   	
    <center><h1>Registration Form</h1></center>

 <form action="" method = "Post">
     <div class="imgcontainer">
         <img src="http://leleanmanufacturing.com/wp-content/uploads/2014/02/Fotolia_48120884_XS.jpg" class="avatar">
     </div>   
     <div class="container">
         <label for="uname"><b>UserName</b></label>
             <input type="text" name="uname" placeholder="User Name" required>
         <label for="gender"><b>Gender</b></label><br/>
                <input type="radio" name="gender" value="Male" required>Male
                <input type="radio" name="gender" value="Female" required>Female
                <input type="radio" name="gender" value="Other" required>Other<br><br>
         <label for="pass"><b>Password</b></label>
                <input type="password" name="password" placeholder="Enter password" id="pass" required>
         <label for="repass"><b>ReEnter Password</b></label>
                <input type="password" name="repassword" placeholder="Re-Enter password" id="repass" required><br/>
         <label for="email"><b>Email</b></label>
                <input type="Email" name="email" placeholder="Enter Email" required><br/>
         <label for="ownership"><b>Ownership firm</b></label>
                <input type="text" name="Ownership_firm" placeholder="Enter Ownership firm" id="Ownership firm" required><br/>
         <label for="teamname"><b>Team Name</b></label>
                <input type="text" name="teamname" placeholder="Enter Team Name" required><br/>
         <label for="tag"><b>Tag</b></label>
                <input type="text" name="tag" placeholder="Enter Tag" required><br/> 
         <button type="submit" id="submit" onclick="return validate()">Login</button>
        </div>
        </form>
		<script>
function validate()
{
 	var x,y,text;
 	x=document.getElementById("pass").value;
 	y=document.getElementById("repass").value;
 	if(x==y)
 	{
	   return true;
 	}
 	else
 	{
		alert("Password don't match!")
		return false;
	}
}
</script>
</body>
</html>
<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	echo "Connection is established...<br/>";
        $uname=$_POST['uname'];
        $gender=$_POST['gender'];
        $password=$_POST['password'];
        $Email=$_POST['email'];
        $Ownershipfirm=$_POST['Ownership_firm'];
	$teamname=$_POST['teamname'];
        $tag=$_POST['tag'];
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
	$sql="insert into users_details (uname,gender,password,email,ownership,teamname,tag) values ('$uname','$gender','$password','$Email',
                '$Ownershipfirm','$teamname','$tag')";
	$query=$dbhandler->query($sql);
	echo "Data is inserted successfully";
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
echo "The rest of our page..."
?>