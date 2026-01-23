<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'Installatore Laravel',
    'next' => 'Passo successivo',
    'back' => 'Precedente',
    'finish' => 'Installa',
    'forms' => [
        'errorTitle' => 'Si sono verificati i seguenti errori:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Benvenuto',
        'title'   => 'Installatore Laravel',
        'message' => 'Procedura guidata di installazione semplice.',
        'next'    => 'Verifica requisiti',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Passo 1 | Requisiti server',
        'title' => 'Requisiti server',
        'next'    => 'Verifica permessi',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Passo 2 | Permessi',
        'title' => 'Permessi',
        'next' => 'Configura ambiente',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Passo 3 | Impostazioni ambiente',
            'title' => 'Impostazioni ambiente',
            'desc' => 'Seleziona come vuoi configurare il file <code>.env</code> dell\'app.',
            'wizard-button' => 'Configurazione guidata',
            'classic-button' => 'Editor di testo classico',
        ],
        'wizard' => [
            'templateTitle' => 'Passo 3 | Impostazioni ambiente | Procedura guidata',
            'title' => 'Procedura guidata <code>.env</code>',
            'tabs' => [
                'environment' => 'Ambiente',
                'database' => 'Database',
                'application' => 'Applicazione',
            ],
            'form' => [
                'name_required' => 'Il nome dell\'ambiente e obbligatorio.',
                'app_name_label' => 'Nome app',
                'app_name_placeholder' => 'Nome app',
                'app_environment_label' => 'Ambiente app',
                'app_environment_label_local' => 'Locale',
                'app_environment_label_developement' => 'Sviluppo',
                'app_environment_label_qa' => 'QA',
                'app_environment_label_production' => 'Produzione',
                'app_environment_label_other' => 'Altro',
                'app_environment_placeholder_other' => 'Inserisci il tuo ambiente...',
                'app_debug_label' => 'Debug app',
                'app_debug_label_true' => 'Vero',
                'app_debug_label_false' => 'Falso',
                'app_log_level_label' => 'Livello log app',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'avviso',
                'app_log_level_label_warning' => 'avvertimento',
                'app_log_level_label_error' => 'errore',
                'app_log_level_label_critical' => 'critico',
                'app_log_level_label_alert' => 'allerta',
                'app_log_level_label_emergency' => 'emergenza',
                'app_url_label' => 'URL app',
                'app_url_placeholder' => 'URL app',
                'db_connection_failed' => 'Impossibile connettersi al database.',
                'db_connection_label' => 'Connessione database',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host database',
                'db_host_placeholder' => 'Host database',
                'db_port_label' => 'Porta database',
                'db_port_placeholder' => 'Porta database',
                'db_name_label' => 'Nome database',
                'db_name_placeholder' => 'Nome database',
                'db_username_label' => 'Nome utente database',
                'db_username_placeholder' => 'Nome utente database',
                'db_password_label' => 'Password database',
                'db_password_placeholder' => 'Password database',

                'app_tabs' => [
                    'more_info' => 'Maggiori info',
                    'broadcasting_title' => 'Broadcasting, cache, sessione e coda',
                    'broadcasting_label' => 'Driver broadcast',
                    'broadcasting_placeholder' => 'Driver broadcast',
                    'cache_label' => 'Driver cache',
                    'cache_placeholder' => 'Driver cache',
                    'session_label' => 'Driver sessione',
                    'session_placeholder' => 'Driver sessione',
                    'queue_label' => 'Driver coda',
                    'queue_placeholder' => 'Driver coda',
                    'redis_label' => 'Driver Redis',
                    'redis_host' => 'Host Redis',
                    'redis_password' => 'Password Redis',
                    'redis_port' => 'Porta Redis',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Driver mail',
                    'mail_driver_placeholder' => 'Driver mail',
                    'mail_host_label' => 'Host mail',
                    'mail_host_placeholder' => 'Host mail',
                    'mail_port_label' => 'Porta mail',
                    'mail_port_placeholder' => 'Porta mail',
                    'mail_username_label' => 'Nome utente mail',
                    'mail_username_placeholder' => 'Nome utente mail',
                    'mail_password_label' => 'Password mail',
                    'mail_password_placeholder' => 'Password mail',
                    'mail_encryption_label' => 'Cifratura mail',
                    'mail_encryption_placeholder' => 'Cifratura mail',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'ID app Pusher',
                    'pusher_app_id_palceholder' => 'ID app Pusher',
                    'pusher_app_key_label' => 'Chiave app Pusher',
                    'pusher_app_key_palceholder' => 'Chiave app Pusher',
                    'pusher_app_secret_label' => 'Segreto app Pusher',
                    'pusher_app_secret_palceholder' => 'Segreto app Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Configura database',
                    'setup_application' => 'Configura applicazione',
                    'install' => 'Installa',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Passo 3 | Impostazioni ambiente | Editor classico',
            'title' => 'Editor ambiente classico',
            'save' => 'Salva .env',
            'back' => 'Usa procedura guidata',
            'install' => 'Salva e installa',
        ],
        'success' => 'Le impostazioni del file .env sono state salvate.',
        'errors' => 'Impossibile salvare il file .env, crealo manualmente.',
    ],

    'install' => 'Installa',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Installatore Laravel installato correttamente il ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Installazione completata',
        'templateTitle' => 'Installazione completata',
        'finished' => 'L\'applicazione e stata installata con successo.',
        'migration' => 'Output console migrazione e seed:',
        'console' => 'Output console applicazione:',
        'log' => 'Voce log installazione:',
        'env' => 'File .env finale:',
        'exit' => 'Clicca qui per uscire',
        'user_website'=>'Sito utente',
        'admin_panel' =>'Pannello admin'

    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Aggiornamento Laravel',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Benvenuto nell\'aggiornamento',
            'message' => 'Benvenuto nella procedura guidata di aggiornamento.',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Panoramica',
            'message' => 'C\'e 1 aggiornamento.|Ci sono :number aggiornamenti.',
            'install_updates' => 'Installa aggiornamenti',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Completato',
            'finished' => 'Il database dell\'applicazione e stato aggiornato con successo.',
            'exit' => 'Clicca qui per uscire',
        ],

        'log' => [
            'success_message' => 'Installatore Laravel aggiornato correttamente il ',
        ],
    ],
];
