DROP DATABASE AviationWellbeingJK;
CREATE DATABASE AviationWellbeingJK;
CREATE TABLE AviationWellbeingJK.Ketofoods(
    id integer not null auto_increment unique,
    country varchar(70),
    ketofood varchar(70),
    price double(5,2),
    primary key (id)
);
INSERT INTO AviationWellbeingJK.Ketofoods(
         country 
        ,ketofood
        ,price
)
VALUES
('Italy','Olive Oil, Mozzarella, Prosciutto, Zucchini, Eggplant', 250.00)
,('Spain', 'sardine, beef, lamb, pork, poultry, seafood',150.00)
,('Portugal', 'Leafy greens, bell peppers, zucchini, asparagus, broccoli',200.00)
,('Qatar', 'Coconut oil, dark chocolate, Camel milk, dates, hummus',150.00)
,('UAE','Lamb, beef, poultry, seafood',250.00)
;


CREATE TABLE AviationWellbeingJK.CityPrayerTime(
    id integer not null auto_increment unique,
    City varchar(70),
    Local_PrayerTime TIME(0),
    Prayer_Name varchar(70),

    primary key (id)
);
INSERT INTO AviationWellbeingJK.CityPrayerTime(
         City 
        ,Local_PrayerTime
        ,Prayer_Name
)
VALUES
('Milan', '09:10:00', 'Fajr')
,('Madrid','09:10:00', 'Dhur')
,('Rio de Janeiro', '17:10:00', 'Asr')
,('Doha', '23:10:00','Magrib')
,('Dubai','22:10:00', 'Isha')
,('Melbourne', '07:10:00', 'Fajr')
,('California','12:10:00', 'Dhur')
;



CREATE TABLE AviationWellbeingJK.CityTemperature(
    id integer not null auto_increment unique,
    City varchar(70),
    Temperature INT,
    primary key (id)
);
INSERT INTO AviationWellbeingJK.CityTemperature(
         City
        ,Temperature
)  
VALUES
('Milan', 8 )
,('Madrid', 8 )
,('Rio de Janeiro', 23 )
,('Doha', 19 )
,('Dubai', 19 )
,('Melbourne', 17 )
,('California', 11 )
;