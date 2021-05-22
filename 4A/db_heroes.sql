CREATE DATABASE db_heroes; #membuat database

CREATE TABLE heroes_tb(id INT AUTO_INCREMENT PRIMARY KEY, nama VARCHAR (255), type_id INT, photo VARCHAR(255)); #membuat table heroes

CREATE TABLE type_tb(id INT AUTO_INCREMENT PRIMARY KEY, nama VARCHAR (255)); #membuat table type

SELECT * FROM heroes_tb WHERE id='$id'; #menampilkan tabel heroes berdasarkan id

SELECT * FROM type_tb WHERE id='$id'; #menampilkan tabel type berdasarkan id

SELECT heroes_tb.id AS heroes_id, heroes_tb.nama AS nama_heroes, type_tb.nama AS type_heroes, heroes_tb.photo AS img FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id=type_tb.id WHERE heroes_tb.id = '$id'; #menampilkan data heroes dimana akan di joinkan agar bisa mendapat nama type berdasarkan id

SELECT heroes_tb.id AS heroes_id, heroes_tb.nama AS nama_heroes, type_tb.nama AS type_heroes, heroes_tb.photo FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id=type_tb.id; #menampilkan data heroes dimana akan di joinkan agar bisa mendapat nama type

DELETE FROM heroes_tb WHERE id = '$id' #delete table heroes berdasarkan id

DELETE FROM type_tb WHERE id = '$id' #delete table type berdasarkan id

UPDATE heroes_tb SET nama = '$nama_heroes', type_id = '$type_id', photo = '$img' WHERE id = '$id'; #update table heroes berdasarkan id

UPDATE type_tb SET nama = '$type_name' WHERE id = '$id'; #update table type berdasarkan id

INSERT INTO heroes_tb(nama, type_id, photo) VALUES ('$nama_heroes', $TYPE, '$nama_file'); #insert values ke table heroes 

INSERT INTO type_tb (nama) VALUES ('$nama_type'); #insert values ke table type
