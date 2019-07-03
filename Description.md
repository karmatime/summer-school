# Descriere

Acest site va contine urmatoarele pagini:
* Acasa
* Cursuri
* Trainers
* Contact
* Noutati
* Inregistrare
* Autentificare
* Gestionarea contului
* Gestiune


In urmatoareale capitole o sa fie prezentata o viziune asupra functionalitatii proiectului:

## Pagina acasa

## Pagina cursuri

## Pagina trainers

## Pagina de contact

Se vor afisa informatiile de contact ale Universitatii din Craiova si ale organizatoriilor scolii de vara din sesiunea curenta.

Se vor afisa orele si datele stabilite pentru cursurile de vara sub forma unui table. Se poate folosi sortarea dupa numele cursului si dupa data in care se vor desfasura cursurile. Optional:Program care este afisat dupa zilele saptamanii.

## Pagina noutati

## Pagina de inregistrare

Inregistrarea se va face pe baza a unui nume, prenume, adrese de email, profesie si o parola.

Numele si prenumele o sa fie elemente care pot fi mentionate identice de catre mai multi utilizatori. Nu se poate crea un cont care are introdus caractere speciale in nume sau in prenume .

Email-ul este componenta care impune restrictiile la crearea contului, nu pot fi create mai multe conturi cu aceasi adresa de email. Mai tarziu contul va fi verificat folosind adresa de email inregistrata in cont.

Parola va fi stocata pe minim 6 caractere. Nu se permite folosirea caracterelor speciale in parola. Parola o sa fie stocata in baza de date sub forma hash.

Confirmarea parolei trebuie sa fie identica cu parola introdusa in campul password.

Profesia este folosita pentru statistici in functie de numarul de participant la cursuri. Optiuniile de selectare a profesiei sunt:
* elev
* student
* angajat

Diagrama care prezinta informatiile necesare pentru a se crea un cont cu succes:

![alt text](https://github.com/karmatime/summer-school/blob/master/Register.png "Register")

## Pagina de autentificare

Autentificarea se va face pe baza adresei de email cu care sa inregistrat utilizatorul si pe baza parolei pe care a stabilit-o pentru acel cont.

Daca utilizatorul nu isi mai aminteste parola, acesta poate sa apeleze la linkul de forget password care ii va trimite pe email un link pentru a ii permite sa isi stabileasca o parola noua.

![alt text](https://github.com/karmatime/summer-school/blob/master/Login.png "Login")

## Pagina de gestiune a contului

In pagina de gestiune a contului, utilizatorul va putea sa isi modifice informatile presonale din contul pe care il detine pe acest site.
Aceasta pagina va contine trei sectiunii:
 * **infromatii generale**
 
 Utilizatorul va putea sa isi modifice numele , prenumele sau profesia in cazul unor greseli de scriere.
 * **gestionarea cursurilor**
 
 Utilizatorul va putea sa gestioneze cursurile la care este inscris, prin aceasta gestiune el poate sa aleaga sa nu mai frecventeze la un curs pe care la ales anterior.
 * **securitate**
 
  Utilizatorul va putea sa modifice parola pe care a stabilit-o pentru acel cont si va putea sa isi stearga contul in cazul in care acesta nu a fost corect.


## Pagina de gestiune(admin)

Aceasta pagina este atribuita catre administrator, acesta trebuie sa faca intreaga gestiune a conturilor, participantilor si a cursurilor.
Aceasta pagina va contine mai multe tabele in care sunt afisati participantii la cursuri sortati dupa cursurile la care participa. Administratorului ii este permis sa gestioneze participantii de la cursuri si conturile acestora. Aceasta pagina contine si o bara de search ca permite utilizatorului sa caute intr-un mod eficient participantii.

Prin accesul la aceasta pagina, administratorului ii este permis:
* stergerea unui cont
* verificarea unui cont
* modificarea informatiilor unui cont
* trimiterea de email catrea utilizatorul respectiv
* gestionarea conturilor cu acces de administrator
* inregistrarea la cursuri pentru utilizator
* oprirea frecventarii la cursuri pentru utilizatori
