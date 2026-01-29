<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nhập tuổi</title>
</head>
<body>
    <form method="POST" action="{{ route('age.store') }}">
        @csrf
        <div>
            <label>Tuổi</label>
            <input type="text" name="age" value="{{ old('age', session('age')) }}">
        </div>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>
