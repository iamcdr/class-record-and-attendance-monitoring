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
  `first_login` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO useraccount VALUES("1","ballen","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Allen","Bartholomew","Henry","00237","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("2","hwells","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Wells","Harrison","James","12-052","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("3","","$2y$10$jMmqu3FgVxSxnIsFbQpCgu.i642.kbthvPKHMO2dSCve5OigoN9ZO","Maglalang","Christine","dela Cruz","17-0002","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("4","","$2y$10$jMmqu3FgVxSxnIsFbQpCgulXJaW2W9IhdKCEkzVSj.4UeIiOP0h26","Maglalang","Tin","dela Cruz","12-0001","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1","1");
INSERT INTO useraccount VALUES("5","","$2y$10$jMmqu3FgVxSxnIsFbQpCguDqjG3Kavm1Jpk9iRcb433.Xsc.QHxjW","Opalia","Remilyn","Perla","12-0003","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("6","","$2y$10$jMmqu3FgVxSxnIsFbQpCguCIZx3VsYa6t2QKUMU702RNs4nk79aj6","Coronel","Wilburt","Cca","12-0001","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1","1");
INSERT INTO useraccount VALUES("7","","$2y$10$jMmqu3FgVxSxnIsFbQpCgucCXGxVfBlIEcU1QQPlNr9JeVtVzMIui","Amio","Jethro","Liwanag","12-0002","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("8","","$2y$10$jMmqu3FgVxSxnIsFbQpCgu/mYlRgIJrmWY4fvKRE6NU98kpzU6I3m","Carlos","Kate","Canlas","12-0004","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1","0");
INSERT INTO useraccount VALUES("9","","$2y$10$jMmqu3FgVxSxnIsFbQpCguNKa0nBKzFPSoq9EnvsoOYWllsDFQNqy","Bautista","Ian Christopher","Maunes","12-0005","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1","0");
INSERT INTO useraccount VALUES("10","","$2y$10$jMmqu3FgVxSxnIsFbQpCgurAIXzQoh2goJgW.jIOrYCQ43ry5uc42","Bergara","Christian","Mendez","12-0006","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("11","","$2y$10$jMmqu3FgVxSxnIsFbQpCgu.i642.kbthvPKHMO2dSCve5OigoN9ZO","Roswell","Aemie","dela Cruz","12-0007","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("12","","$2y$10$jMmqu3FgVxSxnIsFbQpCguZVjdAIyOUGBeBib0DsWSPWELjepnQxu","Tores","Duday","Amor","12-0008","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1","0");



DROP TABLE IF EXISTS attendance_log;

CREATE TABLE `attendance_log` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `date_attended` date NOT NULL,
  `time_in` time NOT NULL,
  `sent` int(11) NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO attendance_log VALUES("7","1","2017-08-13","08:36:00","1");
INSERT INTO attendance_log VALUES("8","1","2017-08-13","08:36:00","1");
INSERT INTO attendance_log VALUES("9","1","2017-08-13","08:36:01","1");
INSERT INTO attendance_log VALUES("10","1","2017-08-13","08:38:16","1");
INSERT INTO attendance_log VALUES("11","1","2017-08-13","08:38:16","1");
INSERT INTO attendance_log VALUES("12","1","2017-08-13","13:09:38","1");
INSERT INTO attendance_log VALUES("13","1","2017-08-13","13:09:40","1");
INSERT INTO attendance_log VALUES("14","1","2017-08-13","13:24:36","1");
INSERT INTO attendance_log VALUES("15","1","2017-08-13","13:24:37","1");
INSERT INTO attendance_log VALUES("16","1","2017-08-16","20:05:52","1");
INSERT INTO attendance_log VALUES("17","1","2017-08-16","20:05:56","1");
INSERT INTO attendance_log VALUES("18","1","2017-08-20","14:24:20","1");
INSERT INTO attendance_log VALUES("19","1","2017-08-20","14:27:34","1");
INSERT INTO attendance_log VALUES("20","1","2017-08-20","14:27:36","1");
INSERT INTO attendance_log VALUES("21","1","2017-08-20","16:35:48","1");
INSERT INTO attendance_log VALUES("22","1","2017-08-20","16:37:59","1");
INSERT INTO attendance_log VALUES("23","1","2017-08-20","16:38:00","1");
INSERT INTO attendance_log VALUES("24","1","2017-08-20","16:41:57","1");
INSERT INTO attendance_log VALUES("25","1","2017-08-20","16:41:57","1");
INSERT INTO attendance_log VALUES("26","1","2017-09-02","14:25:01","1");
INSERT INTO attendance_log VALUES("27","1","2017-09-02","14:25:05","1");
INSERT INTO attendance_log VALUES("28","1","2017-09-02","14:26:41","1");
INSERT INTO attendance_log VALUES("29","1","2017-09-02","14:26:43","1");
INSERT INTO attendance_log VALUES("30","1","2017-09-21","21:27:27","1");
INSERT INTO attendance_log VALUES("31","1","2017-09-21","21:28:58","1");
INSERT INTO attendance_log VALUES("32","1","2017-09-21","21:30:45","1");
INSERT INTO attendance_log VALUES("33","1","2017-09-21","21:31:39","1");
INSERT INTO attendance_log VALUES("34","1","2017-09-21","21:35:20","1");
INSERT INTO attendance_log VALUES("35","1","2017-09-21","21:58:54","1");
INSERT INTO attendance_log VALUES("36","1","2017-09-23","10:58:00","1");
INSERT INTO attendance_log VALUES("37","1","2017-09-23","12:39:20","1");
INSERT INTO attendance_log VALUES("38","1","2017-09-23","12:40:49","1");
INSERT INTO attendance_log VALUES("39","1","2017-09-23","12:46:06","1");
INSERT INTO attendance_log VALUES("40","1","2017-09-23","13:23:21","1");
INSERT INTO attendance_log VALUES("41","1","2017-09-24","11:18:49","1");
INSERT INTO attendance_log VALUES("42","1","2017-09-24","20:17:09","1");
INSERT INTO attendance_log VALUES("43","1","2017-09-28","21:19:26","1");
INSERT INTO attendance_log VALUES("44","13","2017-09-30","15:08:40","1");
INSERT INTO attendance_log VALUES("45","18","2017-09-30","15:10:17","1");
INSERT INTO attendance_log VALUES("46","23","2017-09-30","15:12:06","1");
INSERT INTO attendance_log VALUES("47","28","2017-09-30","15:12:19","1");
INSERT INTO attendance_log VALUES("48","34","2017-09-30","15:12:34","1");
INSERT INTO attendance_log VALUES("49","19","2017-10-01","14:52:44","1");



DROP TABLE IF EXISTS audit_trail;

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `audit_type` varchar(255) NOT NULL,
  `audit_remarks` text NOT NULL,
  `audit_datetime` datetime NOT NULL,
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=384 DEFAULT CHARSET=latin1;

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
INSERT INTO audit_trail VALUES("37","1","1","Added a new Teacher account","Name: Maglalang, Christine dela Cruz ","2017-07-29 16:03:29");
INSERT INTO audit_trail VALUES("38","1","1","Assign classes to teacher","Teacher: Maglalang, Christine<br>Section: 9-Prince<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-07-29 16:06:10");
INSERT INTO audit_trail VALUES("39","1","1","Added new subject data","Physical Education 1 added.","2017-07-29 16:16:16");
INSERT INTO audit_trail VALUES("40","1","1","Archived an account","Christine Maglalang account was successfully moved to archive.","2017-08-11 19:20:22");
INSERT INTO audit_trail VALUES("41","1","1","Added a new Teacher account","Name: Maglalang, Tin dela Cruz ","2017-08-11 19:24:03");
INSERT INTO audit_trail VALUES("42","1","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: 8-Kent<br>Subject: Physical Education 1<br>Academic Year: 2017 - 2018<br>","2017-08-11 19:24:42");
INSERT INTO audit_trail VALUES("43","1","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-06 08:37:03");
INSERT INTO audit_trail VALUES("44","1","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-06 08:37:25");
INSERT INTO audit_trail VALUES("45","1","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: 9-Prince<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-06 08:38:33");
INSERT INTO audit_trail VALUES("46","1","1","Added new subject data","Literature added.","2017-09-06 08:42:17");
INSERT INTO audit_trail VALUES("47","1","1","Updated subject data","Updated to Literature","2017-09-06 08:42:25");
INSERT INTO audit_trail VALUES("48","1","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: 10-Allen<br>Subject: Literature<br>Academic Year: 2017 - 2018<br>","2017-09-06 08:42:57");
INSERT INTO audit_trail VALUES("49","1","1","Backed up the database","Filename: holytrinitycrams_db20170908_132642.sql","2017-09-08 13:26:42");
INSERT INTO audit_trail VALUES("50","1","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-08 13:29:50");
INSERT INTO audit_trail VALUES("51","1","1","Restored an account","Christine Maglalang account was successfully restored.","2017-09-08 13:31:13");
INSERT INTO audit_trail VALUES("52","1","1","Updated account information","Name: Maglalang, Christine dela Cruz ","2017-09-08 13:31:42");
INSERT INTO audit_trail VALUES("53","1","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: 10-Allen<br>Subject: Literature<br>Academic Year: 2018 - 2019<br>","2017-09-09 15:44:11");
INSERT INTO audit_trail VALUES("54","1","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: 7-Babbage<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-13 10:45:11");
INSERT INTO audit_trail VALUES("55","1","1","Added a new Teacher account","Name: Opalia, Remilyn Perla ","2017-09-16 13:35:36");
INSERT INTO audit_trail VALUES("56","1","1","Assign advisory class to teacher","Teacher: Wells, Harrison<br>Section: 7-Babbage<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-19 19:37:05");
INSERT INTO audit_trail VALUES("57","1","1","Activated a grading period.","Description: First Grading Period","2017-09-20 17:05:30");
INSERT INTO audit_trail VALUES("58","1","1","Added a student","Name: Jane Dee Maglalang <br>Student ID No: 14-0001","2017-09-20 18:08:12");
INSERT INTO audit_trail VALUES("59","1","1","Added a student","Name: Alpha Guzman Flores <br>Student ID No: 12-666","2017-09-20 18:11:51");
INSERT INTO audit_trail VALUES("60","1","1","Activated a grading period.","Description: Second Grading Period","2017-09-20 18:16:04");
INSERT INTO audit_trail VALUES("61","1","1","Backed up the database","Filename: holytrinitycrams_db20170920_182133.sql","2017-09-20 18:21:33");
INSERT INTO audit_trail VALUES("62","4","2","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-23 19:02:04");
INSERT INTO audit_trail VALUES("63","4","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-23 19:03:57");
INSERT INTO audit_trail VALUES("64","4","2","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-24 09:54:45");
INSERT INTO audit_trail VALUES("65","4","1","Added a student","Name: Diana Hygen Feast <br>Student ID No: 12-003","2017-09-24 09:57:39");
INSERT INTO audit_trail VALUES("66","4","1","Archived a student information","Juan Dalisay Dela Cruz was successfully moved to archive.","2017-09-24 09:58:31");
INSERT INTO audit_trail VALUES("67","4","1","Activated a grading period.","Description: First Grading Period","2017-09-24 09:59:28");
INSERT INTO audit_trail VALUES("68","4","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-24 09:59:39");
INSERT INTO audit_trail VALUES("69","4","2","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-24 10:00:32");
INSERT INTO audit_trail VALUES("70","4","1","Assign advisory class to teacher","Teacher: Opalia, Remilyn<br>Section: 7-Babbage<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-24 10:01:21");
INSERT INTO audit_trail VALUES("71","4","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-24 10:01:33");
INSERT INTO audit_trail VALUES("72","4","2","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-24 10:24:43");
INSERT INTO audit_trail VALUES("73","4","1","Added a new Administrator account","Name: Coronel, Wilburt Cca ","2017-09-24 11:39:38");
INSERT INTO audit_trail VALUES("74","4","1","Updated account information","Name: Coronel, Wilburt Cca ","2017-09-24 11:43:05");
INSERT INTO audit_trail VALUES("75","4","1","Added a new Teacher account","Name: Amio, Jethro Liwanag ","2017-09-24 12:52:31");
INSERT INTO audit_trail VALUES("76","4","1","Updated account information","Name: Opalia, Remilyn Perla ","2017-09-24 12:52:56");
INSERT INTO audit_trail VALUES("77","4","1","Added a new Teacher account","Name: Carlos, Kate Canlas ","2017-09-24 12:54:20");
INSERT INTO audit_trail VALUES("78","4","1","Added a new Teacher account","Name: Bautista, Ian Christopher Maunes ","2017-09-24 12:55:57");
INSERT INTO audit_trail VALUES("79","4","1","Updated account information","Name: Opalia, Remilyn Perla ","2017-09-24 12:56:19");
INSERT INTO audit_trail VALUES("80","4","1","Updated account information","Name: Maglalang, Christine dela Cruz ","2017-09-24 12:56:43");
INSERT INTO audit_trail VALUES("81","4","1","Updated account information","Name: Maglalang, Tin dela Cruz ","2017-09-24 12:56:55");
INSERT INTO audit_trail VALUES("82","7","2","Updated account information","Name: Amio, Jethro Liwanag ","2017-09-24 13:09:46");
INSERT INTO audit_trail VALUES("83","7","1","Updated account information","Name: Maglalang, Christine dela Cruz ","2017-09-24 13:10:38");
INSERT INTO audit_trail VALUES("84","7","1","Updated account information","Name: Amio, Jethro Liwanag ","2017-09-24 13:10:55");
INSERT INTO audit_trail VALUES("85","3","1","Archived a student information","Peter Benjamin Parker was successfully moved to archive.","2017-09-24 13:12:58");
INSERT INTO audit_trail VALUES("86","3","1","Archived a student information","Jane Dee Maglalang was successfully moved to archive.","2017-09-24 13:13:12");
INSERT INTO audit_trail VALUES("87","3","1","Archived a student information","Alpha Guzman Flores was successfully moved to archive.","2017-09-24 13:13:51");
INSERT INTO audit_trail VALUES("88","3","1","Archived a student information","Diana Hygen Feast was successfully moved to archive.","2017-09-24 13:14:41");
INSERT INTO audit_trail VALUES("89","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: 7-Wayne<br>Subject: Physical Education 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 13:16:03");
INSERT INTO audit_trail VALUES("90","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: 8-Andreessen<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 13:16:28");
INSERT INTO audit_trail VALUES("91","3","1","Added new subject data","Mathematics added.","2017-09-24 13:17:19");
INSERT INTO audit_trail VALUES("92","3","1","Added new subject data","Araling Panlipunan added.","2017-09-24 13:17:46");
INSERT INTO audit_trail VALUES("93","3","1","Added new subject data","Filipino added.","2017-09-24 13:18:09");
INSERT INTO audit_trail VALUES("94","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: 8-Kent<br>Subject: Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-24 13:18:30");
INSERT INTO audit_trail VALUES("95","3","1","Archived an account","Tin Maglalang account was successfully moved to archive.","2017-09-24 13:19:35");
INSERT INTO audit_trail VALUES("96","3","1","Restored an account","Tin Maglalang account was successfully restored.","2017-09-24 13:22:34");
INSERT INTO audit_trail VALUES("97","3","1","Archived a section","Description: 7-Babbage","2017-09-24 14:34:38");
INSERT INTO audit_trail VALUES("98","3","1","Archived a section","Description: 7-Wayne","2017-09-24 14:34:43");
INSERT INTO audit_trail VALUES("99","3","1","Archived a section","Description: 8-Andreessen","2017-09-24 14:34:59");
INSERT INTO audit_trail VALUES("100","3","1","Archived a section","Description: 8-Kent","2017-09-24 14:35:16");
INSERT INTO audit_trail VALUES("101","3","1","Archived a section","Description: 9-Atanasoff","2017-09-24 14:35:24");
INSERT INTO audit_trail VALUES("102","3","1","Archived a section","Description: 9-Prince","2017-09-24 14:35:29");
INSERT INTO audit_trail VALUES("103","3","1","Archived a section","Description: 10-Stibitz","2017-09-24 14:35:35");
INSERT INTO audit_trail VALUES("104","3","1","Archived a section","Description: 10-Allen","2017-09-24 14:35:39");
INSERT INTO audit_trail VALUES("105","3","1","Added a section","A was successfully added.","2017-09-24 14:35:53");
INSERT INTO audit_trail VALUES("106","3","1","Added a section","B was successfully added.","2017-09-24 14:36:13");
INSERT INTO audit_trail VALUES("107","3","1","Added a section","C was successfully added.","2017-09-24 14:36:19");
INSERT INTO audit_trail VALUES("108","3","1","Added a section","D was successfully added.","2017-09-24 14:36:26");
INSERT INTO audit_trail VALUES("109","3","1","Added a section","E was successfully added.","2017-09-24 14:36:34");
INSERT INTO audit_trail VALUES("110","3","1","Archived a section","Description: C","2017-09-24 14:37:44");
INSERT INTO audit_trail VALUES("111","3","1","Archived a section","Description: D","2017-09-24 14:37:50");
INSERT INTO audit_trail VALUES("112","3","1","Archived a section","Description: E","2017-09-24 14:37:55");
INSERT INTO audit_trail VALUES("113","3","1","Archived a section","Description: A","2017-09-24 14:38:28");
INSERT INTO audit_trail VALUES("114","3","1","Archived a section","Description: B","2017-09-24 14:38:34");
INSERT INTO audit_trail VALUES("115","3","1","Added a section","Aster was successfully added.","2017-09-24 14:39:24");
INSERT INTO audit_trail VALUES("116","3","1","Added a section","Bougainvillea was successfully added.","2017-09-24 14:40:10");
INSERT INTO audit_trail VALUES("117","3","1","Added a section","Camia was successfully added.","2017-09-24 14:40:26");
INSERT INTO audit_trail VALUES("118","3","1","Added a section","Daisy was successfully added.","2017-09-24 14:40:38");
INSERT INTO audit_trail VALUES("119","3","1","Added a section","Everlasting was successfully added.","2017-09-24 14:41:49");
INSERT INTO audit_trail VALUES("120","3","1","Added a section","A was successfully added.","2017-09-24 14:42:39");
INSERT INTO audit_trail VALUES("121","3","1","Archived a section","Description: A","2017-09-24 14:49:31");
INSERT INTO audit_trail VALUES("122","3","1","Assign advisory class to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-24 14:49:50");
INSERT INTO audit_trail VALUES("123","3","1","Assign advisory class to teacher","Teacher: Amio, Jethro<br>Section: Bougainvillea<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-24 14:50:37");
INSERT INTO audit_trail VALUES("124","3","1","Added grade level data","Grade 1 added.","2017-09-24 14:57:10");
INSERT INTO audit_trail VALUES("125","3","1","Added grade level data","Grade 2 added.","2017-09-24 14:57:37");
INSERT INTO audit_trail VALUES("126","3","1","Added grade level data","Grade 3 added.","2017-09-24 14:57:51");
INSERT INTO audit_trail VALUES("127","3","1","Added grade level data","Grade 4 added.","2017-09-24 14:58:50");
INSERT INTO audit_trail VALUES("128","3","1","Added grade level data","Grade 5 added.","2017-09-24 14:59:11");
INSERT INTO audit_trail VALUES("129","3","1","Added grade level data","Grade 6 added.","2017-09-24 14:59:29");
INSERT INTO audit_trail VALUES("130","3","1","Assign advisory class to teacher","Teacher: Opalia, Remilyn<br>Section: Camia<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-24 15:06:35");
INSERT INTO audit_trail VALUES("131","3","1","Assign advisory class to teacher","Teacher: Carlos, Kate<br>Section: Daisy<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-24 15:23:34");
INSERT INTO audit_trail VALUES("132","3","1","Added a section","A was successfully added.","2017-09-24 15:24:06");
INSERT INTO audit_trail VALUES("133","3","1","Archived a section","Description: A","2017-09-24 15:24:48");
INSERT INTO audit_trail VALUES("134","3","1","Assign advisory class to teacher","Teacher: Bautista, Ian Christopher<br>Section: Everlasting<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-24 15:27:20");
INSERT INTO audit_trail VALUES("135","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:32:28");
INSERT INTO audit_trail VALUES("136","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Bougainvillea<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:32:44");
INSERT INTO audit_trail VALUES("137","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Camia<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:32:48");
INSERT INTO audit_trail VALUES("138","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Daisy<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:32:52");
INSERT INTO audit_trail VALUES("139","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Everlasting<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:33:02");
INSERT INTO audit_trail VALUES("140","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Aster<br>Subject: Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:34:26");
INSERT INTO audit_trail VALUES("141","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Bougainvillea<br>Subject: Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:34:39");
INSERT INTO audit_trail VALUES("142","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Camia<br>Subject: Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:34:46");
INSERT INTO audit_trail VALUES("143","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Daisy<br>Subject: Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:34:58");
INSERT INTO audit_trail VALUES("144","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Everlasting<br>Subject: Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:35:02");
INSERT INTO audit_trail VALUES("145","3","1","Added new subject data","Science added.","2017-09-24 15:38:54");
INSERT INTO audit_trail VALUES("146","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-24 15:39:09");
INSERT INTO audit_trail VALUES("147","3","1","Assigned a subject to a grade level","English 1 is successfully assigned to Grade 1","2017-09-24 15:42:09");
INSERT INTO audit_trail VALUES("148","3","1","Unassigned a subject to a grade level","English 1 is successfully unassigned to Grade 1","2017-09-24 15:42:40");
INSERT INTO audit_trail VALUES("149","3","1","Assigned a subject to a grade level","English 1 is successfully assigned to Grade 1","2017-09-24 15:42:47");
INSERT INTO audit_trail VALUES("150","3","1","Unassigned a subject to a grade level","English 1 is successfully unassigned to Grade 1","2017-09-24 15:45:21");
INSERT INTO audit_trail VALUES("151","3","1","Assigned a subject to a grade level","Filipino is successfully assigned to Grade 1","2017-09-24 15:45:30");
INSERT INTO audit_trail VALUES("152","3","1","Unassigned a subject to a grade level","Filipino is successfully unassigned to Grade 1","2017-09-24 15:45:35");
INSERT INTO audit_trail VALUES("153","3","1","Added a student","Name: John Lacson Dela Cruz <br>Student ID No: 14-0001","2017-09-25 12:24:06");
INSERT INTO audit_trail VALUES("154","3","1","Added a student","Name: Jimmy Veranda Charlton <br>Student ID No: 14-0002","2017-09-25 12:25:14");
INSERT INTO audit_trail VALUES("155","3","1","Archived a student information","John Lacson Dela Cruz was successfully moved to archive.","2017-09-25 12:30:30");
INSERT INTO audit_trail VALUES("156","3","1","Added a student","Name: John Gamboa Flores <br>Student ID No: 14-0001","2017-09-25 12:32:09");
INSERT INTO audit_trail VALUES("157","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: Literature<br>Academic Year: 2016 - 2017<br>","2017-09-25 12:34:12");
INSERT INTO audit_trail VALUES("158","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-26 15:28:58");
INSERT INTO audit_trail VALUES("159","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2016 - 2017<br>","2017-09-26 15:30:32");
INSERT INTO audit_trail VALUES("160","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-26 15:30:38");
INSERT INTO audit_trail VALUES("161","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2016 - 2017<br>","2017-09-26 15:31:40");
INSERT INTO audit_trail VALUES("162","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-26 15:31:59");
INSERT INTO audit_trail VALUES("163","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-26 15:32:02");
INSERT INTO audit_trail VALUES("164","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: English 1<br>Academic Year: 2016 - 2017<br>","2017-09-26 15:42:06");
INSERT INTO audit_trail VALUES("165","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: Literature<br>Academic Year: 2016 - 2017<br>","2017-09-26 15:42:16");
INSERT INTO audit_trail VALUES("166","3","1","Archived a student information","John Gamboa Flores was successfully moved to archive.","2017-09-26 15:43:32");
INSERT INTO audit_trail VALUES("167","3","1","Restored a student data.","","2017-09-26 15:44:20");
INSERT INTO audit_trail VALUES("168","3","1","Update student information","Name: John Gamboa Flores <br>Student ID No: 14-0001","2017-09-26 15:44:51");
INSERT INTO audit_trail VALUES("169","3","1","Archived a student information","John Gamboa Flores was successfully moved to archive.","2017-09-26 15:45:16");
INSERT INTO audit_trail VALUES("170","3","1","Archived a student information","Jimmy Veranda Charlton was successfully moved to archive.","2017-09-26 15:45:29");
INSERT INTO audit_trail VALUES("171","3","1","Restored a student data.","","2017-09-28 19:13:19");
INSERT INTO audit_trail VALUES("172","3","1","Restored a student data.","","2017-09-28 19:13:29");
INSERT INTO audit_trail VALUES("173","3","1","Updated account information","Name:  ","2017-09-28 19:18:20");
INSERT INTO audit_trail VALUES("174","3","1","Archived an account","Wilburt Coronel account was successfully moved to archive.","2017-09-28 19:19:46");
INSERT INTO audit_trail VALUES("175","3","1","Archived a student information","John Gamboa Flores was successfully moved to archive.","2017-09-28 19:20:43");
INSERT INTO audit_trail VALUES("176","3","1","Archived a student information","Jimmy Veranda Charlton was successfully moved to archive.","2017-09-28 19:20:55");
INSERT INTO audit_trail VALUES("177","3","1","Added a student","Name: Harwin Dizon Camaya <br>Student ID No: 17-001","2017-09-28 19:22:28");
INSERT INTO audit_trail VALUES("178","3","1","Update student information","Name: Harwin Dizon Camaya <br>Student ID No: 17-001","2017-09-28 19:24:11");
INSERT INTO audit_trail VALUES("179","3","1","Archived a student information","Harwin Dizon Camaya was successfully moved to archive.","2017-09-28 19:25:54");
INSERT INTO audit_trail VALUES("180","3","1","Added a student","Name: Lorenz Hidalgo Camaya <br>Student ID No: 17-001","2017-09-28 19:28:51");
INSERT INTO audit_trail VALUES("181","3","1","Added a student","Name: Amiel Coronel Fernandez <br>Student ID No: 17-002","2017-09-28 19:30:35");
INSERT INTO audit_trail VALUES("182","3","1","Added a student","Name: Hazel Gamboa Nicdao <br>Student ID No: 17-003","2017-09-28 19:31:56");
INSERT INTO audit_trail VALUES("183","3","1","Added a student","Name: Nadine De Dios Jacson <br>Student ID No: 17-004","2017-09-28 19:34:01");
INSERT INTO audit_trail VALUES("184","3","1","Update student information","Name: Nadine De Dios Jacson <br>Student ID No: 17-004","2017-09-28 19:34:44");
INSERT INTO audit_trail VALUES("185","3","1","Update student information","Name: Amiel Coronel Fernandez <br>Student ID No: 17-002","2017-09-28 19:35:22");
INSERT INTO audit_trail VALUES("186","3","1","Added a student","Name: Finette Ayson Madrid <br>Student ID No: 17-005","2017-09-28 19:36:50");
INSERT INTO audit_trail VALUES("187","3","1","Update student information","Name: Finette Ayson Madrid <br>Student ID No: 17-005","2017-09-28 19:37:07");
INSERT INTO audit_trail VALUES("188","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: Literature<br>Academic Year: 2017 - 2018<br>","2017-09-28 19:39:03");
INSERT INTO audit_trail VALUES("189","3","1","Added a student","Name: Elton John David Bergara <br>Student ID No: 17-006","2017-09-28 20:55:56");
INSERT INTO audit_trail VALUES("190","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Aster<br>Subject: Science<br>Academic Year: 2017 - 2018<br>","2017-09-28 21:05:43");
INSERT INTO audit_trail VALUES("191","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Bougainvillea<br>Subject: Science<br>Academic Year: 2017 - 2018<br>","2017-09-28 21:06:02");
INSERT INTO audit_trail VALUES("192","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Camia<br>Subject: Science<br>Academic Year: 2017 - 2018<br>","2017-09-28 21:06:14");
INSERT INTO audit_trail VALUES("193","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Daisy<br>Subject: Science<br>Academic Year: 2017 - 2018<br>","2017-09-28 21:06:29");
INSERT INTO audit_trail VALUES("194","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Everlasting<br>Subject: Science<br>Academic Year: 2017 - 2018<br>","2017-09-28 21:06:41");
INSERT INTO audit_trail VALUES("195","3","1","Added a student","Name: Jenelyn Canoy Tamayo <br>Student ID No: 17-007","2017-09-28 21:09:04");
INSERT INTO audit_trail VALUES("196","3","1","Added a student","Name: Charles Almazan Gatchalian <br>Student ID No: 17-008","2017-09-28 21:13:32");
INSERT INTO audit_trail VALUES("197","3","1","Added a student","Name: Carlo Isip Salunga <br>Student ID No: 17-009","2017-09-28 21:18:31");
INSERT INTO audit_trail VALUES("198","3","1","Added a student","Name: Kisses Borja Quizon <br>Student ID No: 17-010","2017-09-28 21:35:30");
INSERT INTO audit_trail VALUES("199","3","1","Added a student","Name: Bruno Bernardo Emperador <br>Student ID No: 17-011","2017-09-28 21:46:48");
INSERT INTO audit_trail VALUES("200","3","1","Added a student","Name: Efren Sumaya Guerero <br>Student ID No: 17-012","2017-09-28 22:03:47");
INSERT INTO audit_trail VALUES("201","3","1","Added a student","Name: Darwin Aquino Alonzo <br>Student ID No: 17-013","2017-09-28 22:06:04");
INSERT INTO audit_trail VALUES("202","3","1","Added a student","Name: Adrian Bolos Aquino <br>Student ID No: 17-014","2017-09-28 22:07:40");
INSERT INTO audit_trail VALUES("203","3","1","Added a student","Name: James Saulong Valencia <br>Student ID No: 17-015","2017-09-28 22:09:32");
INSERT INTO audit_trail VALUES("204","3","1","Added a student","Name: James Liwanag Sagun <br>Student ID No: 17-016","2017-09-28 22:11:42");
INSERT INTO audit_trail VALUES("205","3","1","Added a student","Name: Nicolas Liwanag Lacson <br>Student ID No: 17-017","2017-09-28 22:13:36");
INSERT INTO audit_trail VALUES("206","3","1","Update student information","Name: James Liwanag Sagun <br>Student ID No: 17-016","2017-09-28 22:14:16");
INSERT INTO audit_trail VALUES("207","3","1","Added a student","Name: Charles Reyes Dimatulac <br>Student ID No: 17-018","2017-09-28 22:18:07");
INSERT INTO audit_trail VALUES("208","3","1","Added a student","Name: Paul Hipolito Lee <br>Student ID No: 17-019","2017-09-28 22:20:27");
INSERT INTO audit_trail VALUES("209","3","1","Added a student","Name: Roger Henson Ramos <br>Student ID No: 17-020","2017-09-28 22:22:10");
INSERT INTO audit_trail VALUES("210","3","1","Added a student","Name: Camille Laos Lobo <br>Student ID No: 17-021","2017-09-28 22:25:31");
INSERT INTO audit_trail VALUES("211","3","1","Added a student","Name: Lyda Padilla Cruz <br>Student ID No: 17-022","2017-09-28 22:29:37");
INSERT INTO audit_trail VALUES("212","3","1","Added a student","Name: Marie Torres Aguillar <br>Student ID No: 17-023","2017-09-28 22:31:02");
INSERT INTO audit_trail VALUES("213","3","1","Added a student","Name: Mariel Basco Torres <br>Student ID No: 17-024","2017-09-28 22:32:10");
INSERT INTO audit_trail VALUES("214","3","1","Added a student","Name: Ramon Dolores Gutierez <br>Student ID No: 17-025","2017-09-28 22:33:29");
INSERT INTO audit_trail VALUES("215","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Bougainvillea<br>Subject: Literature<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:33:44");
INSERT INTO audit_trail VALUES("216","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Camia<br>Subject: Literature<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:33:52");
INSERT INTO audit_trail VALUES("217","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Daisy<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:33:59");
INSERT INTO audit_trail VALUES("218","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Everlasting<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:34:07");
INSERT INTO audit_trail VALUES("219","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Aster<br>Subject: Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:35:22");
INSERT INTO audit_trail VALUES("220","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Bougainvillea<br>Subject: Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:35:30");
INSERT INTO audit_trail VALUES("221","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Camia<br>Subject: Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:35:39");
INSERT INTO audit_trail VALUES("222","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Daisy<br>Subject: English 1<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:35:49");
INSERT INTO audit_trail VALUES("223","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Daisy<br>Subject: Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:36:10");
INSERT INTO audit_trail VALUES("224","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Everlasting<br>Subject: Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-28 23:36:19");
INSERT INTO audit_trail VALUES("225","1","1","Backed up the database","Filename: holytrinitycrams_db20170929_075225.sql","2017-09-29 07:52:25");
INSERT INTO audit_trail VALUES("226","1","1","Backed up the database","Filename: holytrinitycrams_db20170929_075259.sql","2017-09-29 07:52:59");
INSERT INTO audit_trail VALUES("227","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Daisy<br>Subject: Literature<br>Academic Year: 2017 - 2018<br>","2017-09-29 08:36:37");
INSERT INTO audit_trail VALUES("228","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Everlasting<br>Subject: Literature<br>Academic Year: 2017 - 2018<br>","2017-09-29 08:36:54");
INSERT INTO audit_trail VALUES("229","1","1","Backed up the database","Filename: holytrinitycrams_db20170929_084216.sql","2017-09-29 08:42:16");
INSERT INTO audit_trail VALUES("230","1","1","Backed up the database","Filename: holytrinitycrams_db20170929_084421.sql","2017-09-29 08:44:21");
INSERT INTO audit_trail VALUES("231","1","1","Backed up the database","Filename: holytrinitycrams_db20170929_084500.sql","2017-09-29 08:45:00");
INSERT INTO audit_trail VALUES("232","7","2","Updated account information","Name:  ","2017-09-29 08:58:26");
INSERT INTO audit_trail VALUES("233","3","1","Archived a subject data","Physical Education 1 was successfully moved to archive.","2017-09-29 11:06:41");
INSERT INTO audit_trail VALUES("234","3","1","Archived a subject data","English 1 was successfully moved to archive.","2017-09-29 11:06:53");
INSERT INTO audit_trail VALUES("235","3","1","Archived a subject data","Literature was successfully moved to archive.","2017-09-29 11:07:14");
INSERT INTO audit_trail VALUES("236","3","1","Archived a subject data","Mathematics was successfully moved to archive.","2017-09-29 11:07:29");
INSERT INTO audit_trail VALUES("237","3","1","Archived a subject data","Filipino was successfully moved to archive.","2017-09-29 11:07:47");
INSERT INTO audit_trail VALUES("238","3","1","Archived a subject data","Araling Panlipunan was successfully moved to archive.","2017-09-29 11:08:02");
INSERT INTO audit_trail VALUES("239","3","1","Added new subject data","English added.","2017-09-29 11:08:45");
INSERT INTO audit_trail VALUES("240","3","1","Added new subject data","Mathematics added.","2017-09-29 11:09:38");
INSERT INTO audit_trail VALUES("241","3","1","Added new subject data","Filipino added.","2017-09-29 11:10:01");
INSERT INTO audit_trail VALUES("242","3","1","Added new subject data","GMRC added.","2017-09-29 11:10:42");
INSERT INTO audit_trail VALUES("243","3","1","Added new subject data","Araling Panlipunan added.","2017-09-29 11:12:30");
INSERT INTO audit_trail VALUES("244","3","1","Added new subject data","Physical Education added.","2017-09-29 11:13:08");
INSERT INTO audit_trail VALUES("245","3","1","Added new subject data","Technology and Livelihood Education added.","2017-09-29 11:19:01");
INSERT INTO audit_trail VALUES("246","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Aster<br>Subject: Physical Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 11:20:52");
INSERT INTO audit_trail VALUES("247","3","1","Archived a subject data","Araling Panlipunan was successfully moved to archive.","2017-09-29 11:24:05");
INSERT INTO audit_trail VALUES("248","3","1","Archived a subject data","English was successfully moved to archive.","2017-09-29 11:24:23");
INSERT INTO audit_trail VALUES("249","3","1","Archived a subject data","Filipino was successfully moved to archive.","2017-09-29 11:24:37");
INSERT INTO audit_trail VALUES("250","3","1","Archived a subject data","GMRC was successfully moved to archive.","2017-09-29 11:24:47");
INSERT INTO audit_trail VALUES("251","3","1","Archived a subject data","Mathematics was successfully moved to archive.","2017-09-29 11:25:01");
INSERT INTO audit_trail VALUES("252","3","1","Archived a subject data","Physical Education was successfully moved to archive.","2017-09-29 11:25:09");
INSERT INTO audit_trail VALUES("253","3","1","Archived a subject data","Science was successfully moved to archive.","2017-09-29 11:25:18");
INSERT INTO audit_trail VALUES("254","3","1","Archived a subject data","Technology and Livelihood Education was successfully moved to archive.","2017-09-29 11:25:27");
INSERT INTO audit_trail VALUES("255","3","1","Added new subject data","1English added.","2017-09-29 11:26:08");
INSERT INTO audit_trail VALUES("256","3","1","Archived a subject data","1English was successfully moved to archive.","2017-09-29 11:26:20");
INSERT INTO audit_trail VALUES("257","3","1","Added new subject data","1English added.","2017-09-29 11:26:53");
INSERT INTO audit_trail VALUES("258","3","1","Added new subject data","1Filipino added.","2017-09-29 11:27:32");
INSERT INTO audit_trail VALUES("259","3","1","Added new subject data","1Mathematics added.","2017-09-29 11:28:34");
INSERT INTO audit_trail VALUES("260","3","1","Added new subject data","1Science added.","2017-09-29 11:29:59");
INSERT INTO audit_trail VALUES("261","3","1","Added new subject data","1HEKASI added.","2017-09-29 11:32:29");
INSERT INTO audit_trail VALUES("262","3","1","Added new subject data","1GMRC added.","2017-09-29 11:40:31");
INSERT INTO audit_trail VALUES("263","3","1","Added new subject data","1Physical Education added.","2017-09-29 11:41:15");
INSERT INTO audit_trail VALUES("264","3","1","Added new subject data","5Filipino added.","2017-09-29 11:47:07");
INSERT INTO audit_trail VALUES("265","3","1","Added new subject data","5English added.","2017-09-29 11:47:50");
INSERT INTO audit_trail VALUES("266","3","1","Added new subject data","5Science added.","2017-09-29 11:48:37");
INSERT INTO audit_trail VALUES("267","3","1","Added new subject data","5Mathematics added.","2017-09-29 11:49:40");
INSERT INTO audit_trail VALUES("268","3","1","Added new subject data","5Science added.","2017-09-29 11:51:55");
INSERT INTO audit_trail VALUES("269","3","1","Archived a subject data","5Science was successfully moved to archive.","2017-09-29 11:52:25");
INSERT INTO audit_trail VALUES("270","3","1","Added new subject data","5GMRC added.","2017-09-29 11:53:17");
INSERT INTO audit_trail VALUES("271","3","1","Added new subject data","5HEKASI added.","2017-09-29 11:54:42");
INSERT INTO audit_trail VALUES("272","3","1","Added new subject data","5Physical Education added.","2017-09-29 11:55:25");
INSERT INTO audit_trail VALUES("273","3","1","Updated account information","Name:  ","2017-09-29 11:58:41");
INSERT INTO audit_trail VALUES("274","3","1","Updated account information","Name:  ","2017-09-29 11:59:25");
INSERT INTO audit_trail VALUES("275","3","1","Updated account information","Name:  ","2017-09-29 12:00:33");
INSERT INTO audit_trail VALUES("276","3","1","Updated account information","Name:  ","2017-09-29 12:00:56");
INSERT INTO audit_trail VALUES("277","3","1","Updated account information","Name:  ","2017-09-29 12:01:18");
INSERT INTO audit_trail VALUES("278","3","1","Added a new Teacher account","Name: Bergara, Christian Mendez ","2017-09-29 12:05:19");
INSERT INTO audit_trail VALUES("279","3","1","Added a section","G1Section 1 was successfully added.","2017-09-29 12:10:42");
INSERT INTO audit_trail VALUES("280","3","1","Assign advisory class to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: <br>Academic Year: 2017 - 2018<br>","2017-09-29 12:11:31");
INSERT INTO audit_trail VALUES("281","3","1","Added a student","Name: Analyn Reyes Perez <br>Student ID No: 17-026","2017-09-29 12:15:09");
INSERT INTO audit_trail VALUES("282","3","1","Added a student","Name: Roger Miclat Dizon <br>Student ID No: 17-027","2017-09-29 12:17:44");
INSERT INTO audit_trail VALUES("283","3","1","Added a student","Name: Angel Punsalan Miranda <br>Student ID No: 17-028","2017-09-29 12:19:35");
INSERT INTO audit_trail VALUES("284","3","1","Added a student","Name: Angelo Besa Manalo <br>Student ID No: 17-029","2017-09-29 12:21:32");
INSERT INTO audit_trail VALUES("285","3","1","Added a student","Name: John Paul Deguzman Lingad <br>Student ID No: 17-030","2017-09-29 12:23:24");
INSERT INTO audit_trail VALUES("286","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1English<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:24:34");
INSERT INTO audit_trail VALUES("287","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:24:51");
INSERT INTO audit_trail VALUES("288","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:25:09");
INSERT INTO audit_trail VALUES("289","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1Science<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:25:27");
INSERT INTO audit_trail VALUES("290","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1HEKASI<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:25:45");
INSERT INTO audit_trail VALUES("291","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1GMRC<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:26:24");
INSERT INTO audit_trail VALUES("292","3","1","Assign classes to teacher","Teacher: Bergara, Christian<br>Section: G1Section 1<br>Subject: 1Physical Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 12:26:47");
INSERT INTO audit_trail VALUES("293","3","1","Added new subject data","7English added.","2017-09-29 13:16:34");
INSERT INTO audit_trail VALUES("294","3","1","Added new subject data","7Filipino added.","2017-09-29 13:18:00");
INSERT INTO audit_trail VALUES("295","3","1","Added new subject data","7Science added.","2017-09-29 13:18:54");
INSERT INTO audit_trail VALUES("296","3","1","Added new subject data","7Mathematics added.","2017-09-29 13:19:24");
INSERT INTO audit_trail VALUES("297","3","1","Added new subject data","7MAPEH added.","2017-09-29 13:21:11");
INSERT INTO audit_trail VALUES("298","3","1","Added new subject data","7Technology and Livelihood Education added.","2017-09-29 13:21:55");
INSERT INTO audit_trail VALUES("299","3","1","Added new subject data","7Araling Panlipunan added.","2017-09-29 13:22:52");
INSERT INTO audit_trail VALUES("300","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: 7Technology and Livelihood Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:29:59");
INSERT INTO audit_trail VALUES("301","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Bougainvillea<br>Subject: 7Technology and Livelihood Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:30:22");
INSERT INTO audit_trail VALUES("302","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Camia<br>Subject: 7Technology and Livelihood Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:31:08");
INSERT INTO audit_trail VALUES("303","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Daisy<br>Subject: 7Technology and Livelihood Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:31:43");
INSERT INTO audit_trail VALUES("304","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Everlasting<br>Subject: 7Technology and Livelihood Education<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:32:01");
INSERT INTO audit_trail VALUES("305","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Aster<br>Subject: 7Science<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:33:01");
INSERT INTO audit_trail VALUES("306","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Bougainvillea<br>Subject: 7Science<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:33:23");
INSERT INTO audit_trail VALUES("307","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Camia<br>Subject: 7Science<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:33:44");
INSERT INTO audit_trail VALUES("308","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Daisy<br>Subject: 7Science<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:34:13");
INSERT INTO audit_trail VALUES("309","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Everlasting<br>Subject: 7Science<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:34:55");
INSERT INTO audit_trail VALUES("310","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Aster<br>Subject: 7Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:36:52");
INSERT INTO audit_trail VALUES("311","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Bougainvillea<br>Subject: 7Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:37:44");
INSERT INTO audit_trail VALUES("312","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Camia<br>Subject: 7Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:38:14");
INSERT INTO audit_trail VALUES("313","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Daisy<br>Subject: 7Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:38:33");
INSERT INTO audit_trail VALUES("314","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Everlasting<br>Subject: 7Mathematics<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:39:03");
INSERT INTO audit_trail VALUES("315","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Aster<br>Subject: 7English<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:39:46");
INSERT INTO audit_trail VALUES("316","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Bougainvillea<br>Subject: 7English<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:40:12");
INSERT INTO audit_trail VALUES("317","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Camia<br>Subject: 7English<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:41:02");
INSERT INTO audit_trail VALUES("318","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Daisy<br>Subject: 7English<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:41:34");
INSERT INTO audit_trail VALUES("319","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Everlasting<br>Subject: 7English<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:41:56");
INSERT INTO audit_trail VALUES("320","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Aster<br>Subject: 7Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:42:29");
INSERT INTO audit_trail VALUES("321","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Bougainvillea<br>Subject: 7English<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:42:49");
INSERT INTO audit_trail VALUES("322","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Bougainvillea<br>Subject: 7Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:43:15");
INSERT INTO audit_trail VALUES("323","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Camia<br>Subject: 7Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:43:32");
INSERT INTO audit_trail VALUES("324","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Daisy<br>Subject: 7Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:43:55");
INSERT INTO audit_trail VALUES("325","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Everlasting<br>Subject: 7Filipino<br>Academic Year: 2017 - 2018<br>","2017-09-29 13:44:14");
INSERT INTO audit_trail VALUES("326","9","2","Updated account information","Name:  ","2017-09-29 19:37:29");
INSERT INTO audit_trail VALUES("327","9","2","Updated account information","Name:  ","2017-09-29 19:39:52");
INSERT INTO audit_trail VALUES("328","1","1","Backed up the database","Filename: holytrinitycrams_db20170929_200803.sql","2017-09-29 20:08:03");
INSERT INTO audit_trail VALUES("329","1","1","Backed up the database","Filename: holytrinitycrams_db20170930_150001.sql","2017-09-30 15:00:01");
INSERT INTO audit_trail VALUES("330","3","1","Restored a student-assigned section data","","2017-09-30 16:28:39");
INSERT INTO audit_trail VALUES("331","3","1","Updated account information","Name:  ","2017-09-30 16:42:58");
INSERT INTO audit_trail VALUES("332","3","1","Added a section","G5Section 5 was successfully added.","2017-09-30 17:02:12");
INSERT INTO audit_trail VALUES("333","3","1","Archived a section","Description: G5Section 5","2017-09-30 17:02:19");
INSERT INTO audit_trail VALUES("334","3","1","Added a section","G5Section 1 was successfully added.","2017-09-30 17:02:38");
INSERT INTO audit_trail VALUES("335","3","1","Archived a section","Description: G5Section 1","2017-09-30 17:03:55");
INSERT INTO audit_trail VALUES("336","3","1","Archived a subject data","5English was successfully moved to archive.","2017-09-30 17:04:46");
INSERT INTO audit_trail VALUES("337","3","1","Archived a subject data","5Filipino was successfully moved to archive.","2017-09-30 17:04:58");
INSERT INTO audit_trail VALUES("338","3","1","Archived a subject data","5GMRC was successfully moved to archive.","2017-09-30 17:05:09");
INSERT INTO audit_trail VALUES("339","3","1","Archived a subject data","5HEKASI was successfully moved to archive.","2017-09-30 17:05:27");
INSERT INTO audit_trail VALUES("340","3","1","Archived a subject data","5Mathematics was successfully moved to archive.","2017-09-30 17:05:40");
INSERT INTO audit_trail VALUES("341","3","1","Archived a subject data","5Physical Education was successfully moved to archive.","2017-09-30 17:05:52");
INSERT INTO audit_trail VALUES("342","3","1","Archived a subject data","5Science was successfully moved to archive.","2017-09-30 17:05:58");
INSERT INTO audit_trail VALUES("343","3","1","Added grade level data","Grade 1 added.","2017-09-30 17:07:07");
INSERT INTO audit_trail VALUES("344","3","1","Archived a grade level data","Grade 1 was successfully moved to archive.","2017-09-30 17:15:34");
INSERT INTO audit_trail VALUES("345","3","1","Unassigned a subject to a grade level","English 1 is successfully unassigned to Grade 7","2017-09-30 17:52:29");
INSERT INTO audit_trail VALUES("346","3","1","Assigned a subject to a grade level","7Araling Panlipunan is successfully assigned to Grade 7","2017-09-30 17:53:51");
INSERT INTO audit_trail VALUES("347","3","1","Assigned a subject to a grade level","7English is successfully assigned to Grade 7","2017-09-30 17:53:59");
INSERT INTO audit_trail VALUES("348","3","1","Assigned a subject to a grade level","7Filipino is successfully assigned to Grade 7","2017-09-30 17:54:05");
INSERT INTO audit_trail VALUES("349","3","1","Assigned a subject to a grade level","7MAPEH is successfully assigned to Grade 7","2017-09-30 17:54:11");
INSERT INTO audit_trail VALUES("350","3","1","Assigned a subject to a grade level","7Mathematics is successfully assigned to Grade 7","2017-09-30 17:54:17");
INSERT INTO audit_trail VALUES("351","3","1","Assigned a subject to a grade level","7Technology and Livelihood Education is successfully assigned to Grade 7","2017-09-30 17:54:21");
INSERT INTO audit_trail VALUES("352","3","1","Assigned a subject to a grade level","7Science is successfully assigned to Grade 7","2017-09-30 17:54:26");
INSERT INTO audit_trail VALUES("353","3","1","Assigned a subject to a grade level","1English is successfully assigned to Grade 1","2017-09-30 17:54:50");
INSERT INTO audit_trail VALUES("354","3","1","Assigned a subject to a grade level","1Filipino is successfully assigned to Grade 1","2017-09-30 17:54:53");
INSERT INTO audit_trail VALUES("355","3","1","Assigned a subject to a grade level","1GMRC is successfully assigned to Grade 1","2017-09-30 17:54:54");
INSERT INTO audit_trail VALUES("356","3","1","Assigned a subject to a grade level","1HEKASI is successfully assigned to Grade 1","2017-09-30 17:54:55");
INSERT INTO audit_trail VALUES("357","3","1","Assigned a subject to a grade level","1Mathematics is successfully assigned to Grade 1","2017-09-30 17:54:59");
INSERT INTO audit_trail VALUES("358","3","1","Assigned a subject to a grade level","1Physical Education is successfully assigned to Grade 1","2017-09-30 17:55:00");
INSERT INTO audit_trail VALUES("359","3","1","Assigned a subject to a grade level","1Science is successfully assigned to Grade 1","2017-09-30 17:55:02");
INSERT INTO audit_trail VALUES("360","3","1","Added new subject data","7Edukasyong Pagpapahalaga added.","2017-09-30 17:56:26");
INSERT INTO audit_trail VALUES("361","3","1","Assigned a subject to a grade level","7Edukasyong Pagpapahalaga is successfully assigned to Grade 7","2017-09-30 17:56:45");
INSERT INTO audit_trail VALUES("362","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: 7Edukasyong Pagpapahalaga<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:06:31");
INSERT INTO audit_trail VALUES("363","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: G1Section 1<br>Subject: 1English<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:07:21");
INSERT INTO audit_trail VALUES("364","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Bougainvillea<br>Subject: 7Edukasyong Pagpapahalaga<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:08:00");
INSERT INTO audit_trail VALUES("365","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Camia<br>Subject: 7Edukasyong Pagpapahalaga<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:08:30");
INSERT INTO audit_trail VALUES("366","3","1","Assign classes to teacher","Teacher: Opalia, Remilyn<br>Section: Bougainvillea<br>Subject: 7Edukasyong Pagpapahalaga<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:08:48");
INSERT INTO audit_trail VALUES("367","3","1","Assign classes to teacher","Teacher: Carlos, Kate<br>Section: Daisy<br>Subject: 7Edukasyong Pagpapahalaga<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:11:24");
INSERT INTO audit_trail VALUES("368","3","1","Assign classes to teacher","Teacher: Bautista, Ian Christopher<br>Section: Everlasting<br>Subject: 7Edukasyong Pagpapahalaga<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:11:55");
INSERT INTO audit_trail VALUES("369","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Aster<br>Subject: 7Araling Panlipunan<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:13:21");
INSERT INTO audit_trail VALUES("370","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Bougainvillea<br>Subject: 7Araling Panlipunan<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:13:31");
INSERT INTO audit_trail VALUES("371","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Camia<br>Subject: 7Araling Panlipunan<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:13:41");
INSERT INTO audit_trail VALUES("372","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Daisy<br>Subject: 7Araling Panlipunan<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:13:52");
INSERT INTO audit_trail VALUES("373","3","1","Assign classes to teacher","Teacher: Maglalang, Tin<br>Section: Everlasting<br>Subject: 7Araling Panlipunan<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:13:59");
INSERT INTO audit_trail VALUES("374","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Aster<br>Subject: 7MAPEH<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:15:20");
INSERT INTO audit_trail VALUES("375","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Bougainvillea<br>Subject: 7MAPEH<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:15:26");
INSERT INTO audit_trail VALUES("376","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Camia<br>Subject: 7MAPEH<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:15:41");
INSERT INTO audit_trail VALUES("377","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Daisy<br>Subject: 7MAPEH<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:15:50");
INSERT INTO audit_trail VALUES("378","3","1","Assign classes to teacher","Teacher: Amio, Jethro<br>Section: Everlasting<br>Subject: 7MAPEH<br>Academic Year: 2017 - 2018<br>","2017-09-30 18:16:00");
INSERT INTO audit_trail VALUES("379","3","1","Added new subject data","1English added.","2017-10-01 08:48:27");
INSERT INTO audit_trail VALUES("380","3","1","Archived a subject data","1English was successfully moved to archive.","2017-10-01 08:50:29");
INSERT INTO audit_trail VALUES("381","3","1","Updated account information","Name:  ","2017-10-01 15:07:49");
INSERT INTO audit_trail VALUES("382","3","1","Added a new Teacher account","Name: Roswell, Aemie dela Cruz ","2017-10-01 15:31:31");
INSERT INTO audit_trail VALUES("383","3","1","Added a new Teacher account","Name: Tores, Duday Amor ","2017-10-01 15:35:43");



DROP TABLE IF EXISTS gradelevel;

CREATE TABLE `gradelevel` (
  `gradelevel_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_code` varchar(60) NOT NULL,
  `gradelevel_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gradelevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel VALUES("1","G7","Grade 7","0");
INSERT INTO gradelevel VALUES("2","G8","Grade 8","0");
INSERT INTO gradelevel VALUES("3","G9","Grade 9","0");
INSERT INTO gradelevel VALUES("4","G10","Grade 10","0");
INSERT INTO gradelevel VALUES("5","G1","Grade 1","0");
INSERT INTO gradelevel VALUES("6","G2","Grade 2","0");
INSERT INTO gradelevel VALUES("7","G3","Grade 3","0");
INSERT INTO gradelevel VALUES("8","G4","Grade 4","0");
INSERT INTO gradelevel VALUES("9","G5","Grade 5","0");
INSERT INTO gradelevel VALUES("10","G6","Grade 6","0");
INSERT INTO gradelevel VALUES("11","G1","Grade 1","1");



DROP TABLE IF EXISTS gradelevel_subject;

CREATE TABLE `gradelevel_subject` (
  `level_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`level_subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel_subject VALUES("1","1","1","1");
INSERT INTO gradelevel_subject VALUES("2","1","1","1");
INSERT INTO gradelevel_subject VALUES("3","5","1","1");
INSERT INTO gradelevel_subject VALUES("4","5","1","1");
INSERT INTO gradelevel_subject VALUES("5","5","6","1");
INSERT INTO gradelevel_subject VALUES("6","1","37","0");
INSERT INTO gradelevel_subject VALUES("7","1","31","0");
INSERT INTO gradelevel_subject VALUES("8","1","32","0");
INSERT INTO gradelevel_subject VALUES("9","1","35","0");
INSERT INTO gradelevel_subject VALUES("10","1","34","0");
INSERT INTO gradelevel_subject VALUES("11","1","36","0");
INSERT INTO gradelevel_subject VALUES("12","1","33","0");
INSERT INTO gradelevel_subject VALUES("13","5","16","0");
INSERT INTO gradelevel_subject VALUES("14","5","17","0");
INSERT INTO gradelevel_subject VALUES("15","5","21","0");
INSERT INTO gradelevel_subject VALUES("16","5","20","0");
INSERT INTO gradelevel_subject VALUES("17","5","18","0");
INSERT INTO gradelevel_subject VALUES("18","5","22","0");
INSERT INTO gradelevel_subject VALUES("19","5","19","0");
INSERT INTO gradelevel_subject VALUES("20","1","38","0");



DROP TABLE IF EXISTS gradingperiod;

CREATE TABLE `gradingperiod` (
  `gradingperiod_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`gradingperiod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO gradingperiod VALUES("1","First Grading Period","1");
INSERT INTO gradingperiod VALUES("2","Second Grading Period","0");
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
) ENGINE=InnoDB AUTO_INCREMENT=454 DEFAULT CHARSET=latin1;

INSERT INTO outputs_actual VALUES("15","1","1","2","1","0","1","2","25.00","22.00","0.00","First Quiz","2017-07-26 20:38:02","0");
INSERT INTO outputs_actual VALUES("16","1","1","2","3","0","1","2","25.00","21.00","0.00","First Quiz","2017-07-26 20:38:02","0");
INSERT INTO outputs_actual VALUES("17","0","0","11","1","1","1","2","100.00","65.00","0.00","","2017-09-13 10:46:34","0");
INSERT INTO outputs_actual VALUES("18","0","0","11","3","1","1","2","100.00","54.00","0.00","","2017-09-13 10:46:34","0");
INSERT INTO outputs_actual VALUES("19","0","0","11","1","1","1","1","100.00","65.00","0.00","","2017-09-24 10:20:53","0");
INSERT INTO outputs_actual VALUES("20","0","0","11","3","1","1","1","100.00","54.00","0.00","","2017-09-24 10:20:53","0");
INSERT INTO outputs_actual VALUES("21","WW1","0","7","18","15","7","1","5.00","4.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("22","WW1","0","7","19","15","7","1","5.00","1.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("23","WW1","0","7","20","15","7","1","5.00","2.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("24","WW1","0","7","22","15","7","1","5.00","5.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("25","WW1","0","7","9","14","33","1","20.00","0.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("26","WW1","0","7","11","14","33","1","20.00","0.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("27","WW1","0","7","10","14","33","1","20.00","0.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("28","WW1","0","7","13","14","33","1","20.00","15.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("29","WW1","0","7","14","14","33","1","20.00","16.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("30","WW1","0","7","15","14","33","1","20.00","19.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("31","WW1","0","7","16","14","33","1","20.00","17.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("32","WW1","0","7","17","14","33","1","20.00","20.00","0.00","","2017-09-30 18:21:34","0");
INSERT INTO outputs_actual VALUES("33","WW2","0","7","9","14","33","1","25.00","0.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("34","WW2","0","7","11","14","33","1","25.00","0.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("35","WW2","0","7","10","14","33","1","25.00","0.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("36","WW2","0","7","13","14","33","1","25.00","15.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("37","WW2","0","7","14","14","33","1","25.00","23.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("38","WW2","0","7","15","14","33","1","25.00","24.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("39","WW2","0","7","16","14","33","1","25.00","18.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("40","WW2","0","7","17","14","33","1","25.00","10.00","0.00","","2017-09-30 18:22:40","0");
INSERT INTO outputs_actual VALUES("41","PT1","0","7","9","14","33","1","10.00","0.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("42","PT1","0","7","11","14","33","1","10.00","0.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("43","PT1","0","7","10","14","33","1","10.00","0.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("44","PT1","0","7","13","14","33","1","10.00","10.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("45","PT1","0","7","14","14","33","1","10.00","9.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("46","PT1","0","7","15","14","33","1","10.00","8.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("47","PT1","0","7","16","14","33","1","10.00","4.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("48","PT1","0","7","17","14","33","1","10.00","3.00","0.00","","2017-09-30 18:24:54","0");
INSERT INTO outputs_actual VALUES("49","PT2","0","7","9","14","33","1","15.00","0.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("50","PT2","0","7","11","14","33","1","15.00","0.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("51","PT2","0","7","10","14","33","1","15.00","0.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("52","PT2","0","7","13","14","33","1","15.00","13.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("53","PT2","0","7","14","14","33","1","15.00","12.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("54","PT2","0","7","15","14","33","1","15.00","15.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("55","PT2","0","7","16","14","33","1","15.00","14.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("56","PT2","0","7","17","14","33","1","15.00","11.00","0.00","","2017-09-30 18:25:34","0");
INSERT INTO outputs_actual VALUES("57","QA","0","7","9","14","33","1","50.00","0.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("58","QA","0","7","11","14","33","1","50.00","0.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("59","QA","0","7","10","14","33","1","50.00","0.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("60","QA","0","7","13","14","33","1","50.00","40.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("61","QA","0","7","14","14","33","1","50.00","38.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("62","QA","0","7","15","14","33","1","50.00","35.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("63","QA","0","7","16","14","33","1","50.00","28.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("64","QA","0","7","17","14","33","1","50.00","32.00","0.00","","2017-09-30 18:26:39","0");
INSERT INTO outputs_actual VALUES("65","WW1","0","7","9","14","35","1","20.00","0.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("66","WW1","0","7","11","14","35","1","20.00","0.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("67","WW1","0","7","10","14","35","1","20.00","0.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("68","WW1","0","7","13","14","35","1","20.00","15.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("69","WW1","0","7","14","14","35","1","20.00","16.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("70","WW1","0","7","15","14","35","1","20.00","16.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("71","WW1","0","7","16","14","35","1","20.00","18.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("72","WW1","0","7","17","14","35","1","20.00","19.00","0.00","","2017-10-01 08:57:26","0");
INSERT INTO outputs_actual VALUES("73","WW2","0","7","9","14","35","1","20.00","0.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("74","WW2","0","7","11","14","35","1","20.00","0.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("75","WW2","0","7","10","14","35","1","20.00","0.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("76","WW2","0","7","13","14","35","1","20.00","10.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("77","WW2","0","7","14","14","35","1","20.00","19.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("78","WW2","0","7","15","14","35","1","20.00","16.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("79","WW2","0","7","16","14","35","1","20.00","13.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("80","WW2","0","7","17","14","35","1","20.00","12.00","0.00","","2017-10-01 08:58:18","0");
INSERT INTO outputs_actual VALUES("81","PT1","0","7","9","14","35","1","20.00","0.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("82","PT1","0","7","11","14","35","1","20.00","0.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("83","PT1","0","7","10","14","35","1","20.00","0.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("84","PT1","0","7","13","14","35","1","20.00","15.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("85","PT1","0","7","14","14","35","1","20.00","19.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("86","PT1","0","7","15","14","35","1","20.00","18.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("87","PT1","0","7","16","14","35","1","20.00","20.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("88","PT1","0","7","17","14","35","1","20.00","17.00","0.00","","2017-10-01 08:59:36","0");
INSERT INTO outputs_actual VALUES("89","QA","0","7","9","14","35","1","50.00","0.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("90","QA","0","7","11","14","35","1","50.00","0.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("91","QA","0","7","10","14","35","1","50.00","0.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("92","QA","0","7","13","14","35","1","50.00","40.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("93","QA","0","7","14","14","35","1","50.00","45.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("94","QA","0","7","15","14","35","1","50.00","38.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("95","QA","0","7","16","14","35","1","50.00","47.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("96","QA","0","7","17","14","35","1","50.00","42.00","0.00","","2017-10-01 09:00:42","0");
INSERT INTO outputs_actual VALUES("97","WW1","0","7","18","15","33","1","20.00","12.00","0.00","","2017-10-01 09:18:43","0");
INSERT INTO outputs_actual VALUES("98","WW1","0","7","19","15","33","1","20.00","12.00","0.00","","2017-10-01 09:18:43","0");
INSERT INTO outputs_actual VALUES("99","WW1","0","7","20","15","33","1","20.00","11.00","0.00","","2017-10-01 09:18:43","0");
INSERT INTO outputs_actual VALUES("100","WW1","0","7","21","15","33","1","20.00","20.00","0.00","","2017-10-01 09:18:43","0");
INSERT INTO outputs_actual VALUES("101","WW1","0","7","22","15","33","1","20.00","19.00","0.00","","2017-10-01 09:18:43","0");
INSERT INTO outputs_actual VALUES("102","WW2","0","7","18","15","33","1","25.00","15.00","0.00","","2017-10-01 09:19:31","0");
INSERT INTO outputs_actual VALUES("103","WW2","0","7","19","15","33","1","25.00","23.00","0.00","","2017-10-01 09:19:31","0");
INSERT INTO outputs_actual VALUES("104","WW2","0","7","20","15","33","1","25.00","10.00","0.00","","2017-10-01 09:19:31","0");
INSERT INTO outputs_actual VALUES("105","WW2","0","7","21","15","33","1","25.00","17.00","0.00","","2017-10-01 09:19:31","0");
INSERT INTO outputs_actual VALUES("106","WW2","0","7","22","15","33","1","25.00","24.00","0.00","","2017-10-01 09:19:31","0");
INSERT INTO outputs_actual VALUES("107","PT1","0","7","18","15","33","1","10.00","5.00","0.00","","2017-10-01 09:20:10","0");
INSERT INTO outputs_actual VALUES("108","PT1","0","7","19","15","33","1","10.00","10.00","0.00","","2017-10-01 09:20:10","0");
INSERT INTO outputs_actual VALUES("109","PT1","0","7","20","15","33","1","10.00","5.00","0.00","","2017-10-01 09:20:10","0");
INSERT INTO outputs_actual VALUES("110","PT1","0","7","21","15","33","1","10.00","10.00","0.00","","2017-10-01 09:20:10","0");
INSERT INTO outputs_actual VALUES("111","PT1","0","7","22","15","33","1","10.00","10.00","0.00","","2017-10-01 09:20:10","0");
INSERT INTO outputs_actual VALUES("112","PT2","0","7","18","15","33","1","15.00","8.00","0.00","","2017-10-01 09:20:52","0");
INSERT INTO outputs_actual VALUES("113","PT2","0","7","19","15","33","1","15.00","12.00","0.00","","2017-10-01 09:20:52","0");
INSERT INTO outputs_actual VALUES("114","PT2","0","7","20","15","33","1","15.00","6.00","0.00","","2017-10-01 09:20:52","0");
INSERT INTO outputs_actual VALUES("115","PT2","0","7","21","15","33","1","15.00","12.00","0.00","","2017-10-01 09:20:52","0");
INSERT INTO outputs_actual VALUES("116","PT2","0","7","22","15","33","1","15.00","13.00","0.00","","2017-10-01 09:20:52","0");
INSERT INTO outputs_actual VALUES("117","QA","0","7","18","15","33","1","50.00","15.00","0.00","","2017-10-01 09:21:32","0");
INSERT INTO outputs_actual VALUES("118","QA","0","7","19","15","33","1","50.00","42.00","0.00","","2017-10-01 09:21:32","0");
INSERT INTO outputs_actual VALUES("119","QA","0","7","20","15","33","1","50.00","38.00","0.00","","2017-10-01 09:21:32","0");
INSERT INTO outputs_actual VALUES("120","QA","0","7","21","15","33","1","50.00","41.00","0.00","","2017-10-01 09:21:32","0");
INSERT INTO outputs_actual VALUES("121","QA","0","7","22","15","33","1","50.00","43.00","0.00","","2017-10-01 09:21:32","0");
INSERT INTO outputs_actual VALUES("122","WW1","0","7","18","15","38","1","20.00","18.00","0.00","","2017-10-01 09:31:32","0");
INSERT INTO outputs_actual VALUES("123","WW1","0","7","19","15","38","1","20.00","19.00","0.00","","2017-10-01 09:31:32","0");
INSERT INTO outputs_actual VALUES("124","WW1","0","7","20","15","38","1","20.00","16.00","0.00","","2017-10-01 09:31:32","0");
INSERT INTO outputs_actual VALUES("125","WW1","0","7","21","15","38","1","20.00","20.00","0.00","","2017-10-01 09:31:32","0");
INSERT INTO outputs_actual VALUES("126","WW1","0","7","22","15","38","1","20.00","20.00","0.00","","2017-10-01 09:31:32","0");
INSERT INTO outputs_actual VALUES("127","WW2","0","7","18","15","38","1","10.00","9.00","0.00","","2017-10-01 09:32:45","0");
INSERT INTO outputs_actual VALUES("128","WW2","0","7","19","15","38","1","10.00","9.00","0.00","","2017-10-01 09:32:45","0");
INSERT INTO outputs_actual VALUES("129","WW2","0","7","20","15","38","1","10.00","8.00","0.00","","2017-10-01 09:32:45","0");
INSERT INTO outputs_actual VALUES("130","WW2","0","7","21","15","38","1","10.00","9.00","0.00","","2017-10-01 09:32:45","0");
INSERT INTO outputs_actual VALUES("131","WW2","0","7","22","15","38","1","10.00","10.00","0.00","","2017-10-01 09:32:45","0");
INSERT INTO outputs_actual VALUES("132","PT1","0","7","18","15","38","1","20.00","19.00","0.00","","2017-10-01 09:33:31","0");
INSERT INTO outputs_actual VALUES("133","PT1","0","7","19","15","38","1","20.00","18.00","0.00","","2017-10-01 09:33:31","0");
INSERT INTO outputs_actual VALUES("134","PT1","0","7","20","15","38","1","20.00","20.00","0.00","","2017-10-01 09:33:31","0");
INSERT INTO outputs_actual VALUES("135","PT1","0","7","21","15","38","1","20.00","18.00","0.00","","2017-10-01 09:33:31","0");
INSERT INTO outputs_actual VALUES("136","PT1","0","7","22","15","38","1","20.00","17.00","0.00","","2017-10-01 09:33:31","0");
INSERT INTO outputs_actual VALUES("137","QA","0","7","18","15","38","1","50.00","45.00","0.00","","2017-10-01 09:34:46","0");
INSERT INTO outputs_actual VALUES("138","QA","0","7","19","15","38","1","50.00","46.00","0.00","","2017-10-01 09:34:46","0");
INSERT INTO outputs_actual VALUES("139","QA","0","7","20","15","38","1","50.00","45.00","0.00","","2017-10-01 09:34:46","0");
INSERT INTO outputs_actual VALUES("140","QA","0","7","21","15","38","1","50.00","50.00","0.00","","2017-10-01 09:34:46","0");
INSERT INTO outputs_actual VALUES("141","QA","0","7","22","15","38","1","50.00","50.00","0.00","","2017-10-01 09:34:46","0");
INSERT INTO outputs_actual VALUES("142","WW1","0","7","18","15","35","1","20.00","18.00","0.00","","2017-10-01 09:36:08","0");
INSERT INTO outputs_actual VALUES("143","WW1","0","7","19","15","35","1","20.00","15.00","0.00","","2017-10-01 09:36:08","0");
INSERT INTO outputs_actual VALUES("144","WW1","0","7","20","15","35","1","20.00","19.00","0.00","","2017-10-01 09:36:08","0");
INSERT INTO outputs_actual VALUES("145","WW1","0","7","21","15","35","1","20.00","17.00","0.00","","2017-10-01 09:36:08","0");
INSERT INTO outputs_actual VALUES("146","WW1","0","7","22","15","35","1","20.00","18.00","0.00","","2017-10-01 09:36:08","0");
INSERT INTO outputs_actual VALUES("147","WW2","0","7","18","15","35","1","20.00","14.00","0.00","","2017-10-01 09:44:47","0");
INSERT INTO outputs_actual VALUES("148","WW2","0","7","19","15","35","1","20.00","18.00","0.00","","2017-10-01 09:44:47","0");
INSERT INTO outputs_actual VALUES("149","WW2","0","7","20","15","35","1","20.00","15.00","0.00","","2017-10-01 09:44:47","0");
INSERT INTO outputs_actual VALUES("150","WW2","0","7","21","15","35","1","20.00","18.00","0.00","","2017-10-01 09:44:47","0");
INSERT INTO outputs_actual VALUES("151","WW2","0","7","22","15","35","1","20.00","18.00","0.00","","2017-10-01 09:44:47","0");
INSERT INTO outputs_actual VALUES("152","PT1","0","7","18","15","35","1","20.00","15.00","0.00","","2017-10-01 09:45:29","0");
INSERT INTO outputs_actual VALUES("153","PT1","0","7","19","15","35","1","20.00","17.00","0.00","","2017-10-01 09:45:29","0");
INSERT INTO outputs_actual VALUES("154","PT1","0","7","20","15","35","1","20.00","16.00","0.00","","2017-10-01 09:45:29","0");
INSERT INTO outputs_actual VALUES("155","PT1","0","7","21","15","35","1","20.00","18.00","0.00","","2017-10-01 09:45:29","0");
INSERT INTO outputs_actual VALUES("156","PT1","0","7","22","15","35","1","20.00","19.00","0.00","","2017-10-01 09:45:29","0");
INSERT INTO outputs_actual VALUES("157","QA","0","7","18","15","35","1","50.00","38.00","0.00","","2017-10-01 09:46:45","0");
INSERT INTO outputs_actual VALUES("158","QA","0","7","19","15","35","1","50.00","43.00","0.00","","2017-10-01 09:46:45","0");
INSERT INTO outputs_actual VALUES("159","QA","0","7","20","15","35","1","50.00","40.00","0.00","","2017-10-01 09:46:45","0");
INSERT INTO outputs_actual VALUES("160","QA","0","7","21","15","35","1","50.00","42.00","0.00","","2017-10-01 09:46:45","0");
INSERT INTO outputs_actual VALUES("161","QA","0","7","22","15","35","1","50.00","44.00","0.00","","2017-10-01 09:46:45","0");
INSERT INTO outputs_actual VALUES("162","WW1","0","7","23","16","33","1","20.00","12.00","0.00","","2017-10-01 09:49:13","0");
INSERT INTO outputs_actual VALUES("163","WW1","0","7","24","16","33","1","20.00","17.00","0.00","","2017-10-01 09:49:13","0");
INSERT INTO outputs_actual VALUES("164","WW1","0","7","25","16","33","1","20.00","18.00","0.00","","2017-10-01 09:49:13","0");
INSERT INTO outputs_actual VALUES("165","WW1","0","7","26","16","33","1","20.00","16.00","0.00","","2017-10-01 09:49:13","0");
INSERT INTO outputs_actual VALUES("166","WW1","0","7","27","16","33","1","20.00","16.00","0.00","","2017-10-01 09:49:13","0");
INSERT INTO outputs_actual VALUES("167","WW2","0","7","23","16","33","1","25.00","10.00","0.00","","2017-10-01 09:49:42","0");
INSERT INTO outputs_actual VALUES("168","WW2","0","7","24","16","33","1","25.00","16.00","0.00","","2017-10-01 09:49:42","0");
INSERT INTO outputs_actual VALUES("169","WW2","0","7","25","16","33","1","25.00","17.00","0.00","","2017-10-01 09:49:42","0");
INSERT INTO outputs_actual VALUES("170","WW2","0","7","26","16","33","1","25.00","18.00","0.00","","2017-10-01 09:49:42","0");
INSERT INTO outputs_actual VALUES("171","WW2","0","7","27","16","33","1","25.00","20.00","0.00","","2017-10-01 09:49:42","0");
INSERT INTO outputs_actual VALUES("172","QA","0","7","23","16","33","1","50.00","23.00","0.00","","2017-10-01 09:50:32","0");
INSERT INTO outputs_actual VALUES("173","QA","0","7","24","16","33","1","50.00","33.00","0.00","","2017-10-01 09:50:32","0");
INSERT INTO outputs_actual VALUES("174","QA","0","7","25","16","33","1","50.00","35.00","0.00","","2017-10-01 09:50:32","0");
INSERT INTO outputs_actual VALUES("175","QA","0","7","26","16","33","1","50.00","38.00","0.00","","2017-10-01 09:50:32","0");
INSERT INTO outputs_actual VALUES("176","QA","0","7","27","16","33","1","50.00","36.00","0.00","","2017-10-01 09:50:32","0");
INSERT INTO outputs_actual VALUES("177","PT1","0","7","23","16","33","1","10.00","5.00","0.00","","2017-10-01 09:51:10","0");
INSERT INTO outputs_actual VALUES("178","PT1","0","7","24","16","33","1","10.00","8.00","0.00","","2017-10-01 09:51:10","0");
INSERT INTO outputs_actual VALUES("179","PT1","0","7","25","16","33","1","10.00","9.00","0.00","","2017-10-01 09:51:10","0");
INSERT INTO outputs_actual VALUES("180","PT1","0","7","26","16","33","1","10.00","10.00","0.00","","2017-10-01 09:51:10","0");
INSERT INTO outputs_actual VALUES("181","PT1","0","7","27","16","33","1","10.00","9.00","0.00","","2017-10-01 09:51:10","0");
INSERT INTO outputs_actual VALUES("182","PT2","0","7","23","16","33","1","15.00","10.00","0.00","","2017-10-01 09:52:25","0");
INSERT INTO outputs_actual VALUES("183","PT2","0","7","24","16","33","1","15.00","13.00","0.00","","2017-10-01 09:52:25","0");
INSERT INTO outputs_actual VALUES("184","PT2","0","7","25","16","33","1","15.00","12.00","0.00","","2017-10-01 09:52:25","0");
INSERT INTO outputs_actual VALUES("185","PT2","0","7","26","16","33","1","15.00","14.00","0.00","","2017-10-01 09:52:25","0");
INSERT INTO outputs_actual VALUES("186","PT2","0","7","27","16","33","1","15.00","15.00","0.00","","2017-10-01 09:52:25","0");
INSERT INTO outputs_actual VALUES("187","WW1","0","7","23","16","35","1","20.00","12.00","0.00","","2017-10-01 09:53:45","0");
INSERT INTO outputs_actual VALUES("188","WW1","0","7","24","16","35","1","20.00","16.00","0.00","","2017-10-01 09:53:45","0");
INSERT INTO outputs_actual VALUES("189","WW1","0","7","25","16","35","1","20.00","17.00","0.00","","2017-10-01 09:53:45","0");
INSERT INTO outputs_actual VALUES("190","WW1","0","7","26","16","35","1","20.00","15.00","0.00","","2017-10-01 09:53:45","0");
INSERT INTO outputs_actual VALUES("191","WW1","0","7","27","16","35","1","20.00","18.00","0.00","","2017-10-01 09:53:45","0");
INSERT INTO outputs_actual VALUES("192","WW2","0","7","23","16","35","1","20.00","16.00","0.00","","2017-10-01 10:01:23","0");
INSERT INTO outputs_actual VALUES("193","WW2","0","7","24","16","35","1","20.00","18.00","0.00","","2017-10-01 10:01:23","0");
INSERT INTO outputs_actual VALUES("194","WW2","0","7","25","16","35","1","20.00","20.00","0.00","","2017-10-01 10:01:23","0");
INSERT INTO outputs_actual VALUES("195","WW2","0","7","26","16","35","1","20.00","17.00","0.00","","2017-10-01 10:01:23","0");
INSERT INTO outputs_actual VALUES("196","WW2","0","7","27","16","35","1","20.00","18.00","0.00","","2017-10-01 10:01:23","0");
INSERT INTO outputs_actual VALUES("197","PT1","0","7","23","16","35","1","20.00","17.00","0.00","","2017-10-01 10:01:58","0");
INSERT INTO outputs_actual VALUES("198","PT1","0","7","24","16","35","1","20.00","18.00","0.00","","2017-10-01 10:01:58","0");
INSERT INTO outputs_actual VALUES("199","PT1","0","7","25","16","35","1","20.00","19.00","0.00","","2017-10-01 10:01:58","0");
INSERT INTO outputs_actual VALUES("200","PT1","0","7","26","16","35","1","20.00","17.00","0.00","","2017-10-01 10:01:58","0");
INSERT INTO outputs_actual VALUES("201","PT1","0","7","27","16","35","1","20.00","19.00","0.00","","2017-10-01 10:01:58","0");
INSERT INTO outputs_actual VALUES("202","QA","0","7","23","16","35","1","50.00","40.00","0.00","","2017-10-01 10:02:38","0");
INSERT INTO outputs_actual VALUES("203","QA","0","7","24","16","35","1","50.00","47.00","0.00","","2017-10-01 10:02:38","0");
INSERT INTO outputs_actual VALUES("204","QA","0","7","25","16","35","1","50.00","45.00","0.00","","2017-10-01 10:02:38","0");
INSERT INTO outputs_actual VALUES("205","QA","0","7","26","16","35","1","50.00","42.00","0.00","","2017-10-01 10:02:38","0");
INSERT INTO outputs_actual VALUES("206","QA","0","7","27","16","35","1","50.00","48.00","0.00","","2017-10-01 10:02:38","0");
INSERT INTO outputs_actual VALUES("207","WW1","0","7","28","17","33","1","20.00","20.00","0.00","","2017-10-01 10:05:18","0");
INSERT INTO outputs_actual VALUES("208","WW1","0","7","29","17","33","1","20.00","20.00","0.00","","2017-10-01 10:05:18","0");
INSERT INTO outputs_actual VALUES("209","WW1","0","7","30","17","33","1","20.00","17.00","0.00","","2017-10-01 10:05:18","0");
INSERT INTO outputs_actual VALUES("210","WW1","0","7","31","17","33","1","20.00","18.00","0.00","","2017-10-01 10:05:18","0");
INSERT INTO outputs_actual VALUES("211","WW1","0","7","32","17","33","1","20.00","15.00","0.00","","2017-10-01 10:05:18","0");
INSERT INTO outputs_actual VALUES("212","WW2","0","7","28","17","33","1","25.00","21.00","0.00","","2017-10-01 10:05:47","0");
INSERT INTO outputs_actual VALUES("213","WW2","0","7","29","17","33","1","25.00","20.00","0.00","","2017-10-01 10:05:47","0");
INSERT INTO outputs_actual VALUES("214","WW2","0","7","30","17","33","1","25.00","18.00","0.00","","2017-10-01 10:05:47","0");
INSERT INTO outputs_actual VALUES("215","WW2","0","7","31","17","33","1","25.00","23.00","0.00","","2017-10-01 10:05:47","0");
INSERT INTO outputs_actual VALUES("216","WW2","0","7","32","17","33","1","25.00","12.00","0.00","","2017-10-01 10:05:47","0");
INSERT INTO outputs_actual VALUES("217","PT1","0","7","28","17","33","1","10.00","10.00","0.00","","2017-10-01 10:06:35","0");
INSERT INTO outputs_actual VALUES("218","PT1","0","7","29","17","33","1","10.00","10.00","0.00","","2017-10-01 10:06:35","0");
INSERT INTO outputs_actual VALUES("219","PT1","0","7","30","17","33","1","10.00","8.00","0.00","","2017-10-01 10:06:35","0");
INSERT INTO outputs_actual VALUES("220","PT1","0","7","31","17","33","1","10.00","7.00","0.00","","2017-10-01 10:06:35","0");
INSERT INTO outputs_actual VALUES("221","PT1","0","7","32","17","33","1","10.00","5.00","0.00","","2017-10-01 10:06:35","0");
INSERT INTO outputs_actual VALUES("222","PT2","0","7","28","17","33","1","15.00","14.00","0.00","","2017-10-01 10:07:00","0");
INSERT INTO outputs_actual VALUES("223","PT2","0","7","29","17","33","1","15.00","13.00","0.00","","2017-10-01 10:07:00","0");
INSERT INTO outputs_actual VALUES("224","PT2","0","7","30","17","33","1","15.00","10.00","0.00","","2017-10-01 10:07:00","0");
INSERT INTO outputs_actual VALUES("225","PT2","0","7","31","17","33","1","15.00","11.00","0.00","","2017-10-01 10:07:00","0");
INSERT INTO outputs_actual VALUES("226","PT2","0","7","32","17","33","1","15.00","9.00","0.00","","2017-10-01 10:07:00","0");
INSERT INTO outputs_actual VALUES("227","QA","0","7","28","17","33","1","50.00","42.00","0.00","","2017-10-01 10:07:43","0");
INSERT INTO outputs_actual VALUES("228","QA","0","7","29","17","33","1","50.00","40.00","0.00","","2017-10-01 10:07:43","0");
INSERT INTO outputs_actual VALUES("229","QA","0","7","30","17","33","1","50.00","35.00","0.00","","2017-10-01 10:07:43","0");
INSERT INTO outputs_actual VALUES("230","QA","0","7","31","17","33","1","50.00","33.00","0.00","","2017-10-01 10:07:43","0");
INSERT INTO outputs_actual VALUES("231","QA","0","7","32","17","33","1","50.00","29.00","0.00","","2017-10-01 10:07:43","0");
INSERT INTO outputs_actual VALUES("232","WW1","0","7","28","17","35","1","20.00","18.00","0.00","","2017-10-01 10:09:03","0");
INSERT INTO outputs_actual VALUES("233","WW1","0","7","29","17","35","1","20.00","18.00","0.00","","2017-10-01 10:09:03","0");
INSERT INTO outputs_actual VALUES("234","WW1","0","7","30","17","35","1","20.00","16.00","0.00","","2017-10-01 10:09:03","0");
INSERT INTO outputs_actual VALUES("235","WW1","0","7","31","17","35","1","20.00","17.00","0.00","","2017-10-01 10:09:03","0");
INSERT INTO outputs_actual VALUES("236","WW1","0","7","32","17","35","1","20.00","15.00","0.00","","2017-10-01 10:09:03","0");
INSERT INTO outputs_actual VALUES("237","WW2","0","7","28","17","35","1","20.00","15.00","0.00","","2017-10-01 10:09:27","0");
INSERT INTO outputs_actual VALUES("238","WW2","0","7","29","17","35","1","20.00","15.00","0.00","","2017-10-01 10:09:27","0");
INSERT INTO outputs_actual VALUES("239","WW2","0","7","30","17","35","1","20.00","12.00","0.00","","2017-10-01 10:09:27","0");
INSERT INTO outputs_actual VALUES("240","WW2","0","7","31","17","35","1","20.00","11.00","0.00","","2017-10-01 10:09:27","0");
INSERT INTO outputs_actual VALUES("241","WW2","0","7","32","17","35","1","20.00","10.00","0.00","","2017-10-01 10:09:27","0");
INSERT INTO outputs_actual VALUES("242","PT1","0","7","28","17","35","1","20.00","18.00","0.00","","2017-10-01 10:10:20","0");
INSERT INTO outputs_actual VALUES("243","PT1","0","7","29","17","35","1","20.00","18.00","0.00","","2017-10-01 10:10:20","0");
INSERT INTO outputs_actual VALUES("244","PT1","0","7","30","17","35","1","20.00","17.00","0.00","","2017-10-01 10:10:20","0");
INSERT INTO outputs_actual VALUES("245","PT1","0","7","31","17","35","1","20.00","13.00","0.00","","2017-10-01 10:10:20","0");
INSERT INTO outputs_actual VALUES("246","PT1","0","7","32","17","35","1","20.00","15.00","0.00","","2017-10-01 10:10:20","0");
INSERT INTO outputs_actual VALUES("247","QA","0","7","28","17","35","1","50.00","44.00","0.00","","2017-10-01 10:11:08","0");
INSERT INTO outputs_actual VALUES("248","QA","0","7","29","17","35","1","50.00","46.00","0.00","","2017-10-01 10:11:08","0");
INSERT INTO outputs_actual VALUES("249","QA","0","7","30","17","35","1","50.00","40.00","0.00","","2017-10-01 10:11:08","0");
INSERT INTO outputs_actual VALUES("250","QA","0","7","31","17","35","1","50.00","33.00","0.00","","2017-10-01 10:11:08","0");
INSERT INTO outputs_actual VALUES("251","QA","0","7","32","17","35","1","50.00","37.00","0.00","","2017-10-01 10:11:08","0");
INSERT INTO outputs_actual VALUES("252","WW1","0","7","33","18","33","1","20.00","18.00","0.00","","2017-10-01 10:12:59","0");
INSERT INTO outputs_actual VALUES("253","WW1","0","7","34","18","33","1","20.00","17.00","0.00","","2017-10-01 10:12:59","0");
INSERT INTO outputs_actual VALUES("254","WW1","0","7","35","18","33","1","20.00","17.00","0.00","","2017-10-01 10:12:59","0");
INSERT INTO outputs_actual VALUES("255","WW1","0","7","36","18","33","1","20.00","16.00","0.00","","2017-10-01 10:12:59","0");
INSERT INTO outputs_actual VALUES("256","WW1","0","7","37","18","33","1","20.00","18.00","0.00","","2017-10-01 10:12:59","0");
INSERT INTO outputs_actual VALUES("257","WW2","0","7","33","18","33","1","25.00","16.00","0.00","","2017-10-01 10:13:23","0");
INSERT INTO outputs_actual VALUES("258","WW2","0","7","34","18","33","1","25.00","18.00","0.00","","2017-10-01 10:13:23","0");
INSERT INTO outputs_actual VALUES("259","WW2","0","7","35","18","33","1","25.00","24.00","0.00","","2017-10-01 10:13:23","0");
INSERT INTO outputs_actual VALUES("260","WW2","0","7","36","18","33","1","25.00","21.00","0.00","","2017-10-01 10:13:23","0");
INSERT INTO outputs_actual VALUES("261","WW2","0","7","37","18","33","1","25.00","20.00","0.00","","2017-10-01 10:13:23","0");
INSERT INTO outputs_actual VALUES("262","PT1","0","7","33","18","33","1","10.00","9.00","0.00","","2017-10-01 10:13:59","0");
INSERT INTO outputs_actual VALUES("263","PT1","0","7","34","18","33","1","10.00","5.00","0.00","","2017-10-01 10:13:59","0");
INSERT INTO outputs_actual VALUES("264","PT1","0","7","35","18","33","1","10.00","8.00","0.00","","2017-10-01 10:13:59","0");
INSERT INTO outputs_actual VALUES("265","PT1","0","7","36","18","33","1","10.00","9.00","0.00","","2017-10-01 10:13:59","0");
INSERT INTO outputs_actual VALUES("266","PT1","0","7","37","18","33","1","10.00","7.00","0.00","","2017-10-01 10:13:59","0");
INSERT INTO outputs_actual VALUES("267","PT2","0","7","33","18","33","1","15.00","15.00","0.00","","2017-10-01 10:14:26","0");
INSERT INTO outputs_actual VALUES("268","PT2","0","7","34","18","33","1","15.00","8.00","0.00","","2017-10-01 10:14:26","0");
INSERT INTO outputs_actual VALUES("269","PT2","0","7","35","18","33","1","15.00","12.00","0.00","","2017-10-01 10:14:26","0");
INSERT INTO outputs_actual VALUES("270","PT2","0","7","36","18","33","1","15.00","10.00","0.00","","2017-10-01 10:14:26","0");
INSERT INTO outputs_actual VALUES("271","PT2","0","7","37","18","33","1","15.00","13.00","0.00","","2017-10-01 10:14:26","0");
INSERT INTO outputs_actual VALUES("272","QA","0","7","33","18","33","1","50.00","40.00","0.00","","2017-10-01 10:15:15","0");
INSERT INTO outputs_actual VALUES("273","QA","0","7","34","18","33","1","50.00","25.00","0.00","","2017-10-01 10:15:15","0");
INSERT INTO outputs_actual VALUES("274","QA","0","7","35","18","33","1","50.00","38.00","0.00","","2017-10-01 10:15:15","0");
INSERT INTO outputs_actual VALUES("275","QA","0","7","36","18","33","1","50.00","36.00","0.00","","2017-10-01 10:15:15","0");
INSERT INTO outputs_actual VALUES("276","QA","0","7","37","18","33","1","50.00","33.00","0.00","","2017-10-01 10:15:15","0");
INSERT INTO outputs_actual VALUES("277","WW1","0","10","38","21","16","1","20.00","15.00","0.00","","2017-10-01 15:12:46","0");
INSERT INTO outputs_actual VALUES("278","WW1","0","10","39","21","16","1","20.00","17.00","0.00","","2017-10-01 15:12:46","0");
INSERT INTO outputs_actual VALUES("279","WW1","0","10","40","21","16","1","20.00","18.00","0.00","","2017-10-01 15:12:46","0");
INSERT INTO outputs_actual VALUES("280","WW1","0","10","41","21","16","1","20.00","19.00","0.00","","2017-10-01 15:12:46","0");
INSERT INTO outputs_actual VALUES("281","WW1","0","10","42","21","16","1","20.00","10.00","0.00","","2017-10-01 15:12:46","0");
INSERT INTO outputs_actual VALUES("282","PT1","0","10","38","21","16","1","30.00","25.00","0.00","","2017-10-01 15:13:42","0");
INSERT INTO outputs_actual VALUES("283","PT1","0","10","39","21","16","1","30.00","20.00","0.00","","2017-10-01 15:13:42","0");
INSERT INTO outputs_actual VALUES("284","PT1","0","10","40","21","16","1","30.00","28.00","0.00","","2017-10-01 15:13:42","0");
INSERT INTO outputs_actual VALUES("285","PT1","0","10","41","21","16","1","30.00","25.00","0.00","","2017-10-01 15:13:42","0");
INSERT INTO outputs_actual VALUES("286","PT1","0","10","42","21","16","1","30.00","18.00","0.00","","2017-10-01 15:13:42","0");
INSERT INTO outputs_actual VALUES("287","QA","0","10","38","21","16","1","50.00","40.00","0.00","","2017-10-01 15:14:19","0");
INSERT INTO outputs_actual VALUES("288","QA","0","10","39","21","16","1","50.00","38.00","0.00","","2017-10-01 15:14:19","0");
INSERT INTO outputs_actual VALUES("289","QA","0","10","40","21","16","1","50.00","42.00","0.00","","2017-10-01 15:14:19","0");
INSERT INTO outputs_actual VALUES("290","QA","0","10","41","21","16","1","50.00","43.00","0.00","","2017-10-01 15:14:19","0");
INSERT INTO outputs_actual VALUES("291","QA","0","10","42","21","16","1","50.00","25.00","0.00","","2017-10-01 15:14:19","0");
INSERT INTO outputs_actual VALUES("292","WW1","0","10","38","21","17","1","25.00","21.00","0.00","","2017-10-01 15:16:03","0");
INSERT INTO outputs_actual VALUES("293","WW1","0","10","39","21","17","1","25.00","24.00","0.00","","2017-10-01 15:16:03","0");
INSERT INTO outputs_actual VALUES("294","WW1","0","10","40","21","17","1","25.00","20.00","0.00","","2017-10-01 15:16:03","0");
INSERT INTO outputs_actual VALUES("295","WW1","0","10","41","21","17","1","25.00","16.00","0.00","","2017-10-01 15:16:03","0");
INSERT INTO outputs_actual VALUES("296","WW1","0","10","42","21","17","1","25.00","19.00","0.00","","2017-10-01 15:16:03","0");
INSERT INTO outputs_actual VALUES("297","PT1","0","10","38","21","17","1","25.00","20.00","0.00","","2017-10-01 15:16:33","0");
INSERT INTO outputs_actual VALUES("298","PT1","0","10","39","21","17","1","25.00","25.00","0.00","","2017-10-01 15:16:33","0");
INSERT INTO outputs_actual VALUES("299","PT1","0","10","40","21","17","1","25.00","18.00","0.00","","2017-10-01 15:16:33","0");
INSERT INTO outputs_actual VALUES("300","PT1","0","10","41","21","17","1","25.00","23.00","0.00","","2017-10-01 15:16:33","0");
INSERT INTO outputs_actual VALUES("301","PT1","0","10","42","21","17","1","25.00","18.00","0.00","","2017-10-01 15:16:33","0");
INSERT INTO outputs_actual VALUES("302","QA","0","10","38","21","17","1","50.00","27.00","0.00","","2017-10-01 15:17:04","0");
INSERT INTO outputs_actual VALUES("303","QA","0","10","39","21","17","1","50.00","42.00","0.00","","2017-10-01 15:17:04","0");
INSERT INTO outputs_actual VALUES("304","QA","0","10","40","21","17","1","50.00","33.00","0.00","","2017-10-01 15:17:04","0");
INSERT INTO outputs_actual VALUES("305","QA","0","10","41","21","17","1","50.00","41.00","0.00","","2017-10-01 15:17:04","0");
INSERT INTO outputs_actual VALUES("306","QA","0","10","42","21","17","1","50.00","46.00","0.00","","2017-10-01 15:17:04","0");
INSERT INTO outputs_actual VALUES("307","WW1","0","10","38","21","18","1","20.00","17.00","0.00","","2017-10-01 15:19:06","0");
INSERT INTO outputs_actual VALUES("308","WW1","0","10","39","21","18","1","20.00","14.00","0.00","","2017-10-01 15:19:06","0");
INSERT INTO outputs_actual VALUES("309","WW1","0","10","40","21","18","1","20.00","13.00","0.00","","2017-10-01 15:19:06","0");
INSERT INTO outputs_actual VALUES("310","WW1","0","10","41","21","18","1","20.00","18.00","0.00","","2017-10-01 15:19:06","0");
INSERT INTO outputs_actual VALUES("311","WW1","0","10","42","21","18","1","20.00","19.00","0.00","","2017-10-01 15:19:06","0");
INSERT INTO outputs_actual VALUES("312","PT1","0","10","38","21","18","1","35.00","15.00","0.00","","2017-10-01 15:19:36","0");
INSERT INTO outputs_actual VALUES("313","PT1","0","10","39","21","18","1","35.00","18.00","0.00","","2017-10-01 15:19:36","0");
INSERT INTO outputs_actual VALUES("314","PT1","0","10","40","21","18","1","35.00","30.00","0.00","","2017-10-01 15:19:36","0");
INSERT INTO outputs_actual VALUES("315","PT1","0","10","41","21","18","1","35.00","29.00","0.00","","2017-10-01 15:19:36","0");
INSERT INTO outputs_actual VALUES("316","PT1","0","10","42","21","18","1","35.00","19.00","0.00","","2017-10-01 15:19:36","0");
INSERT INTO outputs_actual VALUES("317","QA","0","10","38","21","18","1","50.00","41.00","0.00","","2017-10-01 15:19:59","0");
INSERT INTO outputs_actual VALUES("318","QA","0","10","39","21","18","1","50.00","45.00","0.00","","2017-10-01 15:19:59","0");
INSERT INTO outputs_actual VALUES("319","QA","0","10","40","21","18","1","50.00","39.00","0.00","","2017-10-01 15:19:59","0");
INSERT INTO outputs_actual VALUES("320","QA","0","10","41","21","18","1","50.00","33.00","0.00","","2017-10-01 15:19:59","0");
INSERT INTO outputs_actual VALUES("321","QA","0","10","42","21","18","1","50.00","38.00","0.00","","2017-10-01 15:19:59","0");
INSERT INTO outputs_actual VALUES("322","WW1","0","10","38","21","19","1","10.00","9.00","0.00","","2017-10-01 15:21:06","0");
INSERT INTO outputs_actual VALUES("323","WW1","0","10","39","21","19","1","10.00","10.00","0.00","","2017-10-01 15:21:06","0");
INSERT INTO outputs_actual VALUES("324","WW1","0","10","40","21","19","1","10.00","6.00","0.00","","2017-10-01 15:21:06","0");
INSERT INTO outputs_actual VALUES("325","WW1","0","10","41","21","19","1","10.00","7.00","0.00","","2017-10-01 15:21:06","0");
INSERT INTO outputs_actual VALUES("326","WW1","0","10","42","21","19","1","10.00","4.00","0.00","","2017-10-01 15:21:06","0");
INSERT INTO outputs_actual VALUES("327","PT1","0","10","38","21","19","1","30.00","23.00","0.00","","2017-10-01 15:21:29","0");
INSERT INTO outputs_actual VALUES("328","PT1","0","10","39","21","19","1","30.00","27.00","0.00","","2017-10-01 15:21:29","0");
INSERT INTO outputs_actual VALUES("329","PT1","0","10","40","21","19","1","30.00","21.00","0.00","","2017-10-01 15:21:29","0");
INSERT INTO outputs_actual VALUES("330","PT1","0","10","41","21","19","1","30.00","20.00","0.00","","2017-10-01 15:21:29","0");
INSERT INTO outputs_actual VALUES("331","PT1","0","10","42","21","19","1","30.00","15.00","0.00","","2017-10-01 15:21:29","0");
INSERT INTO outputs_actual VALUES("332","QA","0","10","38","21","19","1","50.00","34.00","0.00","","2017-10-01 15:22:01","0");
INSERT INTO outputs_actual VALUES("333","QA","0","10","39","21","19","1","50.00","42.00","0.00","","2017-10-01 15:22:01","0");
INSERT INTO outputs_actual VALUES("334","QA","0","10","40","21","19","1","50.00","29.00","0.00","","2017-10-01 15:22:01","0");
INSERT INTO outputs_actual VALUES("335","QA","0","10","41","21","19","1","50.00","40.00","0.00","","2017-10-01 15:22:01","0");
INSERT INTO outputs_actual VALUES("336","QA","0","10","42","21","19","1","50.00","28.00","0.00","","2017-10-01 15:22:01","0");
INSERT INTO outputs_actual VALUES("337","WW1","0","10","38","21","20","1","10.00","7.00","0.00","","2017-10-01 15:23:03","0");
INSERT INTO outputs_actual VALUES("338","WW1","0","10","39","21","20","1","10.00","8.00","0.00","","2017-10-01 15:23:03","0");
INSERT INTO outputs_actual VALUES("339","WW1","0","10","40","21","20","1","10.00","4.00","0.00","","2017-10-01 15:23:03","0");
INSERT INTO outputs_actual VALUES("340","WW1","0","10","41","21","20","1","10.00","5.00","0.00","","2017-10-01 15:23:03","0");
INSERT INTO outputs_actual VALUES("341","WW1","0","10","42","21","20","1","10.00","2.00","0.00","","2017-10-01 15:23:03","0");
INSERT INTO outputs_actual VALUES("342","PT1","0","10","38","21","20","1","25.00","21.00","0.00","","2017-10-01 15:23:22","0");
INSERT INTO outputs_actual VALUES("343","PT1","0","10","39","21","20","1","25.00","18.00","0.00","","2017-10-01 15:23:22","0");
INSERT INTO outputs_actual VALUES("344","PT1","0","10","40","21","20","1","25.00","14.00","0.00","","2017-10-01 15:23:22","0");
INSERT INTO outputs_actual VALUES("345","PT1","0","10","41","21","20","1","25.00","18.00","0.00","","2017-10-01 15:23:22","0");
INSERT INTO outputs_actual VALUES("346","PT1","0","10","42","21","20","1","25.00","15.00","0.00","","2017-10-01 15:23:22","0");
INSERT INTO outputs_actual VALUES("347","QA","0","10","38","21","20","1","50.00","34.00","0.00","","2017-10-01 15:23:50","0");
INSERT INTO outputs_actual VALUES("348","QA","0","10","39","21","20","1","50.00","35.00","0.00","","2017-10-01 15:23:50","0");
INSERT INTO outputs_actual VALUES("349","QA","0","10","40","21","20","1","50.00","28.00","0.00","","2017-10-01 15:23:50","0");
INSERT INTO outputs_actual VALUES("350","QA","0","10","41","21","20","1","50.00","41.00","0.00","","2017-10-01 15:23:50","0");
INSERT INTO outputs_actual VALUES("351","QA","0","10","42","21","20","1","50.00","23.00","0.00","","2017-10-01 15:23:50","0");
INSERT INTO outputs_actual VALUES("352","WW1","0","10","38","21","21","1","20.00","18.00","0.00","","2017-10-01 15:24:52","0");
INSERT INTO outputs_actual VALUES("353","WW1","0","10","39","21","21","1","20.00","20.00","0.00","","2017-10-01 15:24:52","0");
INSERT INTO outputs_actual VALUES("354","WW1","0","10","40","21","21","1","20.00","18.00","0.00","","2017-10-01 15:24:52","0");
INSERT INTO outputs_actual VALUES("355","WW1","0","10","41","21","21","1","20.00","19.00","0.00","","2017-10-01 15:24:52","0");
INSERT INTO outputs_actual VALUES("356","WW1","0","10","42","21","21","1","20.00","20.00","0.00","","2017-10-01 15:24:52","0");
INSERT INTO outputs_actual VALUES("357","PT1","0","10","38","21","21","1","20.00","17.00","0.00","","2017-10-01 15:25:14","0");
INSERT INTO outputs_actual VALUES("358","PT1","0","10","39","21","21","1","20.00","18.00","0.00","","2017-10-01 15:25:14","0");
INSERT INTO outputs_actual VALUES("359","PT1","0","10","40","21","21","1","20.00","16.00","0.00","","2017-10-01 15:25:14","0");
INSERT INTO outputs_actual VALUES("360","PT1","0","10","41","21","21","1","20.00","19.00","0.00","","2017-10-01 15:25:14","0");
INSERT INTO outputs_actual VALUES("361","PT1","0","10","42","21","21","1","20.00","14.00","0.00","","2017-10-01 15:25:14","0");
INSERT INTO outputs_actual VALUES("362","QA","0","10","38","21","21","1","50.00","42.00","0.00","","2017-10-01 15:25:35","0");
INSERT INTO outputs_actual VALUES("363","QA","0","10","39","21","21","1","50.00","41.00","0.00","","2017-10-01 15:25:35","0");
INSERT INTO outputs_actual VALUES("364","QA","0","10","40","21","21","1","50.00","40.00","0.00","","2017-10-01 15:25:35","0");
INSERT INTO outputs_actual VALUES("365","QA","0","10","41","21","21","1","50.00","38.00","0.00","","2017-10-01 15:25:35","0");
INSERT INTO outputs_actual VALUES("366","QA","0","10","42","21","21","1","50.00","41.00","0.00","","2017-10-01 15:25:35","0");
INSERT INTO outputs_actual VALUES("367","WW1","0","10","38","21","22","1","20.00","20.00","0.00","","2017-10-01 15:26:51","0");
INSERT INTO outputs_actual VALUES("368","WW1","0","10","39","21","22","1","20.00","19.00","0.00","","2017-10-01 15:26:51","0");
INSERT INTO outputs_actual VALUES("369","WW1","0","10","40","21","22","1","20.00","17.00","0.00","","2017-10-01 15:26:51","0");
INSERT INTO outputs_actual VALUES("370","WW1","0","10","41","21","22","1","20.00","13.00","0.00","","2017-10-01 15:26:51","0");
INSERT INTO outputs_actual VALUES("371","WW1","0","10","42","21","22","1","20.00","16.00","0.00","","2017-10-01 15:26:51","0");
INSERT INTO outputs_actual VALUES("372","PT1","0","10","38","21","22","1","20.00","19.00","0.00","","2017-10-01 15:27:14","0");
INSERT INTO outputs_actual VALUES("373","PT1","0","10","39","21","22","1","20.00","15.00","0.00","","2017-10-01 15:27:14","0");
INSERT INTO outputs_actual VALUES("374","PT1","0","10","40","21","22","1","20.00","16.00","0.00","","2017-10-01 15:27:14","0");
INSERT INTO outputs_actual VALUES("375","PT1","0","10","41","21","22","1","20.00","13.00","0.00","","2017-10-01 15:27:14","0");
INSERT INTO outputs_actual VALUES("376","PT1","0","10","42","21","22","1","20.00","18.00","0.00","","2017-10-01 15:27:14","0");
INSERT INTO outputs_actual VALUES("377","QA","0","10","38","21","22","1","50.00","42.00","0.00","","2017-10-01 15:27:38","0");
INSERT INTO outputs_actual VALUES("378","QA","0","10","39","21","22","1","50.00","28.00","0.00","","2017-10-01 15:27:38","0");
INSERT INTO outputs_actual VALUES("379","QA","0","10","40","21","22","1","50.00","39.00","0.00","","2017-10-01 15:27:38","0");
INSERT INTO outputs_actual VALUES("380","QA","0","10","41","21","22","1","50.00","31.00","0.00","","2017-10-01 15:27:38","0");
INSERT INTO outputs_actual VALUES("381","QA","0","10","42","21","22","1","50.00","33.00","0.00","","2017-10-01 15:27:38","0");
INSERT INTO outputs_actual VALUES("382","WW1","0","11","9","14","36","1","20.00","0.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("383","WW1","0","11","11","14","36","1","20.00","0.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("384","WW1","0","11","10","14","36","1","20.00","0.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("385","WW1","0","11","13","14","36","1","20.00","19.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("386","WW1","0","11","14","14","36","1","20.00","15.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("387","WW1","0","11","15","14","36","1","20.00","17.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("388","WW1","0","11","16","14","36","1","20.00","12.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("389","WW1","0","11","17","14","36","1","20.00","10.00","0.00","","2017-10-01 15:37:45","0");
INSERT INTO outputs_actual VALUES("390","PT1","0","11","9","14","36","1","20.00","0.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("391","PT1","0","11","11","14","36","1","20.00","0.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("392","PT1","0","11","10","14","36","1","20.00","0.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("393","PT1","0","11","13","14","36","1","20.00","13.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("394","PT1","0","11","14","14","36","1","20.00","15.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("395","PT1","0","11","15","14","36","1","20.00","17.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("396","PT1","0","11","16","14","36","1","20.00","18.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("397","PT1","0","11","17","14","36","1","20.00","12.00","0.00","","2017-10-01 15:38:04","0");
INSERT INTO outputs_actual VALUES("398","QA","0","11","9","14","36","1","50.00","0.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("399","QA","0","11","11","14","36","1","50.00","0.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("400","QA","0","11","10","14","36","1","50.00","0.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("401","QA","0","11","13","14","36","1","50.00","41.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("402","QA","0","11","14","14","36","1","50.00","42.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("403","QA","0","11","15","14","36","1","50.00","45.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("404","QA","0","11","16","14","36","1","50.00","38.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("405","QA","0","11","17","14","36","1","50.00","27.00","0.00","","2017-10-01 15:38:27","0");
INSERT INTO outputs_actual VALUES("406","WW1","0","11","9","14","38","1","20.00","0.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("407","WW1","0","11","11","14","38","1","20.00","0.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("408","WW1","0","11","10","14","38","1","20.00","0.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("409","WW1","0","11","13","14","38","1","20.00","20.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("410","WW1","0","11","14","14","38","1","20.00","19.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("411","WW1","0","11","15","14","38","1","20.00","18.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("412","WW1","0","11","16","14","38","1","20.00","17.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("413","WW1","0","11","17","14","38","1","20.00","16.00","0.00","","2017-10-01 15:39:45","0");
INSERT INTO outputs_actual VALUES("414","PT1","0","11","9","14","38","1","25.00","0.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("415","PT1","0","11","11","14","38","1","25.00","0.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("416","PT1","0","11","10","14","38","1","25.00","0.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("417","PT1","0","11","13","14","38","1","25.00","18.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("418","PT1","0","11","14","14","38","1","25.00","19.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("419","PT1","0","11","15","14","38","1","25.00","20.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("420","PT1","0","11","16","14","38","1","25.00","21.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("421","PT1","0","11","17","14","38","1","25.00","13.00","0.00","","2017-10-01 15:40:14","0");
INSERT INTO outputs_actual VALUES("422","QA","0","11","9","14","38","1","50.00","0.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("423","QA","0","11","11","14","38","1","50.00","0.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("424","QA","0","11","10","14","38","1","50.00","0.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("425","QA","0","11","13","14","38","1","50.00","41.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("426","QA","0","11","14","14","38","1","50.00","40.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("427","QA","0","11","15","14","38","1","50.00","41.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("428","QA","0","11","16","14","38","1","50.00","48.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("429","QA","0","11","17","14","38","1","50.00","32.00","0.00","","2017-10-01 15:40:40","0");
INSERT INTO outputs_actual VALUES("430","WW1","0","11","9","14","37","1","20.00","0.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("431","WW1","0","11","11","14","37","1","20.00","0.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("432","WW1","0","11","10","14","37","1","20.00","0.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("433","WW1","0","11","13","14","37","1","20.00","20.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("434","WW1","0","11","14","14","37","1","20.00","15.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("435","WW1","0","11","15","14","37","1","20.00","17.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("436","WW1","0","11","16","14","37","1","20.00","14.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("437","WW1","0","11","17","14","37","1","20.00","12.00","0.00","","2017-10-01 15:53:15","0");
INSERT INTO outputs_actual VALUES("438","PT1","0","11","9","14","37","1","20.00","0.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("439","PT1","0","11","11","14","37","1","20.00","0.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("440","PT1","0","11","10","14","37","1","20.00","0.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("441","PT1","0","11","13","14","37","1","20.00","15.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("442","PT1","0","11","14","14","37","1","20.00","17.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("443","PT1","0","11","15","14","37","1","20.00","20.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("444","PT1","0","11","16","14","37","1","20.00","12.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("445","PT1","0","11","17","14","37","1","20.00","13.00","0.00","","2017-10-01 15:56:34","0");
INSERT INTO outputs_actual VALUES("446","QA","0","11","9","14","37","1","50.00","0.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("447","QA","0","11","11","14","37","1","50.00","0.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("448","QA","0","11","10","14","37","1","50.00","0.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("449","QA","0","11","13","14","37","1","50.00","40.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("450","QA","0","11","14","14","37","1","50.00","39.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("451","QA","0","11","15","14","37","1","50.00","38.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("452","QA","0","11","16","14","37","1","50.00","37.00","0.00","","2017-10-01 15:57:14","0");
INSERT INTO outputs_actual VALUES("453","QA","0","11","17","14","37","1","50.00","33.00","0.00","","2017-10-01 15:57:14","0");



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




DROP TABLE IF EXISTS outputs_final;

CREATE TABLE `outputs_final` (
  `output_final_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `gradingperiod_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  PRIMARY KEY (`output_final_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

INSERT INTO outputs_final VALUES("1","11","1","1","2","1","83");
INSERT INTO outputs_final VALUES("2","11","3","1","2","1","71");
INSERT INTO outputs_final VALUES("3","7","13","33","1","14","88");
INSERT INTO outputs_final VALUES("4","7","14","33","1","14","89");
INSERT INTO outputs_final VALUES("5","7","15","33","1","14","92");
INSERT INTO outputs_final VALUES("6","7","16","33","1","14","81");
INSERT INTO outputs_final VALUES("7","7","17","33","1","14","75");
INSERT INTO outputs_final VALUES("8","7","13","35","1","14","83");
INSERT INTO outputs_final VALUES("9","7","14","35","1","14","95");
INSERT INTO outputs_final VALUES("10","7","15","35","1","14","89");
INSERT INTO outputs_final VALUES("11","7","16","35","1","14","96");
INSERT INTO outputs_final VALUES("12","7","17","35","1","14","89");
INSERT INTO outputs_final VALUES("13","7","18","33","1","15","72");
INSERT INTO outputs_final VALUES("14","7","19","33","1","15","90");
INSERT INTO outputs_final VALUES("15","7","20","33","1","15","72");
INSERT INTO outputs_final VALUES("16","7","21","33","1","15","90");
INSERT INTO outputs_final VALUES("17","7","22","33","1","15","94");
INSERT INTO outputs_final VALUES("18","7","18","35","1","15","85");
INSERT INTO outputs_final VALUES("19","7","19","35","1","15","90");
INSERT INTO outputs_final VALUES("20","7","20","35","1","15","88");
INSERT INTO outputs_final VALUES("21","7","21","35","1","15","92");
INSERT INTO outputs_final VALUES("22","7","22","35","1","15","94");
INSERT INTO outputs_final VALUES("23","7","23","33","1","16","73");
INSERT INTO outputs_final VALUES("24","7","24","33","1","16","85");
INSERT INTO outputs_final VALUES("25","7","25","33","1","16","87");
INSERT INTO outputs_final VALUES("26","7","26","33","1","16","91");
INSERT INTO outputs_final VALUES("27","7","27","33","1","16","91");
INSERT INTO outputs_final VALUES("28","7","23","35","1","16","87");
INSERT INTO outputs_final VALUES("29","7","24","35","1","16","93");
INSERT INTO outputs_final VALUES("30","7","25","35","1","16","95");
INSERT INTO outputs_final VALUES("31","7","26","35","1","16","89");
INSERT INTO outputs_final VALUES("32","7","27","35","1","16","96");
INSERT INTO outputs_final VALUES("33","7","28","33","1","17","95");
INSERT INTO outputs_final VALUES("34","7","29","33","1","17","92");
INSERT INTO outputs_final VALUES("35","7","30","33","1","17","83");
INSERT INTO outputs_final VALUES("36","7","31","33","1","17","85");
INSERT INTO outputs_final VALUES("37","7","32","33","1","17","74");
INSERT INTO outputs_final VALUES("38","7","28","35","1","17","92");
INSERT INTO outputs_final VALUES("39","7","29","35","1","17","93");
INSERT INTO outputs_final VALUES("40","7","30","35","1","17","87");
INSERT INTO outputs_final VALUES("41","7","31","35","1","17","78");
INSERT INTO outputs_final VALUES("42","7","32","35","1","17","82");
INSERT INTO outputs_final VALUES("43","7","33","33","1","18","91");
INSERT INTO outputs_final VALUES("44","7","34","33","1","18","74");
INSERT INTO outputs_final VALUES("45","7","35","33","1","18","89");
INSERT INTO outputs_final VALUES("46","7","36","33","1","18","85");
INSERT INTO outputs_final VALUES("47","7","37","33","1","18","86");
INSERT INTO outputs_final VALUES("48","7","18","38","1","15","95");
INSERT INTO outputs_final VALUES("49","7","19","38","1","15","94");
INSERT INTO outputs_final VALUES("50","7","20","38","1","15","95");
INSERT INTO outputs_final VALUES("51","7","21","38","1","15","96");
INSERT INTO outputs_final VALUES("52","7","22","38","1","15","95");
INSERT INTO outputs_final VALUES("53","10","38","16","1","21","87");
INSERT INTO outputs_final VALUES("54","10","39","16","1","21","83");
INSERT INTO outputs_final VALUES("55","10","40","16","1","21","93");
INSERT INTO outputs_final VALUES("56","10","41","16","1","21","91");
INSERT INTO outputs_final VALUES("57","10","42","16","1","21","73");
INSERT INTO outputs_final VALUES("58","10","38","17","1","21","83");
INSERT INTO outputs_final VALUES("59","10","39","17","1","21","96");
INSERT INTO outputs_final VALUES("60","10","40","17","1","21","82");
INSERT INTO outputs_final VALUES("61","10","41","17","1","21","87");
INSERT INTO outputs_final VALUES("62","10","42","17","1","21","87");
INSERT INTO outputs_final VALUES("63","10","38","18","1","21","79");
INSERT INTO outputs_final VALUES("64","10","39","18","1","21","81");
INSERT INTO outputs_final VALUES("65","10","40","18","1","21","86");
INSERT INTO outputs_final VALUES("66","10","41","18","1","21","85");
INSERT INTO outputs_final VALUES("67","10","42","18","1","21","81");
INSERT INTO outputs_final VALUES("68","10","38","19","1","21","84");
INSERT INTO outputs_final VALUES("69","10","39","19","1","21","93");
INSERT INTO outputs_final VALUES("70","10","40","19","1","21","76");
INSERT INTO outputs_final VALUES("71","10","41","19","1","21","83");
INSERT INTO outputs_final VALUES("72","10","42","19","1","21","72");
INSERT INTO outputs_final VALUES("73","10","38","20","1","21","83");
INSERT INTO outputs_final VALUES("74","10","39","20","1","21","82");
INSERT INTO outputs_final VALUES("75","10","40","20","1","21","73");
INSERT INTO outputs_final VALUES("76","10","41","20","1","21","82");
INSERT INTO outputs_final VALUES("77","10","42","20","1","21","71");
INSERT INTO outputs_final VALUES("78","10","38","21","1","21","90");
INSERT INTO outputs_final VALUES("79","10","39","21","1","21","92");
INSERT INTO outputs_final VALUES("80","10","40","21","1","21","88");
INSERT INTO outputs_final VALUES("81","10","41","21","1","21","92");
INSERT INTO outputs_final VALUES("82","10","42","21","1","21","86");
INSERT INTO outputs_final VALUES("83","10","38","22","1","21","94");
INSERT INTO outputs_final VALUES("84","10","39","22","1","21","80");
INSERT INTO outputs_final VALUES("85","10","40","22","1","21","87");
INSERT INTO outputs_final VALUES("86","10","41","22","1","21","77");
INSERT INTO outputs_final VALUES("87","10","42","22","1","21","85");
INSERT INTO outputs_final VALUES("88","11","13","36","1","14","87");
INSERT INTO outputs_final VALUES("89","11","14","36","1","14","87");
INSERT INTO outputs_final VALUES("90","11","15","36","1","14","92");
INSERT INTO outputs_final VALUES("91","11","16","36","1","14","85");
INSERT INTO outputs_final VALUES("92","11","17","36","1","14","73");
INSERT INTO outputs_final VALUES("93","11","13","38","1","14","87");
INSERT INTO outputs_final VALUES("94","11","14","38","1","14","88");
INSERT INTO outputs_final VALUES("95","11","15","38","1","14","89");
INSERT INTO outputs_final VALUES("96","11","16","38","1","14","92");
INSERT INTO outputs_final VALUES("97","11","17","38","1","14","75");
INSERT INTO outputs_final VALUES("98","11","13","37","1","14","89");
INSERT INTO outputs_final VALUES("99","11","14","37","1","14","87");
INSERT INTO outputs_final VALUES("100","11","15","37","1","14","90");
INSERT INTO outputs_final VALUES("101","11","16","37","1","14","80");
INSERT INTO outputs_final VALUES("102","11","17","37","1","14","77");



DROP TABLE IF EXISTS percentage_distribution;

CREATE TABLE `percentage_distribution` (
  `percentage_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `schoolyear_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `score_category` varchar(100) NOT NULL,
  `percent` decimal(10,2) NOT NULL,
  `equivalent` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`percentage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO percentage_distribution VALUES("1","33","7","0","ww","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("2","33","7","0","pt","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("3","33","7","0","qa","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("4","35","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("5","35","7","0","pt","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("6","35","7","0","qa","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("7","38","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("8","38","7","0","pt","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("9","38","7","0","qa","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("10","16","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("11","16","7","0","pt","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("12","16","7","0","qa","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("13","17","7","0","ww","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("14","17","7","0","pt","40.00","0.40","0");
INSERT INTO percentage_distribution VALUES("15","17","7","0","qa","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("16","18","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("17","18","7","0","pt","40.00","0.40","0");
INSERT INTO percentage_distribution VALUES("18","18","7","0","qa","40.00","0.40","0");
INSERT INTO percentage_distribution VALUES("19","19","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("20","19","7","0","pt","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("21","19","7","0","qa","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("22","20","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("23","20","7","0","pt","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("24","20","7","0","qa","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("25","21","7","0","ww","10.00","0.10","0");
INSERT INTO percentage_distribution VALUES("26","21","7","0","pt","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("27","21","7","0","qa","40.00","0.40","0");
INSERT INTO percentage_distribution VALUES("28","22","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("29","22","7","0","pt","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("30","22","7","0","qa","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("31","36","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("32","36","7","0","pt","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("33","36","7","0","qa","50.00","0.50","0");
INSERT INTO percentage_distribution VALUES("34","37","7","0","ww","20.00","0.20","0");
INSERT INTO percentage_distribution VALUES("35","37","7","0","pt","30.00","0.30","0");
INSERT INTO percentage_distribution VALUES("36","37","7","0","qa","50.00","0.50","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO sections VALUES("1","1","7-Babbage","1");
INSERT INTO sections VALUES("2","2","8-Andreessen","1");
INSERT INTO sections VALUES("3","3","9-Atanasoff","1");
INSERT INTO sections VALUES("4","4","10-Stibitz","1");
INSERT INTO sections VALUES("5","1","7-Wayne","1");
INSERT INTO sections VALUES("6","2","8-Kent","1");
INSERT INTO sections VALUES("7","3","9-Prince","1");
INSERT INTO sections VALUES("8","4","10-Allen","1");
INSERT INTO sections VALUES("9","1","A","1");
INSERT INTO sections VALUES("10","1","B","1");
INSERT INTO sections VALUES("11","0","C","1");
INSERT INTO sections VALUES("12","0","D","1");
INSERT INTO sections VALUES("13","0","E","1");
INSERT INTO sections VALUES("14","1","Aster","0");
INSERT INTO sections VALUES("15","1","Bougainvillea","0");
INSERT INTO sections VALUES("16","1","Camia","0");
INSERT INTO sections VALUES("17","1","Daisy","0");
INSERT INTO sections VALUES("18","1","Everlasting","0");
INSERT INTO sections VALUES("19","0","A","1");
INSERT INTO sections VALUES("20","2","A","1");
INSERT INTO sections VALUES("21","5","G1Section 1","0");
INSERT INTO sections VALUES("22","9","G5Section 5","1");
INSERT INTO sections VALUES("23","9","G5Section 1","1");



DROP TABLE IF EXISTS student_section;

CREATE TABLE `student_section` (
  `student_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `schoolyear_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`student_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO student_section VALUES("1","1","1","7","0");
INSERT INTO student_section VALUES("2","3","1","7","0");
INSERT INTO student_section VALUES("3","1","8","8","0");
INSERT INTO student_section VALUES("9","9","14","2","0");
INSERT INTO student_section VALUES("11","11","14","6","0");
INSERT INTO student_section VALUES("12","10","14","6","0");
INSERT INTO student_section VALUES("15","13","14","7","0");
INSERT INTO student_section VALUES("17","14","14","7","0");
INSERT INTO student_section VALUES("19","15","14","7","0");
INSERT INTO student_section VALUES("21","16","14","7","0");
INSERT INTO student_section VALUES("23","17","14","7","0");
INSERT INTO student_section VALUES("25","18","15","7","0");
INSERT INTO student_section VALUES("27","19","15","7","0");
INSERT INTO student_section VALUES("29","20","15","7","0");
INSERT INTO student_section VALUES("31","21","15","7","0");
INSERT INTO student_section VALUES("33","22","15","7","0");
INSERT INTO student_section VALUES("34","23","0","7","0");
INSERT INTO student_section VALUES("36","23","16","7","0");
INSERT INTO student_section VALUES("37","24","16","7","0");
INSERT INTO student_section VALUES("38","25","16","7","0");
INSERT INTO student_section VALUES("39","26","16","7","0");
INSERT INTO student_section VALUES("40","27","16","7","0");
INSERT INTO student_section VALUES("41","28","17","7","0");
INSERT INTO student_section VALUES("42","29","17","7","0");
INSERT INTO student_section VALUES("43","30","17","7","0");
INSERT INTO student_section VALUES("44","31","17","7","0");
INSERT INTO student_section VALUES("45","32","17","7","0");
INSERT INTO student_section VALUES("46","33","18","7","0");
INSERT INTO student_section VALUES("47","34","18","7","0");
INSERT INTO student_section VALUES("48","35","18","7","0");
INSERT INTO student_section VALUES("49","36","18","7","0");
INSERT INTO student_section VALUES("50","37","18","7","0");
INSERT INTO student_section VALUES("51","38","21","7","0");
INSERT INTO student_section VALUES("52","39","21","7","0");
INSERT INTO student_section VALUES("53","40","21","7","0");
INSERT INTO student_section VALUES("54","41","21","7","0");
INSERT INTO student_section VALUES("55","42","21","7","0");
INSERT INTO student_section VALUES("56","39","14","8","1");



DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_idno` varchar(255) NOT NULL,
  `student_barcode` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1","13-007","9812803618","Dela Cruz","Juan","Dalisay","1997-04-06","2147483647","1");
INSERT INTO students VALUES("2","13-008","7845210","Parker","Peter","Benjamin","1997-07-06","2147483647","1");
INSERT INTO students VALUES("3","13-008","7845210","Parker","Peter","Benjamin","1997-07-06","2147483647","1");
INSERT INTO students VALUES("5","13-009","001 2348","Charton","Joseph","Fritz","2002-08-08","2147483647","1");
INSERT INTO students VALUES("6","14-0001","1111","Maglalang","Jane","Dee","2001-07-06","2147483647","1");
INSERT INTO students VALUES("7","12-666","1112","Flores","Alpha","Guzman","2001-12-05","2147483647","1");
INSERT INTO students VALUES("8","12-003","1119","Feast","Diana","Hygen","2001-07-08","2147483647","1");
INSERT INTO students VALUES("9","14-0001","4800216110014","Dela Cruz","John","Lacson","2001-08-12","2147483647","1");
INSERT INTO students VALUES("10","14-0002","HTS 0002","Charlton","Jimmy","Veranda","2000-07-06","2147483647","1");
INSERT INTO students VALUES("11","14-0001","4800216110014","Flores","John","Gamboa","2000-08-04","2147483647","1");
INSERT INTO students VALUES("12","17-001","HTS 0001","Camaya","Harwin","Dizon","2005-08-07","09555778805","1");
INSERT INTO students VALUES("13","17-001","HTS 0001","Camaya","Lorenz","Hidalgo","2005-08-08","09555778805","0");
INSERT INTO students VALUES("14","17-002","HTS 0002","Fernandez","Amiel","Coronel","2005-07-12","09555778805","0");
INSERT INTO students VALUES("15","17-003","HTS 0003","Nicdao","Hazel","Gamboa","2005-09-22","09555778805","0");
INSERT INTO students VALUES("16","17-004","HTS 0004","Jacson","Nadine","De Dios","2004-09-02","09555778805","0");
INSERT INTO students VALUES("17","17-005","HTS 0005","Madrid","Finette","Ayson","2004-08-04","09555778805","0");
INSERT INTO students VALUES("18","17-006","HTS 0006","Bergara","Elton John","David","2005-05-11","09758443202","0");
INSERT INTO students VALUES("19","17-007","HTS 0007","Tamayo","Jenelyn","Canoy","2005-04-03","09758443202","0");
INSERT INTO students VALUES("20","17-008","HTS 0008","Gatchalian","Charles","Almazan","2005-02-17","09758443202","0");
INSERT INTO students VALUES("21","17-009","HTS 0009","Salunga","Carlo","Isip","2005-12-25","09758443202","0");
INSERT INTO students VALUES("22","17-010","HTS 0010","Quizon","Kisses","Borja","2005-11-23","09758443202","0");
INSERT INTO students VALUES("23","17-011","HTS 0011","Emperador","Bruno","Bernardo","2005-08-08","09357597286","0");
INSERT INTO students VALUES("24","17-012","HTS 0012","Guerero","Efren","Sumaya","2005-09-30","09357597286","0");
INSERT INTO students VALUES("25","17-013","HTS 0013","Alonzo","Darwin","Aquino","2005-06-06","09357597286","0");
INSERT INTO students VALUES("26","17-014","HTS 0014","Aquino","Adrian","Bolos","0000-00-00","09357597286","0");
INSERT INTO students VALUES("27","17-015","HTS 0015","Valencia","James","Saulong","2005-02-13","09357597286","0");
INSERT INTO students VALUES("28","17-016","HTS 0016","Sagun","James","Liwanag","2005-01-01","09757857365","0");
INSERT INTO students VALUES("29","17-017","HTS 0017","Lacson","Nicolas","Liwanag","2005-03-22","09757857365","0");
INSERT INTO students VALUES("30","17-018","HTS 0018","Dimatulac","Charles","Reyes","2005-05-14","09757857365","0");
INSERT INTO students VALUES("31","17-019","HTS 0019","Lee","Paul","Hipolito","2005-07-05","09757857365","0");
INSERT INTO students VALUES("32","17-020","HTS 0020","Ramos","Roger","Henson","2005-08-06","09757857365","0");
INSERT INTO students VALUES("33","17-021","HTS 0021","Lobo","Camille","Laos","2005-10-10","09066759895","0");
INSERT INTO students VALUES("34","17-022","HTS 0022","Cruz","Lyda","Padilla","2005-06-26","09066759895","0");
INSERT INTO students VALUES("35","17-023","HTS 0023","Aguillar","Marie","Torres","2005-10-09","09066759895","0");
INSERT INTO students VALUES("36","17-024","HTS 0024","Torres","Mariel","Basco","2005-11-19","09066759895","0");
INSERT INTO students VALUES("37","17-025","HTS 0025","Gutierez","Ramon","Dolores","2005-03-15","09066759895","0");
INSERT INTO students VALUES("38","17-026","HTS 0026","Perez","Analyn","Reyes","2007-04-18","09758443202","0");
INSERT INTO students VALUES("39","17-027","HTS 0027","Dizon","Roger","Miclat","2008-09-09","09758443202","0");
INSERT INTO students VALUES("40","17-028","HTS 0028","Miranda","Angel","Punsalan","2007-01-17","09758443202","0");
INSERT INTO students VALUES("41","17-029","HTS 0029","Manalo","Angelo","Besa","2008-04-23","09758443202","0");
INSERT INTO students VALUES("42","17-030","HTS 0030","Lingad","John Paul","Deguzman","2009-09-13","09758443202","0");



DROP TABLE IF EXISTS subjects;

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO subjects VALUES("1","1ENG1","English 1","1");
INSERT INTO subjects VALUES("2","10PE1","Physical Education 1","1");
INSERT INTO subjects VALUES("3","1Literature","Literature","1");
INSERT INTO subjects VALUES("4","3Math4","Mathematics","1");
INSERT INTO subjects VALUES("5","8AP4","Araling Panlipunan","1");
INSERT INTO subjects VALUES("6","6Fil4","Filipino","1");
INSERT INTO subjects VALUES("7","Science","Science","1");
INSERT INTO subjects VALUES("8","English","English","1");
INSERT INTO subjects VALUES("9","Mathematics","Mathematics","1");
INSERT INTO subjects VALUES("10","Filipino","Filipino","1");
INSERT INTO subjects VALUES("11","GMRC","GMRC","1");
INSERT INTO subjects VALUES("12","AP","Araling Panlipunan","1");
INSERT INTO subjects VALUES("13","PE","Physical Education","1");
INSERT INTO subjects VALUES("14","TLE","Technology and Livelihood Education","1");
INSERT INTO subjects VALUES("15","1English","1English","1");
INSERT INTO subjects VALUES("16","1ENG","1English","1");
INSERT INTO subjects VALUES("17","1FIL","1Filipino","0");
INSERT INTO subjects VALUES("18","1MATH","1Mathematics","0");
INSERT INTO subjects VALUES("19","1SCI","1Science","0");
INSERT INTO subjects VALUES("20","1HEKASI","1HEKASI","0");
INSERT INTO subjects VALUES("21","1GMRC","1GMRC","0");
INSERT INTO subjects VALUES("22","1PE","1Physical Education","0");
INSERT INTO subjects VALUES("23","5FIL","5Filipino","1");
INSERT INTO subjects VALUES("24","5ENG","5English","1");
INSERT INTO subjects VALUES("25","5SCI","5Science","1");
INSERT INTO subjects VALUES("26","5MATH","5Mathematics","1");
INSERT INTO subjects VALUES("27","5SCI","5Science","1");
INSERT INTO subjects VALUES("28","5GMRC","5GMRC","1");
INSERT INTO subjects VALUES("29","5HEKASI","5HEKASI","1");
INSERT INTO subjects VALUES("30","5PE","5Physical Education","1");
INSERT INTO subjects VALUES("31","7ENG","7English","0");
INSERT INTO subjects VALUES("32","7FIL","7Filipino","0");
INSERT INTO subjects VALUES("33","7SCI","7Science","0");
INSERT INTO subjects VALUES("34","7MATH","7Mathematics","0");
INSERT INTO subjects VALUES("35","7MAPEH","7MAPEH","0");
INSERT INTO subjects VALUES("36","7TLE","7Technology and Livelihood Education","0");
INSERT INTO subjects VALUES("37","7AP","7Araling Panlipunan","0");
INSERT INTO subjects VALUES("38","7EP","7Edukasyong Pagpapahalaga","0");
INSERT INTO subjects VALUES("39","1ENG","1English","0");



DROP TABLE IF EXISTS teacher_classes;

CREATE TABLE `teacher_classes` (
  `teach_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `advisory` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`teach_class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

INSERT INTO teacher_classes VALUES("5","2","1","7","1","0","0");
INSERT INTO teacher_classes VALUES("6","3","7","7","1","0","0");
INSERT INTO teacher_classes VALUES("7","11","6","7","2","0","0");
INSERT INTO teacher_classes VALUES("8","11","7","7","1","0","0");
INSERT INTO teacher_classes VALUES("9","11","8","7","3","0","0");
INSERT INTO teacher_classes VALUES("10","11","8","8","3","0","0");
INSERT INTO teacher_classes VALUES("11","11","1","7","1","0","0");
INSERT INTO teacher_classes VALUES("12","2","1","7","0","1","0");
INSERT INTO teacher_classes VALUES("13","5","1","7","0","1","0");
INSERT INTO teacher_classes VALUES("14","9","5","7","2","0","0");
INSERT INTO teacher_classes VALUES("15","8","2","7","1","0","0");
INSERT INTO teacher_classes VALUES("16","5","6","7","4","0","0");
INSERT INTO teacher_classes VALUES("17","11","14","7","0","1","0");
INSERT INTO teacher_classes VALUES("18","7","15","7","0","1","0");
INSERT INTO teacher_classes VALUES("19","5","16","7","0","1","0");
INSERT INTO teacher_classes VALUES("20","8","17","7","0","1","0");
INSERT INTO teacher_classes VALUES("21","9","18","7","0","1","0");
INSERT INTO teacher_classes VALUES("22","8","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("23","8","15","7","1","0","1");
INSERT INTO teacher_classes VALUES("24","8","16","7","1","0","1");
INSERT INTO teacher_classes VALUES("25","8","17","7","1","0","1");
INSERT INTO teacher_classes VALUES("26","8","18","7","1","0","1");
INSERT INTO teacher_classes VALUES("27","5","14","7","4","0","1");
INSERT INTO teacher_classes VALUES("28","5","15","7","4","0","1");
INSERT INTO teacher_classes VALUES("29","5","16","7","4","0","1");
INSERT INTO teacher_classes VALUES("30","5","17","7","4","0","1");
INSERT INTO teacher_classes VALUES("31","5","18","7","4","0","1");
INSERT INTO teacher_classes VALUES("32","7","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("33","11","14","6","3","0","1");
INSERT INTO teacher_classes VALUES("34","11","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("35","11","14","6","1","0","1");
INSERT INTO teacher_classes VALUES("36","11","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("37","11","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("38","11","14","6","1","0","1");
INSERT INTO teacher_classes VALUES("39","11","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("40","11","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("41","11","14","6","1","0","1");
INSERT INTO teacher_classes VALUES("42","11","14","6","3","0","1");
INSERT INTO teacher_classes VALUES("43","11","14","7","3","0","1");
INSERT INTO teacher_classes VALUES("44","7","14","7","7","0","1");
INSERT INTO teacher_classes VALUES("45","7","15","7","7","0","1");
INSERT INTO teacher_classes VALUES("46","7","16","7","7","0","1");
INSERT INTO teacher_classes VALUES("47","7","17","7","7","0","1");
INSERT INTO teacher_classes VALUES("48","7","18","7","7","0","1");
INSERT INTO teacher_classes VALUES("49","11","15","7","3","0","1");
INSERT INTO teacher_classes VALUES("50","11","16","7","3","0","1");
INSERT INTO teacher_classes VALUES("51","11","17","7","1","0","1");
INSERT INTO teacher_classes VALUES("52","11","18","7","1","0","1");
INSERT INTO teacher_classes VALUES("53","9","14","7","6","0","1");
INSERT INTO teacher_classes VALUES("54","9","15","7","6","0","1");
INSERT INTO teacher_classes VALUES("55","9","16","7","6","0","1");
INSERT INTO teacher_classes VALUES("56","9","17","7","1","0","1");
INSERT INTO teacher_classes VALUES("57","9","17","7","6","0","1");
INSERT INTO teacher_classes VALUES("58","9","18","7","6","0","1");
INSERT INTO teacher_classes VALUES("59","11","17","7","3","0","1");
INSERT INTO teacher_classes VALUES("60","11","18","7","3","0","1");
INSERT INTO teacher_classes VALUES("61","7","14","7","13","0","1");
INSERT INTO teacher_classes VALUES("62","10","21","7","0","1","0");
INSERT INTO teacher_classes VALUES("63","10","21","7","16","0","0");
INSERT INTO teacher_classes VALUES("64","10","21","7","17","0","0");
INSERT INTO teacher_classes VALUES("65","10","21","7","18","0","0");
INSERT INTO teacher_classes VALUES("66","10","21","7","19","0","0");
INSERT INTO teacher_classes VALUES("67","10","21","7","20","0","0");
INSERT INTO teacher_classes VALUES("68","10","21","7","21","0","0");
INSERT INTO teacher_classes VALUES("69","10","21","7","22","0","0");
INSERT INTO teacher_classes VALUES("70","11","14","7","36","0","0");
INSERT INTO teacher_classes VALUES("71","11","15","7","36","0","0");
INSERT INTO teacher_classes VALUES("72","11","16","7","36","0","0");
INSERT INTO teacher_classes VALUES("73","11","17","7","36","0","0");
INSERT INTO teacher_classes VALUES("74","11","18","7","36","0","0");
INSERT INTO teacher_classes VALUES("75","7","14","7","33","0","0");
INSERT INTO teacher_classes VALUES("76","7","15","7","33","0","0");
INSERT INTO teacher_classes VALUES("77","7","16","7","33","0","0");
INSERT INTO teacher_classes VALUES("78","7","17","7","33","0","0");
INSERT INTO teacher_classes VALUES("79","7","18","7","33","0","0");
INSERT INTO teacher_classes VALUES("80","5","14","7","34","0","0");
INSERT INTO teacher_classes VALUES("81","5","15","7","34","0","0");
INSERT INTO teacher_classes VALUES("82","5","16","7","34","0","0");
INSERT INTO teacher_classes VALUES("83","5","17","7","34","0","0");
INSERT INTO teacher_classes VALUES("84","5","18","7","34","0","0");
INSERT INTO teacher_classes VALUES("85","8","14","7","31","0","0");
INSERT INTO teacher_classes VALUES("86","8","15","7","31","0","0");
INSERT INTO teacher_classes VALUES("87","8","16","7","31","0","0");
INSERT INTO teacher_classes VALUES("88","8","17","7","31","0","0");
INSERT INTO teacher_classes VALUES("89","8","18","7","31","0","0");
INSERT INTO teacher_classes VALUES("90","9","14","7","32","0","0");
INSERT INTO teacher_classes VALUES("91","9","15","7","31","0","1");
INSERT INTO teacher_classes VALUES("92","9","15","7","32","0","0");
INSERT INTO teacher_classes VALUES("93","9","16","7","32","0","0");
INSERT INTO teacher_classes VALUES("94","9","17","7","32","0","0");
INSERT INTO teacher_classes VALUES("95","9","18","7","32","0","0");
INSERT INTO teacher_classes VALUES("96","11","14","7","38","0","0");
INSERT INTO teacher_classes VALUES("97","11","21","7","16","0","1");
INSERT INTO teacher_classes VALUES("98","7","15","7","38","0","0");
INSERT INTO teacher_classes VALUES("99","5","16","7","38","0","0");
INSERT INTO teacher_classes VALUES("100","5","15","7","38","0","1");
INSERT INTO teacher_classes VALUES("101","8","17","7","38","0","0");
INSERT INTO teacher_classes VALUES("102","9","18","7","38","0","0");
INSERT INTO teacher_classes VALUES("103","11","14","7","37","0","0");
INSERT INTO teacher_classes VALUES("104","11","15","7","37","0","0");
INSERT INTO teacher_classes VALUES("105","11","16","7","37","0","0");
INSERT INTO teacher_classes VALUES("106","11","17","7","37","0","0");
INSERT INTO teacher_classes VALUES("107","11","18","7","37","0","0");
INSERT INTO teacher_classes VALUES("108","7","14","7","35","0","0");
INSERT INTO teacher_classes VALUES("109","7","15","7","35","0","0");
INSERT INTO teacher_classes VALUES("110","7","16","7","35","0","0");
INSERT INTO teacher_classes VALUES("111","7","17","7","35","0","0");
INSERT INTO teacher_classes VALUES("112","7","18","7","35","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO user_profile VALUES("1","1","Allen, Bartholomew Henry","","","0000-00-00","","ballen@gmail.com","");
INSERT INTO user_profile VALUES("2","2","Wells, Harrison James",", , ","Male","1979-05-01","Integrated Science, Physics","harrison.wells@gmail.com","9274383838");
INSERT INTO user_profile VALUES("3","3","Maglalang, Christine dela Cruz","Angeles City, , ","Female","1997-09-04","Programming","maglalangcristine@yahoo.com","09555778805");
INSERT INTO user_profile VALUES("4","4","Maglalang, Tin dela Cruz","Sapalibutad, Angeles City, , ","Female","1997-09-04","Literature","maglalangchristine@gmail.com","09555778805");
INSERT INTO user_profile VALUES("5","5","Opalia, Remilyn Perla","132 Riviera St. Brgy. Ninoy Aquino, , ","Female","1998-03-17","Math","opalia.remilyn@gmail.com","09357597286");
INSERT INTO user_profile VALUES("6","6","Coronel, Wilburt Cca","CCA, , ","Male","1991-12-25","Networking","wiburtcoronel@gmail.com","09555778805");
INSERT INTO user_profile VALUES("7","7","Amio, Jethro Liwanag","Porac, , ","Male","0000-00-00","Physics, Chemistry","jethroamio@gmail.com","09758443202");
INSERT INTO user_profile VALUES("8","8","Carlos, Kate Canlas","Tabun, , ","Female","1997-09-28","English","katecarlos@gmail.com","09757857365");
INSERT INTO user_profile VALUES("9","9","Bautista, Ian Christopher Maunes","Tabun, , ","Male","0000-00-00","Filipino","ianbautista@gmail.com","09066759895");
INSERT INTO user_profile VALUES("10","10","Bergara, Christian Mendez","Angeles City, , ","Male","1998-08-08","English, Filipino, Math","christianbergara@gmail.com","09758443202");
INSERT INTO user_profile VALUES("11","11","Roswell, Aemie dela Cruz","Sapalibutad, , ","Female","1996-12-04","Literature, History","roswellaemie@gmail.com","09555778805");
INSERT INTO user_profile VALUES("12","12","Tores, Duday Amor","Davao City, , ","Female","1992-08-23","Literature, History, Math.. Lahat","toresduday@gmail.com","09758443202");



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



