use library;
-- show tables;
-- drop table books;
 -- create table books(bid varchar(5) primary key,bookname varchar(35),author varchar(25),edition varchar(7),status varchar(15),quantity int ,department varchar(5));
/*insert into books (bid,bookname,author,edition,status,quantity,department) values
('100','Applied_chemistry','A.K.HAGHI','5','available',5,'chem'),
('101','Chemical_Reaction_Engineering','OCTAVE LEVENSPIEL','3','available',3,'chem'),
('102','Nanoparticles_for_Catalysis','HERMENEGILDO','2','available',8,'chem'), 
('103','Engineering_Hydrology','K.SUBRAMNAYA','3','available',18,'civil'),
('104','CONCRETE_TECHNOLOGY','M.S.SHETTY','1','available',1,'civil'),
('105','strength_materials','R.K.BANSAL','4','available',20,'civil');
insert into books (bid,bookname,author,edition,status,quantity,department) values
('106','C_Programming','DENNIS M.RITCHE','2','available',5,'cse'),
('107','DBMS','HENRY F.KORTH','7','available',13,'cse'),
('108','Algorithms','ELLIS HOROWITZ','1','available',18,'cse'), 
('109','signal&sytems','ALAN V.OPPPENHEIUM','2','available',12,'ece'),
('110','VERILOG','SAMIR PALNITKAR','5','available',4,'ece'),
('111','CONTROL_SYSTEM','M.GOPAL','4','available',30,'ece');
insert into books (bid,bookname,author,edition,status,quantity,department) values
('112','Electrical_Machines','S.K.SAHADEV','3','available',5,'eee'),
('113','Electronics_Engineering','S.K.BATTACHARYA','4','available',5,'eee'),
('114','Fundamentals_of_Electric_Circuits','CHARLES K. ALEXANDER','4','available',15,'eee'), 
('115','Machine_Drawing','K.L.NARAYANA','3','available',1,'mech'),
('116','Mechanics_of_Solids','S.S. BHAVIKATTI','7','available',34,'mech'),
('117','Thermodynamics_an_engineering','YUNUS A. CENGEL','9','available',34,'mech');
