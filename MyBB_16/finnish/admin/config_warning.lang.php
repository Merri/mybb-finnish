<?php
/**
 * MyBB 1.6 Finnish Language Pack
 * Suomentanut Vesa Piittinen, katso http://community.mybb.com/thread-89482.html
 */
 
$l['warning_system'] = "Varoitusjärjestelmä";
$l['warning_types'] = "Varoitustavat";
$l['warning_types_desc'] = "Täällä voit määrittää millaisia varoituksia keskustelualueen vastuuhenkilöt voivat antaa käyttäjille.";
$l['add_warning_type'] = "Luo uusi varoitustapa";
$l['add_warning_type_desc'] = "Täällä voit luoda uuden esimääritellyn varoitustavan. Varoitustavat ovat valittavissa käyttäjiä varoitettaessa ja niille voi asettaa pistemäärän jota ne kasvattavat sekä keston, jonka jälkeen varoitus ei ole enää voimassa.";
$l['edit_warning_type'] = "Muokkaa varoitustapaa";
$l['edit_warning_type_desc'] = "Täällä voit muokata tätä varoitustapaa. Varoitustavat ovat valittavissa käyttäjiä varoitettaessa ja niille voi asettaa pistemäärän jota ne kasvattavat sekä keston, jonka jälkeen varoitus ei ole enää voimassa.";
$l['warning_levels'] = "Varoitustasot";
$l['warning_levels_desc'] = "Varoitustasot määrittävät mitä käyttäjälle tapahtuu, mikäli he saavuttavat tietyn tason (prosenttitaso suurimmasta sallitusta varoituspisteiden määrästä). Käyttäjille voidaan langettaa banni tai viedä heiltä väliaikaisesti oikeuksia.";
$l['add_warning_level'] = "Lisää uusi varoitustaso";
$l['add_warning_level_desc'] = "Täällä voit määrittää uuden varoitustason, jotka määrittävät toimen käyttäjän saavuttaessa tietyn prosenttitason suurimmasta sallitusta varoituspisteiden määrästä.";
$l['edit_warning_level'] = "Muokkaa varoitustasoa";
$l['edit_warning_level_desc'] = "Varoitustasot määrittävät toimen käyttäjän saavuttaessa tietyn prosenttitason suurimmasta sallitusta varoituspisteiden määrästä.";

$l['percentage'] = "Prosenttiosuus";
$l['action_to_take'] = "Toimenpide";
$l['move_banned_group'] = "Siirrä bannattujen ryhmään ({3}) {1} {2}";
$l['move_banned_group_permanent'] = "Siirrä bannattujen ryhmään ({1}) pysyvästi";
$l['suspend_posting'] = "Vie viestinkirjoitusoikeudet {1} {2}";
$l['suspend_posting_permanent'] = "Vie viestinkirjoitusoikeudet pysyvästi";
$l['moderate_new_posts'] = "Suorita esivalvonta uusille viesteille {1} {2}";
$l['moderate_new_posts_permanent'] = "Suorita aina esivalvonta uusille viesteille";
$l['no_warning_levels'] = "Keskustelualueella ei ole varoitustasoja.";

$l['warning_type'] = "Varoitustapa";
$l['points'] = "Pisteet";
$l['expires_after'] = "Vanhentuminen";
$l['no_warning_types'] = "Keskustelualueella ei ole varoitustapoja.";

$l['warning_points_percentage'] = "Prosenttiosuus suurimmasta varoituspisteiden määrästä";
$l['warning_points_percentage_desc'] = "Syötä arvo 1 ja 100 väliltä.";
$l['action_to_be_taken'] = "Suoritetteva toimenpide";
$l['action_to_be_taken_desc'] = "Valitse käyttäjälle suoritettava toimenpide heidän saavuttaessaan tietyn tason.";
$l['ban_user'] = "Bannaa käyttäjä";
$l['banned_group'] = "Banniryhmä:";
$l['ban_length'] = "Bannin kesto:";
$l['suspend_posting_privileges'] = "Väliaikainen viestinkirjoitusoikeuden menetys";
$l['suspension_length'] = "Kesto:";
$l['moderate_posts'] = "Viestien esivalvonta";
$l['moderation_length'] = "Esivalvonnan kesto:";
$l['save_warning_level'] = "Tallenna varoitustaso";

$l['title'] = "Nimi";
$l['points_to_add'] = "Pisteiden määrä";
$l['points_to_add_desc'] = "Pisteiden määrä jolla varoitustaso kasvaa.";
$l['warning_expiry'] = "Varoituksen vanheneminen";
$l['warning_expiry_desc'] = "Kuinka pian tämän varoituksen laukeamisen jälkeen sen pitäisi vanhentua?";
$l['save_warning_type'] = "Tallenna varoitustapa";

$l['expiration_hours'] = "tunti(a)";
$l['expiration_days'] = "päivä(ä)";
$l['expiration_weeks'] = "viikko(a)";
$l['expiration_months'] = "kuukautta";
$l['expiration_never'] = "Ei koskaan";
$l['expiration_permanent'] = "Pysyvästi";

$l['error_invalid_warning_level'] = "Varoitustasoa ei ole olemassa.";
$l['error_invalid_warning_percentage'] = "Varoitustasolle asetettu prosenttiosuus ei ole kelvollinen. Arvon tulee olla 1 ja 100 väliltä.";
$l['error_invalid_warning_type'] = "Varoitustapaa ei ole olemassa.";
$l['error_missing_type_title'] = "Varoitustavalta puuttuu nimi";
$l['error_missing_type_points'] = "Varoitustason pisteiden arvo ei ole kelvollinen. Sen tulee olla enemmän kuin 0, muta pienempi kuin {1}";

$l['success_warning_level_created'] = "Varoitustaso on luotu.";
$l['success_warning_level_updated'] = "Varoitustaso on päivitetty.";
$l['success_warning_level_deleted'] = "Varoitustaso on poistettu.";
$l['success_warning_type_created'] = "Varoitustapa on luotu.";
$l['success_warning_type_updated'] = "Varoitustapa on päivitetty.";
$l['success_warning_type_deleted'] = "Varoitustapa on poistettu.";

$l['confirm_warning_level_deletion'] = "Haluatko varmasti poistaa tämän varoitustason?";
$l['confirm_warning_type_deletion'] = "Haluatko varmasti poistaa tämän varoitustavan?";

?>