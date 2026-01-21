<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Form thêm sản phẩm</h1>

    <form>
        <input type="text" placeholder="Tên sản phẩm"><br><br>
        <input type="number" placeholder="Giá"><br><br>
        <button type="submit">Thêm</button>
    </form>

    <a href="{{ route('product.index') }}">⬅ Quay lại</a>
</body>
</html>
