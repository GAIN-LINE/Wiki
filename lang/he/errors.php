<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'אין לך הרשאות על מנת לצפות בדף המבוקש.',
    'permissionJson' => 'אין לך הרשאות על מנת לבצע את הפעולה המבוקשת.',

    // Auth
    'error_user_exists_different_creds' => 'משתמש עם המייל :email כבר קיים אך עם פרטי הזדהות שונים',
    'auth_pre_register_theme_prevention' => 'User account could not be registered for the provided details',
    'email_already_confirmed' => 'המייל כבר אומת, אנא נסה להתחבר',
    'email_confirmation_invalid' => 'מפתח האימות אינו תקין או שכבר נעשה בו שימוש, אנא נסה להרשם שנית',
    'email_confirmation_expired' => 'מפתח האימות פג-תוקף, מייל אימות חדש נשלח שוב.',
    'email_confirmation_awaiting' => 'The email address for the account in use needs to be confirmed',
    'ldap_fail_anonymous' => 'גישת LDAP נדחתה בעת השימוש ב bind אנונימי',
    'ldap_fail_authed' => 'LDAP access failed using given dn & password details',
    'ldap_extension_not_installed' => 'הרחבת LDAP עבור PHP לא מותקנת',
    'ldap_cannot_connect' => 'Cannot connect to ldap server, Initial connection failed',
    'saml_already_logged_in' => 'כבר מחובר',
    'saml_no_email_address' => 'Could not find an email address, for this user, in the data provided by the external authentication system',
    'saml_invalid_response_id' => 'The request from the external authentication system is not recognised by a process started by this application. Navigating back after a login could cause this issue.',
    'saml_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'oidc_already_logged_in' => 'כבר מחובר',
    'oidc_no_email_address' => 'Could not find an email address, for this user, in the data provided by the external authentication system',
    'oidc_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'social_no_action_defined' => 'לא הוגדרה פעולה',
    'social_login_bad_response' => "Error received during :socialAccount login: \n:error",
    'social_account_in_use' => 'החשבון :socialAccount כבר בשימוש. אנא נסה להתחבר באמצעות אפשרות :socialAccount',
    'social_account_email_in_use' => 'המייל :email כבר נמצא בשימוש. אם כבר יש ברשותך חשבון ניתן להתחבר באמצעות :socialAccount ממסך הגדרות הפרופיל שלך.',
    'social_account_existing' => 'ה - :socialAccount כבר מחובר לחשבון שלך.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'החשבון :socialAccount אינו מחובר למשתמש כלשהוא. אנא חבר אותו לחשבונך במסך הגדרות הפרופיל שלך.',
    'social_account_register_instructions' => 'אם אין ברשותך חשבון, תוכל להרשם באמצעות :socialAccount',
    'social_driver_not_found' => 'Social driver not found',
    'social_driver_not_configured' => 'הגדרות ה :socialAccount אינן מוגדרות כראוי',
    'invite_token_expired' => 'לינק ההזמנה פג. אתה יכול לנסות לאפס את סיסמת החשבון שלך במקום.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => 'לא ניתן להעלות את :filePath אנא ודא שניתן לכתוב למיקום זה',
    'cannot_get_image_from_url' => 'לא ניתן לקבל תמונה מ :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'השרת אינו מרשה העלאת קבצים במשקל זה. אנא נסה להעלות קובץ קטן יותר.',
    'server_post_limit' => 'The server cannot receive the provided amount of data. Try again with less data or a smaller file.',
    'uploaded'  => 'השרת אינו מרשה העלאת קבצים במשקל זה. אנא נסה להעלות קובץ קטן יותר.',

    // Drawing & Images
    'image_upload_error' => 'התרחשה שגיאה במהלך העלאת התמונה',
    'image_upload_type_error' => 'התמונה שהועלתה אינה תקינה',
    'image_upload_replace_type' => 'Image file replacements must be of the same type',
    'image_upload_memory_limit' => 'Failed to handle image upload and/or create thumbnails due to system resource limits.',
    'image_thumbnail_memory_limit' => 'Failed to create image size variations due to system resource limits.',
    'image_gallery_thumbnail_memory_limit' => 'Failed to create gallery thumbnails due to system resource limits.',
    'drawing_data_not_found' => 'Drawing data could not be loaded. The drawing file might no longer exist or you may not have permission to access it.',

    // Attachments
    'attachment_not_found' => 'קובץ מצורף לא נמצא',
    'attachment_upload_error' => 'An error occurred uploading the attachment file',

    // Pages
    'page_draft_autosave_fail' => 'שגיאה בשמירת הטיוטה. אנא ודא כי חיבור האינטרנט תקין לפני שמירת דף זה.',
    'page_draft_delete_fail' => 'Failed to delete page draft and fetch current page saved content',
    'page_custom_home_deletion' => 'לא ניתן למחוק דף אשר מוגדר כדף הבית',

    // Entities
    'entity_not_found' => 'פריט לא נמצא',
    'bookshelf_not_found' => 'מדף לא נמצא',
    'book_not_found' => 'ספר לא נמצא',
    'page_not_found' => 'דף לא נמצא',
    'chapter_not_found' => 'פרק לא נמצא',
    'selected_book_not_found' => 'הספר שנבחר לא נמצא',
    'selected_book_chapter_not_found' => 'הפרק או הספר שנבחר לא נמצאו',
    'guests_cannot_save_drafts' => 'אורחים אינם יכולים לשמור סקיצות',

    // Users
    'users_cannot_delete_only_admin' => 'אינך יכול למחוק את המנהל היחיד',
    'users_cannot_delete_guest' => 'אינך יכול למחוק את משתמש האורח',
    'users_could_not_send_invite' => 'Could not create user since invite email failed to send',

    // Roles
    'role_cannot_be_edited' => 'לא ניתן לערוך תפקיד זה',
    'role_system_cannot_be_deleted' => 'תפקיד זה הינו תפקיד מערכת ולא ניתן למחיקה',
    'role_registration_default_cannot_delete' => 'לא ניתן למחוק תפקיד זה מכיוון שהוא מוגדר כתפקיד ברירת המחדל בעת הרשמה',
    'role_cannot_remove_only_admin' => 'משתמש זה הינו המשתמש היחיד המשוייך לפקיד המנהל. נסה לשייך את תפקיד המנהל למשתמש נוסף לפני הסרה כאן',

    // Comments
    'comment_list' => 'התרחשה שגיאה בעת שליפת התגובות',
    'cannot_add_comment_to_draft' => 'אינך יכול להוסיף תגובות לסקיצה זו',
    'comment_add' => 'התרחשה שגיאה בעת הוספה / עדכון התגובה',
    'comment_delete' => 'התרחשה שגיאה בעת מחיקת התגובה',
    'empty_comment' => 'לא ניתן להוסיף תגובה ריקה',

    // Error pages
    '404_page_not_found' => 'דף לא קיים',
    'sorry_page_not_found' => 'מצטערים, הדף שחיפשת אינו קיים',
    'sorry_page_not_found_permission_warning' => 'במידה וציפיתי שדף זה יהיה קיים, ייתכן וחסרות לך ההרשאות לראותו.',
    'image_not_found' => 'תמונה לא נמצאה',
    'image_not_found_subtitle' => 'מצטערים, לא היה ניתן למצוא את קובץ התמונה שחיפשת.',
    'image_not_found_details' => 'במידה וציפית שתמונה זאת תהיה קיימת ייתכן והיא כבר נמחקה.',
    'return_home' => 'בחזרה לדף הבית',
    'error_occurred' => 'התרחשה שגיאה',
    'app_down' => ':appName כרגע אינו זמין',
    'back_soon' => 'מקווים שיחזור במהרה',

    // Import
    'import_zip_cant_read' => 'Could not read ZIP file.',
    'import_zip_cant_decode_data' => 'Could not find and decode ZIP data.json content.',
    'import_zip_no_data' => 'ZIP file data has no expected book, chapter or page content.',
    'import_validation_failed' => 'Import ZIP failed to validate with errors:',
    'import_zip_failed_notification' => 'Failed to import ZIP file.',
    'import_perms_books' => 'You are lacking the required permissions to create books.',
    'import_perms_chapters' => 'You are lacking the required permissions to create chapters.',
    'import_perms_pages' => 'You are lacking the required permissions to create pages.',
    'import_perms_images' => 'You are lacking the required permissions to create images.',
    'import_perms_attachments' => 'You are lacking the required permission to create attachments.',

    // API errors
    'api_no_authorization_found' => 'No authorization token found on the request',
    'api_bad_authorization_format' => 'An authorization token was found on the request but the format appeared incorrect',
    'api_user_token_not_found' => 'No matching API token was found for the provided authorization token',
    'api_incorrect_token_secret' => 'The secret provided for the given used API token is incorrect',
    'api_user_no_api_permission' => 'The owner of the used API token does not have permission to make API calls',
    'api_user_token_expired' => 'The authorization token used has expired',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Error thrown when sending a test email:',

    // HTTP errors
    'http_ssr_url_no_match' => 'The URL does not match the configured allowed SSR hosts',
];
