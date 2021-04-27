<?php
//error_reporting(0); //关闭数组溢出弹窗(危)
$posts=$_POST;
$array = array();
include_once("weeks.php");
function getip()  //获取ip地址
{
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
  {
    $ip = getenv("HTTP_CLIENT_IP");
  }
  else
    if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
    {
      $ip = getenv("HTTP_X_FORWARDED_FOR");
    }
    else
      if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
      {
        $ip = getenv("REMOTE_ADDR");
      }
      else
        if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        {
          $ip = $_SERVER['REMOTE_ADDR'];
        }
        else
        {
          $ip = "unknown";
        }
  return ($ip);
}

if($posts["phone"]!=""){
    die();
}
if($posts["class"] == "" || !file_exists("lists/".$posts['class'].".txt")){
    $array["ok"] = 0;
    $array["message"] = "* 没有班级信息，无法进行登记";
    echo json_encode($array);
  exit(); //失败自动结束程序运行
}
if(intval(date("N")) === 7 && intval(date("Hi")) > 1755){
    $array["ok"] = 0;
    $array["message"] = "* 登记时间已过，下周请尽快学习";
    echo json_encode($array);
  exit(); //失败自动结束程序运行
}
if(!file_exists("data/".$posts['class']."/".gweek().".txt")){
    $st="data/".$posts['class']."/".gweek();
    $filename=$st . ".txt";
    $handle=fopen($filename,"w");
    $str=fwrite($handle,"");
    fclose($handle);
    unset($handle);
    unset($st);
    unset($str);
}
if(!file_exists("data/".$posts['class']."/".gweek().".ip")){
    $st="data/".$posts['class']."/".gweek();
    $filename=$st . ".ip";
    $handle=fopen($filename,"w");
    $str=fwrite($handle,"");
    fclose($handle);
    unset($handle);
    unset($st);
    unset($str);
}
function checkifable($inname,$innumber,$class) //检查是否匹配
{
  $namefile = file("lists/".$class.".txt"); //打开姓名列表文件
  foreach ($namefile as $name) //导入文件中的姓名学号数据
  {
    if ($name == '')  //最后一行防空处理
    {
      continue;
    }
    //分割字符串
    $position_temp = strpos($name,' ');
    //查询name在$position_temp中的位置
    $number_temp = substr($name,0,$position_temp);
    $name_temp = substr($name,$position_temp+1,strlen($name)-$position_temp-2); //-3的目的是除去换行+回车所占的字符数目
    $map[$number_temp]=$name_temp;  //map数组的下标代表学号，内部存储字符串，代表姓名
  }
  return $map[$innumber]==$inname;  //判断姓名是否相同
}

if (empty($_POST["name"]) or empty($_POST["number"]) or checkifable($_POST["name"],$_POST["number"],$posts['class']) == 0)
{
    $array["ok"] = 0;
    $array["message"] = "* 姓名学号不匹配，登记失败，请检查姓名学号前后是否有多余的空格";
    echo json_encode($array);
  exit(); //失败自动结束程序运行
}

date_default_timezone_set("Asia/Shanghai"); //设置时区
$st="data/".$posts['class']."/".gweek();  //获取当前日期以确定文件名
//下面是在保存打卡记录
$filename=$st . ".txt";
function checkqd($name,$class){
$fflch=file("data/".$class."/".gweek().".txt");
$ttt=false;
foreach ($fflch as $tname){
    if($tname == ''){
        continue;
    }
    $resu=strpos($tname,$name);
    if($resu === 0){
        $ttt=true;
        break;
    }else{
        $ttt=false;
    
}
}
return $ttt;
}
if(checkqd($posts["name"],$posts['class'])){
    $array["ok"] = 0;
    $array["message"] = "* 你已经登记过了！";
    echo json_encode($array);
    exit();
}
$handle=fopen($filename,"a+");
$str=fwrite($handle,$posts["name"] . " " . $_POST["number"] . " " . date('Y-m-d H:i:s', time()) . " " . getip() . "\n");  //追加打卡数据
fclose($handle);
//下面在保存ip地址
$filename="data/".$posts['class']."/".gweek().".ip";
$handle=fopen($filename,"a+");
$str=fwrite($handle,getip() . " " . $_POST["name"] . " " . date('Y-m-d H:i:s',time()) . "\n");  //追加ip数据
fclose($handle);
$array["ok"] = 1;
$array["message"] = "* 登记成功！";
echo json_encode($array);
?>