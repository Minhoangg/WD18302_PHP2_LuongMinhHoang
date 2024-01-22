<?php



namespace app\src\Models;
use app\src\core\Database;
class Category extends Database
{
    public function selectAll()
    {
        $sql = "SELECT * FROM author";
        $rows = $this->pdo_query($sql);
        return $rows;
    }


}

?>