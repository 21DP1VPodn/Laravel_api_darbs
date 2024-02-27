# Laravel

### 1. Kas ir API?
##### API ir programma kura atļauj 2 citam programmam vai programmēšanas valodām(piemēram HTML un SQL) kontaktēt viens ar otru.

### 2. Kā deklarēt mainīgo PHP valodā?
##### $name = value;

### 3. Kādu arhitektūru izmanto Laravel un kā tā strāda?
##### Laravel izmanto MVC jeb Model-Controller-View arhitektūru, visi dati tiek glabāti Modelī un caur controlleri kurā ir lielāka daļa koda izvādas uz View kuru redz lietotājs.  

### 4. Kas ir ORM un kāpēc to izmanto SQL vietā?
##### ORM ir sistēma kura apvieno datu bāzes programmēšanu ar OOP kocepcijām tādā veidā padarot datu bāzes programmēšanu daudz ērtāku nekā ar tīru SQL.

### 5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. 
##### return response()->json(Users::all()::where(('rating', '>', 4)));

