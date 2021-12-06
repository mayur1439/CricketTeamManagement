<!DOCTYPE html>
<html>
<style>
input[type=text],[type=password],[type=email],select {
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
<body>
<center><h1>Login Page</h1></center>

<div>
	<form action="/Login/check/" method = "post">
     <label for="uname">UserID</label>
    <input type="text" id="uname" name="userID" placeholder="UserID" required>

     <label for="password">Password</label>
    <input type="password" id="pass" name="password" placeholder="Enter password" required>
  
    <input type="submit" value="SIGN UP">
  </form>
</div>
	<div>
	<form action="registration.php" method="post">
	<button type="submit">New User</button>
	</form>
	</div>
</body>
</html>

<?php
