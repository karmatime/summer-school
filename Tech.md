# Detalii Tehnice

## DATABASE

### accounts

*	**id**
*	nume
*	prenume
*	email
*	profesie
*	password(hash)
*	[cod de verificare](#verificare-email)
*	rolul utilizatorului

--------------------

### Verificare email
Codul de verificare o sa fie generat random si va fi introdus in tabela **accounts**. In momentul in care un utilizator cere sa faca verificarea contului, acest cod va fi trimis prin email(sau va fi trimis un email alternativ care va conduce la verificarea contului).

Rolul utilizatorului o sa fie 0(default). Acest rol stabileste accesul la site.

### Inregistrare
In momentul inscriereii la un curs, utilizatorul poate vedea cursurile la care se poate inscrie. 

* Daca contul utilizatorului a fost verificat, atunci in momentul cand acesta va selecta un curs la care sa participe acesta va fi adaugat in tabela.
*	Daca contul utilizatorului nu a fost verificat, atunci acesta va primi prin mail un link sau un cod de verificare pentru cont. In momentul in care utilizatorul va accesa acel link sau va introduce acel cod, contul va fi verificat si poate sa selecteze cursurile la care poate participa.

In cazul in care utilizatorul este deja inscris la un curs, acesta poate sa renunte in orice moment de la a frecventa la acel curs.

In momentul cand un utilizator sa inscris la un curs, in baza de date va fi trecuta valoarea 1 pentru faptul ca este inscris la cursul respectiv , initial valoarea este 0 pentru ca nu este inscris la acel curs.


### Grade 1 user: guest

Utilizatorul guest poate vizualiza toate informatiile despre scoala de vara doar ca nu ii este permis sa se inscrie in cadrul cursurilor de vara fara un cont.

![Guest](https://github.com/karmatime/summer-school/blob/master/Guest.png "Guest")


### Grade 2 user: new account

Utilizatorul new account poate vizualiza toate informatiile despre scoala de vara doar ca nu ii este permis sa se inscrie in cadrul cursurilor de vara fara a verifica contul pe care la creat. Ii este permisa orice modificarea a contului creat personal.

![NewAccount](https://github.com/karmatime/summer-school/blob/master/NewAccount.png "NewAccount")


### Grade 3 user: verified account

Utilizatorul verified account poate vizualiza toate informatiile despre scoala de vara ii este permis sa se inscrie la ce cursuri doreste in limita numarului de locuri disponibile si poate sa renunte la frecventarea unui curs cand doreste.
  
Ii este permisa orice modificarea a contului creat personal.

![VerifiedAccount](https://github.com/karmatime/summer-school/blob/master/VerifiedAccount.png "VerifiedAccount")


### Grade 4 user: admin

Utilizatorul admin are acces complet asupra site-ului si asupra bazei de date. Are acces la sectionea de manage participants care ii permite sa stearga sau sa modifice orice utilizator din lista de participare de la un curs.

![Admin](https://github.com/karmatime/summer-school/blob/master/AdminAccountE.png "AdminAccount")
