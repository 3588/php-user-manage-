<?php
$id = $_GET['id'];
require('../include/init.php');
$conn = mysql_connect("localhost","root","") or die("error");
  
  mysql_select_db("cssa",$conn);
  mysql_query("set names utf8;");//设置编码
 $sql="SELECT * FROM `member` WHERE `id` = " .$id;//获取前300个
 $list=mysql_query($sql,$conn);
 $row = mysql_fetch_array($list);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CSSA-成员管理系统-后台-用户信息修改-V0.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../template/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
<div class="container-narrow">
<hr>
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="member.php">成员管理</a></li>
          <li><a href="#">活动管理</a></li>
          <li><a href="#">内部管理</a></li>
        </ul>
         <h3 class="muted"><img src="http://sjucssa.com/bbs/static/image/common/logo.png">用户信息修改</h3>
        <hr>
      </div>
      <table class="table">
      <form action="memberchangeinfobyid.php" method="post">
<tr class="info">
    <td>ID</td>
    <td>名字</td>
    <td>性别</td>
    <td>专业</td>
    <td>电话</td>
    <td>邮箱</td>
    <td><label class="checkbox">
      <input type="checkbox" name="check">确定
    </label></td>
  </tr>
  
   <tr class="warning">
  <td><input class="input-mini"  type="text" placeholder="<?=$row["id"];?>" value="<?=$row["id"];?>"  disabled></td>
  <input value="<?=$row["id"];?>" name="id" type="hidden">
    <td><input class="input-small" type="text" placeholder="<?=$row["name"]?>" value="<?=$row["name"]?>" name="name"></td>
    <td><input class="input-mini" type="text" placeholder="<?=$row["gender"]?>" value="<?=$row["gender"]?>" name="gender"></td>
    <td><input class="input-medium" type="text" placeholder="<?=$row["major"]?>" value="<?=$row["major"]?>" name="major"></td>
    <td><input class="input-small" type="text" placeholder="<?=$row["phone"]?>" value="<?=$row["phone"]?>" name="phone"></td>
    <td><input class="input-medium" type="text" placeholder="<?=$row["email"]?>" value="<?=$row["email"]?>" name="email"></td>
<td>
  <button type="submit" class="btn btn-info">更改</button>
  </form></td>
  </tr>
 
</table>
<hr>
<table class="table">
<tr class="info">
    <td>成员加入日期</td>
    <td>最后更新日期</td>
    <td>活动报名次数</td>
    <td>活动签到次数</td>
  </tr>
   <tr class="warning">
  <td><input class="input-mini" id="disabledInput" type="text" placeholder="<?=$row["join"];?>" value="<?=$row["join"];?>" disabled></td>
    <td><input class="input-small" id="disabledInput" type="text" placeholder="<?=$row["date"]?>" value="<?=$row["date"]?>" disabled></td>
    <td><input class="input-mini" id="disabledInput" type="text" placeholder="0" value="0" disabled></td>
    <td><input class="input-mini" id="disabledInput" type="text" placeholder="0" value="0" disabled></td>
  </tr>
</table>
  </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../template/js/bootstrap.min.js"></script>
  <script src="../template/js/jquery.js"></script>
  <script src="../template/js/bootstrap-transition.js"></script>
  <script src="../template/js/bootstrap-alert.js"></script>
  <script src="../template/js/bootstrap-modal.js"></script>
  <script src="../template/js/bootstrap-dropdown.js"></script>
  <script src="../template/js/bootstrap-scrollspy.js"></script>
  <script src="../template/js/bootstrap-tab.js"></script>
  <script src="../template/js/bootstrap-tooltip.js"></script>
  <script src="../template/js/bootstrap-popover.js"></script>
  <script src="../template/js/bootstrap-button.js"></script>
  <script src="../template/js/bootstrap-collapse.js"></script>
  <script src="../template/js/bootstrap-carousel.js"></script>
  <script src="../template/js/bootstrap-typeahead.js"></script>
  </body>
</html>