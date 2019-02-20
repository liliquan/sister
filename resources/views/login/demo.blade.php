<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>登录</title> 
<link href="/css/login.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div class="login">
    <div class="message">管理登录</div>
    <div id="darkbannerwrap"></div>
    
    <form action="{{ route('code') }}" method="post">
	{{ csrf_field() }}
		<input name="action" value="login" type="hidden">
		<input name="username" placeholder="用户名" type="text">
		@if(session('status1'))
			<div class="yhmbcz">
			{{ session('status1') }}
			</div>
    	@endif
		<hr class="hr15">
		<input name="password" placeholder="密码" type="password">
		@if(session('status'))
			<div class="mmcw">
			{{ session('status') }}
			</div>
    	@endif
		<hr class="hr15">

		<div class="row">
			<input name="captcha" placeholder="请输入验证码" type="text" id="code" class="form-control {{$errors->has('captcha')?'parsley-error':''}}">
			<img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()" class="code">

			@if($errors->has('captcha'))
				<div class="yzm">
					{{$errors->first('captcha')}}
				</div>
			@endif
			
		</div>
		
		<hr class="hr20">
		<input value="登录" style="width:100%;" type="submit">
	</form>
	
</div>

</body>
</html>