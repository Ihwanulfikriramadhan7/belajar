@php
$no = 1;
//array  scale
$s1 = ['nama'=>'Fitri','nilai'=>90];
$s2 = ['nama'=>'Budi','nilai'=>80];
$s3 = ['nama'=>'Rudi','nilai'=>70];
$s4 = ['nama'=>'Indra','nilai'=>60];
$s5 = ['nama'=>'Sari','nilai'=>50];
//array asosiatif,syarat memanggil harus menggunakan looping
$judul = ['No','Nama','Nilai','Keterangan'];
$siswa = [$s1,$s2,$s3,$s4,$s5];
@endphp

<table border="2"  align="center" cellpadding="10px" width="70%">
    <thead>
        <tr>
            @foreach ($judul as $jdl)
            <th>
                {{$jdl}}
            </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
            @php $ket = ($s ['nilai'] >= 60)?'Lulus':'Gagal'; @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>{{$s['nama']}}</td>
            <td>{{$s['nilai']}}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>