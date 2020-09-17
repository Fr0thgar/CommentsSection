CREATE TABLE comments (
	cId int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uId varchar(128) not null, 
    Date datetime not null,
    message TEXT not null
);