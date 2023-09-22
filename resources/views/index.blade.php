<!DOCTYPE html>
<html>
<head>
    <title>Müşteri Listesi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ asset('css/stil.css') }}" rel="stylesheet">
</head>
<body>
    <div id="dynamic-content">
    <form id="search">
        <label for="search-ad">Ad:</label>
        <input type="text" id="search-ad" name="ad">

        <label for="search-soyad">Soyad:</label>
        <input type="text" id="search-soyad" name="soyad">

        <label for="search-giris-tarihi">Giriş Tarihi:</label>
        <input type="date" id="search-giris-tarihi" name="giris_tarihi">

        <label for="search-oda-no">Oda No:</label>
        <input type="text" id="search-oda-no" name="oda_no">
        <button type="submit">Ara</button>
    </form>
     <h2>Müşteri Listesi</h2>
    <a href="{{ route('customer.create') }}">Müşteri Ekle</a>
    <table>
        <thead>
            <tr>
                <th>Oda No</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Giriş Tarihi</th>
                <th>Ek Bilgiler</th>
            </tr>
        </thead>
        <tbody id="customer-table-body">
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->Oda_No }}</td>
                    <td>{{ $customer->Ad }}</td>
                    <td>{{ $customer->Soyad }}</td>
                    <td>{{ $customer->Giris_Tarihi }}</td>
                    <td>{{ $customer->Ek_Bilgiler }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#search').submit(function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "GET",
                url: "{{ route('customer.search') }}",
                data: formData,
                success: function (data) {
                    $('#dynamic-content').html(data);
                }
            });
        });
    });
</script>
</body>
</html>
