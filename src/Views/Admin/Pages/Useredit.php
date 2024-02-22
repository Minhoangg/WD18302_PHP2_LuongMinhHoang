<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="container">
            <div class="row mt-5 m-auto">
                <div class="card col-12 px-0">
                    <div class="card-header text-center bg-success-light  text-white text-uppercase">Sửa Tác Giả</div>
                    <div class="card-body">
                        <form method="POST" action="<?= ROOT_URL ?>/user/handleEdit"
                        >

                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="name_author" class="form-label">Họ và tên</label>
                                    <input type="text" name="name_author" id="name_author" class="form-control"
                                           placeholder="Nhập họ và tên" value="<?= $data['full_name'] ?>">
                                    <p style="color: red;">
                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="date_birth_author" class="form-label">Ngày sinh </label>
                                    <input type="date" name="date_birth_author" id="date_birth_author"
                                           class="form-control" placeholder="Nhập ngày sinh" value="<?= $data['date_of_birth'] ?>">
                                    <p style="color: red;">

                                    </p>

                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="nationality_author" class="form-label">Quốc tịch</label>
                                    <input type="text" name="nationality_author" id="nationality_author"
                                           class="form-control"
                                           placeholder="Nhập quốc tịch " value="<?= $data['nationality'] ?>">
                                    <p style="color: red;">
                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="hidden" name="id_author" id="id_author"
                                           class="form-control"
                                           placeholder="Nhập quốc tịch " value="<?= $data['id'] ?>">
                                </div>
                            </div>


                            <div class="mb-3 text-center">
                                <input type="submit" name="button_edit" value="Thay đổi" class="btn btn-info mr-3">
                                <a href="<?= ROOT_URL ?>/user"><input type="button"
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