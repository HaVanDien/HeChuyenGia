create table company(
companyid varchar(100) not null PRIMARY key ,
companyname VARCHAR(255) NULL,
codecity int not null
);
ALTER table company add CONSTRAINT  fk_company_city FOREIGN KEY (codecity) REFERENCES  city(codecity);

create table job(
jobid varchar(100) not null PRIMARY key ,
companyid varchar(100)not null,
jobname varchar(200) not null,
education varchar(200),
expectedposition varchar(200),
experience varchar(200),
languages varchar(200),
sex varchar(50),
salary int
);
ALTER table job add CONSTRAINT  fk_company_job FOREIGN KEY (companyid) REFERENCES  company(companyid);