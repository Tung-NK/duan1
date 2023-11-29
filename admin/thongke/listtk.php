<div class="card">
<div class="border-top">
        <div class="card-body">
            <a href="index.php?act=bieudo"><input type="button" class="btn btn-secondary" value="Biểu đồ"></a>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title m-b-0">Thống kê</h5>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá cao nhất</th>
                <th scope="col">Giá thấp nhất</th>
                <th scope="col">Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo '<tr>
                <td>' . $madm . '</td>
                <td>' . $tendm . '</td>
                <td>' . $countsp . '</td>
                <td>' . $maxprice . '</td>
                <td>' . $minprice . '</td>
                <td>' . $avgprice . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
    
</div>