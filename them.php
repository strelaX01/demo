<?php
    if(isset($_POST['sbm'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_FILES['img'];

        $sql ="INSERT INTO demo (name,price,img) VALUES ('$name','$price','$img')";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file('img/'.$img);
        header('location: index.php?page_layout=danhsach');

    }

?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="price" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="img" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>