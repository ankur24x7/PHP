|-----------------------|
|			|
|--Create following DB--|
|			|
|-----------------------|


CREATE DATABASE messenger;
username --> ankur
password --> ankur


|-----------------------|
|			|
|Create following Tables|
|			|
|-----------------------|

CREATE TABLE all_users

(
FirstName varchar(100),

LastName varchar(100),

Age int,

EmailId varchar(100),

userid varchar(10),

password varchar(50),

PRIMARY KEY (userid)
);

CREATE TABLE message

(sender	varchar(100),

reciever varchar(100),

message varchar(100),

);

first open signup.html for registering
Check db credentials in rest files as per your system
