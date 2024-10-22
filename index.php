<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK - SELECTOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php $characters = [
    [
        'id' => 1,
        'name' => 'Johnny Cage',
        'image' => '/assets/characters/johnnycage/1.png',
        'selector' => '/assets/characters/johnnycage/2.png',
    ],
    [
        'id' => 2,
        'name' => 'Kung Lao',
        'image' => '/assets/characters/kunglao/1.png',
        'selector' => '/assets/characters/kunglao/2.png',
    ],
    [
        'id' => 3,
        'name' => 'Liu Kang',
        'image' => '/assets/characters/liukang/1.png',
        'selector' => '/assets/characters/liukang/2.png',
    ],
    [
        'id' => 4,
        'name' => 'Raiden',
        'image' => '/assets/characters/raiden/1.png',
        'selector' => '/assets/characters/raiden/2.png',
    ],
    [
        'id' => 5,
        'name' => 'Reptile',
        'image' => '/assets/characters/reptile/1.png',
        'selector' => '/assets/characters/reptile/2.png',
    ],
    [
        'id' => 6,
        'name' => 'Scorpion',
        'image' => '/assets/characters/scorpion/1.png',
        'selector' => '/assets/characters/scorpion/2.png',
    ],
    [
        'id' => 7,
        'name' => 'Smoke',
        'image' => '/assets/characters/smoke/1.png',
        'selector' => '/assets/characters/smoke/2.png',
    ],
    [
        'id' => 8,
        'name' => 'Subzero',
        'image' => '/assets/characters/subzero/1.png',
        'selector' => '/assets/characters/subzero/2.png',
    ],
]; ?>

<div id="app">
    <img src="/assets/bg.webp" alt="" class="bg-image">
        <?php foreach ($characters as $key => $value) { ?>
            <img id="image-<?php echo $value['id'] ?>" class="image__selected" src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>-image">
        <?php } ?>
    <div class="container selector__container">
        <ul class="selector">
            <?php foreach ($characters as $key => $value) { ?>
                        <li id="selector-<?php echo $value['id'] ?>" class="selector__li">
                            <button class="selector__button">
                            <img src="<?php echo $value['selector'] ?>" alt="<?php echo $value['name'] ?>--image"> 
                            </button>
                        </li>
            <?php } ?>
        </ul>
    </div>
</div>
<script>
    const characters = <?php echo json_encode($characters) ?>; 
</script>
<script src="index.js"></script>

</body>
</html>