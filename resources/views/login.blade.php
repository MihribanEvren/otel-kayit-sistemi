<!DOCTYPE html>
<html>
<head>
    <title>Admin Girişi</title>
    <link href="{{ asset('css/stil.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h2>Admin Girişi</h2>
    <form class="form" method="POST" action="{{ route('admin.authenticate') }}">
        @csrf
        <label for="admin_name">Admin Adı:</label>
        <input type="text" name="admin_name" required><br>

        <label for="admin_password">Şifre:</label>
        <input type="password" name="admin_password" required><br>

        <button type="submit">Giriş Yap</button>
    </form>
</div>
</body>
</html>
