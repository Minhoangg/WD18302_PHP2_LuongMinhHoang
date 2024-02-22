<?php

namespace app\src\Models;

use app\src\Repositorys\AuthorRepository;
use app\src\Validate\Validator;

class AuthorModel extends AuthorRepository
{
    public function getAllAuthor(): array
    {
        $data = $this->selectAll();
        return $data;
    }

    public function addAuthor($data)
    {

        $validate = new Validator();

        extract($data);
        $validateRules = [
            'name'=>'empty',
            'date' => 'empty',
            'nationality' => 'empty'
        ];

        $params = [
            'name'=> $data['full_name'],
            'date' => $data['date_of_birth'],
            'nationality' => $data['nationality']
        ];

        $validate->validate($validateRules, $params);
        $errors = $validate->getErrors();

        if (!empty($errors)) {
            $_SESSION['errorName'] = $errors['name'];
            $_SESSION['errorDate'] = $errors['date'];
            $_SESSION['errorNationality'] = $errors['nationality'];

            header('location: ' . ROOT_URL . '/author/authoradd');
        }else{
            $this->create($data);
            header('location:' . ROOT_URL . '/author');
        }

    }

    public function deleteAuthor($id)
    {
        $status = $this->remove($id);
        header('location:' . ROOT_URL . '/author');
    }

    public function gettOne($id)
    {
       $data = $this->selectOne( $id);
       return $data;
    }

    public function updateAuthor($id, $data)
    {
        $this->update($id, $data);
        header('location:' . ROOT_URL . '/author');
    }
}

?>