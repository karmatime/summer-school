# Summer School

# Introducere

	Acest document este scris pentru a prezenta detalii in legatura realizarii proectului Summer School.
	Motivele si functionalitatea o sa fie explicate la fiecare subiect, acest document este adresat catre dezvoltatorii proiectului si catre client.

# Scopul proiectului

	Summer School are intentia de a atrage studentii/elevii/angajatii catre cursuri gratuite sustinute la Universitatea din Craiova.
	Acest proiect ofera o interfata web care ajuta la inscrierea in cadrul cursurilor de vara si ofera monitorizarea programelor de studii pentru cursurile planificate.

* [Descriere](Pagina de contact)

Program.html:
	Se vor afisa orele si datele stabilite pentru cursurile de vara sub forma unui table. Se poate folosi sortarea dupa numele cursului si dupa data in care se vor desfasura cursurile.
	Optional:Program care este afisat dupa zilele saptamanii.

Contact.html:
	Se vor afisa informatiile de contact ale Universitatii din Craiova si ale organizatoriilor scolii de vara din sesiunea curenta.

Inregistrarea se va face pe baza a unui nume si prenume alese de catre utilizator, aceste putand fi dublicate in baza de date.
	Email-ul o sa fie componenta care impune restrictiile catre crearea contului, nu pot fi create mai multe conturi cu aceasi adresa de email.
	Parola va fi stocata pe minim 6 caractere. Parola o sa fie stocata in baza de date sub forma hash.
	Confirmarea parolei trebuie sa fie identica cu parola introdusa in campul password.
	Profesia o sa fie folosita pentru statistici in functie de numarul de participant la cursuri. -elev, -student, -angajat.
  
  Profesia este un element optional.
	Codul de verificare o sa fie generat random si va fi introdus in tabela accounts. In momentul in care un utilizator cere sa faca verificarea contului, acest cod va fi trimis prin email(sau va fi trimis un email alternativ care va conduce la verificarea contului).
	Rolul utilizatorului o sa fie 0(default). Acest rol stabileste accesul la site.

Autentificarea se va face pe baza adresei de email cu care sa inregistrat utilizatorul si pe baza parolei pe care a stabilito pentru acel cont.
	Daca utilizatorul nu isi mai aminteste parola, acesta poate sa apeleze la linkul de forget password care ii va trimite pe email un link pentru a ii permite sa isi stabileasca o parola noua.

In momentul inscriereii la un curs, utilizatorul poate vedea cursurile la care se poate inscrie. 
-	Daca contul utilizatorului a fost verificat, atunci in momentul cand acesta va selecta un curs la care sa participe acesta va fi adaugat in tabela.
-	Daca contul utilizatorului nu a fost verificat, atunci acesta va primi prin mail un link sau un cod de verificare pentru cont. In momentul in care utilizatorul va accesa acel link sau va introduce acel cod, contul va fi verificat si poate sa selecteze cursurile la care poate participa.
	In cazul in care utilizatorul este deja inscris la un curs, acesta poate sa renunte in orice moment de la a frecventa la acel curs.
	In momentul cand un utilizator sa inscris la un curs, in baza de date va fi trecuta valoarea 1 pentru faptul ca este inscris la cursul respectiv , initial valoarea este 0 pentru ca nu este inscris la acel curs.
  
  Courses.html:
	Va fi prezentata o scurta descriere despre cursuri si trainerul care se ocupa cu invatarea participantilor.
	Va fi prezentata si o lista cu editiile anterioare ale scolii de vara, inclunzand cursurile predate, informatii si trainerii care au participat.
Organizatorii:
	Va fi prezentata Universitatea din Craiova si firmele organizatoare pentru cursurile de vara, fiecare element va contile cate un link catre paginile officiale si scurte informatii despre acestea
Optional. References.html:
 	Firmele vor putea sa posteze linkuri si informatii pentru ajutorul participantiilor si pentru documentatie.
  
  Grade 1 user: guest
	Utilizatorul guest poate vizualiza toate informatiile despre scoala de vara doar ca nu ii este permis sa se inscrie in cadrul cursurilor de vara fara un cont.
guest:
-	home
-	organizators
-	login
-	register
-	courses
-	program
-	contact

Grade 2 user: new account
	Utilizatorul new account poate vizualiza toate informatiile despre scoala de vara doar ca nu ii este permis sa se inscrie in cadrul cursurilor de vara fara a verifica contul pe care la creat. Ii este permisa orice modificarea a contului creat personal.
new account:
-	home
-	organizators
-	login
-	register
-	courses
-	program
-	contact
-	manage account – verify account, change password, change name, change email ,change profession, delete account


Grade 3 user: verified account
	Utilizatorul verified account poate vizualiza toate informatiile despre scoala de vara ii este permis sa se inscrie la ce cursuri doreste in limita numarului de locuri disponibile si poate sa renunte la frecventarea unui curs cand doreste.
Ii este permisa orice modificarea a contului creat personal.
verified account:
-	home
-	organizators
-	login
-	register
-	courses
-	program
-	contact
-	manage account – verify account, change password, change name, change email ,change profession, delete account
Grade 4 user: admin
	Utilizatorul admin are acces complet asupra site-ului si asupra bazei de date. Are acces la sectionea de manage participants care ii permite sa stearga sau sa modifice orice utilizator din lista de participare de la un curs.
admin account:
-	home
-	organizators
-	login
-	register
-	courses
-	program
-	contact
-	manage account – verify account, change password, change name, changeemail ,change profession, delete account
-	manage participants – delete participants,
-	optional - manage access – grant edit access to another accounts


