<?php



namespace app\src\Core;


class SaveFile
{
    function uploadFile($fileInputName, $uploadDirectory) {
           var_dump($uploadDirectory);

            $tmp_name = $fileInputName['tmp_name'];
            var_dump($tmp_name);

            if (move_uploaded_file($tmp_name, $uploadDirectory)) {
                return "File đã được tải lên thành công.";
            } else {
                return "Đã xảy ra lỗi khi tải lên file.";
            }

    }
}