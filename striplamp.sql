--Membuat database 
create database striplamp;

--Mmembuat tabel datalamp
create table datalamp (
    id int(6) NOT NULL AUTO_INCREMENT,
    kondisi VARCHAR(50), 
    hari VARCHAR(30),
    waktu TIME,
    tanggal VARCHAR(10),
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--Membuat user untuk database 
create user 'lamp'@'localhost' identified by '123';

--Memberikan hak akses kepada user yang dibuat 
GRANT ALL privileges on striplamp.* to 'lamp'@'localhost';
flush privileges;

create table SL_user (
    id int(3) not null AUTO_INCREMENT,
    username varchar(30),
    password varchar(20),
    PRIMARY KEY(id)
);

insert into SL_user (username, password) values ('lamp', '123');