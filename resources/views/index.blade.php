<!DOCTYPE html>
<html>
<head>
    <title>Shop - Danh sách sản phẩm</title>
    <!-- <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <x-navbar/>
    
    <h1 class="fs-2 text-primary">Danh sách sản phẩm</h1>
    <ul>
        @foreach($products as $product)
        <li>
            <strong>{{ $product->name }}</strong> - {{ number_format($product->price, 0) }} VNĐ
            <p>{{ $product->description }}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>
