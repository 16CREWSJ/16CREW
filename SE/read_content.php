<?php
include('db.php');


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

        <?php
         $no= $_GET["num"];
         $sql="select * from comu where num='$no'";
         $query = $con->prepare($sql);
         $query->execute();
         $row = $query->fetch();
         
         /*$hit = $row['hit'] + 1;
         $sqli=0"update comu set hit = '".$hit."' where num = '$no'";
         $queryy = $con->prepare($sqli);
         $queryy->execute();*/
      ?>
        <nav>
            <a href="main.html"><img src="./banana.png" alt="banana" width="80" height="80"></a>
            <a class="Name" href="main.html">바나나장터</a>
            <a class="logmenu Join" href="join.html">회원가입 </a>
            <a class="logmenu Login" href="login.html">로그인&nbsp&nbsp</a>
        </nav>
    </header>
    <div class="category">
        <div id="c1"><a href="category.html">카테고리</a></div>
        <div id="c2"><a href="https://clever-poincare-9b4aa2.netlify.app">인공지능 검색</a></div>
        <div id="c3"><a href="Hits.html">인기매물</a></div>
        <div id="c4"><a href="QnA.html">고객센터</a></div>
    </div>
	<script>
            function confirmter() {

                if (confirm("지금 바로 삭제 할까요?")) {

                    alert("삭제가 완료되었습니다");
                    location.replace('comu_delete.php?num=<?php echo $row["num"];?>');
                } else {
                    alert("취소를 누르셨습니다!!");
                    location.replace('main_comu.php');
                }
            }
        </script>
        <div id="bo_ser">
                <a style="display:inline" href="comu_modify.php?num=<?php echo $row['num']; ?>">[수정]</a>
                <a style="display:inline" onclick="confirmter();">[삭제]</a>
        </div>
    <div id="borad_read" style=" display: flex; margin-top: 90px; margin-left: 60px; margin-right: 60px; height: 500px;
    justify-content: center; ">  
        <table calss="table table-striped" style="text-align: center; border: 1px solid #ddddda">
            <thead>
                <tr>
                    <th colspan="2" style="background-color: #eeeeee; text-align: center;">
                        <h3><?php echo $row['title'];?></h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>작성자</td>
                    <td style="width: 400px;" colspan="2"><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <td>작성일자</td>
                    <td style="width: 400px;" colspan="2"><?php echo $row['date'];?></td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td style="width: 400px; height: 400px;" colspan="2" style="min-height: 200px; text-align: left;"><?php echo nl2br($row['content']);?></td>
                </tr>
            </tbody>
        </table>
        
    </div>



</body>

</html>