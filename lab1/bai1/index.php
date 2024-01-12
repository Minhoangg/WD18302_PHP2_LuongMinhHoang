<?php
$course = [
    'block1' => 'Lập trình PHP 1',
    'block2' => 'Lập trình PHP 2',
    'block3' => 'Lập trình PHP 3',
];

// model
function get_course(): array
{
    global $course;
    return array_values($course);
}

function find_by_block($block)
{
    global $course;
    return (array_key_exists($block, $course) ? $course[$block] : "Không tim thấy");
}


// Controller

$block = (!empty($_GET['block']) ? $_GET["block"] : " ");

$course_name = find_by_block($block);


?>


<!-- View-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
</head>

<body>
    <h1><?= $course_name ?></h1>
    <form action="" method="get">
        <select name="block" id="">
            <?
            foreach ($course as $key => $valeus) :
            ?>
                <option value="<?= $key ?>">
                    <?= $valeus ?>
                </option>
            <? endforeach ?>
        </select>
        <button type="submit">Tìm</button>

    </form>

</body>

</html>