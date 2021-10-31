<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page  import="java.io.PrintWriter" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="./main.css"> 
<title>게시판</title>
</head>
<body>
<header>
	<%
		String userID = null;
		if(session.getAttribute("userID")!=null){
			userID = (String)session.getAttribute("userID");
		}
	%>
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="main.jsp"><img src="./banana.png" alt="banana" width="50" height="50"></a>
  		<a class="navbar-brand Name" href="main.jsp">바나나장터</a>
  		<%
  			if(userID == null){
  		%>
  		<div class="collapse navbar-collapse" id="bs-eaxmple-navbar-collapse-1">
   			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" 
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">접속하기<span class="caret"></span> </a>
					<ul class="dropdown-menu">
						<li><a href="login.jsp">로그인</a></li>
						<li><a href="join.jsp">회원가입</a></li>
					</ul>
				</li>
			</ul>
  		</div>
  		<%
  			} else {
  		%>
  		<div class="collapse navbar-collapse" id="bs-eaxmple-navbar-collapse-1">
   			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" 
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">회원관리<span class="caret"></span> </a>
					<ul class="dropdown-menu">
						<li><a href="looutAction.jsp">로그아웃</a></li>
					</ul>
				</li>
			</ul>
  		</div>
  		<%
  		}
		%>
 	</nav>
 </header>
 <div class="category">
        <div id="c1"><a href="bbs.jsp">카테고리</a></div>
        <div id="c2"><a href="AISearch.jsp">인공지능 검색</a></div>
        <div id="c3"><a href="Hits.jsp">인기매물</a></div>
        <div id="c4"><a href="QnA.jsp">고객센터</a></div>
 </div>	
 	<div class="container">
 		<div class="row Table">
 			<table class="table table-striped" style="text-align: center; border: 1px solid #dddddd">
 				<thead>
 					<tr>
 						<th style="background-color: #eeeeee; text-align: center;">번호</th>
 						<th style="background-color: #eeeeee; text-align: center;">제목</th>
 						<th style="background-color: #eeeeee; text-align: center;">작성자</th>
 						<th style="background-color: #eeeeee; text-align: center;">작성일</th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr>
 						<td>1</td>
 						<td>안녕하세요.</td>
 						<td>홍길동</td>
 						<td>2021-10-29</td>
 					</tr>
 				</tbody>
 			</table>
 			<a href="write.jsp" class="btn btn-primary pull-right">글쓰기</a>
 		</div>
 	</div>
 	
<footer>
	<p>천찬웅 &amp; 오승조 &amp; 이민수 &amp; 윤경수 / 16CREW</p>
</footer>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 	<script src="js/bootstrap.js"></script>
</body>
</html>