<?php
/**
 * MyBB 1.6 Finnish Language Pack
 * Suomentanut Vesa Piittinen, katso http://community.mybb.com/thread-89482.html
 */

/* Siirrä tämän tekstin lopussa olevat kaksi merkkiä sijaitsemaan tiedoston loppuun käyttääksesi tietokantaan tallennettua ohjeistusta näiden lokalisoitujen rivien sijasta */
 
// Help Document 1
$l['d1_name'] = "Tunnuksen rekisteröinti";
$l['d1_desc'] = "Edut käyttäjätunnuksen rekisteröinnistä.";
$l['d1_document'] = "Jotkin tämän keskustelualueen toiminnot vaativat sisäänkirjautumisen. Rekisteröityminen on ilmainen ja vaatii vain pari minuuttia.
<br /><br />On suositeltavaa rekisteröityä, sillä se mahdollistaa viestien kirjoittamisen, omien asetuksien määrittämisen ja tunnuksen hallinnan.
<br /><br />Ominaisuudet jotka yleisesti vaativat rekisteröitymisen ovat keskustelujen tilaaminen, ulkoasun vaihtaminen, oman henkilökohtaisen muistion käyttö ja sähköpostin lähettäminen keskustelualueen käyttäjille.";

// Help Document 2
$l['d2_name'] = "Tunnuksen päivittäminen";
$l['d2_desc'] = "Käyttäjätietojesi päivittäminen vastaamaan tilannetta.";
$l['d2_document'] = "Jossakin vaiheessa sinulle voi tulla tarve päivittää joitakin tietojasi, kuten käyttämäsi pikaviestin, salasana tai kenties sähköpostiosoite. Voit muuttaa minkä tahansa näistä käyttäen tunnuksen hallintaa. Päästäksesi tähän hallintapaneeliin napsauta linkkiä sivun ylälaidassa, jossa lukee \"oma tunnus\". Sieltä käsin voit valita kohdan \"muokkaa profiilia\" ja muuttaa haluamiasi kohtia. Lopuksi voit kuitata tekemäsi muutokset napsauttamalla painiketta sivun lopussa, jolloin ne astuvat voimaan.";

// Help Document 3
$l['d3_name'] = "Evästeiden käyttö MyBB:ssä";
$l['d3_desc'] = "MyBB käyttää evästeitä tallentaakseen tietoja tunnuksestasi.";
$l['d3_document'] = "MyBB käyttää evästeitä tallentaakseen kirjautumistietosi ollessasi rekisteröinyt, tai edellisen vierailusi ajankohdan mikäli et ole.
<br /><br />Evästeet ovat pieniä tietokoneellasi säilöttyjä tekstitiedostoja. Nämä evästeet ovat vain tämän keskustelualueen sivuston käytettävissä eivätkä ne ole turvallisuusriski.
<br /><br />Evästeet auttavat myös pitämään kirjaa lukemistasi keskusteluista.
<br /><br />Jos haluat tuhota kaikki keskustelualueen asettamat evästeet, <a href=\"misc.php?action=clearcookies&amp;key={1}\">paina tästä</a>.";

// Help Document 4
$l['d4_name'] = "Kirjautuminen";
$l['d4_desc'] = "Kuinka kirjautua sisään ja ulos.";
$l['d4_document'] = "Kirjautuessasi sisään koneellasi sijaitseva eväste päivitetään siten, että voit selata keskustelualuetta ilman tarvetta jatkuvalle käyttäjätunnuksen ja salasanan syöttämiselle. Uloskirjautuminen poistaa evästeen siten, etteivät toiset voi käyttää tunnustasi.
<br /><br />Kirjautuaksesi käytä linkkiä keskustelualueen ylälaidassa. Uloskirjautuminen tapahtuu vastaavaan tapaan. Mikäli syystä tai toisesta uloskirjautuminen ei onnistu, voit myös tuhota koneellasi olevat evästeet. Tällöin tieto kirjautumisesta katoaa.";

// Help Document 5
$l['d5_name'] = "Uuden keskustelun aloittaminen";
$l['d5_desc'] = "Näin aloitat uuden keskustelun huoneeseen.";
$l['d5_document'] = "Mennessäsi sinua kiinnostavaan huoneeseen ja halutessasi avata uuden keskustelun, löydät huoneen ylä- ja alalaidoista painikkeen, jossa lukee \"aloita keskustelu\". Huomaathan ettet välttämättä voi aloittaa uutta keskustelua kaikissa huoneissa, sillä se voi olla rajoitettu ylläpidon toimesta esimerkiksi keskustelualueen vastuuhenkilöille tai huone saattaa olla arkistoitu.";

// Help Document 6
$l['d6_name'] = "Vastauksen kirjoittaminen";
$l['d6_desc'] = "Vastaaminen keskusteluun huoneessa.";
$l['d6_document'] = "Vierailusi aikana saatat löytää keskustelun, johon haluat vastata. Tehdäksesi näin voi painaa painiketta, jossa lukee \"vastaa\" – tämä sijaitsee keskustelusivun alussa ja lopussa. Huomaathan ettet välttämättä kykene vastaamaan kaikissa huoneissa, koska se on rajoitettu tietyille henkilöille.
<br /><br />Toisaalta valvoja on saattanut sulkea keskustelun, jolloin peruskäyttäjät eivät voi vastata siihen. Keskustelua ei voi avata ilman valvojan tai ylläpidon apua.";

// Help Document 7
$l['d7_name'] = "MyCode";
$l['d7_desc'] = "Opi käyttämään MyCode-tageja muotoillaksesi viestejäsi.";
$l['d7_document'] = "Voit käyttää MyCodea, yksinkertaistettua HTML:ää, saadaksesi viesteissäsi aikaan tiettyjä muotoiluja.
<p><br />[b]Tämä on lihavoitua[/b]<br />&nbsp;&nbsp;&nbsp;<b>Tämä on lihavoitua</b>
<p>[i]Tämä on kursivoitua[/i]<br />&nbsp;&nbsp;&nbsp;<i>Tämä on kursivoitua</i>
<p>[u]Tämä on alleviivattua[/u]<br />&nbsp;&nbsp;&nbsp;<u>Tämä on alleviivattua</u>
<p>[s]Tämä on poistettua[/s]<br />&nbsp;&nbsp;&nbsp;<strike>Tämä on poistettua</strike>
<p><br />[url]http://www.esimerkki.com/[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.esimerkki.com/\">http://www.esimerkki.com/</a>
<p>[url=http://www.esimerkki.com/]Example.com[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.esimerkki.com/\">Example.com</a>
<p>[email]esimerkki@esimerkki.com[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:esimerkki@esimerkki.com\">esimerkki@esimerkki.com</a>
<p>[email=esimerkki@esimerkki.com]Lähetä sähköpostia![/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:esimerkki@esimerkki.com\">Lähetä sähköpostia!</a>
<p>[email=esimerkki@esimerkki.com?subject=spam]Otsikoitu sähköposti[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:esimerkki@esimerkki.com?subject=spam\">Otsikoitu sähköposti</a>
<p><br />[quote]Lainattu teksti tulee tähän[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>Lainattu teksti tulee tähän</quote>
<p>[code]Asettelunsa säilyttävä teksti (mm. useammat välilyönnit)[/code]<br />&nbsp;&nbsp;&nbsp;<code>Asettelunsa säilyttävä teksti (mm. useammat välilyönnit)</code>
<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">
<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">
<p><br />[color=red]Punaista tekstiä[/color]<br />&nbsp;&nbsp;&nbsp;<font color=\"red\">Punaista tekstiä</font>
<p>[size=3]Tekstiä kokoa 3[/size]<br />&nbsp;&nbsp;&nbsp;<font size=\"3\">Tekstiä kokoa 3</font>
<p>[font=Tahoma]Tämä fontti on Tahoma[/font]<br />&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">Tämä fontti on Tahoma</font>
<p><br />[align=center]Keskitettyä tekstiä[/align]<div align=\"center\">Keskitettyä tekstiä</div>
<p>[align=right]Oikealle tasattua tekstiä[/align]<div align=\"right\">Oikealle tasattua tekstiä</div>
<p><br />[list]<br />[*]Listan kohta nro. 1<br />[*]Listan kohta nro. 2<br />[*]Listan kohta nro. 3<br />[/list]<br /><ul><li>Listan kohta nro. 1</li><li>Listan kohta nro. 2</li><li>Listan kohta nro. 3</li>
</ul>
<p>Voit tehdä järjestyslistan käyttämällä [list=1] numeroidulle ja [list=a] aakkokselliselle listalle.</p>";
?>