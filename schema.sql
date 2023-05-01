CREATE DATABASE IF NOT EXISTS gym;
USE gym;

-- Drop tables if they exist
DROP TABLE IF EXISTS CALORIES_MEAL;
DROP TABLE IF EXISTS CALORIES;
DROP TABLE IF EXISTS MEAL;
DROP TABLE IF EXISTS USERS;

-- Create USERS table
CREATE TABLE USERS
(
    USERNAME VARCHAR(32) UNIQUE NOT NULL,
    EMAIL VARCHAR(319) UNIQUE NOT NULL,
    PASSWORD TEXT NOT NULL,
    PRIMARY KEY(USERNAME)
);

-- Create CALORIES table
CREATE TABLE MEAL_LIST
(
    ID INT AUTO_INCREMENT,
    ITEM VARCHAR(255),
    CALORIES INT NOT NULL,
    USERNAME VARCHAR(32) NOT NULL,
    DATE DATE NOT NULL,
    FOREIGN KEY(USERNAME) REFERENCES USERS(USERNAME),
    PRIMARY KEY(ID)
);

SELECT * FROM USERS;
SELECT * FROM MEAL_LIST;