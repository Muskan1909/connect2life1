<html>
<head>
<title>Connect2Life</title>

<style>
input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    
}

input[type=submit] {
    background-color: #ff0000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #00ffffff;
    padding: 20px;
}
p {
  border: #E74C3C;
  background-color: #E74C3C;
height:7%;

  
}
.imgcontainer {
    text-align: center;
    margin: 44px 0 32px 0;
}
fieldset{
width:500px;

margin-left:4px;
margin-top:5px;
margin:auto;
}
body {
    background: url("4.jpg");
    background-size: 80px 60px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
</head>
<body >


<h1><p><font color="#7B241C">BLOOD DONATION</font>
</p></h1>
<fieldset>
<div class="container">
  <form action="registration.php" method="post">
<div class="imgcontainer">
    <label for="fname">First Name</label>
<br>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
<br>
    <label for="lname">Last Name</label>
<br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label>Address 1</label>
<br>
    <input type="text" id="address" name="address" placeholder="address">
  <br> 
 <label>Address 2</label>
<br>
    <input type="text" id="address" name="address" placeholder="address">
<br>

Blood Group
<br>
<select >
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  
</select>
<br>
    <input type="submit" value="Register">
  </form>
</div>
</div>
</fieldset>
</body>
<html>

