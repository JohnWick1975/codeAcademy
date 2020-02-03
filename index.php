<?php

$array = [
    [
        'url' => 'https://weppixel.com/sites/default/files/styles/225x120/public/wallpaper/nature/61958/mountain-meadow-wallpapers-61958-9284851.jpg?itok=GgAmorc4',
        'alt' => 'image-one',
        'text' => 'first picture nature'
    ],
    [
        'url' => 'https://www.stihi.ru/pics/2019/07/31/3497.jpg',
        'alt' => 'image-two',
        'text' => 'second picture nature'
    ],
    [
        'url' => 'https://f.vividscreen.info/soft/25dd54eb81f5ed241345cea9ab9fd85d/Green-Landscape-640x480.jpg',
        'alt' => 'image-three',
        'text' => 'third picture nature'
    ]
];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Images-foreach</title>
        <style>
            section {
                padding-top: 10%;
                display: flex;
                justify-content: center;
            }

            .imageContainer {
                margin: 0 auto;
                text-align: center;
                display: inline-block;
                width: 30%;
            }

            img {
                object-fit: cover;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <section><?php foreach ($array as $images): ?>
                <div class="imageContainer">
                    <img src="<?php print $images['url'] ?>" alt="<?php print $images['alt'] ?>">
                    <p><?php print $images['text'] ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </body>
</html>
