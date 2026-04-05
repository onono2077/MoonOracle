<!-- index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Mind Pattern Fortune</title>
<style>
body {
    background: #0b1d2e;
    color: #fff;
    font-family: sans-serif;
    text-align: center;
    padding: 40px;
}
textarea {
    width: 80%;
    height: 150px;
    padding: 10px;
    border-radius: 10px;
    border: none;
    font-size: 16px;
}
button {
    margin-top: 20px;
    padding: 12px 30px;
    background: #6ee7d2;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    cursor: pointer;
}
</style>
</head>
<body>

<h1>Mind Pattern Fortune</h1>
<p>あなたの文章から“思考の癖”を読み解きます</p>

<form action="analyze.php" method="POST">
    <textarea name="text" placeholder="最近の気持ちや出来事を書いてください"></textarea>
    <br>
    <button type="submit">占う</button>
</form>

</body>
</html>
