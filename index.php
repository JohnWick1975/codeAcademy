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
    ],
    [
        'url' => 'https://f1.mylove.ru/4KY021swhF.jpg',
        'alt' => 'image-four',
        'text' => 'fourth picture nature'
    ],
    [
        'url' => 'https://i.pinimg.com/736x/e4/34/2a/e4342a9424f181d5e5490e4e8d4ecdec.jpg',
        'alt' => 'image-five',
        'text' => 'fifth picture nature'
    ],
    [
        'url' => 'https://heaclub.ru/tim/f4be2539da08b349624e565beb9db0f7.jpg',
        'alt' => 'image-six',
        'text' => 'sixth picture nature'
    ],

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
                margin: 0 auto;
                padding-top: 10%;
                width: 80%;
            }

            @media screen and (min-width: 1025px) {
                .imageContainer {
                    margin-right: 8px;
                    text-align: center;
                    display: inline-block;
                    width: calc((100% - 24px) / 3);
                }
                .imageContainer:nth-child(3n) {
                    margin-right: 0px;
                }

            }
            @media screen and (max-width: 1024px) {
                .imageContainer {
                    display: inline-block;
                    margin-right: 8px;
                    text-align: center;
                    width: calc((100% - 16px) / 2);
                }

                .imageContainer:nth-child(2n) {
                    margin-right: 0;
                }
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
