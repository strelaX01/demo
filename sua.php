<?php
    $idr = $_GET['id'];

    $sql_up = "SELECT * FROM demo where id ='$idr'";
    $query_up = mysqli_query($connect,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $name = $_POST['name'];

        if($_FILES['img']['name'] == ''){
            $img = $row_up['img'];
        }else{
            $img = $row_up['img'];
        }

        $price = $_POST['price'];

        $sql ="UPDATE demo SET name='$name',price='$price',img='$img'";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file('img/'.$img);
        header('location: index.php?page_layout=danhsach');

    }

?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $row_up['name']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="price" class="form-control" required value="<?php echo $row_up['price'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="img" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">sửa</button>
            </form>
        </div>
    </div>
</div>