<div class="container mb-3">
    <h3 class="mb-3">Đơn hàng của tôi</h3>
    <div class="table-responsive">
        <table class="table mb-3">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Tổng</th>
                    <th>Số lượng</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (is_array($bill_list)) {
                    foreach ($bill_list as $bill) {
                        extract($bill);
                        $ttdh = get_ttdh($bill['bill_trangthai']);
                        $countsp = loadall_cart_count($bill['id']);
                        echo '<tr>
                                                    <td>TVY-' . $bill['id'] . '</td>
                                                    <td>' . $bill['ngaydathang'] . '</td>
                                                    <td>' . $ttdh . '</td>
                                                    <td>' . $bill['total'] . '</td>
                                                    <td>' . $countsp . '</td>
                                                </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>