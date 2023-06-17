SET NAMES 'utf8';

DROP DATABASE IF EXISTS cv;

CREATE DATABASE cv CHARACTER SET utf8 COLLATE utf8_general_ci;

GRANT ALL ON cv.* TO 'web_user'@'%' IDENTIFIED BY 'Password1';

USE cv;

CREATE TABLE jobs (id int primary key auto_increment, job_title varchar(50), employer_name varchar(50), period_time varchar(50), job_description text(5000));

INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Tek Experts', 'Technical Lead - September 2021 - Present', 'August 2020 - Present', 'As a Technical Lead my main responsibilities include providing technical and procedural guidance to Support Engineers directly, in daily Triages, or via Swarming Channels; performing daily quality and technical reviews on cases and leading the technical onboarding of new joiners.');
INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Tek Experts', 'L3 Engineer - February 2021 - September 2021', 'August 2020 - Present', 'As a Senior Engineer in the team, besides working with customers, I was responsible for Queue Management and was tasked with helping in the onboardment of new joiners by providing mentorship after the technical training.');
INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Tek Experts', 'L2 Engineer - August 2020 - February 2021', 'August 2020 - Present', 'As a Support Engineer, my main responsibilities were to provide technical assistance to customers, while resolving different problems related to the monitoring, and deployment of montioring solutions in their environments');
INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Telus International', 'Senior Support Representative', 'April 2019 - August 2020', 'As a Senior Support Representative, I was part of a team responsible for handling tier 1 techical escalations related to issues with an online game');
INSERT INTO jobs (employer_name, job_title, period_time, job_description) VALUES ('Telus International', 'Support Representative April 2019 -  August 2020', 'April 2019 - August 2020', 'As a Support Rep for Telus, my main responsibilities were to provide basic customer support services to the users of the client services.');

CREATE TABLE education (id int primary key auto_increment, specialty_title varchar(50), university_name varchar(50), university_location varchar(50), period_time varchar(50));

INSERT INTO education (specialty_title, university_name, period_time, university_location) VALUES ('Business Administration', 'South-West University', '2008-2012', 'Blagoevgrad');
INSERT INTO education (specialty_title, university_name, period_time, university_location) VALUES ('Mathematics/English', 'PMG Akad. S. P. Koroliov', '2003-2007', 'Blagoevgrad');

CREATE TABLE certifications (id int primary key auto_increment, cert_title varchar(50), issuer_name varchar(50), date_of_issue date, certificate_image longblob);

INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Azure Administrator Associate', 'Microsoft', '2023-03-04', LOAD_FILE('/var/lib/mysql/images/az104.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Containerisation CI/CD & Monitoring', 'Software University', '2023-06-14', LOAD_FILE('/var/lib/mysql/images/cm.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Containerisation CI/CD & Monitoring', 'Software University', '2023-03-28', LOAD_FILE('/var/lib/mysql/images/containers.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Linux Server Administration', 'Software University', '2022-10-24', LOAD_FILE('/var/lib/mysql/images/lsa.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Windows Server Administration', 'Software University', '2022-07-25', LOAD_FILE('/var/lib/mysql/images/wsa.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('C# Advanced', 'Software University', '2019-11-07', LOAD_FILE('/var/lib/mysql/images/csadvanced.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Proggraming Fundamentals with C#', 'Software University', '2019-06-12', LOAD_FILE('/var/lib/mysql/images/csfundamentals.png'));
INSERT INTO certifications (cert_title, issuer_name, date_of_issue, certificate_image) VALUES ('Proggraming Basics with C#', 'Software University', '2019-03-12', LOAD_FILE('/var/lib/mysql/images/csbasics.png'));