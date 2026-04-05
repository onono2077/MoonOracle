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
            font-family: 'Yu Gothic', sans-serif;
            text-align: center;
            padding: 40px;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        .sub {
            opacity: 0.8;
            margin-bottom: 40px;
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

        .quote {
            margin-top: 50px;
            font-size: 15px;
            opacity: 0.85;
            line-height: 1.8;
        }
    </style>
</head>

<body>

    <h1>Mind Pattern Fortune</h1>
    <p class="sub">あなたの言葉から“心の地図”を描く占い</p>

    <form action="analyze.php" method="POST">
        <textarea name="text" placeholder="最近の気持ちや出来事を書いてください"></textarea>
        <br>
        <button type="submit">占う</button>
    </form>

    <div class="quote">
        🌙 <strong>占い師アミラより</strong><br>
        「運命は砂のように、指の隙間からこぼれ落ちるものではありません。<br>
        あなたがどの方向へ歩むかで、砂は形を変えるのです。」
    </div>

</body>

</html>