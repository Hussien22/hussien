<!DOCTYPE html>
<html>
<head>
	<title>courses</title>
    <link rel="stylesheet" type="text/css" href="css.css">

    <meta charset="utf-8" auther="hussien_ali">
    <meta name="auther" content="hussien-ali-amean">
    <meta name="description" content=" whallow to our new work of our courses how ti statrt your work">
    <meta name="keyword"content="what_if_you_want_use,select_career,work_in your_life,work_in_your_position">
<script>
function validate(e){
  var userName = document.getElementById("Username").value;
  var password = document.getElementById("Password").value;
  var errors = [];

  if (!checkLength(userName,1,100)) {
    errors[errors.length] = "You must enter a username.";
  }

  if (!checkLength(password,1,100)) {
    errors[errors.length] = "You must enter a password.";
  }

  if (errors.length > 0) {
    reportErrors(errors);
    e.preventDefault();
  }
}

function checkLength(text, min, max)
{
  if (text.length < min || text.length > max) 
        {
    return false;
  }
  return true;
}

function reportErrors(errors){
  var msg = "There were some problems...\n";
  var numError;
  for (var i=0; i<errors.length; i++) {
    numError = i + 1;
    msg += "\n" + numError + ". " + errors[i];
  }
  alert(msg); }


window.onload = function() {
  document.getElementById("logInForm").addEventListener("submit", 
    function(e){
      validate(e);
    });
}
</script>

</head>
<body style="background-color: gray" onload="alert('welcom you can login now to show what you intend to do ');">
  	   <img src="logoofbage.png" width="100%" height="80px" style="border-radius: 10px"> 
  <nav class="navegation_controlers">

    <ul>
          <li><a href="http://localhost/project">Home</a></li>
          <li><a href="http://localhost/project/news.html">News</a></li>
          <li><a href="http://localhost/project/contact.html">Contact</a></li>
          <li><a href="http://localhost/project/about.html">About</a></li>
         </ul> 
      
  </nav>
</br>
	<div class="form_data">
     <form action="http://localhost/project/trackofuser.php" method="GET" id="logInForm">
		<table>
			<tr><td> name :</td><td><input type="text" name="name" required="bleas inter your username" id="Username"></td></tr>
            
			<tr><td> pasword :</td><td><input type="pasword" name="pasword" required="bleas inter your basword" id="Password" ></td></tr>		
            <tr><td><input type="reset" value="Reset Form"></td><td><input type="submit" name="submit" value="submit"></td></tr>

		</table>
		
     </form>



	</div>

</body>
</html>