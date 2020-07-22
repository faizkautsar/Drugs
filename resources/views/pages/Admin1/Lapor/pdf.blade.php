<html>
<head>
    <title>Laporan </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<table align="center">
    <tr>
        <!-- <td><img src="{{asset('assets/img/Logo_bnn2.png')}}" width="70" height="70"></td> -->
        <td><center>
                <font size="4">PEMERINTAH KOTA TEGAL</font><BR>
                <font size="5"><b>BADAN NARKOTIKA NASIONAL KOTA TEGAL</b></font><BR>
                <font size="2">Jalan KH.Ahmad Dahlan No.25, Mangkukusuman, Tegal Timur, Panggung, Kec. Tegal Timur</font><BR>
                <font size="2">Kota Tegal, Jawa Tengah (0283) 451349</font><BR>
                <font size="2">TEGAL<BR></font>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="2"> <hr> </td>
    </tr>
</table>
<body>
<center>
    <font size="3"><b>Laporan </b></font>
</center>

<br>
<table id="example1"  class="table table-bordered dt-responsive nowrap"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Peran</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Narkoba</th>
            <th>Pekerjaan</th>
            <th>Transaksi</th>
            <th>Kendaraan</th>
            <th>Pelapor</th>
        </tr>
    </thead>
    <tbody>
      @foreach($laporan as $lapor)
        <tr>
          <td>{{$loop->iteration}}</td>
          <th>{{$lapor->peran}}</th>
          <th>{{$lapor->nama}}</th>
          <th>{!!$lapor->alamat!!}</th>
          <th>{{$lapor->jenis_narkoba}}</th>
          <th>{{$lapor->pekerjaan}}</th>
          <th>{!!$lapor->tmpt_transaksi!!}</th>
          <th>{{$lapor->kendaraan}}</th>
          <th>{{$lapor->user->nama}}</th>
        </tr>
      @endforeach
    </tbody>
</table>
<table align=right border="0" cellpadding="1" style="width: 250px;">
    <tbody>
        <tr>
             <td valign="top">

                     <div align="left">
                        <span style="font-size: x-small;">Mengetahui </span><br>
                            <span style="font-size: x-small;">Kepala Dinas Penduduk dan Pencatatan Sipil Kota Tegal</span>
                    </div>

            <div align="left" style="margin: 50px "></div>
            <div align="left">
                    <span style="font-size: 12px;">E.Sulyati Dra,M.pd.</span></div>
            </td>
        </tr>
    </tbody>
</body>
</html>
