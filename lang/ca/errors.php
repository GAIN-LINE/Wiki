<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'No teniu permís per a accedir a la pàgina sol·licitada.',
    'permissionJson' => 'No teniu permís per a executar l’acció sol·licitada.',

    // Auth
    'error_user_exists_different_creds' => 'Ja hi ha un usuari amb l’adreça electrònica :email però amb credencials diferents.',
    'auth_pre_register_theme_prevention' => 'User account could not be registered for the provided details',
    'email_already_confirmed' => 'L’adreça electrònica ja està confirmada. Proveu d’iniciar la sessió.',
    'email_confirmation_invalid' => 'Aquest testimoni de confirmació no és vàlid o ja s’ha utilitzat. Proveu de tornar-vos a registrar.',
    'email_confirmation_expired' => 'El testimoni de confirmació ha caducat. S’ha enviat un nou correu electrònic de confirmació.',
    'email_confirmation_awaiting' => 'Cal confirmar l’adreça electrònica del compte que utilitzeu',
    'ldap_fail_anonymous' => 'L’accés a l’LDAP ha fallat fent servir un lligam anònim',
    'ldap_fail_authed' => 'L’accés a l’LDAP ha fallat fent servir els detalls de DN i contrasenya proporcionats',
    'ldap_extension_not_installed' => 'L’extensió de l’LDAP del PHP no està instal·lada',
    'ldap_cannot_connect' => 'No s’ha pogut connectar amb el servidor de l’LDAP, la connexió inicial ha fallat',
    'saml_already_logged_in' => 'Ja heu iniciat la sessió',
    'saml_no_email_address' => 'No s’ha pogut trobar cap adreça electrònica per a aquest usuari en les dades proporcionades pel sistema d’autenticació extern',
    'saml_invalid_response_id' => 'La petició del sistema d’autenticació extern no és reconeguda per un procés iniciat per aquesta aplicació. Aquest problema podria ser causat per navegar endarrere després d’iniciar la sessió.',
    'saml_fail_authed' => 'L’inici de sessió fent servir :system ha fallat, el sistema no ha proporcionat una autorització satisfactòria',
    'oidc_already_logged_in' => 'Ja teniu una sessió iniciada',
    'oidc_no_email_address' => 'No s’ha pogut trobar cap adreça electrònica per a aquest usuari en les dades proporcionades pel sistema d’autenticació extern',
    'oidc_fail_authed' => 'L’inici de sessió fent servir :system ha fallat, el sistema no ha proporcionat una autorització satisfactòria',
    'social_no_action_defined' => 'No hi ha cap acció definida',
    'social_login_bad_response' => "S’ha rebut un error mentre s’iniciava la sessió amb :socialAccount: \n:error",
    'social_account_in_use' => 'Aquest compte de :socialAccount ja està en ús, proveu d’iniciar la sessió mitjançant l’opció de :socialAccount.',
    'social_account_email_in_use' => 'L’adreça electrònica :email ja està en ús. Si ja teniu un compte, podeu connectar-hi el vostre compte de :socialAccount a la configuració del vostre perfil.',
    'social_account_existing' => 'Aquest compte de :socialAccount ja està associat al vostre perfil.',
    'social_account_already_used_existing' => 'Aquest compte de :socialAccount ja el fa servir un altre usuari.',
    'social_account_not_used' => 'Aquest compte de :socialAccount no està associat a cap usuari. Associeu-lo a la configuració del vostre perfil. ',
    'social_account_register_instructions' => 'Si encara no teniu cap compte, podeu registrar-vos fent servir l’opció de :socialAccount.',
    'social_driver_not_found' => 'No s’ha trobat el controlador social',
    'social_driver_not_configured' => 'La configuració social de :socialAccount no és correcta.',
    'invite_token_expired' => 'Aquest enllaç d’invitació ha caducat. Podeu provar de restablir la contrasenya del vostre compte.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => 'No s’ha pogut pujar al camí del fitxer :filePath. Assegureu-vos que el servidor hi té permisos d’escriptura.',
    'cannot_get_image_from_url' => 'No s’ha pogut obtenir la imatge de :url',
    'cannot_create_thumbs' => 'El servidor no pot crear miniatures. Reviseu que tingueu instal·lada l’extensió GD del PHP.',
    'server_upload_limit' => 'El servidor no permet pujades d’aquesta mida. Proveu-ho amb una mida de fitxer més petita.',
    'server_post_limit' => 'El servidor no pot rebre la quantitat de dades que heu proporcionat. Torneu-ho a provar amb menys dades o un fitxer més petit.',
    'uploaded'  => 'El servidor no permet pujades d’aquesta mida. Proveu-ho amb una mida de fitxer més petita.',

    // Drawing & Images
    'image_upload_error' => 'S’ha produït un error en pujar la imatge',
    'image_upload_type_error' => 'El tipus d’imatge que heu pujat no és vàlid',
    'image_upload_replace_type' => 'Les substitucions de fitxers d’imatge han de ser el mateix tipus',
    'image_upload_memory_limit' => 'No s’ha pogut gestionar la pujada de la imatge i/o crear-ne miniatures a causa dels límits dels recursos del sistema.',
    'image_thumbnail_memory_limit' => 'No s’ha pogut crear les variacions de mida de la imatge a causa dels límits dels recursos del sistema.',
    'image_gallery_thumbnail_memory_limit' => 'No s’han pogut crear les miniatures de la galeria a causa dels límits dels recursos del sistema.',
    'drawing_data_not_found' => 'No s’han pogut carregar les dades de dibuix. És possible que el fitxer de dibuix ja no existeixi o que no tingueu permisos per a accedir-hi.',

    // Attachments
    'attachment_not_found' => 'No s’ha trobat l’adjunció',
    'attachment_upload_error' => 'S’ha produït un error en pujar el fitxer de l’adjunció',

    // Pages
    'page_draft_autosave_fail' => 'No s’ha pogut desar l’esborrany. Assegureu-vos que teniu connexió a Internet abans de desar la pàgina',
    'page_draft_delete_fail' => 'No s’ha pogut suprimir l’esborrany de la pàgina i obtenir el contingut desat actual de la pàgina',
    'page_custom_home_deletion' => 'No es pot suprimir una pàgina mentre estigui definida com a pàgina d’inici',

    // Entities
    'entity_not_found' => 'No s’ha trobat l’entitat',
    'bookshelf_not_found' => 'No s’ha trobat el prestatge',
    'book_not_found' => 'No s’ha trobat el llibre',
    'page_not_found' => 'No s’ha trobat la pàgina',
    'chapter_not_found' => 'No s’ha trobat el capítol',
    'selected_book_not_found' => 'No s’ha trobat el llibre seleccionat',
    'selected_book_chapter_not_found' => 'No s’ha trobat el llibre o el capítol seleccionat',
    'guests_cannot_save_drafts' => 'Els convidats no poden desar esborranys',

    // Users
    'users_cannot_delete_only_admin' => 'No podeu suprimir l’únic administrador',
    'users_cannot_delete_guest' => 'No podeu suprimir l’usuari convidat',

    // Roles
    'role_cannot_be_edited' => 'Aquest rol no es pot editar',
    'role_system_cannot_be_deleted' => 'Aquest rol és un rol del sistema i no es pot suprimir',
    'role_registration_default_cannot_delete' => 'No es pot suprimir aquest rol mentre estigui definit com a rol per defecte dels registres',
    'role_cannot_remove_only_admin' => 'Aquest usuari és l’únic usuari assignat al rol d’administrador. Assigneu el rol d’administrador a un altre usuari abans de provar de suprimir aquest.',

    // Comments
    'comment_list' => 'S’ha produït un error en obtenir els comentaris.',
    'cannot_add_comment_to_draft' => 'No podeu afegir comentaris a un esborrany.',
    'comment_add' => 'S’ha produït un error en afegir o actualitzar el comentari.',
    'comment_delete' => 'S’ha produït un error en suprimir el comentari.',
    'empty_comment' => 'No podeu afegir un comentari buit.',

    // Error pages
    '404_page_not_found' => 'No s’ha trobat la pàgina',
    'sorry_page_not_found' => 'No hem pogut trobar la pàgina que cerqueu.',
    'sorry_page_not_found_permission_warning' => 'Si esperàveu que existís, és possible que no tingueu permisos per a veure-la.',
    'image_not_found' => 'No s’ha trobat la imatge',
    'image_not_found_subtitle' => 'No ha estat possible trobar el fitxer de la imatge que cerqueu.',
    'image_not_found_details' => 'Si esperàveu que existís, és possible que s’hagi suprimit.',
    'return_home' => 'Torna a l’inici',
    'error_occurred' => 'S’ha produït un error',
    'app_down' => ':appName està fora de servei en aquests moments',
    'back_soon' => 'Tornarà a estar disponible aviat.',

    // API errors
    'api_no_authorization_found' => 'No s’ha trobat cap testimoni d’autorització a la petició',
    'api_bad_authorization_format' => 'S’ha trobat un testimoni d’autorització a la petició, però el format sembla erroni',
    'api_user_token_not_found' => 'No s’ha trobat cap testimoni de l’API per al testimoni d’autorització proporcionat',
    'api_incorrect_token_secret' => 'El secret proporcionat per al testimoni de l’API proporcionat és incorrecte',
    'api_user_no_api_permission' => 'El propietari del testimoni de l’API utilitzat no té permís per a fer crides a l’API',
    'api_user_token_expired' => 'El testimoni d’autorització utilitzat ha caducat',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'S’ha produït un error en enviar un correu electrònic de prova:',

    // HTTP errors
    'http_ssr_url_no_match' => 'L’URL no coincideix amb els amfitrions SSR permesos segons la configuració',
];
