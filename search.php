<!DOCTYPE html>
<html>
<head>
	<title>courses</title>
	<link rel="stylesheet" type="text/css" href="css.css">

    <meta charset="utf-8" auther="hussien_ali">
    <meta name="auther" content="hussien-ali-amean">
    <meta name="description" content=" whallow to our new work of our courses how ti statrt your work">
    <meta name="keyword"content="what_if_you_want_use,select_career,work_in your_life,work_in_your_position">
    
</head>

<script type="text/javascript">
           function shangecoler(color)
           {

            document.getElementById("w1w").style.backgroundColor=color;

           }
           function writin()
           {
            var x=  document.getElementById("search1").value;
            if (x!="")
            { 
                alert("are you shure you want to search about it"+x);
                 
            }
            else
            {   
                document.getElementById("search1").value="bleas inter your search itm";

            }
}
          
</script>
<body>
		<img src="logoofbage.png" width="100%" height="80px" style="border-radius: 10px">	
	<nav class="navegation_controlers">

		<ul>
          <li><a href="http://localhost/project">Home</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="about.html">About</a></li>
         </ul> 
         <form action="http://localhost/project/search.php" method="GET">
         <input type="text" name="searsh_heder" placeholder="searsh_heder" id="search1">
         <input type="submit" name="searsh" value="searsh" onclick=writin();>
       </form>
        </ul>
	</nav>
</br>
<h1>sory the searsh function haved finshed that wil be started at secand assiment</h1>
</body>
</html>