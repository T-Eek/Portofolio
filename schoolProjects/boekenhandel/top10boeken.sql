Create Database if not exists boekwinkel;

use boekwinkel;

Drop table if exists boeken;

Create table boeken (
    ID int(50),
    Titel varchar(50),
    Auteur varchar(50),
    Uitgever varchar(50),
    Aantalpaginas varchar(50),
    Image varchar(400),
    Taal varchar(50),
    Nieuw varchar(50),
    Samenvatting longtext,
    EAN varchar(50),
    Top10 int(50),
    Prijs decimal
);

insert into boeken
    (ID, Titel, Auteur, Uitgever, Aantalpaginas,
     Image, Taal, Nieuw, Samenvatting, EAN, Top10, Prijs)
values
    (1, 'Kleuren van waarheid', 'Tamera Alexander', 'Uitgeverij van Wijnen', '500 paginas', 'afbeelding/kleuren_waarheid.jpg', 'Nederlands', 'nieuw', '#', 9789051945980, 1, 21),
(2, 'Aangespoeld geluk', 'Tonja Versluis-Markestein', 'Erdee Media Groep – Uitgeverij de Banier', '352 paginas', 'afbeelding/aangespoeld-geluk.jpg', 'Nederlands', 'nieuw', '#', 9789087184889, 2, 17.95),
(3, 'Yes! Papa gaat trouwen', 'Mirjam Schippers', 'Erdee Media Groep – Uitgeverij de Banier', '304 paginas', 'afbeelding/we-gaan-trouwen.jpg', 'Nederlands', 'nieuw', '#', 9789087184674, 3, 13.95),
(4, 'God is altijd bij mij', 'Pieter Both', 'Ark Media', '160 paginas', 'afbeelding/god-is-bij-mij.jpg', 'Nederlands', 'nieuw', '#', 9789033835919, 4, 12.99),
(5, 'Regenboog in de duisternis', 'Kristen Heitzmann', 'Kokboekencentrum Fictie', 'E-book', 'afbeelding/regenboog-in-duisternis.jpg', 'Nederlands', 'nieuw', '#', 9789029730952, 5, 23.99),
(6, 'Een missie vol gevaar', 'Regina Scott', 'Uitgeverij de Parel', '300 paginas', 'afbeelding/gevaarlijke-missie.jpg', 'Nederlands', 'nieuw', '#', 9789493208230, 6, 9.99),
(7, 'De duikende volleybalster', 'Henriët Koornberg-Spronk', 'Kokboekencentrum Jeugd', '208 paginas', 'afbeelding/duikende-volleybalster.jpg', 'Nederlands', 'nieuw', '#', 9789026624537, 7, 15.99),
(8, 'Stille tijd voor vrouwen', 'C.H. Spurgeon', 'Erdee Media Groep – Uitgeverij de Banier', '376 paginas', 'afbeelding/stille-tijd-voor-vrouwen.jpg', 'Nederlands', 'nieuw', '#', 9789087184612 , 8, 19.95),
(9, 'Wapens in e Westhoek', 'Daan van Oostenbrugge', 'Erdee Media Groep – Uitgeverij de Banier', '72 paginas', 'afbeelding/wapens-in-westhoek.jpg', 'Nederlands', 'nieuw', '#', 9789087184568, 9, 7.95),
(10, 'Koninklijk rijk', 'André F. Troost', 'Kokboekencentrum Non-Fictie', '96 paginas', 'afbeelding/koninklijk-rijk.jpg', 'Nederlands', 'nieuw', '#', 9789043535670, 10, 19),
(11, 'Koninklijk rijk', 'André F. Troost', 'Kokboekencentrum Non-Fictie', '96 paginas', 'afbeelding/koninklijk-rijk.jpg', 'Nederlands', 'nieuw', '#', 9789043535670, 11, 19),
(12, 'Koninklijk rijk', 'André F. Troost', 'Kokboekencentrum Non-Fictie', '96 paginas', 'afbeelding/koninklijk-rijk.jpg', 'Nederlands', 'nieuw', '#', 9789043535670, 11, 19),
(13, 'Koninklijk rijk', 'André F. Troost', 'Kokboekencentrum Non-Fictie', '96 paginas', 'afbeelding/koninklijk-rijk.jpg', 'Nederlands', 'nieuw', '#', 9789043535670, 11, 19),
(14, 'Koninklijk rijk', 'André F. Troost', 'Kokboekencentrum Non-Fictie', '96 paginas', 'afbeelding/koninklijk-rijk.jpg', 'Nederlands', 'nieuw', '#', 9789043535670, 11, 19),
(15, 'Koninklijk rijk', 'André F. Troost', 'Kokboekencentrum Non-Fictie', '96 paginas', 'afbeelding/koninklijk-rijk.jpg', 'Nederlands', 'nieuw', '#', 9789043535670, 11, 19);




SELECT * FROM boeken;
