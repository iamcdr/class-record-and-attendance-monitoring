DROP TABLE IF EXISTS useraccount;

CREATE TABLE `useraccount` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(512) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `emp_num` varchar(255) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$jMmqu3FgVxSxnIsFbQpCg1$',
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO useraccount VALUES("1","ballen","$2y$10$jMmqu3FgVxSxnIsFbQpCguZVjdAIyOUGBeBib0DsWSPWELjepnQxu","Allen","Bartholomew","Henry","00237","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1");



DROP TABLE IF EXISTS audit_trail;

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `audit_type` varchar(255) NOT NULL,
  `audit_remarks` text NOT NULL,
  `audit_datetime` datetime NOT NULL,
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS gradelevel;

CREATE TABLE `gradelevel` (
  `gradelevel_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_code` varchar(60) NOT NULL,
  `gradelevel_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gradelevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel VALUES("1","G1","Grade 1","0");



DROP TABLE IF EXISTS sections;

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_id` int(11) NOT NULL,
  `section_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS subjects;

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO subjects VALUES("1","1ENG1","English 1","0");



DROP TABLE IF EXISTS user_profile;

CREATE TABLE `user_profile` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(16) NOT NULL,
  `birthdate` date NOT NULL,
  `specialization` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` varchar(70) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user_profile VALUES("1","1","Allen, Bartholomew Henry","","","0000-00-00","","ballen@gmail.com","");



