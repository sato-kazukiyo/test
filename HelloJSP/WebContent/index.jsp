<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Insert title here</title>
</head>
<body>

<p>お名前を入力してください。</p>
<form method="post" action="greeting-out.jsp">
<input type="text" name="user">
<input type="submit" value="確定">
</form>


<form method="post" action="total-out.jsp">
<input type="text" name="price">
円ｘ
<input type="text" name="count">
個＋送料
<input type="text" name="delivery">
円＝
<input type="submit" value="計算">
</form>


</body>
</html>