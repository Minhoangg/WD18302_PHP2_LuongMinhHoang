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
                                    <select name="name_cate" class="form-control" id="name_cate">
                                        <option value="">Chọn loại sách</option>
                                        <?php
                                        foreach ($data_category as $infoCategory) {
                                            echo '<option value="' . $infoCategory['id'] . '">' . $infoCategory['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="name_author" class="form-label">Tác giả</label>
                                    <select name="name_author" class="form-control" id="name_author">
                                        <option value="">Chọn tác giả</option>
                                        <?php
                                        foreach ($data_author as $infoAuthor) {
                                            echo '<option value="' . $infoAuthor['id'] . '">' . $infoAuthor['full_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="name_book" class="form-label"> Tên sách</label>
                                    <input type="text" name="name_book" id="name_book" class="form-control"
                                           placeholder="Nhập tên sách">
                                    <p style="color: red;">

                                    </p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="price_book" class="form-label"> Giá sách</label>
                                    <input type="text" name="price_book" id="price_book" class="form-control"
                                           placeholder="Nhập giá sách">
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="img_book" class="form-label">Ảnh sách</label>
                                    <input type="file" name="img_book" id="img_book" class="form-control"
                                           placeholder="Nhập ngày sản xuất">
                                    <p style="color: red;">

                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="date_publication" class="form-label">Ngày sản xuất</label>
                                    <input type="date" name="date_publication" id="date_publication"
                                           class="form-control" placeholder="Nhập ngày sản xuất">
                                    <p id="don_gia_error" style="color: red;">

                                    </p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="description_book" class="form-label">Mô tả sản phẩm</label>
                                    <textarea id="txtarea" spellcheck="false" name="description_book"
                                              class="form-control form-control-lg mb-3 myTextarea" id="textareaExample"
                                              rows="3" placeholder="Nhập mô tả "></textarea>
                                    <p style="color: red;">
                                    </p>
                                </div>
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