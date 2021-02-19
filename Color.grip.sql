Create Database if not exists grip;

use grip;

Drop table if exists colors;

Create table colors (
    id INT (10),
    naam varchar(30),
    color int(10)
);

insert into colors
    (id, naam, color)
values
    (1, '#000000', 1),
    (1, '#FF9B00', 1),
    (1, '#FFFF00', 1),
    (1, '#00FF00', 1),
    (1, '#00FFFF', 1),
    (1, '#0000FF', 1),
    (1, '#FF00FF', 1),
    (1, '#FF0000', 1),
    (1, '#FF8F00', 1),
    (1, '#CDFF00', 1),
    (1, '#00AEFF', 1),
    (1, '#7800FF', 1),
    (1, '#FF0087', 1),
    (1, '#FF7400', 1),
    (1, '#51BE00', 1),
    (1, '#BE0000', 1),
    (1, '#00B2BE', 1),
    (1, '#1700BE', 1);

select * FROM colors;
