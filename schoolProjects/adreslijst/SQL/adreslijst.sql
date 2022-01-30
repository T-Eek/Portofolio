Create Database if not exists adreslijst;

use adreslijst;

Drop table if exists adressen;

Create table adressen (

voornaam varchar(50),
achternaam varchar(50),
adres varchar(50),
huisnummer varchar(10),
woonplaats varchar(50),
postcode varchar(6)
);

insert into adressen
    (voornaam, achternaam, adres, huisnummer, woonplaats, postcode)
values
    (50, 50,  50, 10, 50, 6),
        (50, 50,  50, 10, 50, 6),
            (50, 50,  50, 10, 50, 6),
                (50, 50,  50, 10, 50, 6);
