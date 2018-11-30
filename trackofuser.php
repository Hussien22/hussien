<?php
 
  Try{ $db = new PDO("mysql:host=localhost;dbname=veduotables;charset=utf8",'root','');  } 
  catch (PDOException $e) {print $e->getMessage ();}

 if (isset($_GET['submit']))
 {
 if ($_GET['submit'] == "submit")
 { //echo "after 1"; 
  if ($_GET['name']!="") 
        { $namee=$_GET['name'];
     // echo $name$_GET['submit']e;
          $passwordd=$_GET['pasword'];
    // echo $passwordd;
            $sql = "SELECT `id`, `name`, `paswword` FROM `users` ";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nameee', $namee);
            $stmt->execute();
            $userss= $stmt->fetchAll();
           // print_r( $userss);
            $forloopcounter=0;
            foreach ($userss as $key )
             { 
              if ($key[1]==$namee)
              { 
               if ($key[2]==$passwordd)
               {
                  //echo "after 4";
                 $path="http://localhost/project/veduios.PHP";
                  $forloopcounter++;
               }
              }  
             }
            
        }
      }
  }
?>
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

</script>
<body onload="alert('welcom you can select your trak to starte in it ');">
  	   <img src="logoofbage.png" width="100%" height="80px" style="border-radius: 10px"> 
  <nav class="navegation_controlers">

    <ul>
          <li><a href="http://localhost/project">Home</a></li>
          <li><a href="http://localhost/project/news.html">News</a></li>
          <li><a href="http://localhost/project/contact.html">Contact</a></li>
          <li><a href="http://localhost/project/about.html">About</a></li>
         
         <form action="http://localhost/project/search.php" method="GET">
         <input type="text" name="searsh_heder" placeholder="searsh_heder">
         <input type="submit" name="searsh" value="searsh">
       </form>
       </ul> 
  </nav>
</br>
</br>
<div class="form_data_2">
   <?php if ($forloopcounter==0) 
             {
               $path="http://localhost/project/loginform.php";
               echo "<h1>you have a no authebtication to select your track then </h1>";
               echo "<h3>you will go back to correct your login agin ";
             }
   ?> 
     <form action="<?=$path;?>" method="GET">
		<table>
			<tr><td> track :</td><td><select name="TRAC_SELECT">
				  <option value="1" selected="selected">network</option>
				  <option value="2">programing</option>
				 
			</select></td></tr>
            		
            <tr><td></td><td><input type="submit" name="submit11" value="submit"></td></tr>

		</table>
     </form>
	</div>
</body>
</html>
