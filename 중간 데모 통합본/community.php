<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <link rel="stylesheet" href="./main.css">
    <title>메인</title>
</head>
<body>
    <header>
        <nav class="sdms-font">
            <a href="main.html"><img src="./banana.png" alt="banana" width="80" height="80"></a>
            <a class="Name" href="main.html">바나나장터</a>
            <a class="logmenu Login" href="login.html">로그아웃&nbsp&nbsp</a>
        </nav>
    </header>
    <div class="category sdms-font">
       <div id="c1"><a href="category.html">카테고리</a></div>
       <div id="c2"><a href="https://musing-carson-917be6.netlify.app">인공지능 검색</a></div>
         <div id="c3"><a href="Hits.html">인기매물</a></div>
         <div id="c4"><a href="QnA.html">고객센터</a></div>
   </div>
   <h4 style="text-align:center">글을 작성하는 공간입니다.</h4>
    <div id="board_write" style=" display: flex; margin-top: 90px; margin-left: 60px; margin-right: 60px; height: 500px;
    justify-content: center; ">
        
        <div id="write_area">
            <form action="write_ok.php" method="post">
                <div id="in_title">
                    <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100"
                        required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_name">
                    <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100"
                        required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea style="width:400px; height: 400px" name="content" id="ucontent" placeholder="내용" required></textarea>
                </div>
				<div class="bt_se">
                    <button type="submit">글 등록</button>
				</div>
        
            </form>
        </div>
    </div>
	
</body>
</html>