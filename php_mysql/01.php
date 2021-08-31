<?php
//connect database by terminal
$connect = "mysql -h 127.0.0.1 -P 3306 -u root -p";
//create database;
$data = "CREATE DATABASE my_database";
//drop database my_database
$data = "DROP DATABASE my_database";
//show all databases;
$data = "SHOW DATABASES";
//create table users
$data = "CREATE TABLE users(
    id int(13) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL
    )ENGINE InnoDB";
//drop table;
$data = "DROP TABLE users";
//modify field name
$data = "ALTER TABLE users CHANGE name fullname varchar(255) not null";
//modify column
$data = "ALTER TABLE users MODIFY COLUMN fullname text NOT NULL";
//add column
$data = "ALTER TABLE users ADD created_at timestamp";
//delete column
$data = "ALTER TABLE users DROP COLUMN created_at";
