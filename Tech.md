# Detalii Tehnice

### Inregistrare
In momentul creari unui cont, utilizatorul trebuie sa introduca infromatii in toate campurile.

Se foloseste verificare de email pentru a verifica ca formatul introdus in campul email este corect.

Elementele unice vor fi email-ul si id-ul utilizatorului, in momentul in care un utilizator isi va face un cont, se va cauta mai intai daca adresa de email este deja inscrisa in tabela [accounts](#accounts), in cazul in care nu se indeplineste aceasta conditie, contului ii va fi atribuit un id unic pentru a il folosi la accesul celorlalte tabele.

Parola trebuie sa aiba minim 6 caractere si sa nu contina caractere speciale. Elementele din campul confirm password trebuie sa fie identice cu cele din password. Parola va fi salvata in tabela sub forma de hash.


### Autentificare

Pentru autentificare se va folosi email-ul si parola. Se foloseste functie de hash pentru ca parola sa poata fi scrisa in clar dar aceasta sa fie primita catre baza de date in hash.

Dupa autentificare, prima pagina afisata va fi [Home](https://github.com/karmatime/summer-school/blob/master/Description.md/#pagina-acasa).

### Inscriere
In momentul inscriereii la un curs, utilizatorul poate vedea cursurile la care se poate inscrie. 

* Daca contul utilizatorului a fost verificat, atunci in momentul cand acesta va selecta un curs la care sa participe acesta va fi adaugat in tabela.
*	Daca contul utilizatorului nu a fost verificat, atunci acesta va primi prin mail un link sau un cod de verificare pentru cont. In momentul in care utilizatorul va accesa acel link sau va introduce acel cod, contul va fi verificat si poate sa selecteze cursurile la care poate participa.

In cazul in care utilizatorul este deja inscris la un curs, acesta poate sa renunte in orice moment de la a frecventa la acel curs.

### Verificare email
Codul de verificare o sa fie generat random si va fi introdus in tabela [accounts](#accounts). In momentul in care un utilizator cere sa faca verificarea contului, acest cod va fi trimis prin email(sau va fi trimis un email alternativ care va conduce la verificarea contului).

### Noutati

Utilizatorii o sa aiba access doar sa vada anunturile publicate de catre administrator.
Pentru administrator se ofera urmatoarele functionalitati:
* add news
* delete news
* edit news

### Manage access

Administratorul poate sa ofere acces la functionalitatiile catre alti utilizatori dar utilizatorii care au primit acces de la administrator nu pot sa ofere acces la alti utilizatori.
Pentru administrator se ofera urmatoarele functionalitati:
* grant access to user
* remove access from user


-----------
## DATABASE

### accounts

*	**id**
*	nume
*	prenume
*	email
*	profesie
*	password(hash)
*	[cod_de_verificare](#verificare-email)
*	[rolul_utilizatorului](#rolul-utilizatorului)

### curs

* **id**
* nume_curs
* detalii

### program

* **id**
* data_inceput
* data_sfarsit
* curs_id

### user_curs

* **id**
* user_id
* curs_id



## Rolul utilizatorului

Sunt prezentate 4 tipuri de roluri pentru utilizatori. Aceste roluri vor stabili accesul utilizatorilor la site.
Un utilizator care si-a creat un cont va avea setat in tabela [accounts](#accounts) valoarea 0(default) pentru coloana **rol**.

### Grade 1 user: guest

Utilizatorul guest poate vizualiza toate informatiile despre scoala de vara doar ca nu ii este permis sa se inscrie in cadrul cursurilor de vara fara un cont.

![Guest](https://github.com/karmatime/summer-school/blob/master/Images/Markdown/Guest.png "Guest")


### Grade 2 user: new account

Utilizatorul new account poate vizualiza toate informatiile despre scoala de vara doar ca nu ii este permis sa se inscrie in cadrul cursurilor de vara fara a verifica contul pe care la creat. Ii este permisa orice modificarea a contului creat personal.

![NewAccount](https://github.com/karmatime/summer-school/blob/master/Images/Markdown/NewAccount.png "NewAccount")


### Grade 3 user: verified account

Utilizatorul verified account poate vizualiza toate informatiile despre scoala de vara ii este permis sa se inscrie la ce cursuri doreste in limita numarului de locuri disponibile si poate sa renunte la frecventarea unui curs cand doreste.
  
Ii este permisa orice modificarea a contului creat personal.

![VerifiedAccount](https://github.com/karmatime/summer-school/blob/master/Images/Markdown/VerifiedAccount.png "VerifiedAccount")


### Grade 4 user: admin

Utilizatorul admin are acces complet asupra site-ului si asupra bazei de date. Are acces la sectionea de manage participants care ii permite sa stearga sau sa modifice orice utilizator din lista de participare de la un curs.

![Admin](https://github.com/karmatime/summer-school/blob/master/Images/Markdown/AdminAccountE.png "AdminAccount")
