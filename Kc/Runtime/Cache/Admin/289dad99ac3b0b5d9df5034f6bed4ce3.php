<?php if (!defined('THINK_PATH')) exit();?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/kechuang4/Public/Bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/kechuang4/Public/Bootstrap/css/style.css" rel='stylesheet' type='text/css' />
<link href="/kechuang4/Public/Bootstrap/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="/kechuang4/Public/Bootstrap/js/jquery.min.js"></script>
<!----webfonts---
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="/kechuang4/Public/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="/kechuang4/Public/Bootstrap/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">登 录</h2>
  <div class="app-cam">
	  <form id="form-login">
          <p id="msg"></p>
		<input name ='count'  id ='count' type="text" class="text" value="" placeholder="帐号" >
		<input name = 'password'  id = 'password' type="password" placeholder="密码" >
		<div class="submit"><button id="login-button">提 d交</button><!--<input id="login-button" type="button" value="登  录">--></div>
		<div class="login-social-link">
          <a href="index.html" class="facebook">
              教师
          </a>
          <a href="index.html" class="twitter">
              临时
          </a>
        </div>
		<ul class="new">
			<li class="new_left"><p><a href="#">忘记密码 ?</a></p></li>
			<li class="new_right"><p class="sign">帮助 ?<a href="register.html"> 联系客服</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright © 2015 Modern. All Rights Reserved | Design by  </p>
   </div>
<script>
    $('#login-button').click(function() {
        //alert('kk');
        //var name = $('#name').val();
        //var password = $('#password').val();
        var myForm = $('#form-register');
        $.ajax({
            url: '/kechuang4/index.php/Admin/Index/login/mid/<?php echo ($mid); ?>',
            type: 'post',//提交的方式i
            dataType:'json',
            data: myForm.serialize(),
            success: function(data) {
                alert(data.msg);
                if(data.status==1){
                    //window.location.href=document.referrer;
                }

                //这是成功返回的数据，写自己的逻辑
            }
        });
    });
</script>
</body>
</html>