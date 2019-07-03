# Detalii Tehnice

### Inregistrare
In momentul creari unui cont, utilizatorul trebuie sa introduca infromatii in toate campurile.

Se foloseste verificare de email pentru a verifica ca formatul introdus in campul email este corect.

Elementele unice vor fi email-ul si id-ul utilizatorului, in momentul in care un utilizator isi va face un cont, se va cauta mai intai daca adresa de email este deja inscrisa in tabela [accounts](#accounts), in cazul in care nu se indeplineste aceasta conditie, contului ii va fi atribuit un id unic pentru a il folosi la accesul celorlalte tabele.

Parola trebuie sa aiba minim 6 caractere si sa nu contina caractere speciale. Elementele din campul confirm password trebuie sa fie identice cu cele din password. Parola va fi salvata in tabela sub forma de hash.


### Autentificare

Pentru autentificare se va folosi email-ul si parola. Se foloseste functie de hash pentru ca parola sa poata fi scrisa in clar dar aceasta sa fie primita catre baza de date in hash.

Dupa autentificare, prima pagina afisata va fi [Home](../blob/master/Description.md/#pagina-acasa).

### Inscriere
In momentul inscriereii la un curs, utilizatorul poate vedea cursurile la care se poate inscrie. 

* Daca contul utilizatorului a fost verificat, atunci in momentul cand acesta va selecta un curs la care sa participe acesta va fi adaugat in tabela.
*	Daca contul utilizatorului nu a fost verificat, atunci acesta va primi prin mail un link sau un cod de verificare pentru cont. In momentul in care utilizatorul va accesa acel link sau va introduce acel cod, contul va fi verificat si poate sa selecteze cursurile la care poate participa.

In cazul in care utilizatorul este deja inscris la un curs, acesta poate sa renunte in orice moment de la a frecventa la acel curs.

In momentul cand un utilizator sa inscris la un curs, in baza de date va fi trecuta valoarea 1 pentru faptul ca este inscris la cursul respectiv , initial valoarea este 0 pentru ca nu este inscris la acel curs.

### Verificare email
Codul de verificare o sa fie generat random si va fi introdus in tabela **accounts**. In momentul in care un utilizator cere sa faca verificarea contului, acest cod va fi trimis prin email(sau va fi trimis un email alternativ care va conduce la verificarea contului).

Rolul utilizatorului o sa fie 0(default). Acest rol stabileste accesul la site.

-----------
## DATABASE

### accounts

*	**id**
*	nume
*	prenume
*	email
*	profesie
*	password(hash)
*	[cod de verificare](#verificare-email)
*	rolul utilizatorului(#rolul-utilizatorului)

## Rolul utilizatorului

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
