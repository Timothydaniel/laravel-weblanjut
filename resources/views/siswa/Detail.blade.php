<a href="{{ URL::to('siswa') }}"> Lihat All </a> | <a href="{{ URL::to('siswa/create') }}"> Tambah siswa </a> <hr>
<h1>Menampilakn {{ $siswa -> nama }}</h1>
<div>
    <h2>
        {{ $siswa -> nama }}
    </h2>

    <p>
        <strong>Alamat:</strong> {{$siswa -> alamat }} <br>
        <strong>No HP:</strong> {{$siswa -> no_hp }} <br>
    </p>
</div>