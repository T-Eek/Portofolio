Create Database if not exists bestevaer;

use bestevaer;

Drop table if exists schepen;

Create table schepen (
    id int(10),
    naam varchar(30),
    Code int(10),
    gewicht int(10),
    Maxlading int(10),
    Maxgewicht int(10),
    volume int(10)
);

insert into schepen
    (id, naam, Code, gewicht, Maxlading, Maxgewicht, volume)
values
    (1, 'Test schip', 100, 1, 1, 1, 1),
    (2, 'HERMES', 1, 5809, 1, 1, 3806),
    (3, 'LUCKY STAR', 2, 6800 , 1, 1, 4178),
    (4, 'NS ANGELA', 3, 5714, 1, 1, 3806),
    (5, 'SABRINA', 4, 10030, 1, 1, 6278),
    (6, 'TRIUMPH IV', 5, 7100, 1, 1, 4039),
    (7, 'schip7', 7, 1000, 1, 1, 5100),
    (8, 'schip8', 8, 5000, 1, 1, 3800),
    (9, 'schip9', 9, 6800 , 1, 1, 4200),
    (10, 'schip10', 10, 5700, 1, 1, 3800),
    (11, 'schip11', 11, 10000, 1, 1, 6300),
    (12, 'schip12', 12, 7100, 1, 1, 4100);


select * FROM schepen;
