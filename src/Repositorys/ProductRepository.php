<?php


namespace app\src\Repositorys;

use app\src\Core\Database;
use app\src\Repositorys\AuthorRepository;
use app\src\Repositorys\CategoryRepository;

class ProductRepository extends BaseRepository
{

    public $tableName = 'book';

    public function selectAll()
    {
        return $this->select()->get();
    }

    public function selectOne($id)
    {
        return $this->select()->where('id', '=', $id)->first();
    }

    public function create(array $attributes = [])
    {
        var_dump($this->tableName);
        $this->insert($attributes);
    }

    public function update($id, $attributes = [])
    {
        var_dump($this->tableName);

        return $this->updateData($id, $this->tableName, $attributes, 'id');
    }

    public function remove(int $id)
    {
        var_dump($this->tableName);
//        return $this->deleteData($this->tableName, 'id=' . $id);
    }

    public function selectAuthor()
    {
        $queryAuthor = new AuthorRepository();

        $dataAuthor = $queryAuthor->selectAll();
        return $dataAuthor;
    }

    public function selectCategory()
    {
        $queryCategory = new CategoryRepository();

        $dataCategory = $queryCategory->selectAll();
        return $dataCategory;
    }


}