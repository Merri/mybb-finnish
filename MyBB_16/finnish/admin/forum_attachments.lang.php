<?php
/**
 * MyBB 1.6 Finnish Language Pack
 * Suomentanut Vesa Piittinen, katso http://community.mybb.com/thread-89482.html
 */

// Tabs
$l['attachments'] = "Liitetiedostot";
$l['stats'] = "Tilastot";
$l['find_attachments'] = "Etsi liitteitä";
$l['find_attachments_desc'] = "Liitetiedostojen hakujärjestelmällä voit etsiä tiettyjä käyttäjien lähettämiä tiedostoja. Kaikki kentät ovat valinnaisia eikä niitä huomioida hakuun ellei niihin ole syötetty arvoa.";
$l['find_orphans'] = "Paikanna orvot liitteet";
$l['find_orphans_desc'] = "Orpoutuneet liitetiedostot ovat liitteitä, jotka syystä tai toisesta puuttuvat joko tietokannasta tai tiedostojärjestelmästä. Tämä työkalu auttaa paikantamaan ja poistamaan virheelliset merkinnät.";
$l['attachment_stats'] = "Liitetiedostojen tilastot";
$l['attachment_stats_desc'] = "Yleisiä keskustelualueen liitetiedostoihin liittyviä tilastoja.";

// Errors
$l['error_nothing_selected'] = "Valitse vähintään yksi liitetiedosto poistettavaksi.";
$l['error_no_attachments'] = "Keskustelualueellasi ei ole liitetiedostoja. Tämä sivu tulee käytettäväksi kunhan ensimmäinen liitetiedosto on lähetetty.";
$l['error_not_all_removed'] = "Vain osa orvoista liitteistä poistettiin, joitakin ei voitu poistaa liitteiden hakemistosta.";
$l['error_invalid_username'] = "Kelvoton käyttäjänimi.";
$l['error_invalid_forums'] = "Vähintään yksi valituista alueista on kelvoton.";
$l['error_no_results'] = "Hakuehdoilla ei löytynyt liitetiedostoja.";
$l['error_not_found'] = "Liitetiedostoa ei löytynyt liitteiden hakemistosta.";
$l['error_not_attached'] = "Liite lähetettiin yli 24 tuntia sitten, mutta sitä ei liitetty viestiin.";
$l['error_does_not_exist'] = "Tämän liitteen keskustelua tai viestiä ei ole enää olemassa.";

// Success
$l['success_deleted'] = "Valitut liitetiedostot on poistettu.";
$l['success_orphan_deleted'] = "Valitut orvot liitetiedostot on poistettu.";
$l['success_no_orphans'] = "Keskustelualueellasi ei ole orpoja liitetiedostoja.";

// Confirm
$l['confirm_delete'] = "Haluatko varmasti poistaa valitut liitetiedostot?";

// == Pages
// = Stats
$l['general_stats'] = "Yleiset tilastot";
$l['stats_attachment_stats'] = "Liitetiedostot - liitteiden tilastot";
$l['num_uploaded'] = "<strong>Lähettyjen liitteiden määrä</strong>";
$l['space_used'] = "<strong>Tiedostojen käyttämä tila</strong>";
$l['bandwidth_used'] = "<strong>Arvioitu kaistankäyttö</strong>";
$l['average_size'] = "<strong>Keskimääräinen koko</strong>";
$l['size'] = "Koko";
$l['posted_by'] = "Lähettäjä";
$l['thread'] = "Keskustelu";
$l['downloads'] = "Lataukset";
$l['date_uploaded'] = "Latauspäivä";
$l['popular_attachments'] = "Viisi suosituinta liitetiedostoa";
$l['largest_attachments'] = "Viisi suurinta liitetiedostoa";
$l['users_diskspace'] = "Viisi eniten tilaa käyttävää käyttäjää";
$l['username'] = "Käyttäjänimi";
$l['total_size'] = "Käytetty tila";

// = Orphans
$l['orphan_results'] = "Orpojen liitteiden haun tulokset";
$l['orphan_attachments_search'] = "Orpojen liitteiden haku";
$l['reason_orphaned'] = "Orpoutumisen syy";
$l['reason_not_in_table'] = "Puuttuu liitteiden taulusta";
$l['reason_file_missing'] = "Liitetty tiedosto puuttuu";
$l['reason_thread_deleted'] = "Keskustelu on poistettu";
$l['reason_post_never_made'] = "Viestiä ei luotu";
$l['unknown'] = "Tuntematon";
$l['results'] = "tulosta";
$l['step1'] = "Vaihe 1";
$l['step2'] = "Vaihe 2";
$l['step1of2'] = "Vaihe 1 / 2 - Tiedostojärjestelmän tarkistus";
$l['step2of2'] = "Vaihe 2 / 2 - Tietokannan tarkistus";
$l['step1of2_line1'] = "Odota hetki, paikannetaan orpoja liitetiedostoja tiedostojärjestelmästä.";
$l['step2of2_line1'] = "Odota hetki, paikannetaan orpoja liitetiedostoja tietokannasta.";
$l['step_line2'] = "Seuraavaan vaiheeseen siirrytään automaattisesti tarkistuksen valmistuttua.";

// = Attachments / Index
$l['index_find_attachments'] = "Liitetiedostojen haku";
$l['find_where'] = "Hae liitetiedostoja joiden...";
$l['name_contains'] = "Tiedostonimi sisältää";
$l['name_contains_desc'] = "Tähtimerkki täsmää kaikkeen, esim. kaikki zip-tiedostot löytyy haulla \"*.zip\".";
$l['type_contains'] = "Tiedostotyyppi sisältää";
$l['forum_is'] = "Alue on";
$l['username_is'] = "Lähettäjän nimi sisältää";
$l['more_than'] = "Vähintään";
$l['greater_than'] = "Vähintään";
$l['is_exactly'] = "Täsmälleen";
$l['less_than'] = "Korkeintaan";
$l['date_posted_is'] = "Lähetyspäivä on";
$l['days_ago'] = "päivää sitten";
$l['file_size_is'] = "Tiedostokoko on";
$l['kb'] = "kt";
$l['download_count_is'] = "Latausmäärä on";
$l['display_options'] = "Näyttötapa";
$l['filename'] = "Tiedoston nimi";
$l['filesize'] = "Tiedoston koko";
$l['download_count'] = "Latausmäärä";
$l['post_username'] = "Viestin kirjoittaja";
$l['asc'] = "nousevasti";
$l['desc'] = "laskevasti";
$l['sort_results_by'] = "Lajittele tulokset";
$l['results_per_page'] = "Kerralla näytettävien tulosten määrä";
$l['in'] = "järjestäen";

// Buttons
$l['button_delete_orphans'] = "Poista valitut orvot";
$l['button_delete_attachments'] = "Poista valitut liitteet";
$l['button_find_attachments'] = "Suorita haku";

?>