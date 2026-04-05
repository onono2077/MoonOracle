<?php
session_start();
$result = $_SESSION['result'] ?? null;
if (!$result) die("結果がありません");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>占い結果</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background: #0b1d2e;
            color: #fff;
            font-family: sans-serif;
            text-align: center;
            padding: 40px;
        }

        .card {
            background: #123;
            padding: 20px;
            margin: 15px auto;
            width: 70%;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <h1>今日の運勢</h1>

    <canvas id="chart" width="300" height="300"></canvas>

    <script>
        const data = {
            labels: ["恋愛", "仕事", "金運", "健康", "総合"],
            datasets: [{
                label: "運勢",
                data: [
                    <?= $result["fortune"]["love"] ?>,
                    <?= $result["fortune"]["work"] ?>,
                    <?= $result["fortune"]["money"] ?>,
                    <?= $result["fortune"]["health"] ?>,
                    <?= $result["fortune"]["total"] ?>
                ],
                backgroundColor: "rgba(110, 231, 210, 0.3)",
                borderColor: "#6ee7d2",
                borderWidth: 2
            }]
        };

        new Chart(document.getElementById("chart"), {
            type: "radar",
            data: data,
            options: {
                scales: {
                    r: {
                        angleLines: {
                            color: "#345"
                        },
                        grid: {
                            color: "#234"
                        },
                        pointLabels: {
                            color: "#fff"
                        }
                    }
                }
            }
        });
    </script>

    <h2>今日のアドバイス</h2>

    <?php foreach ($result["advice"] as $a): ?>
        <div class="card"><?= htmlspecialchars($a) ?></div>
    <?php endforeach; ?>

</body>

</html>