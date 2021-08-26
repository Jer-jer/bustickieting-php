CREATE SCHEMA busdb;
USE busdb;

CREATE TABLE passenger(
    ticket int,
    passname varchar(100),
    dest varchar(100),
    total_fare float,
    bus varchar(10),
    PRIMARY KEY (ticket)
);

CREATE TABLE totalSales(
    id int,
    totalsales float
);

INSERT INTO totalSales VALUES (1, 0.00);