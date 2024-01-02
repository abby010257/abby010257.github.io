<!--
<?php 
    $class_number=78;  
    $eachstudent_number=32.33;
    $total_student=$class_number*$eachstudent_number;
    print floor($total_student);
?>         -->

<!--
<?php
    $a=10;
    $b=4;
    if($a>$b){
        print("true");}
        else{print("false");}
?>-->
         
<!--
<?php
    $string="中文字串123456789789";
    $countstr=mb_strlen($string,"UTF-8");
    if($countstr>10){
        print("這個字串有".$countstr."個字，大於十");
    }elseif($countstr<10){
        print("這個字串有".$countstr."個字，小於十");
    }else{
        print("這個字串有".$countstr."個字，等於十");
    }
?>-->

<!--
<select name="people">
  <?php
     $a=1;
     while($a<=10){
     echo "<option>$a</option>";
      $a++;
       }
?>
</select>
-->

<!--
<select name="people">
  <?php
     for($str=1;$str<=30;$str++){
     echo "<option>$str</option>";
       }
?>
</select>
-->

