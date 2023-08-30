@extends('layout.multiuser')

@section('title', 'Dashboard Kepala Publikasi')

@section('nav-items')
<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="/kepalapublikasi">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
@endsection

@section('nav-sidebar')
<!-- Nav Item - Berita -->
<li class="nav-item">
    <a class="nav-link" href="/kepalapublikasiberita">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Berita</span></a>
</li>
@endsection