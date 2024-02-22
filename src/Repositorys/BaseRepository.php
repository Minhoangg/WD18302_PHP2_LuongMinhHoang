<?php



namespace app\src\Repositorys;

use app\src\Core\Database;
use app\src\Core\SQLQueryBuilder;
use app\src\Interfaces\RepositoryInterface;
use Exception;

abstract class BaseRepository implements RepositoryInterface
{
     use SQLQueryBuilder;


    public function selectAll()
    {

    }

    public function selectOne( int $id)
    {

    }

    public function create(array $attributes = [] )
    {

    }

    public function update( $id,  $attributes = [])
    {

    }

    public function remove(int $id)
    {

    }



 }