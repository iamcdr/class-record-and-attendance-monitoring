DROP TABLE IF EXISTS useraccount;

CREATE TABLE `useraccount` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(512) NOT NULL DEFAULT '$2y$10$jMmqu3FgVxSxnIsFbQpCguZVjdAIyOUGBeBib0DsWSPWELjepnQxu',
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `emp_num` varchar(255) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$jMmqu3FgVxSxnIsFbQpCg1$',
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO useraccount VALUES("1","ballen","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Allen","Bartholomew","Henry","00237","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1");
INSERT INTO useraccount VALUES("2","funderwood","$2y$10$jMmqu3FgVxSxnIsFbQpCguZVjdAIyOUGBeBib0DsWSPWELjepnQxu","Underwood","Francis","Joseph","13-0359","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0");



DROP TABLE IF EXISTS audit_trail;

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `audit_type` varchar(255) NOT NULL,
  `audit_remarks` text NOT NULL,
  `audit_datetime` datetime NOT NULL,
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO audit_trail VALUES("1","1","1","Added a section","7-Babbage was successfully added.","2017-06-18 07:49:36");
INSERT INTO audit_trail VALUES("2","1","1","Added a new Teacher account","Name: Underwood, Francis Joseph ","2017-06-19 08:49:59");



DROP TABLE IF EXISTS gradelevel;

CREATE TABLE `gradelevel` (
  `gradelevel_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_code` varchar(60) NOT NULL,
  `gradelevel_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gradelevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel VALUES("1","G7","Grade 7","0");



DROP TABLE IF EXISTS sections;

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_id` int(11) NOT NULL,
  `section_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO sections VALUES("1","1","7-Babbage","0");



DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_idno` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`student_id`)
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_profile VALUES("1","1","Allen, Bartholomew Henry","","","0000-00-00","","ballen@gmail.com","");
INSERT INTO user_profile VALUES("2","2","Underwood, Francis Joseph","#5 White House, Washington St., Angeles City","Male","1986-03-24","Political Science and History ","","");



DROP TABLE IF EXISTS year;

CREATE TABLE `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year1` int(11) NOT NULL,
  `year2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO year VALUES("2","2012","2013");
INSERT INTO year VALUES("3","2013","2014");
INSERT INTO year VALUES("4","2014","2015");
INSERT INTO year VALUES("5","2015","2016");
INSERT INTO year VALUES("6","2016","2017");
INSERT INTO year VALUES("7","2017","2018");
INSERT INTO year VALUES("8","2018","2019");
INSERT INTO year VALUES("9","2019","2020");
INSERT INTO year VALUES("10","2020","2021");
INSERT INTO year VALUES("11","2021","2022");
INSERT INTO year VALUES("12","2022","2023");
INSERT INTO year VALUES("13","2023","2024");
INSERT INTO year VALUES("14","2024","2025");
INSERT INTO year VALUES("15","2025","2026");
INSERT INTO year VALUES("16","2026","2027");
INSERT INTO year VALUES("17","2027","2028");
INSERT INTO year VALUES("18","2028","2029");
INSERT INTO year VALUES("19","2029","2030");
INSERT INTO year VALUES("20","2030","2031");
INSERT INTO year VALUES("21","2031","2032");
INSERT INTO year VALUES("22","2032","2033");
INSERT INTO year VALUES("23","2033","2034");
INSERT INTO year VALUES("24","2034","2035");
INSERT INTO year VALUES("25","2035","2036");
INSERT INTO year VALUES("26","2036","2037");
INSERT INTO year VALUES("27","2037","2038");
INSERT INTO year VALUES("28","2038","2039");
INSERT INTO year VALUES("29","2039","2040");
INSERT INTO year VALUES("30","2040","2041");
INSERT INTO year VALUES("31","2041","2042");
INSERT INTO year VALUES("32","2042","2043");
INSERT INTO year VALUES("33","2043","2044");
INSERT INTO year VALUES("34","2044","2045");
INSERT INTO year VALUES("35","2045","2046");
INSERT INTO year VALUES("36","2046","2047");
INSERT INTO year VALUES("37","2047","2048");
INSERT INTO year VALUES("38","2048","2049");
INSERT INTO year VALUES("39","2049","2050");



