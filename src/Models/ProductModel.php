<?php

namespace app\src\Models;

use app\src\Core\SaveFile;
use app\src\Repositorys\ProductRepository;
use app\src\Validate\Validator;

class ProductModel extends ProductRepository
{
    public function getAllProduct(): array
    {
        $data = $this->selectAll();
        return $data;
    }

    public function deleteBook($id)
    {
        $status = $this->remove($id);
        header('location:' . ROOT_URL . '/book');
    }

    public function addBook($data)
    {

        $validate = new Validator();

        $validateRules = [
            'name' => 'empty',
            'price' => 'empty',
            'img' => 'empty',
            'publication_year' => 'empty|dateOfBirth',
            'description' => 'empty',
            'id_category' => 'empty',
            'id_author' => 'empty'
        ];

        $params = [
            'name' => $data['name'],
            'price' => $data['price'],
            'img' => $data['img']['name'],
            'publication_year' => $data['publication_year'],
            'description' => $data['description'],
            'id_category' => $data['id_category'],
            'id_author' => $data['id_author']
        ];

        $validate->validate($validateRules, $params);

        $errors = $validate->getErrors();


        if (!empty($errors)) {
            $_SESSION['errorName'] = $errors['name'];
            $_SESSION['errorPrice'] = $errors['price'];
            $_SESSION['errorImg'] = $errors['img'];
            $_SESSION['errorPublication_year'] = $errors['publication_year'];
            $_SESSION['errorDescription'] = $errors['description'];
            $_SESSION['errorId_category'] = $errors['id_category'];
            $_SESSION['errorId_author'] = $errors['id_author'];

            header('location: ' . ROOT_URL . '/book/bookadd');
        }else{

            $target_dir = "upload/product/";

            $file_name = basename($data['img']['name']);

            $target_path = $target_dir . $file_name;

            move_uploaded_file($data['img']['tmp_name'], $target_path) ;
                $book_data = [
                    'name' => $data['name'],
                    'price' => $data['price'],
                    'img' => $file_name,
                    'publication_year' => $data['publication_year'],
                    'description' => $data['description'],
                    'id_category' => $data['id_category'],
                    'id_author' => $data['id_author']
                ];

                $this->create($book_data);

                header('Location: ' . ROOT_URL . '/book');
                exit();
        }
    }


    public function gettOne($id)
    {
        $data = $this->selectOne( $id);
        return $data;
    }

    public function editBook($id, $data)
    {

        $product_thumbnail = strlen($data['up_img']['name']) > 0 ? $data['up_img']['name'] : $data['img'];

        $target_dir = "upload/product/" ;

        $target_path = $target_dir . $product_thumbnail;

        move_uploaded_file($data['up_img']['tmp_name'], $target_path) ;

        $book_data = [
            'name' => $data['name'],
            'price' => $data['price'],
            'img' => $product_thumbnail,
            'publication_year' => $data['publication_year'],
            'description' => $data['description'],
            'id_category' => $data['id_category'],
            'id_author' => $data['id_author']
        ];

        $this->update($id, $book_data);
        header('location:' . ROOT_URL . '/book');
    }


    public function selectAllAuthor()
    {
        $dataAuthor = $this->selectAuthor();
        return $dataAuthor;
    }

    public function selectAllCategory()
    {
        $dataCategory = $this->selectCategory();
        return $dataCategory;
    }

}

?>