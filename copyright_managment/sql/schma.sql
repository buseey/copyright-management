CREATE DATABASE copyright_management;

USE copyright_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE copyrights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    owner VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    license_status VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    copyright VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    release_date DATE NOT NULL
);
