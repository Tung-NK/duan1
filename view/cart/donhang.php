<div class="container mb-3">
    <br>
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
                    <th>Chi tiết</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($bill_list)) {
                    foreach ($bill_list as $bill) {
                        extract($bill);
                        $ttdh = get_ttdh($bill['bill_trangthai']);
                        $countsp = loadall_cart_count($bill['id']);
                        $ct = loadall_cart($bill['id']);
                        $view = "index.php?act=viewbill&id=" . $id;
                        $huydh = "index.php?act=huydh&id=" . $id;
                        $bohuydh = "index.php?act=bohuydh&id=" . $id;
                        $suaButton = ($bill['huydon'] == 0 || $bill['huydon'] == 1) ? '<a class="view" href="' . $view . '">view</a>' : 'Đã huỷ đơn';

                        echo '<tr>
                                <td>TVY-' . $bill['id'] . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td>' . $ttdh . '</td>
                                <td>' . $bill['total'] . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $suaButton . '</td>
                            <td>';

                            if ($bill['huydon'] == 0 && $ttdh == 'Chờ xác nhận') {
                                echo '<a class="view" href="' . $huydh . '">huỷ đơn</a>';
                            } else if ($bill['huydon'] == 1 && $ttdh == 'Chờ xác nhận') {
                                echo 'Chờ xác nhận' . '<a class="view" href="' . $bohuydh . '">Bỏ huỷ đơn</a>'; 
                            }else {
                                echo '';
                            }
                    
                            echo '</td></tr>';
                    }
                }
                ?>



            </tbody>
        </table>
    </div>
</div>