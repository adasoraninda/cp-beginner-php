create database latihan;

use latihan;

create table (
	id INT not null primary key auto_increment,
	nama VARCHAR(50) not null,
	alamat VARCHAR(50) not null,
	umur VARCHAR(3) not null,
	jenis_kelamin VARCHAR(7) not null;
);

select * from karyawan;
