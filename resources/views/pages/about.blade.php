@extends('layouts.master')

@section('content')
	<div class="container mt-3">
		<h1>Selamat Datang di Halaman Tentang Kami</h1>
	 <div class="border p-2 mt-2">
        <p>Selamat datang {{ $nama }} dari kelas {{ $kelas }} dengan NIM {{ $nim }}</p>
    </div>
	</div>
@endsection
	