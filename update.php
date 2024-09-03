<?php
include_once 'config.php';
session_start();
$email=$_SESSION['email'];
//delete feedback
if(isset($_SESSION['key'])){
if(@$_GET['fdid'] && $_SESSION['key']=='mansi7785068889') {
$id=@$_GET['fdid'];
$result = mysqli_query($con,"DELETE FROM feedback WHERE id='$id' ") or die('Error');
header("location:dash.php?q=3");
}
}

//delete user
if(isset($_SESSION['key'])){
if(@$_GET['demail'] && $_SESSION['key']=='mansi7785068889') {
$demail=@$_GET['demail'];
$r1 = mysqli_query($con,"DELETE FROM rank WHERE email='$demail' ") or die('Error');
$r2 = mysqli_query($con,"DELETE FROM history WHERE email='$demail' ") or die('Error');
$result = mysqli_query($con,"DELETE FROM user WHERE email='$demail' ") or die('Error');
header("location:dash.php?q=1");
}
}

//remove quiz
if(isset($_SESSION['key'])){
  if(@$_GET['q']== 'rmquiz' && $_SESSION['key']=='mansi7785068889') {
  $eid=@$_GET['eid'];
  $result = mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
  while($row = mysqli_fetch_array($result)) {
    $qid = $row['qid'];
  $r1 = mysqli_query($con,"DELETE FROM options WHERE qid='$qid'") or die('Error');
  $r2 = mysqli_query($con,"DELETE FROM answer WHERE qid='$qid' ") or die('Error');
  }
  $r3 = mysqli_query($con,"DELETE FROM questions WHERE eid='$eid' ") or die('Error');
  $r4 = mysqli_query($con,"DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
  $r4 = mysqli_query($con,"DELETE FROM history WHERE eid='$eid' ") or die('Error');
  
  header("location:dash.php?q=5");
  }
  }
//add quiz
if(isset($_SESSION['key'])){
  if(@$_GET['q']== 'addquiz' && $_SESSION['key']=='mansi7785068889') {
  $name = $_POST['name'];
  $name= ucwords(strtolower($name));
  $total = $_POST['total'];
  $right = $_POST['right'];
  $wrong = $_POST['wrong'];
  $time = $_POST['time'];
  $tag = $_POST['tag'];
  $desc = $_POST['desc'];
  
  $q3=mysqli_query($con,"INSERT INTO `quiz`( `title`, `right`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES ('$name' , '$right' , '$wrong','$total','$time' ,'$desc','$tag', NOW())");
  //$eid="SELECT eid FROM quiz WHERE title='$name'";
  //$result=mysqli_query($con,$eid);
  //$row=mysqli_fetch_assoc($result);
//print_r($row);
  $id= $con->insert_id;
  echo $id;
  header("location:dash.php?q=4&step=2&eid=$id&n=$total");
  }
  }

  if(isset($_SESSION['key'])){
    if(@$_GET['q']== 'addqns' && $_SESSION['key']=='mansi7785068889') {
    $n=@$_GET['n'];
    $eid=@$_GET['eid'];
    $ch=@$_GET['ch'];
    
    for($i=1;$i<=$n;$i++)
     {
     $qns=$_POST['qns'.$i];
    $q3=mysqli_query($con,"INSERT INTO `questions`( `qns`, `choice`, `sn`, `eid`) VALUES ('$qns','$ch','$i','$eid')");
    $a=$_POST[$i.'1'];
    $b=$_POST[$i.'2'];
    $c=$_POST[$i.'3'];
    $d=$_POST[$i.'4'];
    $qid= $con->insert_id;
    $qa=mysqli_query($con,"INSERT INTO `options`(`qid`, `option`) VALUES  ('$qid','$a')") or die('Error61');
    $oaid=$con->insert_id;
    $qb=mysqli_query($con,"INSERT INTO `options`(`qid`, `option`) VALUES  ('$qid','$b')") or die('Error62');
    $obid=$con->insert_id;
    $qc=mysqli_query($con,"INSERT INTO `options`(`qid`, `option`) VALUES  ('$qid','$c')") or die('Error63');
    $ocid=$con->insert_id;
    $qd=mysqli_query($con,"INSERT INTO `options`(`qid`, `option`) VALUES  ('$qid','$d')") or die('Error64');
    $odid=$con->insert_id;
    $e=$_POST['ans'.$i];
    switch($e)
    {
    case 'a':
    $ansid=$oaid;
    break;
    case 'b':
    $ansid=$obid;
    break;
    case 'c':
    $ansid=$ocid;
    break;
    case 'd':
    $ansid=$odid;
    break;
    default:
    $ansid=$oaid;
    }
    
    
    $qans=mysqli_query($con,"INSERT INTO answer VALUES  ('$qid','$ansid')");
    
     }
    header("location:dash.php?q=0");
    }
    }
    
    //quiz start
    if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
    $eid=@$_GET['eid'];
    $sn=@$_GET['n'];
    $total=@$_GET['t'];
    $ans=$_POST['ans'];
    $qid=@$_GET['qid'];
    $q=mysqli_query($con,"SELECT * FROM answer WHERE qid='$qid' " );
    while($row=mysqli_fetch_array($q) )
    {
    $ansid=$row['ansid'];
    }
    if($ans == $ansid)
    {
    $q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " );
    while($row=mysqli_fetch_array($q) )
    {
    $right=$row['right'];
    }
    if($sn == 1)
    {
    $q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW())")or die('Error');
    }
    $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');
    
    while($row=mysqli_fetch_array($q) )
    {
    $s=$row['score'];
    $r=$row['right'];
    }
    $r++;
    $s=$s+$right;
    $q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`right`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');
    
    } 
    else
    {
    $q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " )or die('Error129');
    
    while($row=mysqli_fetch_array($q) )
    {
    $wrong=$row['wrong'];
    }
    if($sn == 1)
    {
    $q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
    }
    $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error139');
    while($row=mysqli_fetch_array($q) )
    {
    $s=$row['score'];
    $w=$row['wrong'];
    }
    $w++;
    $s=$s-$wrong;
    $q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
    }
    if($sn != $total)
    {
    $sn++;
    header("location:account.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total")or die('Error152');
    }
    else if( $_SESSION['key']!='sunny7785068889')
    {
    $q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
    while($row=mysqli_fetch_array($q) )
    {
    $s=$row['score'];
    }
    $q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
    $rowcount=mysqli_num_rows($q);
    if($rowcount == 0)
    {
    $q2=mysqli_query($con,"INSERT INTO rank VALUES('$email','$s',NOW())")or die('Error165');
    }
    else
    {
    while($row=mysqli_fetch_array($q) )
    {
    $sun=$row['score'];
    }
    $sun=$s+$sun;
    $q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
    }
    header("location:account.php?q=result&eid=$eid");
    }
    else
    {
    header("location:account.php?q=result&eid=$eid");
    }
    }
    
    //restart quiz
    if(@$_GET['q']== 'quizre' && @$_GET['step']== 25 ) {
    $eid=@$_GET['eid'];
    $n=@$_GET['n'];
    $t=@$_GET['t'];
    $q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
    while($row=mysqli_fetch_array($q) )
    {
    $s=$row['score'];
    }
    $q=mysqli_query($con,"DELETE FROM `history` WHERE eid='$eid' AND email='$email' " )or die('Error184');
    $q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
    while($row=mysqli_fetch_array($q) )
    {
    $sun=$row['score'];
    }
    $sun=$sun-$s;
    $q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
    header("location:account.php?q=quiz&step=2&eid=$eid&n=1&t=$t");
    }
    
    ?>
    