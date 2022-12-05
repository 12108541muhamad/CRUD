@extends('layout')
@section('content')
    
<form class="data" action="" method="post">
    <div class="form">
        <h3>Daftar Peserta Donor Darah</h3>
        <hr>
        <a href="/">Back</a>
            <div class="name">
                <b>List*</b><br>
                <table style="width:100%">
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>NIK</th>
                      <th>Status</th>
                      <th>Alamat</th>
                      <th>Kantong Darah</th>
                    </tr>
                    <tr>
                      <td>0</td>
                      <td>Muhamad Dwi Putra Novriansyah</td>
                      <td>16</td>
                      <td>12108541</td>
                      <td>?</td>
                      <td>Desa Kopo, Kec. Cisarua, Kab. Bogor</td>
                      <td>?</td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>
</html>
@endsection