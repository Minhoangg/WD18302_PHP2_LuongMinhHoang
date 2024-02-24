<?php



namespace app\src\Repositorys;

use app\src\Repositorys\BaseRepository;

class LoginRepository extends BaseRepository
{

    public $tableName = 'user';


    public function checkEmailExit($email) {
        return $this->select()->where('email', '=', $email)->first();
    }

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
