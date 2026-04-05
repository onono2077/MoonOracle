<?php
// analyze.php

$text = $_POST['text'] ?? '';

if (!$text) {
    die("文章が入力されていません");
}

$apiKey = "YOUR_GEMINI_API_KEY";
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=$apiKey";

$payload = [
    "contents" => [
        [
            "parts" => [
                ["text" => "
以下の文章から心理傾向を分析し、次のJSON形式で返してください。

{
  \"thinking\": {
    \"emotion\": 0-100,
    \"decision\": 0-100,
    \"future_focus\": 0-100,
    \"stress\": 0-100
  },
  \"fortune\": {
    \"love\": 0-100,
    \"work\": 0-100,
    \"money\": 0-100,
    \"health\": 0-100,
    \"total\": 0-100
  },
  \"advice\": [
    \"今日の行動アドバイス1\",
    \"今日の行動アドバイス2\",
    \"今日の行動アドバイス3\"
  ]
}

文章：
$text
"]
            ]
        ]
    ]
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/json",
        'content' => json_encode($payload)
    ]
];

$response = file_get_contents($url, false, stream_context_create($options));
$data = json_decode($response, true);

// Geminiの返答からJSON部分を抽出
$jsonText = $data["candidates"][0]["content"]["parts"][0]["text"] ?? "{}";
$result = json_decode($jsonText, true);

session_start();
$_SESSION['result'] = $result;

header("Location: result.php");
exit;
