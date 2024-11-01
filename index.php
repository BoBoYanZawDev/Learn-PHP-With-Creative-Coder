<?php
$cardDatas = [
    [
        "courseimg" => "./asset/top-MERN-Stack.webp",
        "courseHeader" => "MERN Stack Basic to Advance", 
        "chapter" => 11,
        "lessons" => 138,
        "level" => 3,
        "completed" => "0",
        "fee" => "200,000",
        "certified" => 13,
        "languages" => ["Javascript","Nodejs"],
        "isSaved"=> false
    ],
    [
        "courseimg" => "./asset/images.png",
        "courseHeader" => "React+Firebase Combo Package", 
        "chapter" => 16,
        "lessons" => 106,
        "level" => 3,
        "completed" => 0,
        "fee" => "150,000",
        "certified" => 22,
        "languages" => ["Javascript","React"],
        "isSaved"=> true
    ],
    [
        "courseimg" => "./asset/php-8-2.jpg",
        "courseHeader" => "Php + Deep Dive Laravel", 
        "chapter" => 11,
        "lessons" => 102,
        "level" => 2,
        "completed" => 10,
        "fee" => "100,000",
        "certified" => 42,
        "languages" => ["PHP","Laravel"],
        "isSaved"=> true
    ],
    [
        "courseimg" => "./asset/top-MERN-Stack.webp",
        "courseHeader" => "Js+Vue+Firebase Combo Package", 
        "chapter" => 11,
        "lessons" => 138,
        "level" => 2,
        "completed" => 0,
        "fee" => "100,000",
        "certified" => 42,
        "languages" => ["Javascript","Vuejs"],
        "isSaved"=> false
    ],
    [
        "courseimg" => "./asset/java-script-800x600.jpg",
        "courseHeader" => "Programming Basic With Javascript", 
        "chapter" => 11,
        "lessons" => 138,
        "level" => 1,
        "completed" => 90,
        "fee" => "60,000",
        "certified" => 33,
        "languages" => ["Javascript"],
        "isSaved"=> true
    ],
    [
        "courseimg" => "./asset/top-MERN-Stack.webp",
        "courseHeader" => "MERN Stack Basic to Advance", 
        "chapter" => 11,
        "lessons" => 138,
        "level" => 3,
        "completed" => 0,
        "fee" => "200,000",
        "certified" => 13,
        "languages" => ["javascript","Nodejs"],
        "isSaved"=> false
    ],
   
];

$colors =[
    "Javascript" => "#C1B247",
    "Nodejs" => "#719F43",
    "React" => "#4FB2D1",
    "PHP" => "#3A3E76",
    "Laravel" => "#C1453B",
];

function color($languagei, $colorsArr) {
    foreach($languagei as $language) {
        if(array_key_exists($language, $colorsArr)) {
            return $colorsArr[$language];
        }
    }
}

function displayStatusLevel($level) {
    $max_levels = 3;
    for($i = 1; $i <= $max_levels; $i++) {
        if( $i <= $level){
            echo '<i class="fa-solid fa-square" style="color:var(--active-color)"></i>';
        } else{
            echo '<i class="fa-solid fa-square" style="color:var(--unactive-color)"></i>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Coder</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <div class="container-fluid">
    <div class="container">
        <?php foreach($cardDatas as $card) :?>
        <div class="card">
            <div class="imgContainer"><img src=<?= $card["courseimg"] ?>></div>
            <div class="contentContainer">
                <h2><?= $card["courseHeader"]?></h2>
                <div class="info">
                    <span>Chapters-<?= $card["chapter"]?></span>
                    <span>Lessons-<?= $card["lessons"] ?></span>
                    <span class="shapeIcon">
                        <?php displayStatusLevel($card["level"])?>
                    </span>
                </div>
                <h3 class="completed"><?= $card["completed"]?>% Completed</h3>
                <p class="fee">Fee : <?= $card["fee"]?> MMK</p>
                <span class="certified"> <?= $card["certified"]?> student certified </span>
                <div class="language">
                    <?php foreach($card["languages"] as $language):?>
                    <span style="background-color :<?= color($card["languages"],$colors)?>">
                        <?= $language ?>
                    </span>
                    <?php endforeach ?>
                </div>
                <?php if($card["isSaved"]):?>
                <button class="btn" style="background-color: var(--unsave-color);">Unsave</button>
                <?php else:?>
                <button class="btn" style="background-color: var(--active-color)" >Learn Later</button>
                <?php endif?>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    </div>
</body>

</html>