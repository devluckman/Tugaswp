create database kepegawaian;

use kepegawaian;

create table admin (
	username varchar(20) not null,
	password varchar(255) not null,
	primary key(username)
);

create table karyawan(
	nip varchar(20) not null,
	nama varchar(25) not null,
	tgl varchar(10) not null,
	alamat varchar(40) not null,
	kota varchar(25) not null,
	kontak varchar(13) not null,
	departemen varchar(30) not null,
	primary key(nip)
);

create table departemen(
	id int(6) unsigned not null,
	nama varchar(30) not null,
	primary key(id)

);

insert into `admin`(`username`, `password`) Values
	('admin','admin');

insert into `karyawan`(`nip`, `nama`,`tgl`,`alamat`, `kota`,`kontak`, `departemen`) Values
	('AC01','Lukmanul Hakim', '02-02-1994', 'Jl. Purwakarta 5 No. 8, Antapani','Bandung', '089686777832', 'Information Technology'),
	('AC02','Wawan Nurul Ihsan', '03-03-1994', 'Jl. Purwakarta 5 No. 8, Antapani','Bandung', '085666777888', 'Marketing'),
	('AC03','Mamang Saputra', '04-04-1994', 'Jl. Purwakarta 5 No. 8, Antapani','Bandung', '087555666999', 'Person'),
	('AC04','Bariman Susianti', '05-05-1994', 'Cibinong','Bandung', '085333444555', 'Information Technology'),
	('AC05','Kasino Riban', '06-06-1994', 'Cilengkrang','Bandung', '082111333666', 'Finance'),
	('AC06','Farhan Soheh', '07-07-1994', 'Cibiru','Bandung', '082777888999', 'Production'),
	('AC07','Dian Tunduh', '08-08-1994', 'Jatihandap','Bandung', '086888777555', 'Marketing'),
	('AC08','Jhon Giant', '09-09-1994', 'Cicaheum','Bandung', '087666888555', 'Finance'),
	('AC09','Eric Oki', '10-10-1994', 'Kiaracondong','Bandung', '086222111555', 'Production'),
	('AC10','Dadan Syakur', '11-11-1994', 'Lembang','Bandung', '084222555888', 'Person'),
	('AC11','Bit Qoyyim', '12-12-1994', 'Antapani','Bandung', '085999888444', 'Information Technology');
	


insert into `departemen`(`id`,`nama`) values 
	('1', 'Information Technology '),
	('2', 'Production'),
	('3', 'Finance'),
	('4', 'Marketing'),
	('5', 'Person'); 