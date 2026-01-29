<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
</head>
<body>
    <form method="POST" action="{{ route('signin.check') }}">
        @csrf

        <div>
            <label>Username</label>
            <input type="text" name="username" value="{{ old('username') }}">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <label>Repass</label>
            <input type="password" name="repass">
        </div>

        <div>
            <label>MSSV</label>
            <input type="text" name="mssv" value="{{ old('mssv') }}">
        </div>

        <div>
            <label>Lớp môn học</label>
            <input type="text" name="lopmonhoc" value="{{ old('lopmonhoc') }}">
        </div>

        <div>
            <label>Giới tính</label>
            <select name="gioitinh">
                <option value="nam" {{ old('gioitinh') === 'nam' ? 'selected' : '' }}>nam</option>
                <option value="nu"  {{ old('gioitinh') === 'nu' ? 'selected' : '' }}>nu</option>
            </select>
        </div>

        <button type="submit">Sign In</button>
    </form>
</body>
</html>
