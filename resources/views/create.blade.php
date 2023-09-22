<!DOCTYPE html>
<html>
<head>
    <title>Yeni Müşteri Ekle</title>
    <link href="{{ asset('css/stil.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h2>Yeni Müşteri Ekle</h2>
    <form class="form" method="POST" action="{{ route('customer.save') }}">
        @csrf
        <label for="Ad">Ad:</label>
        <input type="text" name="Ad" required><br>

        <label for="Soyad">Soyad:</label>
        <input type="text" name="Soyad" required><br>

        <label for="Giris_Tarihi">Giriş Tarihi:</label>
        <input type="date" name="Giris_Tarihi" required><br>

        <label for="Oda_No">Oda No:</label>
        <input type="number" name="Oda_No" required><br>

        <label for="Ek_Bilgiler">Ek Bilgiler:</label>
        <textarea name="Ek_Bilgiler"></textarea><br>

        <button type="submit">Kaydet</button>
    </form>
</div>
</body>
</html>
