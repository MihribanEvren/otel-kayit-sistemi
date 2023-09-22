<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div id="dynamic-content">
        <h2>Müşteri Listesi</h2>
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
            <tbody>
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
</body>
</html>