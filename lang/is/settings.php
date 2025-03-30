<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Stillingar',
    'settings_save' => 'Vista stillingar',
    'system_version' => 'Kerfisútgáfa',
    'categories' => 'Flokkar',

    // App Settings
    'app_customization' => 'Sérsníða',
    'app_features_security' => 'Eigindi og öryggi',
    'app_name' => 'Nafn kerfis',
    'app_name_desc' => 'Þetta nafn er sýnd í titli og í öllum tölvupóstum sem sendir eru.',
    'app_name_header' => 'Sýna nafn í titli',
    'app_public_access' => 'Almennur aðgangur',
    'app_public_access_desc' => 'Með því að virkja þennan valmöguleika munu notendur sem eru ekki skráðir inn geta skoðað innihald vefsins.',
    'app_public_access_desc_guest' => 'Hægt er að stýra almennum aðgangi í gegnum "Guest" notandann.',
    'app_public_access_toggle' => 'Leyfa almennann aðgang',
    'app_public_viewing' => 'Leyfa almenna skoðun?',
    'app_secure_images' => 'Aukið öryggi á mynda upphal',
    'app_secure_images_toggle' => 'Virkja aukið öryggi á mynda upphal',
    'app_secure_images_desc' => 'For performance reasons, all images are public. This option adds a random, hard-to-guess string in front of image urls. Ensure directory indexes are not enabled to prevent easy access.',
    'app_default_editor' => 'Sjálfgefin ritill',
    'app_default_editor_desc' => 'Veldu hvaða ritil á að nota sjálfgefið þegar unnið er með nýjar síður. Hægt er að yfirskrifa þessa stillingu á hverri síðu ef viðkomandi er með réttindi.',
    'app_custom_html' => 'Custom HTML Head Content',
    'app_custom_html_desc' => 'Any content added here will be inserted into the bottom of the <head> section of every page. This is handy for overriding styles or adding analytics code.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Lógó síðu',
    'app_logo_desc' => 'This is used in the application header bar, among other areas. This image should be 86px in height. Large images will be scaled down.',
    'app_icon' => 'Íkon síðu',
    'app_icon_desc' => 'Þetta íkon er notað í tabs í vöfrum og sem flýtivísir á síðu. Þetta ætti að vera 256px PNG mynd.',
    'app_homepage' => 'Heimasíða',
    'app_homepage_desc' => 'Select a view to show on the homepage instead of the default view. Page permissions are ignored for selected pages.',
    'app_homepage_select' => 'Veldu síðu',
    'app_footer_links' => 'Neðangreins hlekkir',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Miði hlekks',
    'app_footer_links_url' => 'Vistfang hlekks',
    'app_footer_links_add' => 'Bæta við neðangreinshlekk',
    'app_disable_comments' => 'Óvirkja athugasemdir',
    'app_disable_comments_toggle' => 'Óvirkja athugasemdir',
    'app_disable_comments_desc' => 'Disables comments across all pages in the application. <br> Existing comments are not shown.',

    // Color settings
    'color_scheme' => 'Litaþema hugbúnaðar',
    'color_scheme_desc' => 'Set the colors to use in the application user interface. Colors can be configured separately for dark and light modes to best fit the theme and ensure legibility.',
    'ui_colors_desc' => 'Set the application primary color and default link color. The primary color is mainly used for the header banner, buttons and interface decorations. The default link color is used for text-based links and actions, both within written content and in the application interface.',
    'app_color' => 'Aðal litur',
    'link_color' => 'Aðal litur hlekkja',
    'content_colors_desc' => 'Set colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Litur hillu',
    'book_color' => 'Litur Bóka',
    'chapter_color' => 'Litur kalfa',
    'page_color' => 'Litur síðu',
    'page_draft_color' => 'Litur draga',

    // Registration Settings
    'reg_settings' => 'Skráning',
    'reg_enable' => 'Virkja skráningar',
    'reg_enable_toggle' => 'Virkja skráningar',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Sjálfgefið hlutverk notanda eftir skráningu',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Tölvupóst staðfesting',
    'reg_email_confirmation_toggle' => 'Krefast staðfestingar í tölvupósti',
    'reg_confirm_email_desc' => 'If domain restriction is used then email confirmation will be required and this option will be ignored.',
    'reg_confirm_restrict_domain' => 'Læsingar á lén',
    'reg_confirm_restrict_domain_desc' => 'Enter a comma separated list of email domains you would like to restrict registration to. Users will be sent an email to confirm their address before being allowed to interact with the application. <br> Note that users will be able to change their email addresses after successful registration.',
    'reg_confirm_restrict_domain_placeholder' => 'Engin skilyrði sett',

    // Sorting Settings
    'sorting' => 'Sorting',
    'sorting_book_default' => 'Default Book Sort',
    'sorting_book_default_desc' => 'Select the default sort rule to apply to new books. This won\'t affect existing books, and can be overridden per-book.',
    'sorting_rules' => 'Sort Rules',
    'sorting_rules_desc' => 'These are predefined sorting operations which can be applied to content in the system.',
    'sort_rule_assigned_to_x_books' => 'Assigned to :count Book|Assigned to :count Books',
    'sort_rule_create' => 'Create Sort Rule',
    'sort_rule_edit' => 'Edit Sort Rule',
    'sort_rule_delete' => 'Delete Sort Rule',
    'sort_rule_delete_desc' => 'Remove this sort rule from the system. Books using this sort will revert to manual sorting.',
    'sort_rule_delete_warn_books' => 'This sort rule is currently used on :count book(s). Are you sure you want to delete this?',
    'sort_rule_delete_warn_default' => 'This sort rule is currently used as the default for books. Are you sure you want to delete this?',
    'sort_rule_details' => 'Sort Rule Details',
    'sort_rule_details_desc' => 'Set a name for this sort rule, which will appear in lists when users are selecting a sort.',
    'sort_rule_operations' => 'Sort Operations',
    'sort_rule_operations_desc' => 'Configure the sort actions to be performed by moving them from the list of available operations. Upon use, the operations will be applied in order, from top to bottom. Any changes made here will be applied to all assigned books upon save.',
    'sort_rule_available_operations' => 'Available Operations',
    'sort_rule_available_operations_empty' => 'No operations remaining',
    'sort_rule_configured_operations' => 'Configured Operations',
    'sort_rule_configured_operations_empty' => 'Drag/add operations from the "Available Operations" list',
    'sort_rule_op_asc' => '(Asc)',
    'sort_rule_op_desc' => '(Desc)',
    'sort_rule_op_name' => 'Name - Alphabetical',
    'sort_rule_op_name_numeric' => 'Name - Numeric',
    'sort_rule_op_created_date' => 'Created Date',
    'sort_rule_op_updated_date' => 'Updated Date',
    'sort_rule_op_chapters_first' => 'Chapters First',
    'sort_rule_op_chapters_last' => 'Chapters Last',

    // Maintenance settings
    'maint' => 'Viðhald',
    'maint_image_cleanup' => 'Taka til í myndum',
    'maint_image_cleanup_desc' => 'Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.',
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Keyra hreinsun',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'Engar ónotaðar myndir fundust, engu eytt!',
    'maint_send_test_email' => 'Senda prufu tölvupóst',
    'maint_send_test_email_desc' => 'Þessi aðgerð sendir prufu tölvupóst á netfangið sem stillt er á í prófílnum þínum.',
    'maint_send_test_email_run' => 'Senda prufu tölvupóst',
    'maint_send_test_email_success' => 'Tölvupóstur sendur á :address',
    'maint_send_test_email_mail_subject' => 'Prufupóstur',
    'maint_send_test_email_mail_greeting' => 'Það virðist virka að senda tölvupóst!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Opna ruslatunnu',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Ruslatunna',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Eyddur hlutur',
    'recycle_bin_deleted_parent' => 'Foreldri',
    'recycle_bin_deleted_by' => 'Eytt af',
    'recycle_bin_deleted_at' => 'Eytt þann',
    'recycle_bin_permanently_delete' => 'Eyða varanlega',
    'recycle_bin_restore' => 'Endurheimta',
    'recycle_bin_contents_empty' => 'Ruslatunnan er tóm',
    'recycle_bin_empty' => 'Tæma ruslatunnu',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item from the system, along with any child elements listed below, and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Hlutir til eyðingar',
    'recycle_bin_restore_list' => 'Hlutir til endurheimtar',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Endurheimta foreldri',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Ferilskrá',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Atburðasía',
    'audit_event_filter_no_filter' => 'Engin sía',
    'audit_deleted_item' => 'Eyddur hlutur',
    'audit_deleted_item_name' => 'Nafn :name',
    'audit_table_user' => 'Notandi',
    'audit_table_event' => 'Atburður',
    'audit_table_related' => 'Tengdur hlutur eða lýsing',
    'audit_table_ip' => 'IP tala',
    'audit_table_date' => 'Dagsetning virkni',
    'audit_date_from' => 'Dagsetning frá',
    'audit_date_to' => 'Dagsetning til',

    // Role Settings
    'roles' => 'Hlutverk',
    'role_user_roles' => 'Notanda hlutverk',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => ':count user assigned|:count users assigned',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Skilgreindir notendur',
    'roles_permissions_provided' => 'Uppgefnar heimildir',
    'role_create' => 'Búa til nýtt hlutverk',
    'role_delete' => 'Eyða hlutverki',
    'role_delete_confirm' => 'This will delete the role with the name \':roleName\'.',
    'role_delete_users_assigned' => 'This role has :userCount users assigned to it. If you would like to migrate the users from this role select a new role below.',
    'role_delete_no_migration' => "Don't migrate users",
    'role_delete_sure' => 'Are you sure you want to delete this role?',
    'role_edit' => 'Breyta hlutverki',
    'role_details' => 'Lýsing á hlutverki',
    'role_name' => 'Nafn hlutverks',
    'role_desc' => 'Stutt lýsing á hlutverki',
    'role_mfa_enforced' => 'Krefst tvöfaldrar auðkenningar',
    'role_external_auth_id' => 'Ytri auðkenningarnúmer',
    'role_system' => 'Réttindastillingar kerfis',
    'role_manage_users' => 'Sýsla með notendur',
    'role_manage_roles' => 'Stýra hlutverkum og réttindum hlutverka',
    'role_manage_entity_permissions' => 'Stýra öllum bóka, kafla og síðu réttindum',
    'role_manage_own_entity_permissions' => 'Stýra réttindum á eigin bókum, köflum og síðum',
    'role_manage_page_templates' => 'Stýra síðu sníðmátum',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Manage app settings',
    'role_export_content' => 'Flytja út efni',
    'role_import_content' => 'Flytja inn efni',
    'role_editor_change' => 'Skipta um ritil síðu',
    'role_notifications' => 'Receive & manage notifications',
    'role_asset' => 'Asset Permissions',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'Allt',
    'role_own' => 'Eigin',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Vista hlutverk',
    'role_users' => 'Notendur í þessu hlutverki',
    'role_users_none' => 'Engir notendur eru eins og er í þessu hlutverki',

    // Users
    'users' => 'Notendur',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'Prófíll notanda',
    'users_add_new' => 'Bæta við nýjum notanda',
    'users_search' => 'Leita að notendum',
    'users_latest_activity' => 'Síðasta virkni',
    'users_details' => 'Notendaupplýsingar',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'Hlutverk notenda',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'Lykilorð notanda',
    'users_password_desc' => 'Setja lykilorð sem þú notar til að skrá þig inn í hugbúnaðinn. Lykilorðið verður að vera a. m. k 8 stafa langt.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Senda boð á notanda með tölvupósti',
    'users_external_auth_id' => 'Ytra auðkenningar númer',
    'users_external_auth_id_desc' => 'When an external authentication system is in use (such as SAML2, OIDC or LDAP) this is the ID which links this BookStack user to the authentication system account. You can ignore this field if using the default email-based authentication.',
    'users_password_warning' => 'Only fill the below if you would like to change the password for this user.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Eyða notanda',
    'users_delete_named' => 'Eyða notanda :userName',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'Ertu viss um að þú viljir eyða þessum notanda?',
    'users_migrate_ownership' => 'Færa eignarhald',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'Engin notandi valin',
    'users_edit' => 'Breyta notanda',
    'users_edit_profile' => 'Breyta prófíl',
    'users_avatar' => 'Avatar notanda',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Valið tungumál',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Samfélagsmiðla reikningar',
    'users_social_accounts_desc' => 'View the status of the connected social accounts for this user. Social accounts can be used in addition to the primary authentication system for system access.',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Tengja aðgang',
    'users_social_disconnect' => 'Aftengja aðgang',
    'users_social_status_connected' => 'Tengt',
    'users_social_status_disconnected' => 'Aftengt',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API tókar',
    'users_api_tokens_desc' => 'Create and manage the access tokens used to authenticate with the BookStack REST API. Permissions for the API are managed via the user that the token belongs to.',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Búa til tóka',
    'users_api_tokens_expires' => 'Rennur út',
    'users_api_tokens_docs' => 'API Documentation',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Búa til API tóka',
    'user_api_token_name' => 'Nafn',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Rennur út þann',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token' => 'API tóki',
    'user_api_token_id' => 'Númer tóka',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Tóka leyndarmál',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Tóki búinn til :timeAgo',
    'user_api_token_updated' => 'Tóki uppfærður :timeAgo',
    'user_api_token_delete' => 'Eyða tóka',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count trigger event|:count trigger events',
    'webhooks_create' => 'Búa til nýjann Webhook',
    'webhooks_none_created' => 'Engir Webhooks hafa verið búnir til.',
    'webhooks_edit' => 'Breyta Webhook',
    'webhooks_save' => 'Vista Webhook',
    'webhooks_details' => 'Upplýsingar um Webhook',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook atburðir',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'Allir kerfis atburðir',
    'webhooks_name' => 'Webhook nafn',
    'webhooks_timeout' => 'Webhook tímamörk (Sekúndur)',
    'webhooks_endpoint' => 'Webhook endapunktur',
    'webhooks_active' => 'Webhook virkur',
    'webhook_events_table_header' => 'Atburðir',
    'webhooks_delete' => 'Eyða Webhook',
    'webhooks_delete_warning' => 'Þessi aðgerð mun eyða þessum Webhook að fullu \':webhookName\',.',
    'webhooks_delete_confirm' => 'Ertu viss um að þú viljir eyða þessum Webhook?',
    'webhooks_format_example' => 'Dæmi um snið á Webhook',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Staða á Webhook',
    'webhooks_last_called' => 'Síðast kallað:',
    'webhooks_last_errored' => 'Síðasta villa kom upp:',
    'webhooks_last_error_message' => 'Síðustu villuskilaboð:',

    // Licensing
    'licenses' => 'Leyfi',
    'licenses_desc' => 'This page details license information for BookStack in addition to the projects & libraries that are used within BookStack. Many projects listed may only be used in a development context.',
    'licenses_bookstack' => 'Bookstack leyfi',
    'licenses_php' => 'PHP kóðasafnsleyfi',
    'licenses_js' => 'Javascript kóðasafnsleyfi',
    'licenses_other' => 'Önnur leyfi',
    'license_details' => 'Upplýsingar um leyfi',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'cy' => 'Cymraeg',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
