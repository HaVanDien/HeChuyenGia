create database selectUniverAndJob CHARACTER set utf8;

create table user(
userid bigint not null PRIMARY key AUTO_INCREMENT ,
nameuser VARCHAR(255) NULL,
password VARCHAR(255) NULL,
fullname VARCHAR(255) NULL,
createddate TIMESTAMP null,
roleid bigint
);
CREATE table role(
roleid bigint not null PRIMARY key ,
name VARCHAR(255)
);
ALTER table user add CONSTRAINT  fk_user_role FOREIGN KEY (roleid) REFERENCES  role(roleid);

create table city(
codecity int not null,
namecity VARCHAR(255) NULL,
primary key (codecity)
);
create table university(
universityid varchar(100) not null PRIMARY key ,
nameUnversity VARCHAR(255) NULL,
codecity int not null
);
ALTER table university add CONSTRAINT  fk_uni_city FOREIGN KEY (codecity) REFERENCES  city(codecity);

create table academy(
academyid varchar(100) not null,
universityid varchar(100) not null,
nameAcademy VARCHAR(255) NULL,
socre int,
primary key (academyid)
);

ALTER table academy add CONSTRAINT  fk_uni_academy FOREIGN KEY (universityid) REFERENCES  university(universityid);
