<?php
   include('db.php');
   
   if (isset($_GET["page"])) {
      $page=$_GET["page"];
   }
   else{
      $page=1;
   }
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
         <a href="main.php"><img src="banana.png" alt="banana" width="80" height="80"></a>
         <a class="Name" href="main.php">바나나장터</a>
         <a class="logmenu Login" href="main.php">로그아웃&nbsp&nbsp</a>
      </nav>
   </header>
   <div class="category bing-font">
            <div id="c1"><a href="category.html">카테고리</a></div>
            <div id="c2"><a href="https://musing-carson-917be6.netlify.app">인공지능 검색</a></div>
            <div id="c3"><a href="Hits.html">인기매물</a></div>
            <div id="c4"><a href="QnA.html">고객센터</a></div>
         </div>
		  
      <div class="container bing-font" style="margin: 90px 60px 90px 60px; height: 220px;">
      <div id="borad_area" style="display: flex; justify-content: center;">
         <table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
            <tr>
               <th style="width: 100px; height: 20px; background-color: #eeeeee; text-align: center;">번호</th>
               <th style="width: 300px; height: 20px; background-color: #eeeeee; text-align: center;">제목</th>
               <th style="width: 100px; height: 20px; background-color: #eeeeee; text-align: center;">작성자</th>
               <th style="width: 200px; height: 20px; background-color: #eeeeee; text-align: center;">작성일</th>
            </tr>
            <?php
                     
                     $sql="select Count(*) from comu";
                     $query=$con->prepare($sql);
                     $query->execute();
                     $total_record= $query->fetchColumn();
                     
                     $list =5; //한 페이지에 보여 줄 글 목록의 개수
                     $block_cnt=5; //블록에 나타날 페이지 개수
                     $block_num = ceil($page / $block_cnt);
                     $block_start = (($block_num-1) * $block_cnt)+1;
                     $block_end = $block_start + $block_cnt-1;
                     
                     $total_page = ceil($total_record / $list);
                     if($block_end > $total_page) {
                        $block_end = $total_page;
                     }
                     $total_block = ceil($total_page / $block_cnt);
                     $page_start = ($page - 1) * $list;
                     
                     $sqli = "select * from comu order by num limit $page_start, $list";
                     $queryy=$con->prepare($sqli);
                     $queryy->execute();
                     while(($row = $queryy->fetch())) {
                        $title=$row["title"]; 
                        if(strlen($title)>30) { 
                           $title=str_replace($row["title"],mb_substr($row["title"],0,30,"utf-8")."...",$row["title"]);
                     }
                  ?>
            <tbody>
               <tr>
                  <td style="width:100px; height: 20px; border-bottom: 1px solid #eeeeee;"><?php echo $row['num']; ?>
                  </td>
                  <td style="width:300px; height: 20px; border-bottom: 1px solid #eeeeee;"><a
                        href="read_content.php?num=<?php echo $row['num'];?>"><?php echo $title;?></a></td>
                  <td style="width:100px; height: 20px; border-bottom: 1px solid #eeeeee;"><?php echo $row['name']?>
                  </td>
                  <td style="width:200px; height: 20px; border-bottom: 1px solid #eeeeee;"><?php echo $row['date']?>
                  </td>
               </tr>
            </tbody>
            <?php } ?>
         </table>
		 </div>
		<div
         style="display: flex; margin-top: 3%;  justify-content: right; margin-right: 60px; text-align: right; margin-top: 3%;">
         <a href="community.php">
            <input class="submit bing-font" type="submit" value="글쓰기">
         </a>
      </div> 
   </div>
   

   <div id="page_num"  style="display: flex; margin-top: 3%;  justify-content: center; text-align: right; margin-right: 60px;">
            <?php
                     if ($page <= 1) {
                     
                     }
                     else {
                        echo "<a href='main_comu.php?page=1'>처음</a>";
                     }
                     if ($page <= 1) {
                     
                     }
                     else {
                        $pre = $page - 1;
                        echo "<a href='loginmain.php?page=$pre'>이전</a>";
                     }
                     for($i = $block_start; $i <= $block_end; $i++) {
                        if($page == $i) {
                           echo "<b>$i</b>";
                        }
                        else {
                           echo "<a href='loginmain.php?page=$i'>$i</a>";
                        }
                     }
                     if($page >= $total_page) {
                     }
                     else {
                        $next = $page + 1;
                        echo "<a href='loginmain.php?page=$next'>다음</a>";
                     }
                     
                     if ($page >= $total_page) {
                     }
                     else {
                        echo "<a href='loginmain.php?page=$total_page'>마지막</a>";
                     }
                  ?>
         </div>
  
</body>

</html>