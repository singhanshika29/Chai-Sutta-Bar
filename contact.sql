CREATE DATABASE IF NOT EXISTS form;
USE form;
CREATE TABLE IF NOT EXISTS cafe(
       first_name VARCHAR(100) NOT NULL,
       last_name VARCHAR(100)NOT NULL,
     cafe_email VARCHAR(100) NOT NULL,
 cafe_address VARCHAR(255)
);
INSERT INTO cafe (
    first_name, last_name, cafe_email, cafe_address
)VALUES

( 'Rahul', 'yadav', 'rahul123@gmail.com', '163/9 lucknow'),
( 'Ayaan', 'singh', 'aya238@gmail.com', '63/8 lucknow'),
( 'Anubhav', 'sharma', 'anubhav34@gmail.com', '73/7 lucknow'),
( 'Avantika', 'singh', 'avantika453@gmail.com', '80/12 lucknow'),
( 'Parul', 'verm', 'parul973@gmail.com', '143/11 lucknow'),