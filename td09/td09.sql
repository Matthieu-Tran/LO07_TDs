-- Q01
select * from vin;

--Q02
select cru, annee from vin;

--Q03
select cru, annee from vin where annee = 1976;

--Q04
select * from vin order by cru;

--Q05
select distinct cru from vin order by cru;

--Q06
select * from vin where degre between '11' and '12';

--Q07
select * from vin where cru like 'C%' and annee = 1980 order by degre

--Q08
select count(id) as nbCru from vin;

--Q09
select count(distinct cru) as nbCru from vin;

--Q10
select avg(degre) as dgMoyen from vin;

--Q11
select max(degre) as dgMax from vin;

--Q12
select * 
from vin 
where degre > (select avg(degre) from vin)
order by degre, annee;

--Q13
select *
from producteur
where prenom = '';

--Q14
select region
from producteur;

--Q15
select distinct region
from producteur
order by region;

--Q16
select nom, prenom
from producteur
where region not in ('Corse', 'Beaujolais', 'Bourgogne', 'Rhône')
order by nom, prenom;

--Q17
select region, count(*) as nbProducteurs
from producteur

--Q18
select SUM(rec.quantite) as quantite_totale
from vin v
inner join recolte rec on v.id = rec.vin_id
where v.degre = 12;

--Q19
select p.nom, p.region, SUM(r.quantite) as quantite_totale
from producteur p
inner join recolte r on p.id = r.producteur_id
inner join vin v on r.vin_id = v.id
where v.cru = 'Etoile'
group by p.nom, p.region;

--Q20
SELECT region, COUNT(DISTINCT id) as nb_producteurs
FROM producteur
WHERE region IN ('Savoie', 'Jura')
GROUP BY region;

--Q21
SELECT nom, prenom
FROM producteur p
INNER JOIN recolte r ON p.id = r.producteur_id
GROUP BY nom, prenom
HAVING COUNT(DISTINCT vin_id) >= 3;

--Q22
ALTER TABLE vin ADD bio BOOLEAN NOT NULL DEFAULT FALSE;

--Q23
DESCRIBE vin;

--Q24
UPDATE vin SET bio = TRUE WHERE annee = 1980;

--Q25
SELECT bio, COUNT(*) AS nb_vins FROM vin GROUP BY bio;

--Q26
INSERT INTO vin (id, cru, annee, degre, bio) VALUES (1000, 'Champagne', 2020, 7, FALSE);

--Q27
SELECT * FROM vin WHERE id = 1000;

--Q28
-- Il y a une erreur car l'id doit être unique pour chaque vin

--Q29
SELECT p1.id AS id1, p1.nom AS nom1, p2.id AS id2, p2.nom AS nom2, p1.region AS region
FROM producteur p1, producteur p2
WHERE p1.region = 'Alsace' AND p2.region = 'Alsace' AND p1.id < p2.id;

--Q30
DROP TABLE vin;

ALTER TABLE recolte DROP FOREIGN KEY recolte_ibfk_1;












