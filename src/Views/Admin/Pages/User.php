<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">Danh sách người dùng</h4>
                        <a href="<?= ROOT_URL ?>/user/useradd"><button type="button" class="btn btn-primary float-right veiwbutton">Thêm người dùng</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center">
                                <thead>
                                <tr>
                                    <th>Họ và tên </th>
                                    <th>Tên đăng nhập </th>
                                    <th>Email</th>
                                    <th>Vai trò</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data as $row_data):
                                ?>
                                <tr>
                                    <td class="text-nowrap">
                                        <?= $row_data['full_name'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <?= $row_data['username'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <?= $row_data['email'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <?php if ($row_data['role'] == 1){
                                            echo 'Nhân viên';
                                        }else if($row_data['role'] == 2){
                                            echo ' Khách hàng';
                                        } ?>
                                    </td>
                                    <td class="d-flex justify-content-around"> <a href="<?= ROOT_URL ?>/user/userEdit/<?=$row_data['id']?>"
                                                                                  class="badge badge-pill bg-warning inv-badge">Chỉnh sửa</a>
                                        <a href="<?= ROOT_URL ?>/user/handleDelete/<?=$row_data['id']?>"
                                           class="badge badge-pill bg-danger inv-badge">Xóa</a>
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>