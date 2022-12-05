@extends('layout')
@section('content')
    
<form class="register" action="" method="post">
    <div class="form">
        <h3>Form Pendaftaran Peserta Donor Darah</h3>
        <hr>
        <a href="data">Data</a>
        <div class="name">
            <b>Nama*</b><br>
            <input class="inputName" type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="other">
            <b>Other*</b><br>
            <input class="inp" type="number" name="nik" placeholder="NIK" required>
            <input class="inp" type="number" name="age" placeholder="Age" required><br><br>
            <input class="address" type="text" name="address" placeholder="Address"><br><br>
            <button name="submit">Add</button>
        </div>
        </div>
    </form>
</body>
</html>
@endsection