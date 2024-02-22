<?php


namespace app\src\Repositorys;

use app\src\Core\Database;

class UserRepository extends BaseRepository
{
    public $tableName = 'user';

    public function selectAll()
    {
        return $this->select()->get();
    }

    public function selectOne( $id)
    {
        return $this->select()->where('id', '=', $id )->first();
    }

    public function create(array $attributes = [] )
    {
        $this->insert($attributes);
    }

    public function update(  $id, $attributes = [])
    {
        return $this->updateData($id, $this->tableName, $attributes, 'id');
    }

    public function remove(int $id)
    {
        return $this->deleteData($this->tableName, 'id='. $id) ;
    }

}