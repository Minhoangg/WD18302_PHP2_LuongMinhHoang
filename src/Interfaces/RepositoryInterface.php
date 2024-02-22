<?php



namespace app\src\Interfaces;

interface RepositoryInterface
{
    public function selectAll();

    public function selectOne( int $id);

    public function create(array $attributes = [] );

    public function update( int $id, array $attributes = []);

    public function remove(int $id);

}