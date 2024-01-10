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