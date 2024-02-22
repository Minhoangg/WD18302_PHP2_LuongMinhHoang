<?php


namespace app\src\Repositorys;


use app\src\Repositorys\BaseRepository;
class UserRepository extends BaseRepository
{

    public function selectOne( int $id)
    {

    }

    public function create(array $attributes = [] )
    {

    }

    public function update( int $id, array $attributes = [])
    {

    }

    public function remove(int $id):bool
    {
        return true ;
    }
}