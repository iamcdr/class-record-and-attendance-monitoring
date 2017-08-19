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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO useraccount VALUES("1","ballen","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Allen","Bartholomew","Henry","00237","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1");
INSERT INTO useraccount VALUES("2","hwells","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Wells","Harrison","James","12-052","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0");
INSERT INTO useraccount VALUES("3","","$2y$10$jMmqu3FgVxSxnIsFbQpCguZVjdAIyOUGBeBib0DsWSPWELjepnQxu","Quill","Peter","Ego","14-001","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0");



DROP TABLE IF EXISTS audit_trail;

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `audit_type` varchar(255) NOT NULL,
  `audit_remarks` text NOT NULL,
  `audit_datetime` datetime NOT NULL,
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO audit_trail VALUES("1","1","1","Added a section","7-Babbage was successfully added.","2017-06-18 07:49:36");
INSERT INTO audit_trail VALUES("2","1","1","Added a student","Name: Juan Dalisay Dela Cruz <br>Student ID No: 13-007","2017-06-25 08:10:20");
INSERT INTO audit_trail VALUES("3","1","1","Added a new Teacher account","Name: Wells, Harrison James ","2017-06-25 09:26:33");
INSERT INTO audit_trail VALUES("4","1","1","Archived an account","Harrison Wells account was successfully moved to archive.","2017-06-28 04:38:10");
INSERT INTO audit_trail VALUES("5","1","1","Archived a grade level data","Grade 7 was successfully moved to archive.","2017-06-28 07:58:50");
INSERT INTO audit_trail VALUES("6","1","1","Archived a grade level data","Grade 7 was successfully moved to archive.","2017-06-28 08:08:27");
INSERT INTO audit_trail VALUES("7","1","1","Archived an account","Bartholomew Allen account was successfully moved to archive.","2017-06-28 08:09:50");
INSERT INTO audit_trail VALUES("8","1","1","Archived a grade level data","Grade 7 was successfully moved to archive.","2017-06-28 08:48:56");
INSERT INTO audit_trail VALUES("9","1","1","Archived a subject data","English 1 was successfully moved to archive.","2017-06-28 08:49:54");
INSERT INTO audit_trail VALUES("10","1","1","Archived a student information","Juan Dalisay Dela Cruz was successfully moved to archive.","2017-06-28 09:06:44");
INSERT INTO audit_trail VALUES("11","1","1","Archived a student information","Juan Dalisay Dela Cruz was successfully moved to archive.","2017-06-28 09:07:06");
INSERT INTO audit_trail VALUES("12","1","1","Assigned a subject to a grade level","English 1 is successfully assigned to Grade 7","2017-06-29 01:36:03");
INSERT INTO audit_trail VALUES("13","1","1","Unassigned a subject to a grade level","English 1 is successfully unassigned to Grade 7","2017-06-29 01:41:37");
INSERT INTO audit_trail VALUES("14","1","1","Assigned a subject to a grade level","English 1 is successfully assigned to Grade 7","2017-06-29 01:41:41");
INSERT INTO audit_trail VALUES("15","1","1","Assign classes to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-07-03 02:18:25");
INSERT INTO audit_trail VALUES("16","1","1","Assign classes to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-07-03 02:18:52");
INSERT INTO audit_trail VALUES("17","1","1","Assign classes to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-07-03 02:18:53");
INSERT INTO audit_trail VALUES("18","1","1","Assign classes to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-07-03 02:19:43");
INSERT INTO audit_trail VALUES("19","1","1","Assign classes to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-07-03 02:19:55");
INSERT INTO audit_trail VALUES("20","1","1","Added grade level data","Grade 8 added.","2017-07-05 01:47:30");
INSERT INTO audit_trail VALUES("21","1","1","Added grade level data","Grade 9 added.","2017-07-05 01:47:36");
INSERT INTO audit_trail VALUES("22","1","1","Added grade level data","Grade 10 added.","2017-07-05 01:47:47");
INSERT INTO audit_trail VALUES("23","1","1","Added a section","8-Andreessen was successfully added.","2017-07-05 01:48:13");
INSERT INTO audit_trail VALUES("24","1","1","Added a section","9-Atanasoff was successfully added.","2017-07-05 01:50:40");
INSERT INTO audit_trail VALUES("25","1","1","Added a section","10-Stibitz was successfully added.","2017-07-05 01:50:51");
INSERT INTO audit_trail VALUES("26","1","1","Added a section","7-Wayne was successfully added.","2017-07-05 01:51:04");
INSERT INTO audit_trail VALUES("27","1","1","Added a section","8-Kent was successfully added.","2017-07-05 01:51:15");
INSERT INTO audit_trail VALUES("28","1","1","Added a section","9-Prince was successfully added.","2017-07-05 01:51:29");
INSERT INTO audit_trail VALUES("29","1","1","Added a section","10-Allen was successfully added.","2017-07-05 01:51:51");
INSERT INTO audit_trail VALUES("30","1","1","Added a student","Name: Peter Benjamin Parker <br>Student ID No: 13-008","2017-07-05 07:19:57");
INSERT INTO audit_trail VALUES("31","1","1","Backed up the database","Filename: holytrinitycrams_db20170710_224221.sql","2017-07-10 22:42:21");
INSERT INTO audit_trail VALUES("32","1","1","Updated account information","Name: Wells, Harrison James ","2017-07-11 17:25:47");
INSERT INTO audit_trail VALUES("33","1","1","Updated account information","Name: Wells, Harrison James ","2017-07-11 17:26:12");
INSERT INTO audit_trail VALUES("34","1","1","Activated a grading period.","Description: Second Grading Period","2017-07-16 09:41:14");
INSERT INTO audit_trail VALUES("35","1","1","Archived a section","Description: 7-Babbage","2017-07-16 14:59:48");
INSERT INTO audit_trail VALUES("36","1","1","Backed up the database","Filename: holytrinitycrams_db20170723_153158.sql","2017-07-23 15:31:58");
INSERT INTO audit_trail VALUES("37","1","1","Backed up the database","Filename: holytrinitycrams_db20170727_055137.sql","2017-07-27 05:51:37");
INSERT INTO audit_trail VALUES("38","1","1","Added new subject data","Integrated Science added.","2017-07-27 19:58:44");
INSERT INTO audit_trail VALUES("39","1","1","Assign classes to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: Integrated Science<br>Academic Year: 2017 - 2018<br>","2017-07-27 19:59:03");
INSERT INTO audit_trail VALUES("40","1","1","Added a new Teacher account","Name: Quill, Peter Ego ","2017-07-29 14:58:55");
INSERT INTO audit_trail VALUES("41","1","1","Archived a subject data","English 1 was successfully moved to archive.","2017-07-29 14:59:31");
INSERT INTO audit_trail VALUES("42","1","1","Added new subject data","Physical Education 1 added.","2017-07-29 14:59:56");



DROP TABLE IF EXISTS gradelevel;

CREATE TABLE `gradelevel` (
  `gradelevel_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_code` varchar(60) NOT NULL,
  `gradelevel_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gradelevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel VALUES("1","G7","Grade 7","0");
INSERT INTO gradelevel VALUES("2","G8","Grade 8","0");
INSERT INTO gradelevel VALUES("3","G9","Grade 9","0");
INSERT INTO gradelevel VALUES("4","G10","Grade 10","0");



DROP TABLE IF EXISTS gradelevel_subject;

CREATE TABLE `gradelevel_subject` (
  `level_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`level_subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel_subject VALUES("1","1","1","1");
INSERT INTO gradelevel_subject VALUES("2","1","1","0");



DROP TABLE IF EXISTS gradingperiod;

CREATE TABLE `gradingperiod` (
  `gradingperiod_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`gradingperiod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO gradingperiod VALUES("1","First Grading Period","0");
INSERT INTO gradingperiod VALUES("2","Second Grading Period","1");
INSERT INTO gradingperiod VALUES("3","Third Grading Period","0");
INSERT INTO gradingperiod VALUES("4","Fourth Grading Period","0");



DROP TABLE IF EXISTS outputs_actual;

CREATE TABLE `outputs_actual` (
  `output_id` int(11) NOT NULL AUTO_INCREMENT,
  `output_session` varchar(100) NOT NULL,
  `output_category_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `gradingperiod_id` int(11) NOT NULL,
  `total_score` decimal(11,2) NOT NULL,
  `raw_score` decimal(11,2) NOT NULL,
  `percentage` decimal(11,2) NOT NULL,
  `remarks` text NOT NULL,
  `date_graded` datetime NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`output_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO outputs_actual VALUES("23","WW1","1","2","1","1","1","2","30.00","21.00","0.00","Nouns","2017-07-27 19:42:12","0");
INSERT INTO outputs_actual VALUES("24","WW1","1","2","3","1","1","2","30.00","29.00","0.00","Nouns","2017-07-27 19:42:12","0");
INSERT INTO outputs_actual VALUES("25","WW2","3","2","1","1","1","2","24.00","23.00","0.00","Pronouns","2017-07-27 19:51:16","0");
INSERT INTO outputs_actual VALUES("26","WW2","3","2","3","1","1","2","24.00","21.00","0.00","Pronouns","2017-07-27 19:51:16","0");
INSERT INTO outputs_actual VALUES("27","WW10","3","2","1","1","1","2","55.00","45.00","0.00","Prepositions","2017-07-27 19:52:55","0");
INSERT INTO outputs_actual VALUES("28","WW10","3","2","3","1","1","2","55.00","59.00","0.00","Prepositions","2017-07-27 19:52:55","0");
INSERT INTO outputs_actual VALUES("29","PT1","0","2","1","1","1","2","50.00","32.00","0.00","Project Portfolio","2017-07-29 12:54:41","0");
INSERT INTO outputs_actual VALUES("30","PT1","0","2","3","1","1","2","50.00","14.00","0.00","Project Portfolio","2017-07-29 12:54:41","0");
INSERT INTO outputs_actual VALUES("31","QA","0","2","1","1","1","2","50.00","50.00","0.00","Periodical ","2017-07-29 13:19:24","0");
INSERT INTO outputs_actual VALUES("32","QA","0","2","3","1","1","2","50.00","45.00","0.00","Periodical ","2017-07-29 13:19:24","0");
INSERT INTO outputs_actual VALUES("33","WW3","0","2","1","1","1","2","5.00","2.00","0.00","Seatwork 3","2017-07-29 15:27:48","0");
INSERT INTO outputs_actual VALUES("34","WW3","0","2","3","1","1","2","5.00","4.00","0.00","Seatwork 3","2017-07-29 15:27:48","0");



DROP TABLE IF EXISTS outputs_category;

CREATE TABLE `outputs_category` (
  `outputs_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`outputs_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO outputs_category VALUES("1","Quiz","0");
INSERT INTO outputs_category VALUES("2","Seatwork","0");
INSERT INTO outputs_category VALUES("3","Homework","0");
INSERT INTO outputs_category VALUES("4","Project","0");
INSERT INTO outputs_category VALUES("5","Examination","0");



DROP TABLE IF EXISTS outputs_detail;

CREATE TABLE `outputs_detail` (
  `output_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `output_category_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `gradingperiod_id` int(11) NOT NULL,
  `total_score` varchar(244) NOT NULL,
  `description` text NOT NULL,
  `date_graded` datetime NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`output_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS schoolyear;

CREATE TABLE `schoolyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year1` int(11) NOT NULL,
  `year2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO schoolyear VALUES("2","2012","2013");
INSERT INTO schoolyear VALUES("3","2013","2014");
INSERT INTO schoolyear VALUES("4","2014","2015");
INSERT INTO schoolyear VALUES("5","2015","2016");
INSERT INTO schoolyear VALUES("6","2016","2017");
INSERT INTO schoolyear VALUES("7","2017","2018");
INSERT INTO schoolyear VALUES("8","2018","2019");
INSERT INTO schoolyear VALUES("9","2019","2020");
INSERT INTO schoolyear VALUES("10","2020","2021");
INSERT INTO schoolyear VALUES("11","2021","2022");
INSERT INTO schoolyear VALUES("12","2022","2023");
INSERT INTO schoolyear VALUES("13","2023","2024");
INSERT INTO schoolyear VALUES("14","2024","2025");
INSERT INTO schoolyear VALUES("15","2025","2026");
INSERT INTO schoolyear VALUES("16","2026","2027");
INSERT INTO schoolyear VALUES("17","2027","2028");
INSERT INTO schoolyear VALUES("18","2028","2029");
INSERT INTO schoolyear VALUES("19","2029","2030");
INSERT INTO schoolyear VALUES("20","2030","2031");
INSERT INTO schoolyear VALUES("21","2031","2032");
INSERT INTO schoolyear VALUES("22","2032","2033");
INSERT INTO schoolyear VALUES("23","2033","2034");
INSERT INTO schoolyear VALUES("24","2034","2035");
INSERT INTO schoolyear VALUES("25","2035","2036");
INSERT INTO schoolyear VALUES("26","2036","2037");
INSERT INTO schoolyear VALUES("27","2037","2038");
INSERT INTO schoolyear VALUES("28","2038","2039");
INSERT INTO schoolyear VALUES("29","2039","2040");
INSERT INTO schoolyear VALUES("30","2040","2041");
INSERT INTO schoolyear VALUES("31","2041","2042");
INSERT INTO schoolyear VALUES("32","2042","2043");
INSERT INTO schoolyear VALUES("33","2043","2044");
INSERT INTO schoolyear VALUES("34","2044","2045");
INSERT INTO schoolyear VALUES("35","2045","2046");
INSERT INTO schoolyear VALUES("36","2046","2047");
INSERT INTO schoolyear VALUES("37","2047","2048");
INSERT INTO schoolyear VALUES("38","2048","2049");
INSERT INTO schoolyear VALUES("39","2049","2050");



DROP TABLE IF EXISTS sections;

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_id` int(11) NOT NULL,
  `section_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO sections VALUES("1","1","7-Babbage","0");
INSERT INTO sections VALUES("2","2","8-Andreessen","0");
INSERT INTO sections VALUES("3","3","9-Atanasoff","0");
INSERT INTO sections VALUES("4","4","10-Stibitz","0");
INSERT INTO sections VALUES("5","1","7-Wayne","0");
INSERT INTO sections VALUES("6","2","8-Kent","0");
INSERT INTO sections VALUES("7","3","9-Prince","0");
INSERT INTO sections VALUES("8","4","10-Allen","0");



DROP TABLE IF EXISTS student_section;

CREATE TABLE `student_section` (
  `student_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `schoolyear_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`student_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO student_section VALUES("1","1","1","7","0");
INSERT INTO student_section VALUES("2","3","1","7","0");



DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_idno` varchar(255) NOT NULL,
  `student_barcode` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1","13-007","9812803618","Dela Cruz","Juan","Dalisay","1997-04-06","2147483647","0");
INSERT INTO students VALUES("2","13-008","7845210","Parker","Peter","Benjamin","1997-07-06","2147483647","0");
INSERT INTO students VALUES("3","13-008","7845210","Parker","Peter","Benjamin","1997-07-06","2147483647","0");



DROP TABLE IF EXISTS subjects;

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO subjects VALUES("1","1ENG1","English 1","0");
INSERT INTO subjects VALUES("2","2SCI","Integrated Science","0");
INSERT INTO subjects VALUES("3","10PE1","Physical Education 1","0");



DROP TABLE IF EXISTS teacher_classes;

CREATE TABLE `teacher_classes` (
  `teach_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`teach_class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO teacher_classes VALUES("5","2","1","7","1","0");
INSERT INTO teacher_classes VALUES("6","2","1","7","2","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user_profile VALUES("1","1","Allen, Bartholomew Henry","","","0000-00-00","","ballen@gmail.com","");
INSERT INTO user_profile VALUES("2","2","Wells, Harrison James",", , ","Male","1979-05-01","Integrated Science, Physics","harrison.wells@gmail.com","9274383838");
INSERT INTO user_profile VALUES("3","3","Quill, Peter Ego","Knowhere, Not Earth, Universe","Male","1979-04-28","Astronomy","pquill@gmail.com","9169586892");



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



