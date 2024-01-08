<?php
function find_by_block($block)
{
    global $course;
    return (array_key_exists($block, $course) ? $course[$block] : "Tìm khóa học");
}
?>