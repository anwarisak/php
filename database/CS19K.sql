DROP DATABASE IF EXISTS c1s19k;
create database c1s19k;
USE c1s19k;

CREATE TABLE role(
role_id int(11)  NOT NULL AUTO_INCREMENT,
name varchar(40),
primary key (role_id)
);
CREATE TABLE user(
user_id int(11)  NOT NULL AUTO_INCREMENT,
role_id int (11),
username varchar(50),
password varchar(50),
status varchar(50) DEFAULT 'process',
primary key (user_id),
foreign key (role_id) references role(role_id)ON UPDATE CASCADE 
);

insert into role (name)values ('admin');
 insert into user (role_id,username,password)values (1,'abdirahmaan',90909);

-- calling
select * from role;
select * from user;



