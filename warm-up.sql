-- Online SQL Editor to Run SQL Online.
-- Use the editor to create new tables, insert data and all other SQL operations.
  /*
Ko darīt?
1. Dodies uz https://www.programiz.com/sql/online-compiler/
2. Pārkopē visu šīs datnes saturu uz Programiz SQL kompilatoru.
3. Izpildi tālāk dotos uzdevumus.
4. Kad viss pabeigts, pārkopē rezultātu SQL datnē un skolo.lv iesniedz SQL datni!
*/

-- 1. Izvēlies visus ierakstus no tabulas Orders.

--SELECT * FROM orders;

/* 2. Izveido SQL vaicājumu, kurš atgriež minimālo pasūtīto
      preču skaitu no tabulas Orders un pārsauc rezultātu
      par minAmount */

--SELECT MIN(amount) as "minAmount" FROM orders;

/* 3. Izveido SQL vaicājumu, kurš atgriež visu to preču
      nosaukumu un skaitu, kuras pasūtītas mazāk nekā 500
      vienības no tabulas Orders */

SELECT item, amount FROM orders
WHERE amount<500;

/* 4. Izveido SQL vaicājumu, kurš atgriež to klientu vārdu
      un uzvārdu, kuru uzvārds beidzas ar burtu "e" */

SELECT first_name, last_name
FROM customers
WHERE last_name LIKE "%o_";


-- DANGER ZONE!
-- Tālākos piemērus skatīsim tikai šodien. Varbūt jau vari izpildīt? :)

/* 5. Izveido SQL vaicājumu, kurš atgriež visu informāciju
      par klientiem, sakārtotu augošā secībā pēc vecuma */

SELECT * FROM customers ORDER BY age ASC, first_name ASC;

/* 6. Izveido SQL vaicājumu, kurš atgriež klientu skaitu
      no katras valsts, parādot arī šo valsti */

SELECT country, COUNT(*)
FROM customers
GROUP BY country;