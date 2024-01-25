/*1 : Sélectionner toutes les colonnes de la table SERV.*/
SELECT* from serv;
/*2 : Sélectionner d’une autre manière ces colonnes.*/
SELECT service, ville from serv;
/*3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV.*/
SELECT service, noserv from serv;
/*4 : Sélectionner toutes les colonnes de la table EMP.*/
SELECT* from emp;
/*5 : Sélectionner les emplois de la table EMP.*/
SELECT emploi from emp;
/*6 : Sélectionner les différents emplois de la table EMP.*/
SELECT DISTINCT emploi from emp;
/*7 : Sélectionner les employés du service N°3*/
SELECT emploi from emp  where noserv=3;
/*8 : Sélectionner les noms, prénoms, numéro d’employé, numéro de service de tous les techniciens.*/
SELECT noemp,nom,prenom,noserv from emp  where emploi='technicien';
/*9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2.*/
SELECT nom,noserv from emp  where noserv> 2;
/*10 : Sélectionner les noms, numéros de service de tous les services dont le numéro est inférieur ou égal à 2.*/
SELECT nom,noserv from emp  where noserv<= 2;
/*11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse.*/
SELECT nom,prenom from emp  where comm <= sal;
/*12 : Sélectionner les employés qui ne touchent jamais de commission.*/
SELECT nom,prenom from emp where comm is null;
/*13 : Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commissions.*/
SELECT nom,prenom from emp where comm >= 0;
/*14 : Sélectionner les employés qui ont un chef.*/
SELECT nom,prenom from emp where sup is not null;
/*15 : Sélectionner les employés qui n’ont pas de chef.*/
SELECT nom,prenom from emp where sup is null;
/*16 : Sélectionner les noms, emploi, salaire, numéro de service de tous les employés du service 5 qui gagnent plus de 20000 €.*/
SELECT nom,emploi,sal,noserv from emp where noserv=5 AND sal>20000;
/*17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou égal à 9500 €.*/
SELECT nom from emp where noserv=6 AND emploi='VENDEUR' AND sal>=9500;
/*18 : Sélectionner dans les employés tous les présidents et directeurs. Attention, le français et la logique sont parfois contradictoires.*/
SELECT emploi from emp where (emploi='president' OR emploi='directeur');
/*19 : Sélectionner les directeurs qui ne sont pas dans le service 3*/
SELECT emploi,noserv from emp where emploi='directeur' AND noserv!=3;
/*20 : Sélectionner les directeurs et « les techniciens du service 1 ».*/
SELECT emploi,noserv from emp where emploi='directeur' and (emploi='technicien' AND noserv=1);
/*21 : Sélectionner les « directeurs et les techniciens » du service 1.*/
SELECT emploi,noserv from emp where (emploi='directeur' OR emploi='technicien') AND noserv=1;
/*22 : Sélectionner les employés du service 1 qui sont directeurs ou techniciens.*/
SELECT emploi,noserv from emp where emploi='directeur' OR (emploi='technicien' AND noserv=1);
/*23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant dans le service 1.*/
SELECT emploi,noserv from emp where emploi!='directeur' AND emploi!='technicien' AND noserv=1;
/*24 : Sélectionner les employés qui sont techniciens, comptables ou vendeurs.*/
SELECT emploi from emp where emploi='comptable' OR emploi='technicien' or emploi='vendeur';
/*25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.*/
SELECT emploi from emp where emploi!='comptable' AND emploi!='technicien' AND emploi!='vendeur';
/*26 : Sélectionner les directeurs des services 2, 4 et 5.*/
SELECT emploi from emp where emploi='directeur' AND (noserv=2 OR noserv=4 OR noserv=5);
/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.*/
SELECT sup from emp where sup IS NOT NULL AND (noserv=2 OR noserv=4 OR noserv=6);
/*28 : Sélectionner les employés qui gagnent entre 20000 et 40000 euros, bornes comprises.*/
SELECT sal from emp where sal>2000 AND sal<40000;
/*29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.*/
SELECT sal from emp where  sal<2000 OR sal>40000;
/*30 : Sélectionner les employés qui ne sont pas directeur et qui ont été embauchés en 88.*/
SELECT * from emp where emploi !='directeur' AND embauche BETWEEN '1988-01-01' AND '1988-12-31';
/*31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.*/
SELECT emploi,noserv from emp where emploi='directeur' AND (noserv=2 OR noserv=3 OR noserv=4 OR noserv=5);
/*32 :Sélectionner les employés dont le nom commence par la lettre M.*/
SELECT* from emp where nom LIKE 'M%';
/*33 : Sélectionner les employés dont le nom se termine par T.*/
SELECT* from emp where nom LIKE '%t';
/*34 : Sélectionner les employés ayant au moins deux E dans leur nom.*/
SELECT* from emp where nom LIKE '%e%e%';
/*35 : Sélectionner les employés ayant exactement un E dans leur nom.*/
SELECT* 
from emp 
where nom LIKE '%e%' AND nom NOT LIKE '%e%e%';
/*36 : Sélectionner les employés ayant au moins un N et un O dans leur nom.*/
SELECT* 
from emp 
where nom LIKE '%n%o%';
/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/
SELECT* 
from emp 
where nom LIKE '_____n';
/*38 : Sélectionner les employés dont la troisième lettre du nom est un R.*/
SELECT* 
from emp 
where nom LIKE '__r%';
/*39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.*/
SELECT* 
from emp 
where nom NOT LIKE '_____';
/*40 : Trier les employés (nom, prénom, n° de service, salaire) du service 3 par ordre de salaire croissant.*/
SELECT nom,prenom,noserv,sal 
FROM emp 
WHERE noserv='3' AND noserv ORDER BY sal;
/*41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de salaire décroissant.*/
SELECT * 
FROM emp 
WHERE noserv = '3'
ORDER BY sal;
/*42 : Idem en indiquant le numéro de colonne à la place du nom colonne.*/
SELECT nom as '1',prenom as '2', sal as '3', noserv as '4'
FROM emp 
WHERE noserv = '3'
ORDER BY sal;
/*43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.*/
SELECT nom, prenom, noserv, sal, emploi
FROM emp 
ORDER BY emploi,sal;
/*44 : Idem en indiquant les numéros de colonnes.*/
SELECT nom as '1',prenom as '2',noserv as '3',sal as '4',emploi as '5'
FROM emp 
ORDER BY emploi,sal;
/*45 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission.*/
SELECT nom,prenom,noserv,comm,emploi
FROM emp 
ORDER BY comm;
/*46 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre décroissant de commission, en considérant que celui dont la commission est nulle ne touche pas de commission.*/
SELECT nom,prenom,noserv,comm,emploi
FROM emp 
ORDER BY comm DESC;
/*les opérateur de jointure*/
/*47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés.*/
SELECT nom,prenom,emploi,service 
FROM emp 
INNER JOIN serv ON emp.noserv=serv.noserv;
/*48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés.*/
SELECT nom,prenom,emploi,emp.noserv,service 
FROM emp 
INNER JOIN serv ON emp.noserv=serv.noserv;

SELECT nom,prenom,emploi,serv.noserv,service 
FROM emp 
INNER JOIN serv ON emp.noserv=serv.noserv;
/*49 : Idem en utilisant des alias pour les noms de tables.*/
SELECT nom,prenom,emploi,temp.noserv,service 
FROM emp AS temp 
INNER JOIN serv as tserv ON temp.noserv=tserv.noserv;

SELECT nom,prenom,emploi,tserv.noserv,service 
FROM emp AS temp 
INNER JOIN serv as tserv ON temp.noserv=tserv.noserv;
/*50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés*/
SELECT nom,emploi,service,ville,tserv.noserv 
FROM emp AS temp 
INNER JOIN serv as tserv ON temp.noserv=tserv.noserv;

SELECT nom,emploi,service,ville,temp.noserv 
FROM emp AS temp 
INNER JOIN serv as tserv ON temp.noserv=tserv.noserv;
/*51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre nom employés, noms supérieurs. */
SELECT temp.nom,temp.embauche,temp2.nom,temp2.embauche 
FROM emp AS temp 
LEFT OUTER JOIN emp as temp2 ON temp.noemp = temp2.sup
WHERE NOT temp.embauche < temp2.embauche;
/*52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms des techniciens du service 1 » avec un UNION.*/
SELECT prenom FROM emp WHERE emploi='directeur' AND noserv='1'
UNION
SELECT prenom FROM emp WHERE emploi='technicien' AND noserv='1';
/*53 : Sélectionner les numéros de services n’ayant pas d’employés sans une jointure externe*/
/*moussa*/
select noserv
from serv 
where noserv not in (select distinct noserv from emp);

/*54 : Sélectionner les services ayant au moins un employé.*/
select service
from serv 
where noserv in (select distinct noserv from emp);
/*55 : Sélectionner les employés qui travaillent à LILLE.*/
select ville
from serv 
where noserv in (select distinct noserv from emp WHERE ville='lille');
/*56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.*/
SELECT sup,nom 
FROM emp 
WHERE sup='1300' AND nom!='dubois';
/*57 : Sélectionner les employés embauchés le même jour que DUMONT.*/
SELECT nom,embauche 
FROM emp 
WHERE embauche='1987-10-25' AND nom!='dumont';
/*58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches.*/
SELECT nom,embauche 
FROM emp 
WHERE embauche<'1987-10-25' AND nom!='minet'
ORDER BY embauche;
/*59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)*/
/*moussa*/
select nom, prenom, emploi, embauche
from emp
where embauche<(select min(embauche) 
           from emp
           where noserv=6)
order by embauche;
/*60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.*/
select nom, prenom, sal, embauche
from emp
where sal<(select min(sal) 
           from emp
           where noserv=3)
order by sal;
/*61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des personnes travaillant dans la même ville que HAVET.*/
SELECT nom, emp.noserv,emploi,sal
FROM emp
INNER JOIN serv on emp.noserv=serv.noserv
WHERE ville IN (select ville
from emp
INNER JOIN serv on emp.noserv=serv.noserv
where nom='havet');
/*62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3.*/
SELECT *
FROM emp
WHERE emploi IN
(select emploi
from emp
where noserv='3') AND noserv='1';
/*63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/
SELECT *
FROM emp
WHERE emploi 
NOT IN (select emploi
from emp
where noserv='3') AND noserv='1';
/*64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un salaire supérieur à celui de CARON.*/
SELECT nom,sal,emploi
FROM emp
WHERE emploi IN (select emploi
from emp
where nom='CARON') AND sal > (select sal
from emp
where nom='CARON');
/*65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES.*/
SELECT *
FROM emp
WHERE emploi IN (SELECT emploi
FROM emp
INNER JOIN serv ON emp.noserv=serv.noserv
WHERE service='ventes') AND noserv='1';
/*66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms.*/
*SELECT *
FROM serv
WHERE emploi IN (SELECT emploi 
                 FROM emp
                 WHERE nom='RICHARD') AND ville='lille';*
/*67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/
select * 
from emp as e 
WHERE sal > (select AVG(sal) 
             from emp as m 
             where e.noserv = m.noserv) 
ORDER BY noserv ;
/*68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES. ( année -> oracle : to_char(embauche,’YYYY’)> MYSQL: DATE_FORMAT(embauche,’%Y’)*/
SELECT emp.* 
from emp 
INNER JOIN serv on emp.noserv = serv.noserv 
where  DATE_FORMAT(embauche, '%Y') IN (select DATE_FORMAT(embauche, '%Y')  
                                       FROM emp inner JOIN serv ON serv.noserv = emp.noserv where service = 'ventes')  and service = 'INFORMATIQUE' ;
/*69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le même service que leur supérieur hiérarchique direct.*/

/*70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des subalternes, trier le résultat suivant le revenu décroissant.*/

/*71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants.*/
SELECT NOM, emploi, ROUND(sal/12, 2) AS revenu  
FROM emp 
ORDER BY revenu DESC;
/*72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire.*/
SELECT nom,emploi,comm,sal
FROM emp
WHERE comm>=2*sal
/*74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs.*/
SELECT nom,emploi,service,round(sal, 0) as sal
FROM emp
INNER JOIN serv ON emp.noserv=serv.noserv
/*75*/
SELECT nom, prenom, emploi, sal, comm, ROUND(sal/12, 2) 
FROM emp 
WHERE noserv = 3 OR noserv = 5 OR noserv = 6;
/*76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL.*/
SELECT SAL AS SALAIRE, COMM AS COMMISSIONS, SAL+IFNULL(COMM,0) AS GAIN_MENSUEL
FROM emp
WHERE noserv IN (3, 5, 6)
/*77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL*/
SELECT SAL AS SALAIRE, COMM AS COMMISSIONS, SAL+IFNULL(COMM,0) AS GAINMENSUEL
FROM emp
WHERE noserv IN (3, 5, 6)
/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.*/
SELECT nom, emploi, sal / 22 AS salaire_journalier, sal / (22 * 8) 
AS salaire_horaire,ROUND(sal / 22, 2) 
AS salaire_journalier_arrondi,ROUND(sal / (22 * 8), 2) 
AS salaire_horaire_arrondi
FROM emp
WHERE noserv IN (3, 5, 6)
/*79 : Idem sans arrondir mais en tronquant.*/
SELECT nom, emploi, 
TRUNCATE(sal / 22, 0) AS salaire_journalier, 
TRUNCATE(sal / (22 * 8), 0) AS salaire_horaire
FROM emp
WHERE noserv IN (3, 5, 6)
/*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale.*/
SELECT CONCAT(SUBSTRING(Service,1,1),' ----> ',Ville) AS Service_Ville
FROM emp
INNER JOIN serv ON emp.noserv=serv.noserv
/*90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée embauche.*/
SELECT embauche 
FROM emp
WHERE DATE_FORMAT(SYSDATE(),'%y-%m-%d');
/*92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month(abv) yy'*/
SELECT embauche,DATE_FORMAT(embauche,'%W,%d,%b,%Y')
FROM emp
WHERE noserv='6';
/*93 : Même chose en écrivant la colonne embauche sous la forme ‘yy month(abv) dd'*/
SELECT embauche,DATE_FORMAT(embauche,'%W,%d,%M,%Y')
FROM emp
WHERE noserv='6';
/*115 : Afficher l'emploi, l'effectif, le salaire moyen pour tout type d'emploi ayant plus de deux représentants.*/

/*116 : Sélectionner les services ayant au mois deux vendeurs.*/
SELECT service
FROM emp
INNER JOIN serv ON emp.noserv=serv.noserv
WHERE 'vendeu'>'1';
/*121 : Augmenter de 10% ceux qui ont un salaire inférieur au salaire moyen. Valider.*/
UPDATE emp
SET sal = sal * 1.1
WHERE sal < (SELECT AVG(sal) 
                 FROM emp);
/*122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous désirez. Valider.*/
INSERT INTO emp (nom,prenom,embauche,sal) 
VALUES ('ziouche','lyesse',CURDATE(),5000); /*erreur Duplicata du champ '0' pour la clef 'PRIMARY'*/
/*123 : Effacer les employés ayant le métier de SECRETAIRE. Valider.*/
DELETE FROM emp
WHERE emploi = 'SECRETAIRE'
LIMIT 1;
/*124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99,supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés.Valider.*/
INSERT INTO emp (nom, prenom, noemp, embauche, sup, comm, noserv, sal)
VALUES ('MOYEN','Toto',1010,'1999-12-12',1000,NULL,1,AVG(sal)); /*Erreur */
/*125 : Supprimer tous les employés ayant un A dans leur nom. Faire un SELECT sur votre table pour vérifier cela. Annuler les modifications et vérifier que cette action s’est biendéroulée.*/
DELETE FROM emp
WHERE nom LIKE '%A%';
SELECT * FROM emp;
/*126 : Les verrous. Supprimer l’employé créé à l’exercice 122 de votre voisin. Ne pas valider. Vérifiez tous les deux le contenu de la table. Demander à votre voisin d’augmenter son propre salaire de 1000 €. Valider la suppression. Chacun vérifie l’action. Refaire l’exercice en échangeant les rôles.*/

/*127 : Créer les tables EMP1 et SERV1 comme copie des tables EMP et SERV.*/
CREATE TABLE EMP1 AS SELECT * FROM EMP;
CREATE TABLE SERV1 AS SELECT * FROM SERV;
/*128 : Vérifier que la table PROJ n’existe pas.*/
SELECT * FROM information_schema.tables WHERE table_name = 'PROJ';
/*129 :
 Créer une table PROJET avec les colonnes suivantes:
numéro de projet (noproj), type numérique 3 chiffres, doit contenir une valeur. nom de projet (nomproj), type caractère, longueur = 10
budget du projet (budget), type numérique, 6 chiffres significatifs et 2 décimales.
 Vérifier l'existence de la table PROJET.
 Faire afficher la description de la table PROJET.
 C’était une erreur!!! Renommez la table PROJET en PROJ*/
CREATE OR REPLACE TABLE PROJET (
  noproj NUMERIC(3) NOT NULL,
  nomproj VARCHAR(10),
  budget NUMERIC(8, 2)
);
SELECT * 
FROM projet 
WHERE 'projet';
DESCRIBE projet;
ALTER TABLE projet
RENAME TO PROJ;
/*130 :
 Insérer trois lignes de données dans la table PROJ: numéros des projets = 101, 102,
103
noms des projets = alpha, beta, gamma budgets = 250000, 175000, 950000
 Afficher le contenu de la table PROJ.
 Valider les insertions faites dans la table PROJ.*/

/*131 :
Modifier la table PROJ en donnant un budget de 1.500.000 Euros au projet 103.
Modifier la colonne budget afin d'accepter des projets jusque 10.000.000.000 d’EurosRetenter la modification demandée 2 lignes au dessus*/
