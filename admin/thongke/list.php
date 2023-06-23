<article>
            <div class="headline">
                <h2>THỐNG KÊ SẢN PHẨM THEO LOẠI</h2>
            </div>
            <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>LOẠI HÀNG</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($lstthongke as $thongke) {
                            extract($thongke);
                            echo '<tr>
                                        <td>'.$madm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$avgprice.'</td>
                                    </tr>'; 
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
            <div class="def">
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
        </article>
    </div>