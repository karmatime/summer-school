# Pagina de contact

Contact.html: Se vor afisa informatiile de contact ale Universitatii din Craiova si ale organizatoriilor scolii de vara din sesiunea curenta.

Se vor afisa orele si datele stabilite pentru cursurile de vara sub forma unui table. Se poate folosi sortarea dupa numele cursului si dupa data in care se vor desfasura cursurile. Optional:Program care este afisat dupa zilele saptamanii.

Inregistrarea se va face pe baza a unui nume si prenume alese de catre utilizator, aceste putand fi dublicate in baza de date. Email-ul o sa fie componenta care impune restrictiile catre crearea contului, nu pot fi create mai multe conturi cu aceasi adresa de email. Parola va fi stocata pe minim 6 caractere. Parola o sa fie stocata in baza de date sub forma hash. Confirmarea parolei trebuie sa fie identica cu parola introdusa in campul password. Profesia o sa fie folosita pentru statistici in functie de numarul de participant la cursuri. -elev, -student, -angajat.

Profesia este un element optional. Codul de verificare o sa fie generat random si va fi introdus in tabela accounts. In momentul in care un utilizator cere sa faca verificarea contului, acest cod va fi trimis prin email(sau va fi trimis un email alternativ care va conduce la verificarea contului). Rolul utilizatorului o sa fie 0(default). Acest rol stabileste accesul la site.

Autentificarea se va face pe baza adresei de email cu care sa inregistrat utilizatorul si pe baza parolei pe care a stabilito pentru acel cont. Daca utilizatorul nu isi mai aminteste parola, acesta poate sa apeleze la linkul de forget password care ii va trimite pe email un link pentru a ii permite sa isi stabileasca o parola noua.

In momentul inscriereii la un curs, utilizatorul poate vedea cursurile la care se poate inscrie.

## Inregistrare



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

![alt text](https://github.com/karmatime/summer-school/blob/master/Register.png "Logo Title Text 1")
