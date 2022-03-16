use 2021F_patpanka; 

Create table R_Staff(
	
		sid INT AUTO_INCREMENT NOT NULL, 
        fname VARCHAR(225) NOT NULL, 
		lName VARCHAR(225) NOT NULL,
		pagerNum INT NOT NULL, 
		position VARCHAR(25) NOT NULL, 
		PRIMARY KEY(sid)
);

    
	create table R_StaffCredentials(
	sid INT NOT NULL, 
    login VARCHAR(225) NOT NULL, 
    password VARCHAR(225) NOT NULL, 
	FOREIGN KEY (sid) REFERENCES R_Staff(sid)
); 

Drop table Staff_R;
drop table R_StaffCredentials;


INSERT Into R_Staff(aid, login, password)
Values(1, "jarodberg@gmail.com","abcd");

INSERT Into R_Staff(fname,lname,pagerNum,position)
Values( "John","Doe", 5827524, "admin");

INSERT Into R_Staff(fname,lname,pagerNum,position)
Values( "Jess","Daniel", 2957392, "nurse");

INSERT Into R_Staff(fname,lname,pagerNum,position)
Values( "Vick","Patel", 9398520, "doctor");

INSERT Into R_StaffCredentials(sid,login,password)
Values( 1,"JohnDoe", "1234" );


INSERT Into R_StaffCredentials(sid,login,password)
Values( 2,"JessDaniel", "5678" );


INSERT Into R_StaffCredentials(sid,login,password)
Values( 3,"VickPatel", "9012" );

select * from R_Staff;

select * from R_StaffCredentials;


