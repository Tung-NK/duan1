<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Số lượng hàng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($bill_list as $bill) {
                                extract($bill);
                                $suadh = "index.php?act=suadh&id=".$id;
                                $kh = $bill["bill_name"] . '
                                    <br> ' . $bill["bill_email"] . '
                                    <br> ' . $bill["bill_diachi"] . '
                                    ' . $bill["bill_phone"];
                                $ttdh = get_ttdh($bill['bill_trangthai']);
                                $countsp = loadall_cart_count($bill["id"]);


                                echo '<tr>
                                    <td>TVY-' . $bill['id'] . '</td>
                                    <td>
                                        ' . $kh . '
                                    </td>

                                    <td>' . $countsp . '</td>
                                    <td>' . $bill["total"] . '</td>
                                    <td>' . $ttdh . '</td>
                                    <td>' . $bill["ngaydathang"] . '</td>
                                    
                                    <td>
                                        <a href="' . $suadh . '"><input type="button" class="btn btn-primary" value="Sửa"></a>
            
                                    </td>
                                    
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>