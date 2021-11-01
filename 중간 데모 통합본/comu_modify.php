<?php
include('db.php');

$no = $_GET["num"];
$sql="select * from comu where num='$no'";
$query = $con->prepare($sql);
$query->execute();
$row = $query->fetch();
?>

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
            <a class="logmenu Join" href="join.html">회원가입 </a>
            <a class="logmenu Login" href="login.html">로그인&nbsp&nbsp</a>
        </nav>
    </header>
    <div class="category sdms-font">
        <div id="c1"><a href="category.html">카테고리</a></div>
        <div id="c2"><a href="https://musing-carson-917be6.netlify.app">인공지능 검색</a></div>
        <div id="c3"><a href="Hits.html">인기매물</a></div>
        <div id="c4"><a href="QnA.html">고객센터</a></div>
    </div>
    <div class="container">
        <div id="board_write" style=" display: flex; margin-top: 90px; margin-left: 60px; margin-right: 60px; height: 500px;
    justify-content: center; ">
            <form action="comu_modify2.php/<?php echo $row['num'];?>" method="POST">
                <input type="hidden" name="num" value="<?php echo $row['num'];?>" />
                <table class="table table-striped" style="border: 1px solid #ddddda">
                    <thead>
                        <tr>
                            <th colspan="2" style="width: 400px; background-color: #eeeeee; text-align: center;">
                                <h3 class="sdms-font" style="font-size: 30px; padding-top: 10px;">게시판 수정하기</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="pull-left"
                                    style="display: block; width: 400px;">&nbsp;&nbsp;&nbsp;이름
                                    :<b><?php echo  $row['name'];?></b></span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width: 400px;" class="form-control" placeholder="글 제목"
                                    name="title" id="utitle" value="<?php echo $row['title'];?>"></td>
                        </tr>
                        <tr>
                            <td><textarea class="form-control" placeholder="글 내용" name="content" id="ucontent"
                                    style="width:400px; height: 400px"><?php echo $row['content'];?></textarea></td>
                        </tr>
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary">수정하기</button>
            </form>
        </div>
    </div>
</body>

</html>