<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="container">
            <div class="row mt-5 m-auto">
                <div class="card col-12 px-0">
                    <div class="card-header text-center bg-success-light  text-white text-uppercase">THÊM SÁCH</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="<?= ROOT_URL ?>/book/handleEdit">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="name_cate" class="form-label">Loại sách</label>
                                    <select name="name_cate" class="form-control" id="name_cate" >
                                        <?php
                                        foreach ($data_category as $datacate){
                                            echo '<option value="' . $datacate['id'] . '">' . $datacate['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="name_author" class="form-label">Tác giả</label>
                                    <select name="name_author" class="form-control" id="name_author">
                                        <?php
                                        foreach ($data_author as $dataauthor){
                                            echo '<option value="' . $dataauthor['id'] . '">' . $dataauthor['full_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="name_book" class="form-label"> Tên sách</label>
                                    <input type="text" name="name_book" id="name_book" class="form-control"
                                           placeholder="Nhập tên sách" value="<?= $data['name'] ?>">
                                    <p style="color: red;">

                                    </p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="price_book" class="form-label"> Giá sách</label>
                                    <input type="text" name="price_book" id="price_book" class="form-control"
                                           placeholder="Nhập giá sách" value="<?= $data['price'] ?>">
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="img_book" class="form-label">Ảnh sách</label>
                                    <input type="hidden" name="img_book" id="img_book" class="form-control" value="<?= $data['img'] ?>">
                                    <input type="file" name="up_img_book" id="up_img_book" class="form-control">
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="date_publication" class="form-label">Ngày sản xuất</label>
                                    <input type="date" name="date_publication" id="date_publication"
                                           class="form-control" placeholder="Nhập ngày sản xuất" value="<?= $data['publication_year'] ?>" >
                                    <p id="don_gia_error" style="color: red;">

                                    </p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="description_book" class="form-label">Mô tả sản phẩm</label>
                                    <textarea id="txtarea" spellcheck="false" name="description_book"
                                              class="form-control form-control-lg mb-3 myTextarea" id="textareaExample"
                                              rows="3" placeholder="Nhập mô tả " ><?= $data['description'] ?></textarea>
                                    <p style="color: red;">
                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="hidden" name="id_book" id="id_book"
                                           class="form-control"
                                           placeholder="Nhập quốc tịch " value="<?= $data['id'] ?>">
                                </div>

                            <div class="mb-3 text-center">
                                <input type="submit" name="button_edit" value="Sửa" class="btn btn-info mr-3">
                                <a href="<?= ROOT_URL ?>/book"><input type="button"
                                                                      class="btn btn-success"
                                                                      value="Danh sách"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>