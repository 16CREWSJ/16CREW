<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./log.css">
    <title>메인</title>
</head>

<body>
    <header>
        <nav class="sdms-font">
            <a href="main.html"><img src="banana.png" alt="banana" width="80" height="80"></a>
            <a class="Name" href="main.php">바나나장터</a>
            <a class="logmenu Join" href="join.html">회원가입 </a>
            <a class="logmenu Login" href="login.html">로그인&nbsp&nbsp</a>
        </nav>
    </header>
    <div class="category bing-font">
        <div id="c1"><a href="category.html">카테고리</a></div>
        <div id="c2"><a href="https://happy-boyd-2b3b2a.netlify.app/">인공지능 검색</a></div>
        <div id="c3"><a href="Hits.html">인기매물</a></div>
        <div id="c4"><a href="QnA.html">고객센터</a></div>
    </div>
    <div class="wrap bing-font">
        <div class="joinform">
            <form name="login" action="join2.php" method="post">
                <h3 style="text-align: center;">회원가입</h3>
                <div>
                    <input class="IDbox" type="text" placeholder="아이디" name="id" maxlength="20">
                    <input class="check bing-font" type="button" name="user_IDcheck" value="아이디 확인" onclick="checkid();">
                </div>
                <div>
                    <input class="block" type="password" placeholder="비밀번호" name="password" maxlength="20">
                </div>
                <div>
                    <input class="PWbox" type="password" placeholder="비밀번호" name="password" maxlength="20">
                    <input class="check bing-font" type="button" name="user_PWcheck" value="비밀번호 재확인">
                </div>
                <div>
                    <input class="block" type="text" placeholder="이름" name="name" maxlength="20">
                </div>
                <div>
                    <input class="block" type="text" placeholder="주민등록번호 (-는 제외)" name="id_num" maxlength="20">
                </div>
                <div>
                    <input class="block" type="text" placeholder="주소" name="address" maxlength="20">
                </div>
                <div class="block"  style="text-align: center;">
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
                    <input class="block" type="tel" placeholder="전화번호 (-는 제외)" name="phoneNumber" maxlength="40">
                </div>
                <div>
                    <input class="block" type="email" placeholder="이메일" name="email" maxlength="40">
                </div>
                <div>
                    <input class="submit bing-font" type="submit" name="" value="제출">
                </div>
            </form>

        </div>
    </div>
</body>

</html>