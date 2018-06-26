<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<title>4eachblog 掲示板</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	<img src="4eachblog_logo.jpg" class="logo">
		
		<header>
		<ul>
			<li>トップ</li>
			<li>プロフィール</li>
			<li>4eachについて</li>
			<li>登録フォーム</li>
			<li>問い合わせ</li>
			<li>その他</li>
		</ul>
		</header>
		
		<body>
			<div class="main-container">
				<div class="left">
					<h1>プログラミングに役立つ掲示板</h1>
					<div class="form">
					<form method="post" action="insert.php">
						<h2>入力フォーム</h2>
						<div>
							<label>ハンドルネーム</label>
							<br>
							<input type="text" class="text" size="50" name="handlename">
							<br><br>
						</div>

						<div>
							<label>タイトル</label>
							<br>
							<input type="text" class="text" size="50" name="title">
							<br><br>
						</div>

						<div>
							<label>コメント</label>
							<br>
							<textarea rows="7" cols="100" name="comments"></textarea>
							<br><br>
						</div>

						<div>
							<input type="submit" class="submit" value="送信する">
						</div>
					</div>
						
						
						<?php
						mb_internal_encoding("utf8");
						$pdo = new PDO("mysql:dbname=lesson01;host=localhost;charset=utf8;","root","");
						$stmt = $pdo->query("select* from 4each_keijiban");
						?>
						
						<?php
						foreach($stmt as $row) {
							echo "<div class='kakiko'>";
							echo "<h3>".$row['title']."</h3>";
							echo $row['comments'];
							echo "<p>posted by ".$row['handlename']."</p>";
							echo "</div>";
						}
						?>

					</form>
				</div>
				
				<div class="right">　
					<h3>人気の記事</h3>
						<ul>
							<li>PHPオススメ本</li>
							<li>PHP　MyAdminの使い方</li>
							<li>いま人気のエディタTop5</li>
							<li>HTMLの基礎</li>
						</ul>

					<h3>オススメリンク</h3>
						<ul>
							<li>インターノウス株式会社</li>
							<li>XAMPPのダウンロード</li>
							<li>Eclipseのダウンロード</li>
							<li>Braketsのダウンロード</li>
						</ul>

					<h3>カテゴリ</h3>
						<ul>
							<li>HTML</li>
							<li>PHP</li>
							<li>MySQL</li>
							<li>JavaScript</li>
						</ul>
				</div>
				
			</div>

		</body>
		
		<footer>
 			copyright internous | 4each blog is the one which provides A to Z about programming.
		</footer>
		
	</body>
</html>