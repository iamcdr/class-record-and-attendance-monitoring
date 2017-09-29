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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO useraccount VALUES("1","ballen","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Allen","Bartholomew","Henry","00237","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("2","hwells","$2y$10$jMmqu3FgVxSxnIsFbQpCguaEQZryNYj953S/oiy6w1fpQ2Rc3EcL2","Wells","Harrison","James","12-052","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("3","","$2y$10$jMmqu3FgVxSxnIsFbQpCgu.i642.kbthvPKHMO2dSCve5OigoN9ZO","Maglalang","Christine","dela Cruz","17-0002","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("4","","$2y$10$jMmqu3FgVxSxnIsFbQpCgu.i642.kbthvPKHMO2dSCve5OigoN9ZO","Maglalang","Tin","dela Cruz","8888","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("5","","$2y$10$jMmqu3FgVxSxnIsFbQpCguDqjG3Kavm1Jpk9iRcb433.Xsc.QHxjW","Opalia","Remilyn","Perla","8887","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("6","","$2y$10$jMmqu3FgVxSxnIsFbQpCguCIZx3VsYa6t2QKUMU702RNs4nk79aj6","Coronel","Wilburt","Cca","12-0001","1","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","1","1");
INSERT INTO useraccount VALUES("7","","$2y$10$jMmqu3FgVxSxnIsFbQpCgurAIXzQoh2goJgW.jIOrYCQ43ry5uc42","Amio","Jethro","Liwanag","8889","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("8","","$2y$10$jMmqu3FgVxSxnIsFbQpCgujnDjCcsiP6o5hWXahjR92h6noYmo4rC","Carlos","Kate","Canlas","8886","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");
INSERT INTO useraccount VALUES("9","","$2y$10$jMmqu3FgVxSxnIsFbQpCguUorGfmAoyiB/JBsCP4ACbLEY1DSXsO2","Bautista","Ian Christopher","Maunes","8885","2","$2y$10$jMmqu3FgVxSxnIsFbQpCg1$","0","0");



DROP TABLE IF EXISTS attendance_log;

CREATE TABLE `attendance_log` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `date_attended` date NOT NULL,
  `time_in` time NOT NULL,
  `sent` int(11) NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO attendance_log VALUES("1","1","2017-08-18","14:22:40","1");
INSERT INTO attendance_log VALUES("2","1","2017-08-18","14:23:10","1");
INSERT INTO attendance_log VALUES("3","1","2017-08-18","14:23:12","1");
INSERT INTO attendance_log VALUES("4","1","2017-08-18","14:23:13","1");
INSERT INTO attendance_log VALUES("5","1","2017-08-18","14:23:18","1");
INSERT INTO attendance_log VALUES("6","1","2017-08-24","16:09:12","1");
INSERT INTO attendance_log VALUES("7","1","2017-08-24","16:10:03","1");
INSERT INTO attendance_log VALUES("8","1","2017-08-24","16:10:04","1");
INSERT INTO attendance_log VALUES("9","1","2017-08-29","10:05:48","1");
INSERT INTO attendance_log VALUES("10","1","2017-08-29","10:05:52","1");
INSERT INTO attendance_log VALUES("11","1","2017-08-29","10:06:06","1");
INSERT INTO attendance_log VALUES("12","1","2017-08-29","10:06:12","1");
INSERT INTO attendance_log VALUES("13","1","2017-08-29","10:06:21","1");
INSERT INTO attendance_log VALUES("14","1","2017-08-29","10:06:22","1");
INSERT INTO attendance_log VALUES("15","1","2017-08-29","10:06:25","1");
INSERT INTO attendance_log VALUES("16","1","2017-08-29","10:06:27","1");
INSERT INTO attendance_log VALUES("17","1","2017-08-29","10:06:31","1");
INSERT INTO attendance_log VALUES("18","1","2017-08-29","10:06:33","1");
INSERT INTO attendance_log VALUES("19","1","2017-08-29","10:06:35","1");
INSERT INTO attendance_log VALUES("20","1","2017-09-06","09:28:46","1");
INSERT INTO attendance_log VALUES("21","1","2017-09-06","09:28:54","1");
INSERT INTO attendance_log VALUES("22","1","2017-09-06","09:28:58","1");
INSERT INTO attendance_log VALUES("23","1","2017-09-06","09:28:59","1");
INSERT INTO attendance_log VALUES("24","1","2017-09-06","09:29:13","1");
INSERT INTO attendance_log VALUES("25","1","2017-09-06","09:29:14","1");
INSERT INTO attendance_log VALUES("26","1","2017-09-13","13:16:36","1");
INSERT INTO attendance_log VALUES("27","1","2017-09-13","13:16:43","1");
INSERT INTO attendance_log VALUES("28","1","2017-09-13","13:16:44","1");
INSERT INTO attendance_log VALUES("29","1","2017-09-13","13:16:45","1");
INSERT INTO attendance_log VALUES("30","1","2017-09-15","14:01:44","1");
INSERT INTO attendance_log VALUES("31","1","2017-09-15","14:01:48","1");
INSERT INTO attendance_log VALUES("32","1","2017-09-15","14:01:50","1");
INSERT INTO attendance_log VALUES("33","1","2017-09-15","14:02:15","1");
INSERT INTO attendance_log VALUES("34","1","2017-09-15","14:08:28","1");
INSERT INTO attendance_log VALUES("35","1","2017-09-15","14:16:38","1");
INSERT INTO attendance_log VALUES("36","1","2017-09-15","14:17:07","1");
INSERT INTO attendance_log VALUES("37","1","2017-09-15","14:17:18","1");
INSERT INTO attendance_log VALUES("38","2","2017-09-15","14:17:32","1");
INSERT INTO attendance_log VALUES("39","1","2017-09-22","08:00:18","1");
INSERT INTO attendance_log VALUES("40","1","2017-09-29","08:41:36","1");



DROP TABLE IF EXISTS audit_trail;

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `audit_type` varchar(255) NOT NULL,
  `audit_remarks` text NOT NULL,
  `audit_datetime` datetime NOT NULL,
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=latin1;

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



DROP TABLE IF EXISTS gradelevel;

CREATE TABLE `gradelevel` (
  `gradelevel_id` int(11) NOT NULL AUTO_INCREMENT,
  `gradelevel_code` varchar(60) NOT NULL,
  `gradelevel_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gradelevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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



DROP TABLE IF EXISTS gradelevel_subject;

CREATE TABLE `gradelevel_subject` (
  `level_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`level_subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO gradelevel_subject VALUES("1","1","1","1");
INSERT INTO gradelevel_subject VALUES("2","1","1","0");
INSERT INTO gradelevel_subject VALUES("3","5","1","1");
INSERT INTO gradelevel_subject VALUES("4","5","1","1");
INSERT INTO gradelevel_subject VALUES("5","5","6","1");



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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO outputs_actual VALUES("15","1","1","2","1","0","1","2","25.00","22.00","0.00","First Quiz","2017-07-26 20:38:02","0");
INSERT INTO outputs_actual VALUES("16","1","1","2","3","0","1","2","25.00","21.00","0.00","First Quiz","2017-07-26 20:38:02","0");
INSERT INTO outputs_actual VALUES("17","0","0","4","1","1","1","2","100.00","65.00","0.00","","2017-09-13 10:46:34","0");
INSERT INTO outputs_actual VALUES("18","0","0","4","3","1","1","2","100.00","54.00","0.00","","2017-09-13 10:46:34","0");
INSERT INTO outputs_actual VALUES("19","0","0","4","1","1","1","1","100.00","65.00","0.00","","2017-09-24 10:20:53","0");
INSERT INTO outputs_actual VALUES("20","0","0","4","3","1","1","1","100.00","54.00","0.00","","2017-09-24 10:20:53","0");
INSERT INTO outputs_actual VALUES("21","WW1","0","7","18","15","7","1","5.00","4.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("22","WW1","0","7","19","15","7","1","5.00","1.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("23","WW1","0","7","20","15","7","1","5.00","2.00","0.00","","2017-09-29 07:27:46","0");
INSERT INTO outputs_actual VALUES("24","WW1","0","7","22","15","7","1","5.00","5.00","0.00","","2017-09-29 07:27:46","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO outputs_final VALUES("0","4","3","1","2","1","71");
INSERT INTO outputs_final VALUES("1","4","1","1","2","1","83");



DROP TABLE IF EXISTS percentage_distribution;

CREATE TABLE `percentage_distribution` (
  `percentage_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `schoolyear_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `percent` decimal(3,2) NOT NULL,
  `equivalent` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`percentage_id`)
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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



DROP TABLE IF EXISTS student_section;

CREATE TABLE `student_section` (
  `student_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `schoolyear_id` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  PRIMARY KEY (`student_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
INSERT INTO student_section VALUES("31","21","14","7","0");
INSERT INTO student_section VALUES("32","22","0","7","0");
INSERT INTO student_section VALUES("33","22","15","7","0");
INSERT INTO student_section VALUES("34","23","0","7","0");
INSERT INTO student_section VALUES("35","22","14","7","1");
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1","13-007","9812803618","Dela Cruz","Juan","Dalisay","1997-04-06","09274383864","1");
INSERT INTO students VALUES("2","13-008","7845210","Parker","Peter","Benjamin","1997-07-06","2147483647","0");
INSERT INTO students VALUES("3","13-008","7845210","Parker","Peter","Benjamin","1997-07-06","2147483647","1");
INSERT INTO students VALUES("5","13-009","001 2348","Charton","Joseph","Fritz","2002-08-08","2147483647","0");
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



DROP TABLE IF EXISTS subjects;

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(255) NOT NULL,
  `archive_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO subjects VALUES("1","1ENG1","English 1","0");
INSERT INTO subjects VALUES("2","10PE1","Physical Education 1","0");
INSERT INTO subjects VALUES("3","1Literature","Literature","0");
INSERT INTO subjects VALUES("4","3Math4","Mathematics","0");
INSERT INTO subjects VALUES("5","8AP4","Araling Panlipunan","0");
INSERT INTO subjects VALUES("6","6Fil4","Filipino","0");
INSERT INTO subjects VALUES("7","Science","Science","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO teacher_classes VALUES("5","2","1","7","1","0","0");
INSERT INTO teacher_classes VALUES("6","3","7","7","1","0","0");
INSERT INTO teacher_classes VALUES("7","4","6","7","2","0","0");
INSERT INTO teacher_classes VALUES("8","4","7","7","1","0","0");
INSERT INTO teacher_classes VALUES("9","4","8","7","3","0","0");
INSERT INTO teacher_classes VALUES("10","4","8","8","3","0","0");
INSERT INTO teacher_classes VALUES("11","4","1","7","1","0","0");
INSERT INTO teacher_classes VALUES("12","2","1","7","0","1","0");
INSERT INTO teacher_classes VALUES("13","5","1","7","0","1","0");
INSERT INTO teacher_classes VALUES("14","9","5","7","2","0","0");
INSERT INTO teacher_classes VALUES("15","8","2","7","1","0","0");
INSERT INTO teacher_classes VALUES("16","5","6","7","4","0","0");
INSERT INTO teacher_classes VALUES("17","4","14","7","0","1","0");
INSERT INTO teacher_classes VALUES("18","7","15","7","0","1","0");
INSERT INTO teacher_classes VALUES("19","5","16","7","0","1","0");
INSERT INTO teacher_classes VALUES("20","8","17","7","0","1","0");
INSERT INTO teacher_classes VALUES("21","9","18","7","0","1","0");
INSERT INTO teacher_classes VALUES("22","8","14","7","1","0","0");
INSERT INTO teacher_classes VALUES("23","8","15","7","1","0","0");
INSERT INTO teacher_classes VALUES("24","8","16","7","1","0","0");
INSERT INTO teacher_classes VALUES("25","8","17","7","1","0","0");
INSERT INTO teacher_classes VALUES("26","8","18","7","1","0","0");
INSERT INTO teacher_classes VALUES("27","5","14","7","4","0","0");
INSERT INTO teacher_classes VALUES("28","5","15","7","4","0","0");
INSERT INTO teacher_classes VALUES("29","5","16","7","4","0","0");
INSERT INTO teacher_classes VALUES("30","5","17","7","4","0","0");
INSERT INTO teacher_classes VALUES("31","5","18","7","4","0","0");
INSERT INTO teacher_classes VALUES("32","7","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("33","4","14","6","3","0","1");
INSERT INTO teacher_classes VALUES("34","4","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("35","4","14","6","1","0","1");
INSERT INTO teacher_classes VALUES("36","4","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("37","4","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("38","4","14","6","1","0","1");
INSERT INTO teacher_classes VALUES("39","4","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("40","4","14","7","1","0","1");
INSERT INTO teacher_classes VALUES("41","4","14","6","1","0","1");
INSERT INTO teacher_classes VALUES("42","4","14","6","3","0","1");
INSERT INTO teacher_classes VALUES("43","4","14","7","3","0","0");
INSERT INTO teacher_classes VALUES("44","7","14","7","7","0","0");
INSERT INTO teacher_classes VALUES("45","7","15","7","7","0","0");
INSERT INTO teacher_classes VALUES("46","7","16","7","7","0","0");
INSERT INTO teacher_classes VALUES("47","7","17","7","7","0","0");
INSERT INTO teacher_classes VALUES("48","7","18","7","7","0","0");
INSERT INTO teacher_classes VALUES("49","4","15","7","3","0","0");
INSERT INTO teacher_classes VALUES("50","4","16","7","3","0","0");
INSERT INTO teacher_classes VALUES("51","4","17","7","1","0","0");
INSERT INTO teacher_classes VALUES("52","4","18","7","1","0","0");
INSERT INTO teacher_classes VALUES("53","9","14","7","6","0","0");
INSERT INTO teacher_classes VALUES("54","9","15","7","6","0","0");
INSERT INTO teacher_classes VALUES("55","9","16","7","6","0","0");
INSERT INTO teacher_classes VALUES("56","9","17","7","1","0","1");
INSERT INTO teacher_classes VALUES("57","9","17","7","6","0","0");
INSERT INTO teacher_classes VALUES("58","9","18","7","6","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO user_profile VALUES("1","1","Allen, Bartholomew Henry","","","0000-00-00","","ballen@gmail.com","");
INSERT INTO user_profile VALUES("2","2","Wells, Harrison James",", , ","Male","1979-05-01","Integrated Science, Physics","harrison.wells@gmail.com","9274383838");
INSERT INTO user_profile VALUES("3","3","Maglalang, Christine dela Cruz","Angeles City, , ","Female","1997-09-04","Programming","maglalangcristine@yahoo.com","09555778805");
INSERT INTO user_profile VALUES("4","4","Maglalang, Tin dela Cruz","Sapalibutad, Angeles City, , ","Female","1997-09-04","Literatire","maglalangchristine@gmail.com","09555778805");
INSERT INTO user_profile VALUES("5","5","Opalia, Remilyn Perla","132 Riviera St. Brgy. Ninoy Aquino, , ","Female","1998-03-17","Math","opalia.remilyn@gmail.com","09357597286");
INSERT INTO user_profile VALUES("6","6","Coronel, Wilburt Cca","CCA, , ","Male","1991-12-25","Networking","wiburtcoronel@gmail.com","09555778805");
INSERT INTO user_profile VALUES("7","7","Amio, Jethro Liwanag","Porac, , ","Male","1998-05-11","History","jethroamio@gmail.com","09758443202");
INSERT INTO user_profile VALUES("8","8","Carlos, Kate Canlas","Tabun, , ","Female","1997-09-28","English","katecarlos@gmail.com","09757857365");
INSERT INTO user_profile VALUES("9","9","Bautista, Ian Christopher Maunes","Tabun, , ","Male","1997-07-05","Arts","ianbautista@gmail.com","09066759895");



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



