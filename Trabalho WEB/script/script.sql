DROP DATABASE IF EXISTS sist_livros;
CREATE DATABASE sist_livros;
USE sist_livros;

CREATE TABLE IF NOT EXISTS user(
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    /*user_sec_name VARCHAR(100) NOT NULL,*/
    user_email VARCHAR(100) NOT NULL,
    user_password VARCHAR(250) NOT NULL,
    user_born DATE NOT NULL,
    UNIQUE (user_email)
) AUTO INCREMENT

CREATE TABLE IF NOT EXISTS adm(
    admin_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(100) NOT NULL,
    /*admin_sec_name VARCHAR(100) NOT NULL,*/
    admin_email VARCHAR(100) NOT NULL,
    admin_password VARCHAR(250) NOT NULL,
    admin_born DATE NOT NULL,
    UNIQUE (admin_email)
) AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS book(
    book_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_title VARCHAR(100) NOT NULL,
    book_author VARCHAR(100) NOT NULL,
    book_editor VARCHAR(100) NOT NULL,
    book_desc VARCHAR(200) NOT NULL,
    book_cover VARCHAR(150) NOT NULL,
    UNIQUE (book_title)
) AUTO_INCREMENT = 1;