SET NAMES 'utf8';

DROP DATABASE IF EXISTS cv;

CREATE DATABASE cv CHARACTER SET utf8 COLLATE utf8_general_ci;

GRANT ALL ON cv.* TO 'web_user'@'%' IDENTIFIED BY 'Password1';

USE cv;

CREATE TABLE jobs (id int primary key auto_increment, job_title varchar(50), employer_name varchar(50), period_time varchar(50), job_description text(5000), employment_start_date date(), employment_end_date date());

INSERT INTO jobs (employer_name, job_title, period_time, employment_start_date, employment_end_date) VALUES ('Tek Experts', 'Technical Lead', '2019 - Present', 'random text for now, just  to see', '2019-08-10', '0-0-0');
