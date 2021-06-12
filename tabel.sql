MariaDB [(none)]> create database db_penjualan;
Query OK, 1 row affected (0.024 sec)

MariaDB [(none)]> use db_penjualan;
Database changed
MariaDB [db_penjualan]> create table pembeli (
    -> id_pembeli int not null auto_increment primary key,
    -> nama_pembeli varchar(30) not null,
    -> jk char(1),
    -> no_telp char(14),
    -> alamat varchar(50)
    -> );
Query OK, 0 rows affected (0.464 sec)

MariaDB [db_penjualan]> create table barang (
    -> id_barang int not null auto_increment primary key,
    -> nama_barang varchar(20) not null,
    -> harga int,
    -> stok int
    -> );
Query OK, 0 rows affected (0.202 sec)

MariaDB [db_penjualan]> create table transaksi (
    -> id_transaksi int not null auto_increment primary key,
    -> id_barang int,
    -> id_pembeli int,
    -> tanggal date,
    -> keterangan varchar(100),
    -> CONSTRAINT id_barang FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
    -> CONSTRAINT id_pembeli FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`)
    -> );
Query OK, 0 rows affected (0.243 sec)

MariaDB [db_penjualan]>