<!-- app/views/book/index.php -->
<h1>Danh sách Sách</h1>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <a href="?controller=book&action=show&id=<?= $book['id'] ?>">
                <?= $book['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

