CREATE Database pi2;
USE pi2;

CREATE TABLE `assignment` (
                              `id` int(11) NOT NULL AUTO_INCREMENT,
                              `Assignmentid` int(11) NOT NULL,
                              `file` varchar(100) NOT NULL,
                              `type` varchar(100) NOT NULL,
                              `size` int(11) NOT NULL,
                              `username` varchar(30) NOT NULL,
                              `Firstname` varchar(40) NOT NULL,
                              `Lastname` varchar(40) NOT NULL,
                              `Department` varchar(10) NOT NULL,
                              `Year` int(11) NOT NULL,
                              `Subject` varchar(100) NOT NULL,
                              `Date` date NOT NULL,
                              PRIMARY KEY (`id`)
);


CREATE TABLE `faculty` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `Username` varchar(30) NOT NULL,
                           `Email_id` varchar(50) NOT NULL,
                           `Password` varchar(32) NOT NULL,
                           `Firstname` varchar(50) NOT NULL,
                           `Lastname` varchar(50) NOT NULL,
                           `Gender` varchar(10) NOT NULL,
                           `Department` varchar(10) NOT NULL,
                           `Designation` varchar(100) NOT NULL,
                           `Date_of_birth` date NOT NULL,
                           `College` varchar(100) NOT NULL,
                           `Address` varchar(100) NOT NULL,
                           `Contact` varchar(11) NOT NULL,
                           `Date_of_joining` date NOT NULL,
                           `Higherstudies1` varchar(100) NOT NULL,
                           `Higherstudies2` varchar(100) NOT NULL,
                           `Specialization` varchar(500) NOT NULL,
                           `Graduateteach` varchar(1000) NOT NULL,
                           `PGteach` varchar(1000) NOT NULL,
                           PRIMARY KEY (`id`)
) ;


CREATE TABLE `student` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `Username` varchar(30) NOT NULL,
                           `Email_id` varchar(100) NOT NULL,
                           `Password` varchar(32) NOT NULL,
                           `Firstname` varchar(40) NOT NULL,
                           `Lastname` varchar(40) NOT NULL,
                           `Gender` varchar(10) NOT NULL,
                           `Department` varchar(10) NOT NULL,
                           `Year` int(11) NOT NULL,
                           `Date_of_birth` date NOT NULL,
                           `College` varchar(100) NOT NULL,
                           `Address` varchar(100) NOT NULL,
                           `Year_of_passing` int(11) NOT NULL,
                           `Intermediate` varchar(200) NOT NULL,
                           `About` varchar(500) NOT NULL,
                           `Contact` varchar(11) NOT NULL,
                           PRIMARY KEY (`id`)
);


CREATE TABLE `submission` (
                              `id` int(11) NOT NULL AUTO_INCREMENT,
                              `Assignmentid` int(11) NOT NULL,
                              `file` varchar(100) NOT NULL,
                              `type` varchar(100) NOT NULL,
                              `size` int(11) NOT NULL,
                              `Username` varchar(30) NOT NULL,
                              `Firstname` varchar(50) NOT NULL,
                              `Lastname` varchar(50) NOT NULL,
                              `Department` varchar(10) NOT NULL,
                              `Year` int(11) NOT NULL,
                              `Subject` varchar(100) NOT NULL,
                              `Date` date NOT NULL,
                              `Email_id` varchar(100) NOT NULL,
                              `Points` int ,
                              PRIMARY KEY (`id`)
) ;
