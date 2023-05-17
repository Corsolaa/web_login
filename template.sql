Create database web_login;

CREATE TABLE `web_login`.`login_auth`
(
    `u_id`   INT  NULL AUTO_INCREMENT,
    `u_name` TEXT NOT NULL,
    `pass`   TEXT NOT NULL,
    PRIMARY KEY (`u_id`)
);

INSERT INTO `login_auth` (`u_name`, `pass`)
VALUES ('u_name', 'pass');