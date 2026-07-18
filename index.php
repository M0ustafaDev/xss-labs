<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>XSS Challenge - Welcome</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
    padding: 20px;
  }
  .language-selector {
    position: absolute;
    top: 10px;
    right: 20px;
  }
  .language-selector a {
    padding: 5px 15px;
    margin: 0 5px;
    text-decoration: none;
    border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #f0f0f0;
  }
  .language-selector a:hover {
    background-color: #e0e0e0;
  }
  img {
    cursor: pointer;
    max-width: 500px;
    width: 100%;
  }
</style>
</head>
<body>
<div class="language-selector">
  <?php
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
    $langs = ['en' => 'English', 'zh' => '中文'];
    foreach ($langs as $code => $name) {
      if ($code === $lang) {
        echo "<span>$name</span> ";
      } else {
        echo "<a href='index.php?lang=$code'>$name</a> ";
      }
    }
  ?>
</div>

<?php
  $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
  
  $translations = [
    'en' => [
      'title' => 'Welcome to XSS Challenge',
      'description' => 'Click the image to start your XSS journey!'
    ],
    'zh' => [
      'title' => '欢迎来到XSS挑战',
      'description' => '点击图片开始你的XSS之旅吧！'
    ]
  ];
  
  $current = isset($translations[$lang]) ? $translations[$lang] : $translations['en'];
?>

<h1><?php echo $current['title']; ?></h1>
<a href="level1.php?name=test&lang=<?php echo $lang; ?>"><img src="index.png" alt="XSS Labs"></a>
<h2><?php echo $current['description']; ?></h2>
</body>
</html>
