<?php

namespace app\src\Models;

use app\src\Repositorys\CategoryRepository;
use app\src\Validate\Validator;

class CategoryModel extends CategoryRepository
{
    public function getAllCategory(): array
    {
        $data = $this->selectAll();
        return $data;
    }

    public function addCategory($data)
    {

        $validate = new Validator();

        extract($data);
        $validateRules = [
            'name'=>'empty',
        ];

        $params = [
            'name'=> $data['name'],
        ];

        $validate->validate($validateRules, $params);

        $errors = $validate->getErrors();

        var_dump($errors);
        if (!empty($errors)) {
            $_SESSION['errorName'] = $errors['name'];

            header('location: ' . ROOT_URL . '/category/categoryadd');
        }else{
            $this->create($data);
            header('location:' . ROOT_URL . '/category');
        }

    }

    public function deleteCategory($id)
    {
        var_dump($id);
        $status = $this->remove($id);
        header('location:' . ROOT_URL . '/category');
    }

    public function gettOne($id)
    {
        $data = $this->selectOne( $id);
        return $data;
    }

    public function updateCategory($id, $data)
    {
        $this->update($id, $data);
        header('location:' . ROOT_URL . '/category');
    }
}

?>