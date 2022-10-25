<?php
    $sql = "SELECT * FROM demo";
    $query = mysqli_query($connect,$sql);
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách đồ uống</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thread-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phảm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>sửa</th>
                        <th>xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td>
                                    <img style="width:100px" src="img/<?php echo $row['img']; ?>">
                                </td>
                                <td>
                                    <a href="index.php?page_layout=sua&id=<?php $row['id'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['name']; ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['id'];?>">Xóa</a>
                                </td>
                            </tr>   
                       <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>

<script>
    function Del(name){
        return confirm("Bạn có chắc chắn xóa sản phẩm " +name+"?");
    }
</script>