<?php
  Try{ $db = new PDO("mysql:host=localhost;dbname=veduotables;charset=utf8",'root','');  } 
  catch (PDOException $e) {print $e->getMessage ();}
if (isset($_GET['submit11']))
 {       
   if ($_GET['submit11'] =='submit')
    {       
           $TRAC_SELECT=$_GET['TRAC_SELECT'];
           //echo $TRAC_SELECT;
           if ($TRAC_SELECT==1)
           {
             $sql = "SELECT * FROM `networkveduo`  ";
             $stmt = $db->prepare($sql);
             $stmt->execute();
             $veduo=$stmt->fetchAll();
            // print_r($veduo);
             $veduo_path;
             $veduo_image;
             $veduo_title;
             $i=0;
             
           foreach ($veduo as $key )
            {
              $veduo_path[$i]=$key[1];
              //echo $veduo_path[$i];
              $veduo_image[$i]=$key[2];
              $veduo_title[$i]=$key[3];
              $i++; 
            }
            if (isset($_GET['vnumber']))
             {  $vnumber=$_GET['vnumber'];
                 $temp_path=$veduo_path[0]; $vnumber;
                 $temp_image=$veduo_image[0];
                 $temp_title=$veduo_title[0];
                 $veduo_path[0]=$veduo_path[$vnumber];
                 $veduo_image[0]=$veduo_image[$vnumber];
                 $veduo_title[0]=$veduo_title[$vnumber];
                 $veduo_path[$vnumber]= $temp_path;
                 $veduo_image[$vnumber]=$temp_image;
                 $veduo_title[$vnumber]= $temp_title;
             }
           
           }
           elseif ($TRAC_SELECT==2)  {
             $sql = "SELECT * FROM `programingveduo`";
             $stmt = $db->prepare($sql);
             $stmt->execute();
             $veduo=$stmt->fetchAll();
             //print_r($veduo);
             $veduo_path;
             $veduo_image;
             $veduo_title;
             $i=0;
             
           foreach ($veduo as $key )
            {
              $veduo_path[$i]=$key[1];
              //echo $veduo_path[$i];
              $veduo_image[$i]=$key[2];
              $veduo_title[$i]=$key[3];
              $i++; 
            }
            if (isset($_GET['vnumber']))
             {  $vnumber=$_GET['vnumber'];
                 $temp_path=$veduo_path[0]; 
                 $temp_image=$veduo_image[0];
                 $temp_title=$veduo_title[0];
                 $veduo_path[0]=$veduo_path[$vnumber];
                 $veduo_image[0]=$veduo_image[$vnumber];
                 $veduo_title[0]=$veduo_title[$vnumber];
                 $veduo_path[$vnumber]= $temp_path;
                 $veduo_image[$vnumber]=$temp_image;
                 $veduo_title[$vnumber]= $temp_title;
                //echo  $veduo_path[0];
               // echo  $veduo_path[$vnumber];
             }   
           
           }
        
   }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>courses onlin</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="">
    <script type="text/javascript">
      function representation(a) {
        alert(a);
      }
       function shangecoler(color)
           {

            document.getElementById("dsd").style.backgroundColor=color;

           }

    </script>
</head>

<body onload="alert('welcom you can strat your trak now');">
<img src="logoofbage.png" width="100%" height="80px" style="border-radius: 10px">	
<nav class="navegation_controlers">

		<ul>
         <li onmouseover="alert("will go back to home bage")"><a href="http://localhost/project">Home</a></li>
          <li onmouseover="alert("will og to the new bage)"><a href="http://localhost/project/news.html">News</a></li>
          <li onmouseover="alert("will og to the contact bage)"><a href="http://localhost/project/contact.html">Contact</a></li>
          <li onmouseover="alert("will og to the about  bage)"><a href="http://localhost/project/about.html">About</a></li>
           <li onmouseover="alert("that will help you to calculat any thing )"><a href="http://localhost/project/calculator.html">calculator</a></li>
         <form action="http://localhost/project/search.php" method="GET">
         <input type="text" name="searsh_heder" placeholder="searsh_heder">
         <input type="submit" name="searsh" value="searsh">
       </form>
    </ul>
	</nav>
</br>
<div class="vidus" style="overflow: hidden;">
	<video width="100%" height="80%" controls="controls">
		<source src="<?=$veduo_path[3];?>" >
	</video>
  <br>
  <p> <?php echo $veduo_title[3];?> </p>
</div>
 <div class="veduolist" style="height:70%;">
 <div class="supveduo" style="height: 20%;">
  <?php
  if ($TRAC_SELECT==1)
   {echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=1&submit11=submit&vnumber=0".">";}
   elseif ($TRAC_SELECT==2) {
     echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=2&submit11=submit&vnumber=0".">";
   }
 	?>
  <img src="<?=$veduo_image[0];?>" width="100px" height="50px" >
 </a>
    <label><?php echo $veduo_title[0];?></label>
 </div>
 <div class="supveduo" style="height: 20%;">
 <?php
 if ($TRAC_SELECT==1)
   {echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=1&submit11=submit&vnumber=1".">";}
   elseif ($TRAC_SELECT==2) {
     echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=2&submit11=submit&vnumber=1".">";
   }
  ?>
  <img src="<?=$veduo_image[1];?>" width="100px" height="50px" >
   </a>                   
    <label> <?php echo $veduo_title[1];?></label>
</div>
<div class="supveduo" style="height: 20%;">
<?php
 if ($TRAC_SELECT==1)
   {echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=1&submit11=submit&vnumber=2".">";}
   elseif ($TRAC_SELECT==2) {
     echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=2&submit11=submit&vnumber=2".">";
   }
  ?>
 	<img src="<?=$veduo_image[2];?>" width="100px" height="50px" >
 </a>
    <label><?php echo $veduo_title[2];?></label>
 </div>
<div class="supveduo" style="height: 20%;">
 <?php
 if ($TRAC_SELECT==1)
   {echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=1&submit11=submit&vnumber=3".">";}
   elseif ($TRAC_SELECT==2) {
     echo "<a href="."http://localhost/project/veduios.PHP?TRAC_SELECT=2&submit11=submit&vnumber=3".">";
   }
  ?>
    <img src="<?=$veduo_image[3];?>" width="100px" height="50px" > 
  </a>
    <label><?php echo $veduo_title[3];?></label>
 </div>

</div>

 <div class="veduo_title">
	
	
 </div>

 <div class="basic_about_our_bage">
 	 <a href="https://www.facebook.com/"> <div class="sup_basic_about_our_bage">
 	  <img src="facbok.jpg" width="50" height="50" onmouseover="alert('facbook contact');"></div></a>
 	  <a href="https://twitter.com/"><div class="sup_basic_about_our_bage">
 	  <img src="tweter.jpg"width="50" height="50" onmouseover="alert('tweter contact');"></div></a>
 	  <a href="https://mail.google.com/mail/#inbox"><div class="sup_basic_about_our_bage">
 	  <img src="email.jpg"width="50" height="50" onmouseover="alert('email contact');"></div></a>
 	  <a href="https://www.whatsapp.com"><div class="sup_basic_about_our_bage">
 	  <img src="wats.jpg"width="50" height="50" onmouseover="alert('wats contact');"></div></a>
 	   contact us deer 
 </div>
</body>
</html>