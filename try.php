<!DOCTYPE html>
<html>
<head> 

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: Right;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>

  <li><a href="#news">News</a></li>
  
  <li><a href="#about">About</a></li>
  <li><a href="#about">Resumes</a></li>
  <li><a href="#contact">Login</a></li>
  <li><a href="#contact">Contact</a></li>
    <li><a  href="#home">Home</a></li>
</ul>



<style type="text/css">
.form-style-5{
  max-width: 500px;
  padding: 10px 20px;
  background: #f4f7f8;
  margin: 10px auto;
  padding: 20px;
  background: #f4f7f8;
  border-radius: 8px;
  font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
  border: none;
}
.form-style-5 legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}
.form-style-5 label {
  display: block;
  margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],

.form-style-5 input[type="email"],
.form-style-5 input[type="tel"],
.form-style-5 input[type="file"],

.form-style-5 input[type="number"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
  font-family: Georgia, "Times New Roman", Times, serif;
  background: rgba(255,255,255,.1);
  border: none;
  border-radius: 4px;
  font-size: 15px;
  margin: 0;
  outline: 0;
  padding: 10px;
  width: 100%;
  box-sizing: border-box; 
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box; 
  background-color: #e8eeef;
  color:#8a97a0;
  -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
  background: #d2d9dd;
}
.form-style-5 select{
  -webkit-appearance: menulist-button;
  height:35px;
}
.form-style-5 .number {
  background: pink;
  color: black;
  height: 30px;
  width: 40px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]


{
  position: relative;
  display: block;
  padding: 19px 39px 18px 39px;
  color: #FFF;
  margin: 0 auto;
  background: #1abc9c;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  width: 100%;
  border: 1px solid #16a085;
  border-width: 1px 1px 3px;
  margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover

{
  background: #109177;
}
</style>
<div class="form-style-5">
<form >
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="field1" placeholder="Your Name *" id="user_input">
<input type="email" name="field2" placeholder="Your Email *" id="user_input">
<input type="tel" name="phone"  placeholder="Your phone number *" id="user_input">
<textarea name="field3" placeholder="About yourself" id= "user_input"></textarea>

<label placeholder= "select your gender">Gender:</label>
<select id="job" name="field4" placeholder= "select your gender" id="user_input">
  <option value="Female">Female</option>
  <option value="Male">Male</option>
<input type="email" name="field5" placeholder="Skype username *" id="user_input">
<input type="URL" name="field6" placeholder="Linkedin URL *" id="user_input">
<textarea name="field7" placeholder="Address" id="user_input"></textarea>
<input type="tel" name="field2" placeholder="PIN code *" id="user_input">
</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span>  Your image:*</legend>
<input type="file" name="pic" id="user_input"><br>
</fieldset>
<input type="submit" value="Save And Continue" onclick="showInput();" action="oh.html" method="get"/>
  <p><span id='display'></span></p>

</form>
</div>
</body>
</html>