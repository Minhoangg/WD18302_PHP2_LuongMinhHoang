<?php



namespace app\src\Repositorys;

use app\src\Repositorys\BaseRepository;

class LoginReponsitory extends BaseRepository
{

    public $tableName = 'user';


    public function checkEmailExit($email) {
        return $this->select()->where('email', '=', $email)->first();
    }

}
