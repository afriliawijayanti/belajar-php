--buat database fakultas
CREATE DATABASE fakultas;

--buat table jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

--buat table mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY(id_jurusan) REFERENCES jurusan(id)
);

-- insert jurusan
insert into jurusan (kode, nama) values ("EP", "Ekonomi Pembangunan");
insert into jurusan (kode, nama) values ("AK", "Akuntansi");

--insert mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "20801075", "Afrilia Wijayanti", "perempuan", "Madiun", "2001-04-20", "Jl Teratai No 9 Kwadungan, Kabupaten Ngawi");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (2, "20801089", "Ferryan Prima Sanjaya", "laki-laki", "Ngawi", "2000-08-21", "Jln Mawar No 8 Kwadungan, Kabupaten Ngawi");

--update mahasiswa
update mahasiswa set id_jurusan = 2, tempat_lahir = "Bandung" where id = 1;
update mahasiswa set alamat = "Jln Jawa 2B No 1 Jember" where id = 1;

--update jurusan
update jurusan set nama = "Administrasi Bisnis" where id = 1;

--delete mahasiswa
delete from mahasiswa where id = 2;