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
	<nav>
		<a href="main.html"><img src="./banana.png" alt="banana" width="80" height="80"></a>
  		<a class="Name" href="main.html">바나나장터</a>
        <a class="logmenu Join"  href="join.html">회원가입 </a>  
  		<a class="logmenu Login" href="login.html">로그인&nbsp&nbsp</a>    
 	</nav>
 </header>
 <div id="wrap">
    <div class="category">
    	<div id="c1"><a href="category.html">카테고리</a></div>
    	<div id="c2"><a href="AISearch.html">인공지능 검색</a></div>
   		<div id="c3"><a href="Hits.html">인기매물</a></div>
   		<div id="c4"><a href="QnA.html">고객센터</a></div>
	</div>
 	<div class="joinform">
 		<form method="post" action="join2.php">
 			<h3 style="text-align: center;">회원가입</h3>
 			<div>
                <input type="text" class="form-control inputID" placeholder="아이디" name="id" maxlength="20">	
            </div>
            <div>
                <input type="password" class="form-control inputPassword" placeholder="비밀번호" name="password" maxlength="20">
            </div>
            <div>
                <input type="text" class="form-control inputName" placeholder="이름" name="name" maxlength="20">
            </div>
            <div>
                <input type="text" class="form-control inputID_num" placeholder="주민등록번호 (-는 제외)" name="id_num" maxlength="20">
            </div>
            <div>
                <input type="text" class="form-control inputAddress" placeholder="주소" name="address" maxlength="20">
            </div> 
            <div style="text-align: center;">
                <div>
                    <label>
                    <input type="radio" name="gender" autocomplete="off" value="남자" checked>남자
                </label>
                <label>
                    <input type="radio" name="gender" autocomplete="off" value="여자" checked>여자
                </label>
            </div>
            </div>
            <div>
                <input type="tel" class="form-control inputTel" placeholder="전화번호 (-는 제외)" name="phoneNumber" maxlength="40">
            </div>
            <div>
                <input type="email" class="form-control inputEmail" placeholder="이메일" name="email" maxlength="40">
            </div>
            <input type="submit" class="btn btn-primary form-control submit" value="회원가입">
 		</form>
 	</div>
</body>
</html>