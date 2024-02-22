<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="container">
            <div class="row mt-5 m-auto">
                <div class="card col-12 px-0">
                    <div class="card-header text-center bg-success-light  text-white text-uppercase">Thêm Tác Giả</div>
                    <div class="card-body">
                        <form method="POST" action="<?= ROOT_URL ?>/user/handleAdd"
                        >
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="full_name" class="form-label">Họ và tên</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control"
                                           placeholder="Nhập họ và tên">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorFullname'])) {
                                            foreach ( $_SESSION['errorFullname'] as $fullnameError) {
                                                echo $fullnameError;
                                            }
                                            unset($_SESSION['errorFullname']);
                                        } ?>
                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="user_name" class="form-label"> Tên đăng nhập   </label>
                                    <input type="text" name="user_name" id="user_name"
                                           class="form-control" placeholder="Nhập tên đăng nhập">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorUsername'])) {
                                            foreach ( $_SESSION['errorUsername'] as $errorUsernameError) {
                                                echo $errorUsernameError;
                                            }
                                            unset($_SESSION['errorUsername']);

                                        } ?>
                                    </p>

                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <input type="text" name="password" id="password"
                                           class="form-control"
                                           placeholder="Nhập mật khẩu ">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorPassword'])) {
                                            foreach ( $_SESSION['errorPassword'] as $passError) {
                                                echo $passError;
                                            }
                                            unset($_SESSION['errorPassword']);
                                        } ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="Nhập email">
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorEmail'])) {
                                            foreach ( $_SESSION['errorEmail'] as $errorEmailError) {
                                                echo $errorEmailError;
                                            }
                                            unset($_SESSION['errorEmail']);
                                        } ?>
                                    </p>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Vai trò?</label>

                                    <div class="form-control">
                                        <label class="radio-inline">
                                            <input type="radio" value="1" name="role" >Nhân viên
                                        </label>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" value="2" name="role" >Khách hàng
                                        </label>

                                    </div>
                                    <p style="color: red;">
                                        <?php if (isset( $_SESSION['errorRole'])) {
                                            foreach ( $_SESSION['errorRole'] as $errorRole) {
                                                echo $errorRole;
                                            }
                                            unset($_SESSION['errorRole']);

                                        } ?>
                                    </p>

                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                <input type="submit" name="button_insert" value="Thêm mới" class="btn btn-info mr-3">
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