
CREATE DATABASE portfolio;




USE portfolio;


CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table visitorcontacts (
    id int auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null,
    message VARCHAR(COMMENT) not NULL,
    visited_at datetime default current_timestamp
)
