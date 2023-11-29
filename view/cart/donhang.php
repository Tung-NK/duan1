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
                        echo '<tr>
                                    <td>TVY-' . $bill['id'] . '</td>
                                    <td>' . $bill['ngaydathang'] . '</td>
                                    <td>' . $ttdh . '</td>
                                    <td>' . $bill['total'] . '</td>
                                    <td>' . $countsp . '</td>
                                </tr>';
                                
                        if (is_array($ct)) {
                            foreach ($ct as $item) {
                                global $img_path;
                                $hinh = $img_path .  $item['image'];
                                echo '<tr>
                                            <td>' . $item['idpro'] . '</td>
                                            <td><img src="' . $hinh . '" style="width: 100px; height: auto;"></td>
                                            <td>' . $item['name'] . '</td>
                                            <td>' . $item['price'] . '</td>
                                            <td>' . $item['soluong'] . '</td> 
                                        </tr>';
                            }
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
