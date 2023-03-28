SET NAMES 'utf8';

DROP DATABASE IF EXISTS cv;

CREATE DATABASE cv CHARACTER SET utf8 COLLATE utf8_general_ci;

GRANT ALL ON cv.* TO 'web_user'@'%' IDENTIFIED BY 'Password1';

USE cv;

CREATE TABLE jobs (id int primary key auto_increment, job_title varchar(50), employer_name varchar(50), period_time varchar(50), job_description text(5000));

INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Tek Experts', 'Technical Lead', '2019 - Present', 'random text for now, just  to see');
INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Tek Experts', 'L3 Engineer', '2018-2019', 'more rndm text');

CREATE TABLE education (id int primary key auto_increment, specialty_title varchar(50), university_name varchar(50), university_location varchar(50), period_time varchar(50));

INSERT INTO education (specialty_title, university_name, period_time, university_location) VALUES ('Business Administration', 'South-West University', '2008-2012', 'Blagoevgrad');
INSERT INTO education (specialty_title, university_name, period_time, university_location) VALUES ('Mathematics/English', 'PMG Akad. S. P. Koroliov', '2008-2012', 'Blagoevgrad');

CREATE TABLE certifications (id int primary key auto_increment, cert_title varchar(50), issuer_name varchar(50), date_of_issue date);

INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('Azure Administrator Associate', 'Microsoft', '2023-03-03');
INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('Containerisation CI/CD & Monitoring', 'Software University', '2023-03-03');
INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('Linux Server Administration', 'Software University', '2023-03-03');
INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('Windows Server Administration', 'Software University', '2023-03-03');
INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('C# Advanced', 'Software University', '2023-03-03');
INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('Proggraming Fundamentals with C#', 'Software University', '2023-03-03');
INSERT INTO certifications (cert_title, issuer_name, date_of_issue) VALUES ('Proggraming Basics with C#', 'Software University', '2023-03-03');