<div class="container mb-3">
    <br>
    <h3 class="mb-3">Chi tiết đơn hàng</h3>
    <div class="table-responsive">
        <table class="table mb-3">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Người đặt hàng</th>
                    <th>Địa chỉ</th>
                    <th>Trạng thái</th>
                    <th>Tổng</th>
                    <th>Số lượng</th>
                    <th>Phương thức thanh toán</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($bill_ct)) {
                    $ttdh = get_ttdh($bill_ct['bill_trangthai']);
                    $countsp = loadall_cart_count($bill_ct['id']);
                    $bill_ct['ngaydathang'] = date("Y-m-d H:i:s");
                    $cartct = loadall_cart($bill_ct['id']);
                    $pttt = $bill_ct['bill_pttt'];
                    $ptthanhtoan = ($pttt == 1) ? 'Thanh toán khi nhận hàng' : (($pttt == 2) ? 'Thanh toán bằng thẻ' :'');
                    echo '<tr>
                            <td>TVY-' . $bill_ct['id'] . '</td>
                            <td>' . $bill_ct['ngaydathang'] . '</td>
                            <td>' . $bill_ct['bill_name'] . '</td>
                            <td>' . $bill_ct['bill_diachi'] . '</td>
                            <td>' . $ttdh . '</td>
                            <td>' . $bill_ct['total'] . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $ptthanhtoan . '</td>
                        </tr>';

                    if (isset($cartct)) {
                        foreach ($cartct as $item) {
                            global $img_path;
                            $hinh = $img_path . $item['image'];
                            $idpro = $item['idpro'];
                            $linksp = "index.php?act=sanphamct&idsp=" . $idpro;
                            echo '<table class="table mb-3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Hình ảnh</th>
                                                <th>Sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>' . $item['idpro'] . '</td>
                                                <td><img src="' . $hinh . '" alt="Hình ảnh sản phẩm" style="width: 100px; height:auto;"></td>
                                                <td><a href="'.$linksp.'">' . $item['name'] . '</a></td>
                                                <td>' . $item['price'] . '</td>
                                                <td>' . $item['soluong'] . '</td>
                                            </tr>
                                            <!-- Thêm các dòng dữ liệu sản phẩm tại đây nếu cần -->
                                        </tbody>
                                    </table>';
                        }
                    }
                } else {
                    echo '<tr><td colspan="7">Không có thông tin đơn hàng.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>