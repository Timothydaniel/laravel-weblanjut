<?php use Illuminate\Support\Facades\Form; ?>
<a href="{{ URL::to('siswa') }}"> Lihat All </a> | <a href="{{ URL::to('siswa/create') }}"> Tambah siswa </a> <hr>
<h1>Edit Siswa</h1>
<form methods="POST" action="/siswa/{{$siswa -> id_siswa }}">
@method('PUT')
@csrf
<pre>
    Nama <input type = "text" name = "nama"> <br>
    Alamat <input type = "text" name = "alamat"> <br>
    No.HP <input type = "text" name = "no_hp"> <br>
<input type = "submit" name = "submit"> <br>
</pre>
</form>