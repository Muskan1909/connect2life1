<!DOCTYPE html>
<html>
<style>
form 
body{background-image:"";
    background-repeat: no-repeat;}
{
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: "#157DEC";
    color: white;
    padding: 14px 20px;
    margin: 2px 0 0 120px;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 30px;
    background-color: "#157DEC";
    margin-left:0px;
    float:left;
}

.imgcontainer {
    text-align: center;
    margin: 44px 0 32px 0;
}
img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    
}
.container1 {
    padding: 10px;

}

span.psw {
    float: right;
    padding-top: 16px;
}


fieldset{
width:500px;

margin-left:4px;
margin-top:5px;
}
p{
margin-left:130px;
}
</style>
<body>

<center><h2><font color="#157DEC">PATIENT SIGNUP</font></h2><center>
<fieldset>

  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
<form action="insert1.php" method="post">
  <div class="container">
    
    <label><b>Patient name</b></label></br>
    <input type="text" placeholder="Enter name" name="name" required></br>
    <label><b>Address Lane 1</b></label></br>
    <input type="text" placeholder="Enter address" name="address1" required></br>
    <label><b>Address Lane 2</b></label></br>
    <input type="text" placeholder="enter address" name="address2" required></br>
    <label><b>District</b></label></br>
    <input type="text" placeholder="enter district" name="district" required></br>
    <label><b>State</b></label></br>
    <input type="text" placeholder="enter state" name="state" required></br>
    <label><b>Create Password</b></label></br>
    <input type="password" placeholder="Create password" name="pswd" required></br>
    <label><b>Confirm Password</b></label></br>
    <input type="password" placeholder="Confirm Password" name="pswconfirm" required></br>
    <label><b>Aadhar card number</b></label></br>
    <input type="text" placeholder="Aadhaar card number" name="Aadhaar no." required></br>
    <pre>     <input type="checkbox" checked="checked" align="left"> Remember me      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></pre>

    <div class="clearfix">
      <button type="reset" value="reset" class="cancelbtn">Cancel</button>
      <a href="patient_login.html"><button type="submit" class="signupbtn">Sign Up</a></button>
</div>
</form>
</fieldset>
</body>
</html>
