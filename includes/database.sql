
CREATE DATABASE portfolio;




USE portfolio;


CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
alter table blogs
ADD image_URL MEDIUMBLOB ;
USE portfolio;
create table visitorcontacts (
    id int auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null,
    message VARCHAR(255) not null,
    visited_at datetime default current_timestamp
)
