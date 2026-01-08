<?php
echo "<h1>FORM PENDAFTARAN MAHASISWA BARU</h1>";
echo "<hr>";

echo "<a href='index.php'>Beranda</a> | ";
echo "<a href='profil.php'>Profil Kampus</a> | ";
echo "<a href='pendaftaran.php'>Pendaftaran</a>";
echo "<hr>";

echo "<form method='post' action='proses_daftar.php'>";

echo "<p>NIK<br>";
echo "<input type='text' name='nik' required></p>";

echo "<p>NIM (Opsional jika belum ada)<br>";
echo "<input type='text' name='nim'></p>";

echo "<p>Nama Lengkap<br>";
echo "<input type='text' name='nama' required></p>";

echo "<p>Jenis Kelamin<br>";
echo "<select name='jk' required>
        <option value=''>-- Pilih --</option>
        <option value='Laki-laki'>Laki-laki</option>
        <option value='Perempuan'>Perempuan</option>
      </select></p>";

echo "<p>Tempat Lahir<br>";
echo "<input type='text' name='tempat_lahir' required></p>";

echo "<p>Tanggal Lahir<br>";
echo "<input type='date' name='tanggal_lahir' required></p>";

echo "<p>Alamat<br>";
echo "<textarea name='alamat' rows='4' cols='40' required></textarea></p>";

echo "<p>No. HP / WhatsApp<br>";
echo "<input type='text' name='nohp' required></p>";

echo "<p>Email<br>";
echo "<input type='email' name='email'></p>";

echo "<p>Asal Sekolah<br>";
echo "<input type='text' name='asal_sekolah' required></p>";

echo "<p>Program Studi Pilihan<br>";
echo "<select name='prodi' required>
        <option value=''>-- Pilih Prodi --</option>
        <option value='Sistem Informasi'>Sistem Informasi</option>
        <option value='Teknologi Informasi'>Teknologi Informasi</option>
        <option value='Manajemen'>Manajemen</option>
      </select></p>";

echo "<p>Username<br>";
echo "<input type='text' name='username' required></p>";

echo "<p>Password<br>";
echo "<input type='password' name='password' required></p>";

echo "<p>
        <button type='submit'>Kirim Pendaftaran</button>
        <button type='reset'>Reset</button>
      </p>";

echo "</form>";

echo "<hr>";
echo "<p>© 2025 Sistem Pendaftaran Mahasiswa</p>";
?>-