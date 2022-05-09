

<?php 
session_start();
include("connection.php");
if(isset($_POST['add'])){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $avg = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10;
    $avg = $avg / 10;
    
    $code = $_SESSION['code'];
    $ins_query="insert into feedback1 values('$code','1','1','$avg')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    header('location:compiler.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUI</title> 
    <link rel="stylesheet" href="fform1.css"> 



<style>
    a,input 
{
    color: white; 
    border: none; 
    text-decoration: none;
    background-color: #f05462; 
    cursor: pointer;
} 
h2{
    color: red; 
    text-align: center;
}
</style>
</head>  
<body>  
<h2  id="g"></h2>
    <form  method="POST" id="MYFORM"name="myform">
        <h3>(م.ئەمین ئادەم)(GUI) ھەڵسەنگاندن بو </h3>

        <div class="wrapper"> 
    <br> 
        1-لە دەستپێكی خوێندنی بابەتەكەدا، مامۆستا كۆرسبووكی بابەتەكەی پێتان دا و پلانی خوێندنی بابەتەكەی لە هەفتەكانی ساڵی خوێندندا ڕوونكردەوە؟
        <br /> 
        <input type="radio"class="r1"  name="q1" value="1" id="1" required/>1
        <input type="radio"class="r1"  name="q1" value="2" id="1" />2
        <input type="radio"class="r1"  name="q1" value="3" id="1" />3
        <input type="radio"class="r1"  name="q1" value="4" id="1" />4
        <input type="radio"class="r1"  name="q1" value="5" id="1" />5
        <input type="radio"class="r1"  name="q1" value="6" id="1" />6
        <input type="radio"class="r1"  name="q1" value="7" id="1" />7
        <input type="radio"class="r1"  name="q1" value="8" id="1" />8
        <input type="radio"class="r1"  name="q1" value="9" id="1" />9
        <input type="radio"class="r1"  name="q1" value="10"id="1" />10
        <br>
        <br >
        2- تاچەند مامۆستا پابەندبووە بە پەیڕەوكردنی ناوەرۆکی بابەتەکەی بەوشێوەیەی، کە لە هەفتەكانی خوێندنی بابەتەكەو سلیبەسی كۆرسبووكی بابەتەكەیدا هەیە؟
        <br />
        <input type="radio"class="r1"  name="q2" value="1" id="2" required/>1
        <input type="radio"class="r1"  name="q2" value="2" id="2"/>2
        <input type="radio"class="r1"  name="q2" value="3" id="2"/>3
        <input type="radio"class="r1"  name="q2" value="4" id="2"/>4
        <input type="radio"class="r1"  name="q2" value="5" id="2"/>5
        <input type="radio"class="r1"  name="q2" value="6" id="2"/>6
        <input type="radio"class="r1"  name="q2" value="7" id="2"/>7
        <input type="radio"class="r1"  name="q2" value="8" id="2"/>8
        <input type="radio"class="r1"  name="q2" value="9" id="2"/>9
        <input type="radio"class="r1"  name="q2" value="10" id="2"/>10
        <br />
        <br>
        3-مامۆستای بابەت جگە لەكاتی وانەكان، تا چەند هاوكارو یارمەتیدەری قوتابی دەكرد لە دەرەوەی هۆڵی خوێندن؟
        <br />
        <input type="radio"class="r1"  name="q3" value="1" id="3" required/>1
        <input type="radio"class="r1"  name="q3" value="2" id="3"/>2
        <input type="radio"class="r1"  name="q3" value="3" id="3"/>3
        <input type="radio"class="r1"  name="q3" value="4" id="3"/>4
        <input type="radio"class="r1"  name="q3" value="5" id="3"/>5
        <input type="radio"class="r1"  name="q3" value="6" id="3"/>6
        <input type="radio"class="r1"  name="q3" value="7" id="3"/>7
        <input type="radio"class="r1"  name="q3" value="8" id="3"/>8
        <input type="radio"class="r1"  name="q3" value="9" id="3"/>9
        <input type="radio"class="r1"  name="q3" value="10"id="3" />10
        <br />
        <br>
        4-لە كاتی وانە وتنەوەدا مامۆستا هەوڵی دا بنەما و ناوەڕۆك و خاڵە گرنگەكانی بابەتەكە بە ڕوونی و بەسادەیی شیبكاتەوە؟
        <br />
        <input type="radio"class="r1"  name="q4" value="1" id="4" required/>1
        <input type="radio"class="r1"  name="q4" value="2" id="4"/>2
        <input type="radio"class="r1"  name="q4" value="3" id="4"/>3
        <input type="radio"class="r1"  name="q4" value="4" id="4"/>4
        <input type="radio"class="r1"  name="q4" value="5" id="4"/>5
        <input type="radio"class="r1"  name="q4" value="6" id="4"/>6
        <input type="radio"class="r1"  name="q4" value="7" id="4"/>7
        <input type="radio"class="r1"  name="q4" value="8" id="4"/>8
        <input type="radio"class="r1"  name="q4" value="9" id="4"/>9
        <input type="radio"class="r1"  name="q4" value="10" id="4"/>10
        <br />
        <br>
        5-شێوازی هەڵسەنگاندن و پرسیارەكانی تاقیكردنەوەی لەبارو گونجاو بوون؟ واتە لە ئاستی ڕوونكردنەوەو شرۆڤەی بابەتەكانی ناو هۆڵی خوێندن بوون؟
        <br />
        <input type="radio"class="r1"  name="q5" value="1" id="5" required/>1
        <input type="radio"class="r1"  name="q5" value="2" id="5"/>2
        <input type="radio"class="r1"  name="q5" value="3" id="5"/>3
        <input type="radio"class="r1"  name="q5" value="4" id="5"/>4
        <input type="radio"class="r1"  name="q5" value="5" id="5"/>5
        <input type="radio"class="r1"  name="q5" value="6" id="5"/>6
        <input type="radio"class="r1"  name="q5" value="7" id="5"/>7
        <input type="radio"class="r1"  name="q5" value="8" id="5"/>8
        <input type="radio"class="r1"  name="q5" value="9" id="5"/>9
        <input type="radio"class="r1"  name="q5" value="10" id="5"/>10
        <br />
        <br />
        6-مامۆستا لە كاتی خۆیدا دەهاتە وانەكە و لە كاتی خۆیدا وانەكەی تەواو كرد؟
        <br />
        <input type="radio"class="r1"  name="q6" value="1" id="6"required/>1
        <input type="radio"class="r1"  name="q6" value="2" id="6"/>2
        <input type="radio"class="r1"  name="q6" value="3" id="6"/>3
        <input type="radio"class="r1"  name="q6" value="4" id="6"/>4
        <input type="radio"class="r1"  name="q6" value="5" id="6"/>5
        <input type="radio"class="r1"  name="q6" value="6" id="6"/>6
        <input type="radio"class="r1"  name="q6" value="7" id="6"/>7
        <input type="radio"class="r1"  name="q6" value="8" id="6"/>8
        <input type="radio"class="r1"  name="q6" value="9" id="6"/>9
        <input type="radio"class="r1"  name="q6" value="10" id="6"/>10
        <br />
        <br />
        7-لە كاتی وانە وتنەوەدا مامۆستا بە نەرمی و بەهێمنی و بە ڕێزلێنانەوە هەڵسوكەوتی دەكرد؟
        <br />
        <input type="radio"class="r1"  name="q7" value="1" id="7"required/>1
        <input type="radio"class="r1"  name="q7" value="2" id="7"/>2
        <input type="radio"class="r1"  name="q7" value="3" id="7"/>3
        <input type="radio"class="r1"  name="q7" value="4" id="7"/>4
        <input type="radio"class="r1"  name="q7" value="5" id="7"/>5
        <input type="radio"class="r1"  name="q7" value="6" id="7"/>6
        <input type="radio"class="r1"  name="q7" value="7" id="7"/>7
        <input type="radio"class="r1"  name="q7" value="8" id="7"/>8
        <input type="radio"class="r1"  name="q7" value="9" id="7"/>9
        <input type="radio"class="r1"  name="q7" value="10" id="7"/>10
        <br />
        <br />
        8-مامۆستا لەكاتی وانەكانیدا تاچەند بایەخی بەشێوازی سەرنجڕاكێش و سەردەمیانە دەدا بۆ فێركردنی قوتابی وەك بەكارهێنانی<br> (وایت بۆرد، داتاشۆ، ڤیدیۆی فێركاری، دانانی وانەی ئەلیكترۆنی لەپرۆفایلی ئەكادیمی)؟
        <br />
        <input type="radio"class="r1"  name="q8" value="1" id="8"required/>1
        <input type="radio"class="r1"  name="q8" value="2" id="8"/>2
        <input type="radio"class="r1"  name="q8" value="3" id="8"/>3
        <input type="radio"class="r1"  name="q8" value="4" id="8"/>4
        <input type="radio"class="r1"  name="q8" value="5" id="8"/>5
        <input type="radio"class="r1"  name="q8" value="6" id="8"/>6
        <input type="radio"class="r1"  name="q8" value="7" id="8"/>7
        <input type="radio"class="r1"  name="q8" value="8" id="8"/>8
        <input type="radio"class="r1"  name="q8" value="9" id="8"/>9
        <input type="radio"class="r1"  name="q8" value="10" id="8"/>10
        <br />
        <br />
        9-لە كاتی وانە وتنەوەدا تا چەند مامۆستای بابەت ڕێگە دەدات، کە قوتابی بەشداری کارای هەبێت لە <br>دروستکردنی ژینگەیەکی زانستی بۆ ئاڵوگۆڕکردنی زانیاری و تێگەیشتنی قوتابی لە بابەتەکە؟
        <br />
        <input type="radio"class="r1"  name="q9" value="1" id="9"required/>1
        <input type="radio"class="r1"  name="q9" value="2" id="9"/>2
        <input type="radio"class="r1"  name="q9" value="3" id="9"/>3
        <input type="radio"class="r1"  name="q9" value="4" id="9"/>4
        <input type="radio"class="r1"  name="q9" value="5" id="9"/>5
        <input type="radio"class="r1"  name="q9" value="6" id="9"/>6
        <input type="radio"class="r1"  name="q9" value="7" id="9"/>7
        <input type="radio"class="r1"  name="q9" value="8" id="9"/>8
        <input type="radio"class="r1"  name="q9" value="9" id="9"/>9
        <input type="radio"class="r1"  name="q9" value="10" id="9"/>10
        <br />
        <br />
        10-لە كاتی وانە وتنەوەدا تا چەند مامۆستا ئاماژەی بە سەرچاوەی بەسوود دەكرد بۆ وەگرتنی زانیاری زیاتر لەسەر بابەتەكە؟
        <br />
        <input type="radio"class="r1"  name="q10" value="5" id="10"/>1
        <input type="radio"class="r1"  name="q10" value="4" id="10"/>2
        <input type="radio"class="r1"  name="q10" value="3" id="10"required/>3
        <input type="radio"class="r1"  name="q10" value="2" id="10"/>4
        <input type="radio"class="r1"  name="q10" value="1" id="10"/>5
        <input type="radio"class="r1"  name="q10" value="5" id="10"/>6
        <input type="radio"class="r1"  name="q10" value="4" id="10"/>7
        <input type="radio"class="r1"  name="q10" value="3" id="10"/>8
        <input type="radio"class="r1"  name="q10" value="2" id="10"/>9
        <input type="radio"class="r1"  name="q10" value="1" id="10"/>10
        <br>
        <br>
       <br>

       <a href="compiler.php"><input type="submit" onclick="check()" id="add" name="add" value="Next"></a>
            <br>
            <br>
</div>
      

   
       
</form> 
    <script> 

  function check()
    {    var ele = document.getElementsByClassName('r1');
    for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) { 
                if(ele[i].value==1||ele[i].value==10){
document.getElementById('g').innerHTML=" dear student you can not take 1 or 10  for all question";  
ele[i].checked = false;

                }}
               
     }
    }
  

 

    </script>
</body>
</html>
