CREATE TABLE comments (
	cId int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uId varchar(128) not null, 
    Date datetime not null,
    message TEXT not null
);

CREATE TABLE users (
	id int(11) not Null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    pwd varchar(128) not null
);

INSERT INTO users (uid, pwd) VALUES ('admin', '123');
INSERT INTO users (uid, pwd) VALUES ('jonas', '123');


else {
            header("Location: index.php?loginfailed");
            exit();
        }


        function clearform()
    {
        document.getElementByName("uid") . value = "";
        document.getElementByName("date") . value = "";
        document.getElementByName("message") . value = "";
    }

    onClick='" . clearform() . "'