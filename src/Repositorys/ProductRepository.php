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

    public function selectOne( int $id)
    {

    }

    public function create(array $attributes = [] )
    {
        $this->insert($attributes);
    }

    public function update( int $id, array $attributes = [])
    {

    }

    public function remove(int $id)
    {
        return $this->deleteData($this->tableName, 'id='. $id) ;
    }

    public function selectAuthor()
    {
        $queryAuthor = new AuthorRepository();

        $dataAuthor = $queryAuthor->selectAll();
        return $dataAuthor;
    }

    public function selectCategory()
    {
        $queryCategory = new CategoryRepository() ;

        $dataCategory = $queryCategory->selectAll();
        return $dataCategory;
    }


}