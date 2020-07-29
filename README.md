# High Level Requirements

Create a small web app that will allow a user to access project credentials that they have stored. The web app will have the following requirements:

- Each user will need to log-in with email and password
- Upon log-in, the user will be taken to a new page where they can enter and see 

Realizzare, nel modo che si ritiene più opportuno, una piccola Web Application che permetta di memorizzare e visualizzare credenziali di accesso di vari progetti (per semplificare ed unificare il modo in cui un team accede a tali credenziali).

### Make a web app that will allow storing and displaying of access credentials for various projects

La web application avrà una pagina di Login a cui si accede con Email e Password del membro del team. Inserire manualmente un paio di utenti di prova in database (non è necessario creare una sezione "Registrazione Nuovo Utente").

### The web app will have a log-in page that will grant access using email and password. Manually create test accounts. No registration page required.

- Use Laravel Auth

Dopo aver effettuato il login, dovrà comparire una nuova pagina nella quale:

## After successful log-in, the user should be taken to a new page:

- C'è un pulsante per inserire nuove "crendeziali" specificando Progetto, Servizio a cui si sta accedendo, Username e Password (ad esempio => PROGETTO: Mondadori - SERVIZIO: Gmail - USERNAME: mondadori@gmail.com - PASSWORD: Segreto123)La voce "Progetto" potrà essere una di quelle precedentemente inserite (quindi, ad esempio, se inserisco i primi caratteri di un "progetto" in precedenza inserito, il sistema dovrà suggerirlo) oppure del tutto nuova.

### There is a button to insert new credentials requiring Projects, Service, Username and Password
(example ROGETTO: Mondadori - SERVIZIO: Gmail - USERNAME: mondadori@gmail.com - PASSWORD: Segreto123)
- When entering a project name, the app should auto populate any values that it finds in the DB that match the name (auto suggest)


- C'è una tabella che mostra le credenziali già inserite.
In questa tabella Le Password dovranno essere mostrate sotto forma di asterischi, un asterisco per ogni carattere della password. Ogni riga della tabella avrà un apposito pulsante "Mostra Password" che andrà a pescare la password dal Database e la sostituirà agli asterischi. Prima del click di questo pulsante, il Client non dovrà possedere la password.

### There is a table that can display credentials already entered. Each password stored will be displayed with asterisks, one asterisk per character.

** Each record in the table will have a "show password" feature that will grab the password from the DB and display it in the table **

Infine, al click di "Mostra Password", il Server dovrà memorizzare nel Database le informazioni della richiesta, quindi: l'utente che ha fatto richiesta, la credenziale che è stata richiesta, il timestamp in cui è stata fatta la richiesta

### After each use of the "Show Password" feature, the web app should store all requests to the DB storing: the user who made the request, the credentials requested (project?), and the timestamp of the request

Come detto, la Web Application potrà essere creata a piacere, utilizzando qualsiasi tipo di framework o libreria di supporto. Gli unici obblighi sono l'utilizzo di PHP come linguaggio Server-Side e Database Relazionali MySQL.