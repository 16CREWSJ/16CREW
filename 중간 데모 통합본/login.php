<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1">
<link rel="stylesheet" href="./main.css">
<link rel="stylesheet" href="./log.css"> 
<title>메인</title>
</head>
<body>
<header>
	<nav class="sdms-font">
		<a href="main.html"><img src="./banana.png" alt="banana" width="80" height="80"></a>
  		<a class="Name" href="main.php">바나나장터</a>
        <a class="logmenu Join"  href="join.php">회원가입 </a>  
  		<a class="logmenu Login" href="login.php">로그인&nbsp&nbsp</a>    
 	</nav>
 </header>
 <div id="wrap">
    <div class="category bing-font">
    	<div id="c1"><a href="category.html">카테고리</a></div>
    	<div id="c2"><a href="AISearch.html">인공지능 검색</a></div>
   		<div id="c3"><a href="Hits.html">인기매물</a></div>
   		<div id="c4"><a href="QnA.html">고객센터</a></div>
	</div>
 	<div>
 		<div class="logform bing-font">
 			<form method="post" action="login1.php">
 				<h3 style="text-align: center;">로그인</h3>
 				<div>
 					<input type="text" class="block" placeholder="아이디" name="id" maxlength="20">
 				</div>
 				<div>
 					<input type="password" class="block" placeholder="비밀번호" name="password" maxlength="20">
 				</div>
 					<input class="submit bing-font" type="submit" value="로그인">
 			</form>
 		</div>
 	</div>
</body>
</html>