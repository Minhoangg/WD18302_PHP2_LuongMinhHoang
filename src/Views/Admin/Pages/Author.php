<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">Danh sách tác giả</h4>
                        <a href="<?= ROOT_URL ?>/author/authoradd">
                            <button type="button" class="btn btn-primary float-right veiwbutton">Thêm tác giả mới
                            </button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center">
                                <thead>
                                <tr>
                                    <th> Họ và tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Quốc tịch</th>
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
                                        <?= $row_data['date_of_birth'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <?= $row_data['nationality'] ?>
                                    </td>
                                    <td class="d-flex justify-content-around"> <a href="<?= ROOT_URL ?>/author/edit/<?=$row_data['id']?>"
                                                class="badge badge-pill bg-warning inv-badge">Chỉnh sửa</a>
                                        <a href="<?= ROOT_URL ?>/author/handleDelete/<?=$row_data['id']?>"
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