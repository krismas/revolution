<?php
/**
 * Config Check English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = 'Kontakta en systemadministratör och varna om detta meddelande!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'Kontextinställningen allow_tags_in_post aktiverad utanför `mgr`';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'Kontextinställningen allow_tags_in_post är aktiverad utanför hanterarens kontext i din installation. MODX rekommenderar att den här inställningen inaktiveras såvida du inte uttryckligen behöver tillåta användarna att skicka MODX-taggar, numeriska entiteter eller HTML-script-taggar via POST-metoden i ett formulär på din webbplats. Detta bör normalt inaktiveras utom i hanterarens kontext (mgr).';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'Systeminställningen allow_tags_in_post aktiverad';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'Systeminställningen allow_tags_in_post är aktiverad i din installation. MODX rekommenderar att den här inställningen inaktiveras såvida du inte uttryckligen behöver tillåta användarna att skicka MODX-taggar, numeriska entiteter eller HTML-script-taggar via POST-metoden i ett formulär på din webbplats. Det är bättre att aktivera detta via kontextinställningarna för specifika kontexter.';
$_lang['configcheck_cache'] = 'Cache-katalogen inte skrivbar';
$_lang['configcheck_cache_msg'] = 'MODX kan inte skriva till cache-katalogen. MODX kommer fortfarande att fungera som väntat, men inga dokument kommer att cachas. För att rätta till det här, gör katalogen /_cache/ skrivbar.';
$_lang['configcheck_configinc'] = 'Konfigurationsfilen är fortfarande skrivbar!';
$_lang['configcheck_configinc_msg'] = 'Din webbplats är sårbar för hackers som kan göra mycket skada. Se till att din konfigurationsfil blir enbart läsbar. Om du inte är webbplatsens administratör bör du kontakta denne och berätta om det här meddelandet. Konfigurationsfilen finns här: [[+path]]';
$_lang['configcheck_default_msg'] = 'En ospecificerad varning hittades, vilket är konstigt.';
$_lang['configcheck_errorpage_unavailable'] = 'Felsidan för din webbplats är inte tillgänglig.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Detta betyder att din felsida inte är tillgänglig för vanliga användare eller att den inte existerar. Det här kan leda till att ett tillstånd med upprepande loopar skapas och ger upphov till att många fel rapporteras i webbplatsens loggar. Kontrollera att inga webbanvändargrupper är anslutna till sidan.';
$_lang['configcheck_errorpage_unpublished'] = 'Felsidan för din webbplats är inte publicerad eller existerar inte.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Detta betyder att din felsida inte är tillgänglig för allmänheten. Publicera sidan eller kontrollera i systeminställningarna att den refererade sidan är ett existerande dokument i webbplatsens dokumentträd.';
$_lang['configcheck_images'] = 'Bildkatalogen är inte skrivbar';
$_lang['configcheck_images_msg'] = 'Bildkatalogen är inte skrivbar eller finns inte. Detta betyder att bildhanteringsfunktionerna i editorn inte kommer att fungera!';
$_lang['configcheck_installer'] = 'Installationsprogrammet är fortfarande kvar';
$_lang['configcheck_installer_msg'] = 'Katalogen setup/ innehåller installationsprogrammet för MODX. Tänk vad som kan hända om en elak människa hittar katalogen och kör installationen! Hen kommer förhoppningsvis inte så långt eftersom databasen kräver inloggningsuppgifter, men det är ändå bäst att ta bort katalogen från servern. Du hittar den här: [[+path]]';
$_lang['configcheck_lang_difference'] = 'Fel antal fraser i språkfilen';
$_lang['configcheck_lang_difference_msg'] = 'Språket som för närvarande är valt har ett annat antal fraser än standardspråket. Detta behöver inte vara ett problem, men kan betyda att språkfilen behöver uppdateras.';
$_lang['configcheck_notok'] = 'En eller flera konfigurationsdetaljer är inte korrekta: ';
$_lang['configcheck_ok'] = 'Kontrollen utförd OK - inga varningar att rapportera.';
$_lang['configcheck_phpversion'] = 'PHP version is outdated';
$_lang['configcheck_phpversion_msg'] = 'Your PHP version [[+phpversion]] is no longer maintained by the PHP developers, which means no security updates are available. It is also likely that MODX or an extra package now or in the near future will no longer support this version. Please update your environment at least to PHP [[+phprequired]] as soon as possible to secure your site.';
$_lang['configcheck_register_globals'] = 'register_globals är satt till ON i din php.ini konfigurationsfil';
$_lang['configcheck_register_globals_msg'] = 'Denna konfiguration gör din webbplats betydligt mer sårbar för så kallade serveröverskridande scriptattacker (Cross Site Scripting eller XSS). Du bör ta kontakt med din webbhost och ta reda på vad du kan göra för att stänga av den här inställningen.';
$_lang['configcheck_title'] = 'Konfigurationskontroll';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Din webbplats otillåten-sida är inte publicerad eller existerar inte.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Detta betyder att din otillåten-sida inte är tillgänglig eller att den inte existerar. Det här kan leda till att ett tillstånd med upprepande loopar skapas och ger upphov till att många fel rapporteras i webbplatsens loggar. Kontrollera att inga webbanvändargrupper är anslutna till sidan.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Den otillåten-sida som angetts i inställningarna är inte publicerad.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Detta betyder att din otillåten-sida är oåtkomlig för allmänheten. Publicera sidan eller kontrollera i systeminställningarna att den refererade sidan är ett existerande dokument i webbplatsens dokumentträd.';
$_lang['configcheck_warning'] = 'Konfigurationsvarning:';
$_lang['configcheck_what'] = 'Vad betyder det här?';