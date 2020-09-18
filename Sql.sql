CREATE TABLE comments (
	cId int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uId varchar(128) not null, 
    Date datetime not null,
    message TEXT not null
);

CREATE TABLE user (
	id int(11) not Null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    pwd varchar(128) not null
);

INSERT INTO user (uid, pwd) VALUES ('admin', 'nimda');
INSERT INTO user (uid, pwd) VALUES ('daniel', '123');