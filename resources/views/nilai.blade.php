@extends('layout.app')

@section('konten')
@php
//komentar php
$nama = "Indra";
$nilai = 60;
@endphp

@if ($nilai >= 60)
    @php  $ket = "Lulus"; @endphp
@else
    @php $ket = "Gagal"; @endphp
@endif
<p>Siswa {{$nama}}</p>
<p>{{$mhs1}}</p>
<p>Dengan Nilai {{$nilai}}</p>
<p>Dinyatakan {{$ket}}</p>
@endsection