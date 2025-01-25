-- Active: 1732421373194@@127.0.0.1@3306@users
CREATE DATABASE users;

use users;

CREATE TABLE registration (
    id INT PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    note VARCHAR(200) DEFAULT "Empty.",
    isActive VARCHAR(10) NOT NULL DEFAULT "Active",
    isAdmin VARCHAR(10) NOT NULL DEFAULT "False",
    created_At timestamp NOT NULL DEFAULT current_timestamp(),
    update_At timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    imagePath VARCHAR(100) DEFAULT "../../uploadsFile/defaultUser2.png"
);

INSERT INTO
    registration (
        userName,
        email,
        password,
        isAdmin
    )
VALUES (
        "Chandan",
        "cb@gmail.com",
        "cb12",
        "True"
    ),
    (
        "Akshay",
        "ak@gmail.com",
        "ak12",
        "True"
    ),
    (
        "Mohit",
        "mohit@gmail.com",
        "mohit12",
        "False"
    ),
    (
        "Parshu",
        "parshu@gmail.com",
        "parshu12",
        "False"
    );

SELECT * from registration;

DROP TABLE registration;