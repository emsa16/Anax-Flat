---
views:
    byline:
        region: main
        template: default/content
        sort: 2
        data:
            meta:
                type: content
                route: block/byline
...

4 webbplatsers laddningstider och användbarhet
==============================================

## Introduktion

### Urval
Jag valde ut tre av testsidorna på basen av hur tunga jag föreställde mig att de var, men var inte säker eftersom jag inte kört några tester på dem innan. [Simogo](http://simogo.com/) tänkte jag var en lätt sida, [Wikipedia](https://en.wikipedia.org/wiki/Main_Page) en mellantung sida och [Thomann](https://www.thomann.de/se/index.html) en tung sida, på grund av alla bilder den innehåller. Den fjärde sidan jag testat är min egen [me-sida för design-kursen](http://www.student.bth.se/~emsa16/dbwebb-kurser/design/me/anax-flat/htdocs/), eftersom jag är nyfiken på att se vad som fungerar bra på sidan och vad ej, samt eftersom jag direkt kan åtgärda de brister som dyker upp i testerna.

### Metod
För att utvärdera sidans laddningstid och användbarhet har jag använt [Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/). På den sidan utvärderas sidan utifrån sin struktur och ett betyg uppskattas för sidan både på mobil- och datorplattformar.

För att få exakta siffror på sidladdningen så har jag använt Mozilla Firefox Nätverksverktyg. Varje sida har jag laddat in i webbläsaren från början tre gånger, och tagit fram ett genomsnitt av laddningstiderna. Verktyget har även gett mig uppgifter om antalet resurser som laddas och sidans totala storlek.

### Rådata
[Google Kalkylark](https://docs.google.com/spreadsheets/d/10RNjgtoLk144LTlXvc-vQOj2DYiakdQqWxEP0-cB90w/edit?usp=sharing) som innehåller all mätdata.



## 1. [Simogo](http://simogo.com/)
![simogo.com](image/analysis/simogo.com.png?w=700&save-as=jpg&q=90)

### Resultat
<table class="styled">
    <tr>
        <th>Sida</th>
        <th>Betyg mobile</th>
        <th>Betyg desktop</th>
        <th>Antal resurser</th>
        <th>Sidstorlek</th>
        <th>Laddningstid (sek)</th>
    </tr>
    <tr>
        <td>/</td>
        <td>58/100</td>
        <td>63/100</td>
        <td>56</td>
        <td>1,69 MB</td>
        <td>4.38</td>
    </tr>
    <tr>
        <td>/work/device-6/</td>
        <td>48/100</td>
        <td>48/100</td>
        <td>67</td>
        <td>3,41 MB</td>
        <td>8.10</td>
    </tr>
    <tr>
        <td>/blog</td>
        <td>29/100</td>
        <td>36/100</td>
        <td>128</td>
        <td>12,93 MB</td>
        <td>17.68</td>
    </tr>
</table>

### Analys
Vad jag trodde skulle vara en lätt sida fick väldigt dåliga betyg, framförallt på grund av hur dåligt sidan hanterar bilder. Deras bloggsida laddar också in väldigt många bildtunga inlägg samtidigt. Det fanns många förbättringsåtgärder som Google PageSpeed föreslog men de viktigaste är att optimera bilder, aktivera komprimering samt ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten.

## 2. [Wikipedia](https://en.wikipedia.org/wiki/Main_Page)
![en.wikipedia.org](image/analysis/en.wikipedia.org.png?w=700&save-as=jpg&q=90)

### Resultat
<table class="styled">
    <tr>
        <th>Sida</th>
        <th>Betyg mobile</th>
        <th>Betyg desktop</th>
        <th>Antal resurser</th>
        <th>Sidstorlek</th>
        <th>Laddningstid (sek)</th>
    </tr>
    <tr>
        <td>/</td>
        <td>88/100</td>
        <td>83/100</td>
        <td>27</td>
        <td>920 kB</td>
        <td>2.40</td>
    </tr>
    <tr>
        <td>/Ram_Narayan</td>
        <td>87/100</td>
        <td>84/100</td>
        <td>26</td>
        <td>1,10 MB</td>
        <td>2.52</td>
    </tr>
    <tr>
        <td>/Melbourne_Castle</td>
        <td>80/100</td>
        <td>81/100</td>
        <td>25</td>
        <td>1,15 MB</td>
        <td>3.92</td>
    </tr>
</table>

### Analys
Wikipedia fick bäst betyg av alla sidor i detta test, vilket inte är så förvånande med tanke på att det är en välbesökt sida som behöver vara optimerad. Sidorna är lätta och laddar snabbt. PageSpeed har endast några förbättringsförslag: optimera bilder, utnyttja cachelagring i webbläsare (men detta verkar ändå skötas relativt bra) samt ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten.

## 3. [Thomann](https://www.thomann.de/se/index.html)
![thomann.de](image/analysis/thomann.de.png?w=700&save-as=jpg&q=90)

### Resultat
<table class="styled">
    <tr>
        <th>Sida</th>
        <th>Betyg mobile</th>
        <th>Betyg desktop</th>
        <th>Antal resurser</th>
        <th>Sidstorlek</th>
        <th>Laddningstid (sek)</th>
    </tr>
    <tr>
        <td>/</td>
        <td>68/100</td>
        <td>64/100</td>
        <td>126</td>
        <td>5,27 MB</td>
        <td>13.58</td>
    </tr>
    <tr>
        <td>/t-modeller.html</td>
        <td>71/100</td>
        <td>75/100</td>
        <td>165</td>
        <td>5,76 MB</td>
        <td>14.29</td>
    </tr>
    <tr>
        <td>/fender_sq_classic_vibe_tele_50s_bb.htm</td>
        <td>59/100</td>
        <td>69/100</td>
        <td>134</td>
        <td>4,98 MB</td>
        <td>10.28</td>
    </tr>
</table>

### Analys
Denna sida var väldigt tung och långsam att ladda in, på grund av den använder väldigt mycket bildresurser. Betygen hamnade ibland på rött men sidorna kom ändå ganska nära varandra i prestanda trots att de tre valda sidorna var strukturerade ganska olika. Av förbättringsmöjligheterna som PageSpeed föreslår verkar de viktigaste vara att optimera bilder, utnyttja cachelagring i webbläsaren samt ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten.



## 4. [Min me-sida för design-kursen](http://www.student.bth.se/~emsa16/dbwebb-kurser/design/me/anax-flat/htdocs/)
![anax-flat](image/analysis/anax-flat.png?w=700&save-as=jpg&q=90)

### Resultat
<table class="styled">
    <tr>
        <th>Sida</th>
        <th>Betyg mobile</th>
        <th>Betyg desktop</th>
        <th>Antal resurser</th>
        <th>Sidstorlek</th>
        <th>Laddningstid (sek)</th>
    </tr>
    <tr>
        <td>/</td>
        <td>66/100</td>
        <td>82/100</td>
        <td>17</td>
        <td>233 kB</td>
        <td>1.66</td>
    </tr>
    <tr>
        <td>/typography</td>
        <td>67/100</td>
        <td>84/100</td>
        <td>17</td>
        <td>138 kB</td>
        <td>1.77</td>
    </tr>
    <tr>
        <td>/analysis/colorscheme</td>
        <td>36/100</td>
        <td>14/100</td>
        <td>21</td>
        <td>4,88 MB</td>
        <td>7.12</td>
    </tr>
</table>

### Analys
Jag tänkte mig att me-sidan skulle vara ganska lätt att ladda in men att det fanns möjliga optimeringsbrister eftersom jag inte jobbat med det. Fjäderlätt är den också, och det är anmärkningsvärt hur mycket bättre betyget blev för Desktop-versionen, vilket jag inte riktigt kan förklara, eftersom förbättringsförslagen är desamma för mobile och desktop, och de verkar i de flesta fall inte så allvarliga. De viktigaste förbättringsförslagen är att ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten, minska svarstiden från servern samt optimera bilder. Den sista sidan får genomgående extra dåliga siffror, vilket enkelt kan förklaras med jag inte anpassat bilderna på sidan överhuvudtaget, så de är väldigt stora.



## Sammanfattning
Det jag tycker verkar mest genomgående för mina sidor är att sättet som sidan hanterar bilder påverkar väldigt mycket sidans betyg i PageSpeed och därmed hur snabbt sidan laddas. Gör sidan det dåligt straffar det sig. Det handlar om att optimera bilder, aktivera komprimering samt utnyttja cachelagring i webbläsaren. Det förbättringsförslag som fanns med genomgående i alla tester var att ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten. Det känns som en lite knepig grej att lösa eftersom ett förslag för att lösa det är att lägga in en del av den koden inline i HTML-dokumentet, vilket jag inte upplever som en så bra lösning. Jag känner inte till hur smidigt det är att läsa in resurserna asynkront, kanske behövs JavaScript, kanske är det enkelt, kanske inte.

Ett problem med att utföra dessa tester är att många av sidorna aldrig slutar att ladda in resurser, även om sidan så att säga laddat klart och är färdig att visas. Detta gör det lite knepigt att avgöra när sidan laddats in och vilka siffror som ska tas med i testresultatet.

### Rangordning
På basen av mätresultaten och analysen så kan webbplatserna rangordnas enligt följande:

1. Wikipedia
2. Thomann
3. Me-sidan
4. Simogo

Wikipedia är ganska klart den mest optimerade sidan i urvalet, men den är också en av världens mest trafikerade webbplatser. Thomann har vissa problem men får ändå godkänt i hanteringen av den resurstunga sajten. Min me-sida skulle annars ha fått ett ganska bra betyg men den katastrofala hanteringen av några tunga bilder sänker den. Simogo kommer överraskande nog sist i skaran på grund att sidan hanterar bilder så dåligt.

### Snabb eller långsam?
Datorn jag använder är ganska långsam och jag har inte brytt mig om att skaffa den snabbaste uppkopplingen heller, så jag kan vara ganska tolerant i bedömningen av en sidas snabbhet. Jag kände mig fram lite och kom fram till att kring 3 sekunder går gränsen mellan när jag upplever att en sida laddas snabbt eller långsamt.

Om vi tar denna absoluta måttstock till vårt urval så klarar både Wikipedia och me-sidan kravet i majoriteten av fallen. Med tanke på den mängd material som Wikipedia laddar in så känns den extra snabb. Simogo är väldigt ojämn med hur snabbt deras sidor laddar, men kommer ändå rejält under ribban i alla testfall. Thomanns laddningstider är i en bottenklass för sig, men den sidan var extra svår att mäta eftersom den hela tiden laddade in mer resurser, trots att sidan var användbar redan innan. Den känns därför inte lika seg som mätresultaten skulle få en att tro.



## Avslutningsvis
Uppgiften är gjord på egen hand.
