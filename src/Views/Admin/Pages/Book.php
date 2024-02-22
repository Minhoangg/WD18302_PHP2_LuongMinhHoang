<div class="page-wrapper mt-5">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">Danh sách sách</h4>
                       <a href="<?= ROOT_URL ?>/book/bookadd"><button type="button" class="btn btn-primary float-right veiwbutton">Thêm sách mới</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center">
                                <thead>
                                <tr>
                                    <th>Tên Sách</th>
                                    <th>Giá</th>
                                    <th>Hinh Ảnh</th>
                                    <th>Năm sản xuất </th>
                                    <th>Mô tả</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data as $row_data):
                                ?>
                                <tr>
                                    <td class="text-nowrap">
                                        <?= $row_data['name'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <?= $row_data['price'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <img src="../../upload/product/<?= $row_data['img']?>" alt="" width="50px" height="50px">
                                    </td>
                                    <td class="text-nowrap">
                                        <?= $row_data['publication_year'] ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <?= $row_data['description'] ?>
                                    </td>
                                    <td class="d-flex justify-content-around"> <a href="<?= ROOT_URL ?>/book/bookEdit/<?=$row_data['id']?>"
                                                                                  class="badge badge-pill bg-warning inv-badge">Chỉnh sửa</a>
                                        <a href="<?= ROOT_URL ?>/book/handleDelete/<?=$row_data['id']?>"
                                           class="badge badge-pill bg-danger inv-badge">Xóa</a>
                                    </td>
                                    <?php
                                    endforeach;
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>