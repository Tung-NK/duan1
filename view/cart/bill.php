<div class="container mb-3">
    <h3 class="mb-3">Orders</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Tổng</th>
                    <!-- <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng tiền</th>
                    <th>Người đặt hàng</th>
                    <th>Địa chỉ</th>
                    <th>Trạng thái</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach ($hoadon as $hd) {
                            extract($hd);
                            echo '<td>'.$tong.'</td>
                            <!-- <td>sep 10, 2018</td>
                            <td>Processing</td>
                            <td>$25.00 for 1 item </td>
                            <td></td> -->';
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>