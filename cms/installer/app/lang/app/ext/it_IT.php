<?php
$lang['action_freshen'] = 'Rinnovamento / Riparazione di una installazione CMSMS %s';
$lang['action_install'] = 'Creazione di un nuovo sito con CMSMS %s';
$lang['action_upgrade'] = 'Aggiornamento di un sito con CMSMS alla versione %s';
$lang['advanced_mode'] = 'Abilita modalità avanzata';
$lang['apptitle'] = 'Assistente installazione e aggiornamento';
$lang['assets_dir_exists'] = 'Directory assets esistente';
$lang['available_languages'] = 'Lingue disponibili';
$lang['build_date'] = 'Data di creazione';
$lang['changelog_uc'] = 'CHANGELOG';
$lang['cleaning_files'] = 'Pulizia dei file non più applicabili al rilascio';
$lang['config_writable'] = 'Controllo file di configurazione scrivibile';
$lang['confirm_freshen'] = 'Sicuro di voler rinnovare (riparare) l\'installazione esistente di CMSMS? Usare con estrema cautela!';
$lang['confirm_upgrade'] = 'Sicuro di voler iniziare il processo di aggiornamento';
$lang['curl_extension'] = 'Controllo estensione Curl';
$lang['create_assets_structure'] = 'Creazione di un percorso per le risorse dei file';
$lang['database_support'] = 'Controllo driver di database compatibili';
$lang['desc_wizard_step1'] = 'Inizia l\'installazione o il processo di aggiornamento';
$lang['desc_wizard_step2'] = 'Analizza directory di destinazione per trovare il software esistente';
$lang['desc_wizard_step3'] = 'Controllo che tutto sia OK per installare il CMSMS Core';
$lang['desc_wizard_step4'] = 'Per le nuove installazioni, e le operazioni di rinnovamento, immettere le informazioni configurazione di base';
$lang['desc_wizard_step5'] = 'Per le nuove installazioni, immettere le informazioni account Admin';
$lang['desc_wizard_step6'] = 'Per le nuove installazioni inserire alcuni dettagli di base del sito';
$lang['desc_wizard_step7'] = 'Estrazione files';
$lang['desc_wizard_step8'] = 'Creazione o aggiornamento dello schema del database, impostazione eventi iniziali, permessi, account utente, template, fogli di stile e contenuti';
$lang['desc_wizard_step9'] = 'Installazione e/o aggiornamento dei moduli se necessario, scrittura file di configurazione, e pulizia.';
$lang['destination_directory'] = 'Directory di destinazione';
$lang['dest_writable'] = 'Permesso di scrittura nella directory di destinazione';
$lang['disable_functions'] = 'Controllo funzioni disabilitate';
$lang['done'] = 'fatto';
$lang['email_accountinfo_message'] = 'L\'installazione di CMS Made Simple è completa.

Questa email contiene informazioni sensibili e deve essere conservata in un luogo sicuro.

Ecco i dettagli della vostra installazione.
username: %s
Password: %s
directory di installazione: %s
url root: %s';
$lang['email_accountinfo_message_exp'] = 'L\'installazione di CMS Made Simple è completa.

Questa email contiene informazioni sensibili e deve essere conservata in un luogo sicuro.

Ecco i dettagli della vostra installazione.
username: %s
Password: %s
directory di installazione: %s';
$lang['email_accountinfo_subject'] = 'Installazione di CMS Made Simple riuscita con successo';
$lang['emailaccountinfo'] = 'Invio informazioni account via e-mail';
$lang['emailaddr'] = 'Indirizzo e-mail';
$lang['error_adminacct_emailaddr'] = 'L\'indirizzo e-mail che hai indicato non è valido';
$lang['error_adminacct_emailaddrrequired'] = 'Hai scelto l\'invio delle informazioni dell\'account via e-mail ma l\'indirizzo che hai indicato non è valido';
$lang['error_adminacct_password'] = 'La password specificata non è (valida Deve essere di almeno 6 caratteri)';
$lang['error_adminacct_repeatpw'] = 'La password inserita non corrisponde.';
$lang['error_adminacct_username'] = 'L\'username indicato non è valido.  Per favore riprova.';
$lang['error_admindirrenamed'] = 'Sembra che, per ragioni di sicurezza, tu possa aver rinominato la directory admin del tuo CMSMS. Devi invertire <a href="https://docs.cmsmadesimple.org/general-information/securing-cmsms#renaming-admin-folder" target="_blank" class="external">questo processo</a> al fine di procedere!<br/><br/>Una volta ripristinato il nome della directory admin al percorso originale, ricarica questa pagina.';
$lang['error_backupconfig'] = 'Non è stato possibile effettuare correttamente il backup del file di configurazione';
$lang['error_checksum'] = 'Il checksum  del file estratto non corrisponde all\'originale';
$lang['error_cmstablesexist'] = 'Sembra che ci sia già un\'installazione di CMSMS in questo database. Per favore inserisci delle informazioni diverse per il database. Se desideri usare un diverso prefisso per le tabelle devi riavviare il processo di installazione ed attivare la modalità avanzata.';
$lang['error_createtable'] = 'Problema durante la creazione della tabella nel database.  Forse è una questione di permessi';
$lang['error_dbconnect'] = 'Non è stato possibile collegarsi al database.  Per favore ricontrolla le credenziali fornite';
$lang['error_dirnotvalid'] = 'La directory %s non esiste (o non è scrivibile)';
$lang['error_droptable'] = 'Problema durante l\'eliminazione della tabella.  Forse è una questione di permessi';
$lang['error_filenotwritable'] = 'Non è stato possibile sovrascrivere il file %s (problema di permessi)';
$lang['error_internal'] = 'Spiacente, qualcosa non ha funzionato... (internal error) (%s)';
$lang['error_invalid_directory'] = 'Sembra che la directory che hai scelto per l\'installazione sia una directory di lavoro dello stesso installer';
$lang['error_invalidconfig'] = 'Errore nel file di configurazione oppure manca il file di configurazione';
$lang['error_invaliddbpassword'] = 'La password del database contiene dei caratteri non validi che non possono essere salvati in modo sicuro.';
$lang['error_invalidkey'] = 'Variabile membro non valida o chiave %s per la classe %s';
$lang['error_invalidparam'] = 'Parametro o valore del parametro non valido: %s';
$lang['error_invalidtimezone'] = 'Il fuso orario specificato non è valido';
$lang['error_invalidqueryvar'] = 'La variabile della query inserita contiene caratteri non validi.  Per favore usa solo caratteri alfanumerici ed il segno di sottolineato.';
$lang['error_missingconfigvar'] = 'La chiave "%s" risulta mancante o non valida nel file config.ini';
$lang['error_noarchive'] = 'Problema nel trovare il file archivio... Per favore ricomincia';
$lang['error_nlsnotfound'] = 'Problema nel trovare i file NLS nell\'archivio';
$lang['error_nodatabases'] = 'Non è stato possibile trovare un\'estensione compatibile del database';
$lang['error_nodbhost'] = 'Per favore inserisci un hostname valido oppure un indirizzo IP per la connessione del database';
$lang['error_nodbname'] = 'Per favore inserisci il nome di un database valido presso l\'host specificato qui sopra';
$lang['error_nodbpass'] = 'Per favore inserisci una password valida per l\'autenticazione col database';
$lang['error_nodbprefix'] = 'Per favore inserisci un prefisso valido per le tabelle del database';
$lang['error_nodbtype'] = 'Per favore seleziona un tipo di database';
$lang['error_nodbuser'] = 'Per favore inserisci un username valido per l\'autenticazione col database';
$lang['error_nodestdir'] = 'Directory di destinazione non impostata';
$lang['error_nositename'] = 'Il nome del sito è un parametro richiesto. Per favore inseriscine uno adeguato per il tuo sito.';
$lang['error_notimezone'] = 'Per favore inserisci un fuso orario valido per questo server';
$lang['error_overwrite'] = 'Problema con i permessi: non posso sovrascrivere %s';
$lang['error_sendingmail'] = 'Errore nell\'invio della mail';
$lang['error_tzlist'] = 'Si è verificato un problema nel recuperare l\'elenco degli identificatori del fuso orario';
$lang['errorlevel_estrict'] = 'Controllo per E_STRICT';
$lang['errorlevel_edeprecated'] = 'Controllo per E_DEPRECATED';
$lang['edeprecated_enabled'] = 'E_DEPRECATED è attivato in PHP error_reporting.  Sebbene ciò non impedirà a CMSMS di funzionare, potrebbero venire visualizzati dei warning nelle schermate di output, in particolar modo con vecchi moduli di terze parti';
$lang['estrict_enabled'] = 'E_STRICT è attivato in PHP error_reporting. Sebbene ciò non impedirà a CMSMS di funzionare, potrebbero essere visualizzati dei warning nell\'output HTML, in particolar modo con vecchi moduli di terze parti';
$lang['fail_assets_dir'] = 'Una directory assets esiste già.  Questa applicazione potrebbe scrivere in questa directory per razionalizzare il percorso dei file.  Per favore assicurati di avere un backup';
$lang['fail_assets_msg'] = 'Una directory assets esiste già.  Questa applicazione potrebbe scrivere in questa directory per razionalizzare il percorso dei file.  Per favore assicurati di avere un backup';
$lang['fail_config_writable'] = 'Il processo HTTP non pu&ograve scrivere nel file config.php. Per favore cerca di cambiare i permessi di questo file a 777 fino a che il processo di aggiornamento non sarà completato';
$lang['fail_curl_extension'] = 'L\'estensione curl non è stata trovata. Sebbene non sia un problema critico, ciò potrebbe provocare problemi con alcuni moduli di terze parti';
$lang['fail_database_support'] = 'Non sono stati trovati driver del database compatibili';
$lang['fail_file_get_contents'] = 'La funzione file_get_contents non esiste oppure è disattivata. CMSMS non può continuare (probabilmente anche l\'installer fallirà)';
$lang['fail_file_uploads'] = 'Le funzionalità di caricamento dei file sono disattivate in questo ambiente. Alcune funzioni di CMSMS non funzioneranno in questo ambiente';
$lang['fail_func_json'] = 'La funzionalità json non è stata trovata';
$lang['fail_func_gzopen'] = 'La funzione gzopen non è stata trovata';
$lang['fail_func_md5'] = 'La funzionalità md5 non è stata trovata';
$lang['fail_func_tempnam'] = 'La funzione tempnam non esiste. E\' una funzione richiesta per il funzionamento di CMSMS';
$lang['fail_func_ziparchive'] = 'La funzionalità ZipArchive non è stata trovata.  Ciò potrebbe limitare il funzionamento';
$lang['fail_ini_set'] = 'Sembra che non sia possibile cambiare le impostazioni ini. Ciò potrebbe provocare problemi con i moduli di terze parti (o quando si attiva la modalità debug)';
$lang['fail_magic_quotes_runtime'] = 'Sembra che magic quotes siano attivate nella tua configurazione. Per favore disabilitale e riprova';
$lang['fail_max_execution_time'] = 'Il tuo tempo massimo di esecuzione di %s non coincide con il valore minimo di %s.  Ti raccomandiamo di aumentarlo a %s o più';
$lang['fail_memory_limit'] = 'Il valore del tuo limite di memoria è troppo basso. Tu avevi %s, ma un minimo di %s è richiesto e %s viene raccomandato';
$lang['fail_multibyte_support'] = 'Il supporto a Multibyte non è attivato nella tua configurazione';
$lang['fail_output_buffering'] = 'Non è attivato Output buffering.';
$lang['fail_open_basedir'] = 'Sono attive le restrizioni Open basedir. CMSMS richiede che ciò venga disattivato';
$lang['fail_php_version'] = 'La versione di PHP disponibile per CMSMS è di importanza critica. La versione minima accettata è la %s, sebbene si raccomandi la versione %s o superiore. Tu hai la %s';
$lang['fail_post_max_size'] = 'Il tuo post max size di %s non coincide con il valore minimo di %s. Un valore %s o superiore è raccomandato ed assicurati che sia più ampio del upload_max_filesize';
$lang['fail_pwd_writable2'] = 'Il processo HTTP deve essere in grado di scrivere nella directory di destinazione (in tutti i file e nelle directory al di sotto) al fine di installare i file. Non abbiamo i permessi di scrittura in (almeno ) %s';
$lang['fail_register_globals'] = 'Per favore disattiva register globals nella tua configurazione di PHP';
$lang['fail_remote_url'] = 'Abbiamo riscontrato dei problemi nel collegarci ad un URL remoto.  Ciò limiterà alcune funzionalità di CMS Made Simple';
$lang['fail_safe_mode'] = 'CMSMS non funzionerà correttamente in un ambiente dove sia attivato safe mode. Safe mode è deprecato in quanto modalità non più valida e verrà rimosso nelle prossime versioni di PHP';
$lang['fail_session_save_path_exists'] = 'Il valore della variabile della sessione save path non è valido';
$lang['fail_session_save_path_writable'] = 'La directory della sessione save path non è scrivibile';
$lang['fail_session_use_cookies'] = 'CMSMS richiede che il PHP sia configurato in modo da archiviare la chiave della sessione in un cookie';
$lang['fail_tmpfile'] = 'La funzione system tmpfile() non funziona. Ciò è richiesto per consentirci di estrarre gli archivi. L\'argomento dell\'url TMPDIR facoltativo può essere fornito all\'installer per indicare una directory scrivibile. Si veda il file README che dovrebbe essere incluso in questa directory.';
$lang['fail_tmp_dirs_empty'] = 'Le directory temporanee di CMSMS <em>(tmp/cache e tmp/templates_c) esistono e non sono vuote.  Per favore rimuovile o svuotale';
$lang['fail_xml_functions'] = 'L\'estensione XML non è stata trovata. Per favore attivala nel tuo ambiente PHP';
$lang['failed'] = 'fallito';
$lang['file_get_contents'] = 'Test della funzione file_get_contents';
$lang['file_installed'] = 'Installato %s';
$lang['file_uploads'] = 'Controllo il supporto per l\'upload di file';
$lang['finished_custom_freshen_msg'] = 'La tua installazione è stata rinnovata! I file del core sono stati aggiornati ed un nuovo file di configurazione è stato creato. Per favore visita il tuo sito per verificare che tutto funzioni correttamente';
$lang['finished_custom_install_msg'] = 'Fatto! Per favore visita il tuo sito ed effettua il login al pannello di amministrazione.';
$lang['finished_custom_upgrade_msg'] = 'Fatto!  Per favore visita il pannello di amministrazione del tuo CMSMS ed il frontend per verificare che tutto funzioni correttamente.<br/><strong>Suggerimento:</strong> Adesso è il momento giusto per creare un nuovo backup.';
$lang['finished_freshen_msg'] = 'La tua installazione è stata rinnovata! I file del core sono stati aggiornati ed un nuovo file di configurazione è stato creato.  Ora puoi <a href="%s">visitare  il tuo sito</a> o effettuare il login al <a href="%s">pannello di amministrazione di CMSMS</a>.';
$lang['finished_install_msg'] = 'Abbiamo finito! Ora puoi <a href="%s">visitare il tuo sito</a> o effettuare il login al <a href="%s">pannello di amministrazione di CMSMS</a>.';
$lang['finished_upgrade_msg'] = 'Tutto fatto! Per favore visita il <a href="%s">frontend del tuo sito</a> e il <a href="%s">Pannello di amministrazione</a> per verificare che funzioni correttamente. Potresti anche dover aggiornare alcuni moduli di terze parti.<br/><strong>Suggerimento:</strong> Ricordati di creare un altro backup dopo aver verificato il corretto funzionamento.';
$lang['freshen'] = 'Rinnova (ripara) installazione';
$lang['func_json'] = 'Controllo la funzionalità json di encoding e decoding';
$lang['func_md5'] = 'Controllo la funzionalità md5';
$lang['func_tempnam'] = 'Controllo funzione tempnam';
$lang['func_gzopen'] = 'Controllo funzione gzopen';
$lang['func_ziparchive'] = 'Controllo funzione ziparchive';
$lang['gd_version'] = 'Versione GD';
$lang['goback'] = 'Indietro';
$lang['info_addlanguages'] = 'Seleziona le lingue(in aggiunta all\'inglese) da installare. <strong>Nota:</strong> non tutte le traduzioni sono complete.';
$lang['info_adminaccount'] = 'Per favore fornisci le credenziali per l\'account dell\'amministratore iniziale. Questo account avrà accesso a tutte le funzionalità della console amministrativa di CMSMS.';
$lang['info_advanced'] = 'La modalità avanzata abilita altre opzioni nella procedura di installazione.';
$lang['info_dbinfo'] = 'CMS Made Simple archivia una grande mole di dati nel database. Una connessione al database è obbligatoria. Inoltre, le credenziali dell\'utente che fornisci debbono avere ALL PRIVILEGES sul database indicato per consentire la creazione, l\'eliminazione e la modifica delle tabelle, indici e views.';
$lang['info_errorlevel_edeprecated'] = 'E_DEPRECATED è un flag per la segnalazione di errori di PHP che indica che dei warnings dovrebbero essere mostrati in relazione a codice che usa tecniche deprecate.  Sebbene il core di CMSMS cerchi di assicurare che non si usino più tecniche deprecate, alcuni moduli potrebbero non farlo. Si raccomanda di disattivare questa impostazione nella configurazione di PHP';
$lang['info_errorlevel_estrict'] = 'E_STRICT è un flag per la segnalazione di errori di PHP il quale indica che devono essere rispettati rigorosi standard di codifica. Sebbene il core di CMSMS cerchi di conformarsi agli standard di E_STRICT, alcuni moduli potrebbero non farlo. Si raccomanda che questa impostazione venga disattivata nella configurazione di PHP';
$lang['info_installcontent'] = 'Di default, questo installer creerà una serie di pagine di esempio, fogli di stile e modelli  in CMSMS. I contenuti di esempio forniscono informazioni estese e suggerimenti per aiutare nella creazione di siti web con CMSMS ed è utile leggerli. Tuttavia, se hai già confidenza con CMS Made Simple, disabilitando questa opzione si otterranno un insieme minimo di modelli, fogli di stile e pagine di contenuto.';
$lang['info_open_basedir_session_save_path'] = 'open_basedir è attivato nella tua configurazione di PHP. Non è stato possibile verificare adeguatamente le capacità di sessione. Tuttavia, essendo arrivati a questopunto del processo di installazione significa probabilmente che le sessioni funzionano correttamente.';
$lang['info_pwd_writable'] = 'Questa applicazione necessita dei permessi di scrittura nella directory di lavoro corrente';
$lang['info_queryvar'] = 'La variabile della query viene usata internamente da CMSMS per identificare la pagina richiesta. Nella maggior parte dei casi non dovrebbe essere necessario regolarla.';
$lang['info_sitename'] = 'Il nome del sito viene usato nei modelli predefiniti come parte del titolo. Per favore inserisci un nome per il sito leggibile da parte di una persona';
$lang['info_timezone'] = 'L\'informazione relativa al fuso orario è necessaria per i calcoli del tempo e per le visualizzazioni di tempo/data. Per favore seleziona il fuso orario del server';
$lang['ini_set'] = 'Test della possibilità di cambiare le impostazioni INI in corso';
$lang['install'] = 'Installa';
$lang['install_attachstylesheets'] = 'Collega i fogli di stile ai temi';
$lang['install_backupconfig'] = 'Back up del file di configurazione in corso';
$lang['install_createassets'] = 'Crea struttura assets';
$lang['install_created_index'] = 'Creato indice %s ... %s';
$lang['install_create_tables'] = 'Crea tabelle database';
$lang['install_createconfig'] = 'Crea nuovo file di configurazione';
$lang['install_createcontentpages'] = 'Crea pagine di contenuto predefinito';
$lang['install_created_table'] = 'Creata tabella %s: .... %s';
$lang['install_createtablesindexes'] = 'Creazione di tabelle ed indici in corso';
$lang['install_createtmpdirs'] = 'Crea directory temporanee';
$lang['install_creating_index'] = 'Creato indice %s';
$lang['install_default_collections'] = 'Installa le collezioni predefinite';
$lang['install_defaultcontent'] = 'Installa il contenuto predefinito';
$lang['install_detectlanguages'] = 'Rileva lingue installate';
$lang['install_dropping_tables'] = 'Eliminazione tabelle in corso';
$lang['install_dummyindexhtml'] = 'Crea file index.html vuoti';
$lang['install_extractfiles'] = 'Estrai file dall\'archivio';
$lang['install_initevents'] = 'Crea eventi';
$lang['install_initsitegroups'] = 'Crea gruppi iniziali';
$lang['install_initsiteperms'] = 'Imposta i permessi iniziali';
$lang['install_initsiteprefs'] = 'Imposta le preferenze iniziali del sito';
$lang['install_initsiteusers'] = 'Crea l\'account dell\'utente iniziale';
$lang['install_initsiteusertags'] = 'Tag definiti dall\'utente iniziali';
$lang['install_module'] = 'Installa il modulo %s';
$lang['install_modules'] = 'Installa moduli disponibili';
$lang['install_passwordsalt'] = 'Imposta password salt';
$lang['install_requireddata'] = 'Imposta i dati iniziali richiesti';
$lang['install_schema'] = 'Crea schema del database';
$lang['install_setschemaver'] = 'Imposta versione schema';
$lang['install_setsequence'] = 'Resetta sequenza tabelle';
$lang['install_setsitename'] = 'Imposta il nome del sito';
$lang['install_stylesheets'] = 'Crea i fogli di stile predefiniti';
$lang['install_templates'] = 'Crea i modelli predefiniti';
$lang['install_templatetypes'] = 'Crea tipi di modelli standard';
$lang['install_update_sequences'] = 'Aggiorna sequenza tabelle';
$lang['install_updatehierarchy'] = 'Aggiorna le posizioni di gerarchia del contenuto';
$lang['install_updateseq'] = 'Aggiorna sequenza per %s';
$lang['installer_ver'] = 'Versione installer';
$lang['legend'] = 'Legenda';
$lang['magic_quotes_runtime'] = 'Assicurati che magic quotes siano disattivate';
$lang['max_execution_time'] = 'Verifica del tempo massimo di esecuzione dello script PHP in corso';
$lang['meaning'] = 'Significato';
$lang['memory_limit'] = 'Verifica di un limite sufficiente di memoria di PHP in corso';
$lang['msg_clearedcache'] = 'Pulita la cache del server';
$lang['msg_configsaved'] = 'File di configurazione esistente salvato in %s';
$lang['msg_upgrade_module'] = 'Aggiornamento in corso del modulo %s';
$lang['msg_upgrademodules'] = 'Aggiornamento dei moduli in corso';
$lang['msg_yourvalue'] = 'Tu hai: %s';
$lang['multibyte_support'] = 'Verifica del supporto multibyte';
$lang['next'] = 'Avanti';
$lang['no'] = 'No';
$lang['none'] = 'Nessuno';
$lang['open_basedir'] = 'Restrizioni open_basedir';
$lang['open_basedir_session_save_path'] = 'open_basedir è attivato. Non posso testare la sessione save path.';
$lang['output_buffering'] = 'Verifica abilitazione dell\'output del buffering';
$lang['pass_config_writable'] = 'Il processo HTTP ha il permesso di scrittura nel file config.php';
$lang['pass_database_support'] = 'Trovato almeno un driver di database compatibile';
$lang['pass_func_json'] = 'Rilevata la funzionalità json';
$lang['pass_func_md5'] = 'La funzionalità md5 è stata rilevata';
$lang['pass_func_tempnam'] = 'La funzione tempnam esiste';
$lang['pass_memory_limit_nolimit'] = 'Non c\'è un limite di memoria PHP preimpostato';
$lang['pass_multibyte_support'] = 'Il supporto Multibyte sembra essere abilitato';
$lang['pass_php_version'] = 'La versione di PHP attualmente configurata non corrisponde ai requisiti minimi. Si richiede almeno PHP %s , ma si raccomanda %s o superiore';
$lang['pass_pwd_writable'] = 'Il processo HTTP può scrivere nella directory di destinazione. Ciò è necessario per estrarre i file';
$lang['password'] = 'Password';
$lang['ph_sitename'] = 'Inserisci un nome del sito';
$lang['php_version'] = 'Versione PHP';
$lang['post_max_size'] = 'Verifica della massima quantità di dati che può essere inviata in una richiesta';
$lang['prompt_addlanguages'] = 'Lingue aggiuntive';
$lang['prompt_createtables'] = 'Crea tabelle del database';
$lang['prompt_dbhost'] = 'Hostname del database';
$lang['prompt_dbinfo'] = 'Informazioni del database';
$lang['prompt_dbname'] = 'Nome del database';
$lang['prompt_dbpass'] = 'Password';
$lang['prompt_dbport'] = 'Numero della porta del database';
$lang['prompt_dbprefix'] = 'Prefisso nome tabella del database';
$lang['prompt_dbtype'] = 'Tipo di database';
$lang['prompt_dbuser'] = 'Nome utente';
$lang['prompt_dir'] = 'Directory di installazione';
$lang['prompt_installcontent'] = 'Installa contenuti di esempio';
$lang['prompt_queryvar'] = 'Variabile Query';
$lang['prompt_sitename'] = 'Nome del sito web';
$lang['prompt_timezone'] = 'Fuso orario del server';
$lang['pwd_writable'] = 'Directory scrivibile';
$lang['queue_for_upgrade'] = 'Accodato modulo non core %s per aggiornamento al prossimo step.';
$lang['readme_uc'] = 'README';
$lang['register_globals'] = 'Verifica disabilitazione "register globals"';
$lang['remote_url'] = 'Test sulla possibilità di effettuare connessioni HTTP in uscita';
$lang['repeatpw'] = 'Ripeti password';
$lang['reset_site_preferences'] = 'Resetta alcune preferenze del sito';
$lang['reset_user_settings'] = 'Resetta le preferenze dell\'utente';
$lang['retry'] = 'Riprova';
$lang['safe_mode'] = 'Test per verificare che "safe mode" sia disabilitato';
$lang['saltpasswords'] = 'Salt Passwords';
$lang['select_language'] = 'La prima cosa che ti chiediamo di fare è quella di selezionare la tua lingua preferita dall\'elenco qui sotto. Ciò servirà a migliorare la tua esperienza durante la procedura di installazione, ma non inciderà sull\'installazione di CMSMS.';
$lang['send_admin_email'] = 'Invia e-mail con le credenziali per il login dell\'amministratore';
$lang['session_capabilities'] = 'Test sulle corrette funzionalità di sessione (le sessioni usano i cookie e il percorso di salvataggio della sessione è scrivibile, ecc)';
$lang['session_save_path_exists'] = 'Session_save_path esiste';
$lang['session_save_path_writable'] = 'Session_save_path è scrivibile';
$lang['session_use_cookies'] = 'Verifica che le sessioni PHP usino i cookie';
$lang['sometests_failed'] = 'Sono stati effettuati numerosi test del tuo attuale ambiente web. Sebbene non siano stati rilevati problemi critici, si raccomanda che i seguenti elementi vengano corretti prima di continuare.';
$lang['step1_advanced'] = 'Modalità avanzata';
$lang['step1_destdir'] = 'Seleziona la directory';
$lang['step1_info_destdir'] = '<strong>Attenzione:</strong> Questo programma può installare od aggiornare installazioni multiple di CMS Made Simple. E\' importante che tu selezioni la directory corretta per l\'installazione o per l\'aggiornamento.';
$lang['step1_language'] = 'Seleziona la lingua';
$lang['step1_title'] = 'Seleziona la lingua';
$lang['step2_cmsmsfound'] = 'E\' stata rilevata un\'installazione di CMS Made Simple. Si può aggiornare questa installazione. Tuttavia, prima di procedere, assicurati di avere un backup attuale e verificato di tutti i file e del database';
$lang['step2_cmsmsfoundnoupgrade'] = 'Sebbene sia stata rilevata un\'installazione di CMS Made Simple, non si può aggiornare questa versione usando questa applicazione. La versione potrebbe essere troppo vecchia.';
$lang['step2_confirminstall'] = 'Sei sicuro di voler installare CMS Made Simple';
$lang['step2_confirmupgrade'] = 'Sei sicuro di voler aggiornare CMS Made Simple';
$lang['step2_errorsamever'] = 'Sembra che la directory selezionata contenga già un\'installazione di CMSMS con la stessa versione inclusa in questo script. Continuando si rinnoverà l\'installazione.';
$lang['step2_errortoonew'] = 'Sembra che la directory selezionata contenga già un\'installazione di CMSMS con una versione più recente di quella contenuta in questo script. Impossibile procedere';
$lang['step2_info_freshen'] = 'Il rinnovamento dell\'installazione comporta la sostituzione di tutti i file del core e la creazione di una nuova configurazione. Ti verranno richieste alcune informazioni di base relative alla configurazione, tuttavia il database non verrà toccato.';
$lang['step2_installdate'] = 'Data approssimativa di installazione';
$lang['step2_install_dirnotempty2'] = 'Questa cartella contiene già alcuni file e/o sottocartelle.  Sebbene sia possibile installare qui CMSMS, ciò potrebbe inavvertitamente danneggiare un\'applicazione esistente.  Per favore ricontrolla i contenuti di questa cartella.  A scopo di riferimento alcuni di questi file sono elencati qui sotto.  Per favore assicurati che ciò sia esatto.';
$lang['step2_hdr_upgradeinfo'] = 'Informazioni di versione';
$lang['step2_info_upgradeinfo'] = 'Qui sotto trovi le note di rilascio disponibili e le informazioni del changelog per ogni release. Il pulsante sottostante mostrerà informazioni dettagliate su cosa è cambiato in ogni versione di CMS Made Simple. Potrebbero esserci ulteriori istruzioni od avvisi in ogni versione che potrebbero incidere sul processo di aggiornamento.';
$lang['step2_minupgradever'] = 'La versione minima dalla quale questa applicazione può effettuare l\'aggiornamento è: %s. Dovresti aggiornare la tua applicazione ad una versione più recente in più passaggi, usando un altro metodo prima di completare il processo di aggiornamento. Per favore assicurati di avere un backup completo e verificato prima di usare un qualsiasi metodo di aggiornamento.';
$lang['step2_nocmsms'] = 'Non è stata rilevata un\'installazione di CMS Made Simple in questa directory. Sembra che questa sia una nuova installazione';
$lang['step2_nofiles'] = 'Come richiesto, i file del Core di CMSMS non saranno elaborati durante questo processo';
$lang['step2_passed'] = 'Superato';
$lang['step2_pwd'] = 'La tua directory di lavoro attuale';
$lang['step2_schemaver'] = 'Versione Schema Database';
$lang['step2_version'] = 'La tua versione';
$lang['step3_failed'] = 'Questo pacchetto ha effettuato numerosi test del tuo ambiente PHP ed uno o più di questi test sono falliti. Dovrai correggere questi errori nella tua configurazione prima di continuare. Una volta corretti gli errori, clicka su "Riprova" qui sotto.';
$lang['step3_passed'] = 'Questo pacchetto ha effettuato numerosi test del tuo ambiente PHP e sono stati tutti superati. Questa è un\'ottima notizia! Sebbene non si tratti di un test onnicomprensivo, non dovresti avere difficoltà a far funzionare l\'installazione del core di CMSMS.';
$lang['step9_removethis'] = '<strong>Attenzione</strong> Per ragioni di sicurezza è importante che venga rimosso l\'installer dal tuo sito navigabile appena avrai verificato che l\'operazione abbia avuto successo.';
$lang['symbol'] = 'Simbolo';
$lang['social_message'] = 'CMS Made Simple è stato installato con successo!';
$lang['test_failed'] = 'Un test richiesto è fallito';
$lang['test_passed'] = 'Un test è stato superato <em>(i test superati vengono mostrati solo nella modalità avanzata)</em>';
$lang['test_warning'] = 'Un\'impostazione è al di sopra del valore richiesto, ma al di sotto del valore raccomandato, o...<br />Una funzionalità che potrebbe essere necessaria per qualche funzionalità opzionale non è disponibile';
$lang['th_status'] = 'Stato';
$lang['th_testname'] = 'Test';
$lang['th_value'] = 'Valore';
$lang['title_error'] = 'Houston, abbiamo un problema!';
$lang['title_step2'] = 'Passo 2 - Rilevamento software esistente';
$lang['title_step3'] = 'Passo 3 - Test';
$lang['title_step4'] = 'Passo 4 - Informazioni di base per la configurazione';
$lang['title_step5'] = 'Passo 5 - Informazioni per l\'account dell\'amministratore';
$lang['title_step6'] = 'Passo 6 - Impostazioni del sito';
$lang['title_step7'] = 'Passo 7 - Installa i file dell\'applicazione';
$lang['title_step8'] = 'Passo 8 - Lavoro sul Database';
$lang['title_step9'] = 'Passo 9 - Finito';
$lang['title_welcome'] = 'Benvenuto';
$lang['title_forum'] = 'Forum di supporto';
$lang['title_docs'] = 'Documentazione ufficiale';
$lang['title_api_docs'] = 'Documentazione API ufficiale';
$lang['to'] = 'a';
$lang['title_share'] = 'Condividi la tua esperienza con i tuoi amici.';
$lang['tmpfile'] = 'Controllo funzionamento tmpfile()';
$lang['tmp_dirs_empty'] = 'Verifica che le directory temporanee siano vuote o che non esistano';
$lang['upgrade'] = 'Aggiorna';
$lang['upgrade_deleteoldevents'] = 'Cancellazione vecchi eventi';
$lang['upgrading_schema'] = 'Aggiornamento schema database';
$lang['upload_max_filesize'] = 'Controllo dimensione massima dei file caricati';
$lang['username'] = 'Nome utente';
$lang['warn_disable_functions'] = 'Nota: una o più funzioni del core di PHP sono disabilitate. Ciò può avere un impatto negativo sulla tua installazione di CMSMS, in particolar modo con estensioni di terze parti. Per favore tieni d\'occhio il tuo error log. Le tue funzioni disabilitate sono: <br /><br />%s';
$lang['warn_max_execution_time'] = 'Sebbene il tuo tempo massimo di esecuzione di %s sia pari o superiore al valore minimo di %s, si raccomanda di aumentarlo a %s o superiore';
$lang['warn_memory_limit'] = 'Il valore del tuo limite di memoria è %s, che è al di sopra del minimo di %s. Tuttavia, si raccomanda %s';
$lang['warn_open_basedir'] = 'open_basedir è abilitato nella tua configurazione php.  Sebbene tu possa continuare, CMSMS non supporterà installazioni con restrizioni open_basedir.';
$lang['warn_post_max_size'] = 'Il valore della massima dimensione dei  post è %s, che è al di sopra del minimo di %s, tuttavia si raccomanda %s . Per favore assicurati anche che questo valore sia superiore a upload_max_filesize';
$lang['warn_tests'] = '<strong>Nota:</strong> Il superamento di tutti questi test dovrebbe garantire che CMSMS funzioni correttamente per la maggior parte dei siti. Tuttavia, col crescere del sito e l\'aggiunta di altre funzionalità, questi valori minimi potrebbero diventare insufficienti. Inoltre, moduli di terze parti potrebbero aver bisogno di altre risorse per funzionare correttamente';
$lang['warn_upload_max_filesize'] = 'Sebbene la tua impostazione di %s sia sufficiente, si raccomanda di aumentare l\'impostazione di upload_max_filesize in PHP ad almeno %s';
$lang['welcome_message'] = 'Benvenuto! Questo è il Sistema Automatico di Installazione di CMS Made Simple.  Questo pacchetto ti consentirà di avere rapidamente e facilmente la conferma che il tuo host web è compatibile con CMSMS e di installarlo od aggiornarlo alla versione più recente di CMS Made Simple.<br />Siamo sicuri che lo apprezzerai.';
$lang['wizard_step1'] = 'Benvenuto';
$lang['wizard_step2'] = 'Rilevazione software esistente';
$lang['wizard_step3'] = 'Test di compatibilità';
$lang['wizard_step4'] = 'Informazioni di configurazione';
$lang['wizard_step5'] = 'Informazioni dell\'account dell\'amministratore';
$lang['wizard_step6'] = 'Impostazioni del sito';
$lang['wizard_step7'] = 'File';
$lang['wizard_step8'] = 'Lavoro database';
$lang['wizard_step9'] = 'Finito';
$lang['xml_functions'] = 'Controllo funzionalità XML in corso';
$lang['yes'] = 'Sì';
?>