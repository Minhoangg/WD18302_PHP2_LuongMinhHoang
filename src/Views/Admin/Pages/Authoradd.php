<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="container">
            <div class="row mt-5 m-auto">
                <div class="card col-12 px-0">
                    <div class="card-header text-center bg-success-light  text-white text-uppercase">Thêm Tác Giả</div>
                    <div class="card-body">
                        <form method="POST" action="<?= ROOT_URL ?>/author/handleAdd"
                        >
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="name_author" class="form-label">Họ và tên</label>
                                    <input type="text" name="name_author" id="name_author" class="form-control"
                                           placeholder="Nhập họ và tên">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorName'])) {
                                            foreach ( $_SESSION['errorName'] as $emailError) {
                                                echo $emailError;
                                            }
                                            unset($_SESSION['errorName']);
                                        } ?>
                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="date_birth_author" class="form-label">Ngày sinh </label>
                                    <input type="date" name="date_birth_author" id="date_birth_author"
                                           class="form-control" placeholder="Nhập ngày sinh">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorDate'])) {
                                            foreach ( $_SESSION['errorDate'] as $emailError) {
                                                echo $emailError;
                                            }
                                            unset($_SESSION['errorDate']);

                                        } ?>
                                    </p>

                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="nationality_author" class="form-label">Quốc tịch</label>
                                    <select name="nationality_author" id="nationality_author" class="form-control">
                                        <?php
                                        foreach ($data as $country) {
                                        echo '<option value="' . $country["name"]["common"] . '">' . $country["name"]["common"] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorNationality'])) {
                                            foreach ( $_SESSION['errorNationality'] as $emailError) {
                                                echo $emailError;
                                            }
                                            unset($_SESSION['errorNationality']);
                                        } ?>
                                    </p>
                                </div>
                            </div>


                            <div class="mb-3 text-center">
                                <input type="submit" name="button_insert" value="Thêm mới" class="btn btn-info mr-3">
                                <a href="<?= ROOT_URL ?>/author"><input type="button"
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