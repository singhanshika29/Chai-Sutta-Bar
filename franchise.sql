CREATE database if not exists form_details;
Use form_details;
CREATE table student_details
(name char(50) not null,
 mobile bigint(50) not null,
 location char(50) not null,
 budget bigint(20) not null,
 worth bigint(20) not null,
 message varchar(255) not null,
email varchar(100) not null,
address varchar(100) not null
);