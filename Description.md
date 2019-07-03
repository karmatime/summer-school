# Descriere

Acest site va contine urmatoarele pagini:
* [Acasa](#pagina-acasa)
* [Cursuri](#pagina-cursuri)
* [Trainers](#pagina-trainers)
* [Program](#pagina-program)
* [Contact](#pagina-de-contact)
* [Noutati](#pagina-noutati)
* [Inregistrare](#pagina-de-inregistrare)
* [Autentificare](#pagina-de-autentificare)
* [Gestionarea contului](#pagina-de-gestiune-a-contului)
* [Gestiune](#pagina-de-gestiuneadmin)


In urmatoarele capitole o sa fie prezentata o viziune asupra functionalitatii proiectului:

## Pagina acasa

Pagina contine un slideshow format din poze referitoare la cursurile scolii de vara, si poze de la editile anterioare.
Sunt prezentate detalii despre scoala de vara, perioada de desfasurare si locul unde vor fi desfasurate cursurile.

## Pagina cursuri

Pagina de cursuri contine si descriere legate despre fiecare curs care este disponibil din programul scolii de vara.
Pentru fiecare curs sunt descrise numarul de sesiuni in care se va tine cursul, numarul de ore predate pe sesiune si o dificultate a cursului.

La fiecare curs ii este prezentat un buton de participa care permite utilizatorului sa participe la cursul selectat in urma unei verificari a contului.

Administratorul are acces la butoanele de adaugare curs , modificare detalii si stergere curs care ii permite sa faca gestiunea cursurilor.

Este prezentata o tabela cu link-uri catre editiile anterioare ale scolii de vara si cursurile care s-au predat.

## Pagina trainers

Aceasta pagina contine informatii despre trainerii care se ocupa cu invatarea participantilor pe parcursul programul scolii de vara.
Pentru fiecare trainer este prezentat cursul/cursurile pe care le preda, informatii in legatura cu firma la care lucreaza si postul acestuia.

## Pagina program

Se vor afisa orele si datele stabilite pentru cursurile de vara sub forma unui tabel. Se poate folosi sortarea dupa numele cursului si dupa data in care se vor desfasura cursurile.


## Pagina de contact

Se vor afisa informatiile de contact ale Universitatii din Craiova si ale organizatorilor scolii de vara din sesiunea curenta.


## Pagina noutati

Pagina de noutati contine informatii si evenimente legate de cursurile din scoala de vara.
In momentul in care un utilizator va accesa un anunt, anuntul resprectiv se va deschide intr-o pagina noua si se vor prezenta toate detalile despre acel anunt.
Pentru administrator vor mai fi adaugate butoane care ii permit sa adauge, sterga, modifice un anunt.

## Pagina de inregistrare

Inregistrarea se va face pe baza unui nume, prenume, adrese de email, profesie si o parola.

Numele si prenumele o sa fie elemente care pot fi mentionate identice de catre mai multi utilizatori. Nu se poate crea un cont care are introdus caractere speciale in nume sau in prenume .

Email-ul este componenta care impune restrictiile de creare a contului, nu pot fi create mai multe conturi cu aceeasi adresa de email. Mai tarziu contul va fi verificat folosind adresa de email inregistrata in cont.

Parola va fi stocata pe minim 6 caractere. Nu se permite folosirea caracterelor speciale in parola. Parola o sa fie stocata in baza de date sub forma hash.

Confirmarea parolei trebuie sa fie identica cu parola introdusa in campul password.

Profesia este folosita pentru statistici in functie de numarul de participant la cursuri. Optiunile de selectare a profesiei sunt:
* elev
* student
* angajat

Diagrama care prezinta informatiile necesare pentru a se crea un cont cu succes:

![alt text](https://github.com/karmatime/summer-school/blob/master/Images/Markdown/Register.png "Register")

## Pagina de autentificare

Autentificarea se va face pe baza adresei de email cu care sa inregistrat utilizatorul si pe baza parolei pe care a stabilit-o pentru acel cont.

Daca utilizatorul nu isi mai aminteste parola, acesta poate sa apeleze la linkul forget password care ii va trimite pe email un link pentru a ii permite sa isi stabileasca o parola noua.

![alt text](https://github.com/karmatime/summer-school/blob/master/Images/Markdown/Login.png "Login")

## Pagina de gestiune a contului

Aceasta pagina este vizibila numai dupa autentificarea cu un cont pe site-ul Summer School.

In pagina de gestiune a contului, utilizatorul va putea sa isi modifice informatiile personale din contul pe care il detine pe acest site.
Aceasta pagina va contine trei sectiunii:

 * **informatii generale**
 Utilizatorul va putea sa isi modifice numele , prenumele sau profesia in cazul unor greseli de scriere.
 
 * **gestionarea cursurilor**
 Utilizatorul va putea sa gestioneze cursurile la care este inscris. Prin aceasta gestiune el poate sa aleaga sa nu mai frecventeze la un curs pe care l-a ales anterior.
 
 * **securitate**
  Utilizatorul va putea sa modifice parola pe care a stabilit-o pentru acel cont si va putea sa isi stearga contul.


## Pagina de gestiune(admin)

Aceasta pagina este vizibila numai dupa autentificarea cu un cont care are accesul de administrator.

Aceasta pagina este atribuita administratorului. Acesta poate sa faca intreaga gestiune a conturilor, participantilor si a cursurilor.
Aceasta pagina va contine mai multe tabele in care sunt afisati participantii la cursuri sortati dupa cursurile la care participa. Administratorului ii este permis sa gestioneze participantii de la cursuri si conturile acestora. Aceasta pagina contine si o bara de search ca permite utilizatorului sa caute intr-un mod eficient participantii.

Prin accesul la aceasta pagina, administratorului ii sunt permise:
* stergerea unui cont
* verificarea unui cont
* modificarea informatiilor unui cont
* trimiterea de email catre utilizatorul respectiv
* gestionarea conturilor cu acces de administrator
* inregistrarea utilizatorilor la cursuri
* oprirea frecventarii utilizatorilor la cursuri
