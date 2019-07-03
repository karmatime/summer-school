# Pagina de contact

Contact.html: Se vor afisa informatiile de contact ale Universitatii din Craiova si ale organizatoriilor scolii de vara din sesiunea curenta.

Se vor afisa orele si datele stabilite pentru cursurile de vara sub forma unui table. Se poate folosi sortarea dupa numele cursului si dupa data in care se vor desfasura cursurile. Optional:Program care este afisat dupa zilele saptamanii.

Inregistrarea se va face pe baza a unui nume si prenume alese de catre utilizator, aceste putand fi dublicate in baza de date. Email-ul o sa fie componenta care impune restrictiile catre crearea contului, nu pot fi create mai multe conturi cu aceasi adresa de email. Parola va fi stocata pe minim 6 caractere. Parola o sa fie stocata in baza de date sub forma hash. Confirmarea parolei trebuie sa fie identica cu parola introdusa in campul password. Profesia o sa fie folosita pentru statistici in functie de numarul de participant la cursuri. -elev, -student, -angajat.

Profesia este un element optional. Codul de verificare o sa fie generat random si va fi introdus in tabela accounts. In momentul in care un utilizator cere sa faca verificarea contului, acest cod va fi trimis prin email(sau va fi trimis un email alternativ care va conduce la verificarea contului). Rolul utilizatorului o sa fie 0(default). Acest rol stabileste accesul la site.

Autentificarea se va face pe baza adresei de email cu care sa inregistrat utilizatorul si pe baza parolei pe care a stabilito pentru acel cont. Daca utilizatorul nu isi mai aminteste parola, acesta poate sa apeleze la linkul de forget password care ii va trimite pe email un link pentru a ii permite sa isi stabileasca o parola noua.

In momentul inscriereii la un curs, utilizatorul poate vedea cursurile la care se poate inscrie.
