# M307-Kredihay

## Formulare

"Welcome" view
![alt text](res/WelcomeView.png)

"New credit loan" view
![alt text](res/NewCredit.png)

"Edit credit loan" view
![alt text](res/EditCredit.png)


## Validierung
Welcome view
  - Keine validierung
  
New credit loan view
  - Vorname -> Required
  - Nachname -> Required
  - Telefon -> Besteht nur aus Nummern, Leerzeichen 
  - Anzahl Raten -> Required
  - Kredit Paket -> Required
  
Edit credit loan view
  - Vorname -> Not empty
  - Nachname -> Not empty
  - Telefon -> Besteht nur aus Nummern, Leerzeichen 
  - Anzahl Raten -> Not empty
  - Kredit Paket -> Not empty
  - Status -> Not empty

## Datenbank

Table Creditdeals
  - packageId int primary key auto_increment
  - packagename varchar(50) not null
  
Table Status
  - statusId int primary key not null
  - description varchar(50) not null
  
Table CreditLoan
  - creditId int primary key auto_increment
  - firstname varchar(50) not null
  - lastname varchar(50) not null
  - email varchar(80) not null
  - phone varchar(20)
  - ratesCount int not null
  - deadline date
  - fk_creditdealsId int
  - fk_statusId int

## Testfälle

Testfall 1:
- GEGEBEN ->   Keine Kredite
- WENN    ->   Ich erstelle einen neuen korrekten Kredit
- DANN    ->   Der neue Kredit erscheint in der Liste

Testfall 2:
- GEGEBEN ->   Keine Kredite
- WENN    ->   Ich versuche einen falschen Kredit zu erstellen
- DANN    ->   Es erscheint eine Fehlermeldung und die erstellen View bleibt offen

Testfall 3:
- GEGEBEN ->   Keine Kredite
- WENN    ->   Ich versuche einen Kredit zu erstellen
- DANN    ->   Das Enddatum des Kredites wird direkt berechnet

Testfall 4:
- GEGEBEN ->   Keine Kredite
- WENN    ->   Ich erstelle einen Kredite, aber fülle nicht alle pflichtfelder aus
- DANN    ->   Die Validierung wird eine Fehlermedldung geben, auch Server seitig

Testfall 5:
- GEGEBEN ->   Keine Kredite
- WENN    ->   Ich fülle einen Kredit und dessen Raten aus
- DANN    ->   Ich kann nicht mehr als 10 Raten auswählen

Testfall 6:
- GEGEBEN ->   Zwei Kredite
- WENN    ->   Ich setze einen Kredit auf geschlossen
- DANN    ->   Nur noch ein Kredit wird angezeigt

Testfall 7:
- GEGEBEN ->   Ein Kredit
- WENN    ->   Ich ändere den Namen des Kreditenehmers
- DANN    ->   Der neue Namen wird in der Liste angezeigt

Testfall 8:
- GEGEBEN ->   Vier Kredite
- WENN    ->   Ich sortiere nach Deadline
- DANN    ->   Die richtige Reihenfolge wird angezeigt

Testfall 9:
- GEGEBEN ->   Ein Kredit
- WENN    ->   Ich editieren den Kredit
- DANN    ->   Es werden alle Felder angezeigt, aber ich kann nur bestimmte Felder editieren

Testfall 10:
- GEGEBEN ->   Keine Kredite
- WENN    ->   Ich erstelle einen Kredit und ändere diesen
- DANN    ->   Den Status kann ich nur beim ändern wählen und zusätzlich werden nur alle offenen Kredite angezeigt

## Roadmap
Trello: https://trello.com/b/qmQloeKg/m307-kredihay
