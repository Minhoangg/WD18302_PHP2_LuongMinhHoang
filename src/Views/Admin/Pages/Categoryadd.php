
<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="container">
            <div class="row mt-5 m-auto">
                <div class="card col-12 px-0">
                    <div class="card-header text-center bg-success-light  text-white text-uppercase">Thêm Loại Sách</div>
                    <div class="card-body">
                        <form method="POST" action="<?= ROOT_URL ?>/category/handleAdd">
                            <div class="row">
                                <div class="form-group col-sm-12 al">
                                    <label for="name_category" class="form-label">Loại sách</label>
                                    <input type="text" name="name_category" id="name_category" class="form-control"
                                           placeholder="Nhập tên loại sách">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorName'])) {
                                            foreach ( $_SESSION['errorName'] as $emailError) {
                                                echo $emailError;
                                            }
                                            unset($_SESSION['errorName']);
                                        } ?>
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                <input type="submit" name="button_insert" value="Thêm mới" class="btn btn-info mr-3">
                                <a href="<?= ROOT_URL ?>/category"><input type="button"
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