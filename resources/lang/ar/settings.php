<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [
    'sidebar_settings' => 'إعدادات الحساب',
    'sidebar_personalization' => 'التخصيص',
    'sidebar_settings_storage' => 'Storage',
    'sidebar_settings_export' => 'تصدير البيانات',
    'sidebar_settings_users' => 'المستخدمين',
    'sidebar_settings_subscriptions' => 'الإشتراك',
    'sidebar_settings_import' => 'استيراد البيانات',
    'sidebar_settings_tags' => 'Tag management',
    'sidebar_settings_api' => 'API (واجهة برمجة التطبيق)',
    'sidebar_settings_dav' => 'DAV Resources',
    'sidebar_settings_security' => 'الأمن',
    'sidebar_settings_auditlogs' => 'Audit logs',

    'title_general' => 'General Information',
    'title_i18n' => 'International settings',
    'title_layout' => 'Layout',

    'me_title' => 'Me as a contact',
    'me_help' => 'This is the contact that represents <em>you</em> in Monica',
    'me_select' => 'Select a contact',
    'me_no_contact' => 'No contact selected yet.',
    'me_select_click' => 'Click here to select a contact.',
    'me_remove_contact' => 'Remove the association',
    'me_choose' => 'Choose yourself',
    'me_choose_placeholder' => 'Choose yourself',

    'export_title' => 'قم بتصدير بيانات حسابك',
    'export_be_patient' => 'Click the button to start the export. It may take several minutes to process the export – please be patient and do not repeatedly click the button.',
    'export_title_sql' => 'Export data to SQL',
    'export_sql_explanation' => 'Exporting your data in SQL format allows you to take your data and import it to your own Monica instance. This is only useful if you are running Monica on your own server.',
    'export_sql_cta' => 'Export data to SQL',
    'export_sql_link_instructions' => '<a href=":url">Read the instructions</a> to learn how to import this file into your instance.',

    'firstname' => 'الاسم الأول',
    'lastname' => 'الاسم الأخير',
    'name_order' => 'ترتيب الاسم',
    'name_order_firstname_lastname' => '<First name> <Last name> – John Doe',
    'name_order_lastname_firstname' => '<Last name> <First name> – Doe John',
    'name_order_firstname_lastname_nickname' => '<First name> <Last name> (<Nickname>) – John Doe (Rambo)',
    'name_order_firstname_nickname_lastname' => '<First name> (<Nickname>) <Last name> – John (Rambo) Doe',
    'name_order_lastname_firstname_nickname' => '<Last name> <First name> (<Nickname>) – Doe John (Rambo)',
    'name_order_lastname_nickname_firstname' => '<Last name> (<Nickname>) <First name> – Doe (Rambo) John',
    'name_order_nickname_firstname_lastname' => '<Nickname> (<First name> <Last name>) – Rambo (John Doe)',
    'name_order_nickname_lastname_firstname' => '<Nickname> (<Last name> <First name>) – Rambo (Doe John)',
    'name_order_nickname' => '<Nickname> – Rambo',
    'currency' => 'العملة',
    'name' => 'اسمك: :اسم',
    'email' => 'البريد الإلكتروني',
    'email_placeholder' => 'أدخل البريد الإلكتروني',
    'email_help' => 'This is the email used to login, and this is where Monica will send your reminders.',
    'timezone' => 'المنطقة الزمنية',
    'temperature_scale' => 'Temperature scale',
    'temperature_scale_fahrenheit' => 'Fahrenheit',
    'temperature_scale_celsius' => 'Celsius',
    'layout' => 'التصميم',
    'layout_small' => 'الحد الأقصى 1200 بكسل',
    'layout_big' => 'العرض الكامل للمستعرض',
    'save' => 'تحديث التفضيلات',
    'delete_title' => 'احذف حسابك',
    'delete_desc' => 'Do you wish to delete your account? Deletion is permanent and all of your data will be erased permanently. If you have a subscription, it will be cancelled immediately.',
    'delete_other_desc' => 'Your data in the main database will be deleted immediately. As described in our privacy policy, we carry out daily backups, securely encrypted backups of the database and this backup is kept for 30 days after which it is completely deleted. We cannot delete specific data from the backups we hold any earlier than this.  All of your data will be completely deleted within 30 days of your account’s deletion.',
    'reset_desc' => 'Do you wish to reset your account? This will remove all your contacts, and all of the data associated with them. Your account will not be deleted.',
    'reset_title' => 'أعد تعيين حسابك',
    'reset_cta' => 'إعادة تعيين الحساب',
    'reset_notice' => 'Are you sure to reset your account? This is permanent and cannot be undone.',
    'reset_success' => 'Your account has been reset successfully.',
    'delete_notice' => 'Are you sure you want to delete your account? This is permanent and cannot be undone. All of your data will be deleted and will not be recoverable.',
    'delete_cta' => 'حذف الحساب',
    'settings_success' => 'تم تحديث التفضيلات!',
    'locale' => 'اللغة المستخدمة في هذا التطبيق',
    'locale_help' => 'Do you want to help translating Monica or add a new language? Please follow <a href=":url" target="_blank" lang="en">this link for more information</a>.',
    'locale_ar' => 'العربية',
    'locale_cs' => 'التشيكية',
    'locale_de' => 'الألمانية',
    'locale_en' => 'الإنجليزية',
    'locale_es' => 'الإسبانية',
    'locale_fr' => 'الفرنسية',
    'locale_he' => 'العبرية',
    'locale_hr' => 'الكرواتية',
    'locale_id' => 'Indonesian',
    'locale_it' => 'الإيطالية',
    'locale_ja' => 'Japanese',
    'locale_nl' => 'الهولندية',
    'locale_pt' => 'البرتغالية',
    'locale_pt-BR' => 'Portuguese (Brazil)',
    'locale_ru' => 'الروسية',
    'locale_sv' => 'Swedish',
    'locale_zh' => 'الصينية المبسطة',
    'locale_zh-TW' => 'Chinese Traditional',
    'locale_tr' => 'التركية',
    'locale_en-GB' => 'English (United Kingdom)',

    'security_title' => 'الأمن',
    'security_help' => 'قم بتغيير المسائل الأمنية للحساب الخاص بك.',
    'password_change' => 'Change your password',
    'password_current' => 'كلمة السر الحالية',
    'password_current_placeholder' => 'أدخل كلمة مرورك الحالية',
    'password_new1' => 'كلمة مرور جديدة',
    'password_new1_placeholder' => 'Enter your new password',
    'password_new2' => 'Confirm your new password',
    'password_new2_placeholder' => 'Retype your new password',
    'password_btn' => 'تغيير كلمة المرور',
    '2fa_title' => 'المصادقة الثنائية',
    '2fa_otp_title' => 'تطبيق المصادقة الثنائية',
    '2fa_enable_title' => 'تمكين المصادقة الثنائية',
    '2fa_enable_description' => 'Enable Two Factor Authentication to increase the security of your account.',
    '2fa_enable_otp' => 'Open up your Two Factor Authentication mobile app and scan the following QR barcode:',
    '2fa_enable_otp_help' => 'If your Two Factor Authentication mobile app does not support QR barcodes, enter in the following code:',
    '2fa_enable_otp_validate' => 'Please validate the new device you’ve just set up:',
    '2fa_enable_success' => 'تم تفعيل المصادقة الثنائية',
    '2fa_enable_error' => 'حدث خطأ عند محاولة تنشيط المصادقة الثنائية',
    '2fa_enable_error_already_set' => 'تم تفعيل المصادقة الثنائية مسبقاً',
    '2fa_disable_title' => 'تعطيل المصادقة الثنائية',
    '2fa_disable_description' => 'Disable Two Factor Authentication for your account. Be careful, your account will be much less secure!',
    '2fa_disable_success' => 'تم تعطيل المصادقة الثنائية',
    '2fa_disable_error' => 'حدث خطأ عند محاولة تعطيل المصادقة الثنائية',

    'webauthn_title' => 'Security key — WebAuthn protocol',
    'webauthn_enable_description' => 'Add a new security key',
    'webauthn_key_name_help' => 'Give your key a name.',
    'webauthn_key_name' => 'Key name:',
    'webauthn_success' => 'Your key is detected and validated.',
    'webauthn_last_use' => 'Last use: {timestamp}',
    'webauthn_delete_confirmation' => 'Are you sure you want to delete this key?',
    'webauthn_delete_success' => 'Key deleted',
    'webauthn_insertKey' => 'Insert your security key.',
    'webauthn_buttonAdvise' => 'If your security key has a button, press it.',
    'webauthn_noButtonAdvise' => 'If it does not, remove it and insert it again.',
    'webauthn_not_supported' => 'Your browser doesn’t currently support WebAuthn.',
    'webauthn_not_secured' => 'WebAuthn only supports secure connections. Please load this page with https scheme.',
    'webauthn_error_already_used' => 'This key is already registered. It’s not necessary to register it again.',
    'webauthn_error_not_allowed' => 'The operation either timed out or was not allowed.',

    'recovery_title' => 'Recovery codes',
    'recovery_show' => 'Get recovery codes',
    'recovery_copy_help' => 'Copy codes in your clipboard',
    'recovery_help_intro' => 'These are your recovery codes:',
    'recovery_help_information' => 'You can use each recovery code once.',
    'recovery_clipboard' => 'Codes copied to the clipboard.',
    'recovery_generate' => 'Generate new codes…',
    'recovery_generate_help' => 'Generating new codes will invalidate previously generated codes.',
    'recovery_already_used_help' => 'This code has already been used.',

    'users_list_title' => 'المستخدمين الذين لديهم حق الوصول إلى حسابك',
    'users_list_add_user' => 'دعوة مستخدم جديد',
    'users_list_you' => 'هذا أنت',
    'users_list_invitations_title' => 'دعوات معلقة',
    'users_list_invitations_explanation' => 'فيما يلي الأشخاص الذين قمتَ بدعوتهم للإنضمام إلى Monica كمتعاون.',
    'users_list_invitations_invited_by' => 'دعوة من :name',
    'users_list_invitations_sent_date' => 'تم الإرسال في :date',
    'users_blank_title' => 'أنت الشخص الوحيد الذي لديه حق الوصول إلى هذا الحساب.',
    'users_blank_add_title' => 'هل ترغب في دعوة شخص آخر؟',
    'users_blank_description' => 'هذا الشخص سيكون له نفس حق الوصول الذي لديك، وسيكون قادراً على إضافة أو تحرير أو حذف معلومات جهة الاتصال.',
    'users_blank_cta' => 'دعوة شخص ما',
    'users_add_title' => 'Invite a new user to your account by email',
    'users_add_description' => 'This person will have the same access as you do, including inviting or deleting other users, including you. Make sure you trust this person before giving them access.',
    'users_add_email_field' => 'أدخل عنوان البريد الإلكتروني للشخص الذي تريد دعوته',
    'users_add_confirmation' => 'I confirm that I want to invite this user to my account. I understand that this person will have access to ALL of my data and see exactly what I see.',
    'users_add_cta' => 'دعوة المستخدم عن طريق البريد الإلكتروني',
    'users_accept_title' => 'قبول الدعوة و إنشاء حساب جديد',
    'users_error_please_confirm' => 'الرجاء التأكيد بأنك تريد دعوة هذا المستخدم قبل مواصلة الدعوة',
    'users_error_email_already_taken' => 'هذا البريد الإلكتروني موجود بالفعل. الرجاء إدخال بريد إلكتروني آخر',
    'users_error_already_invited' => 'لقد قمت بدعوة هذا المستخدم مسبقاً. الرجاء اختيار بريد آخر.',
    'users_error_email_not_similar' => 'هذا ليس عنوان بريد الشخص الذي قمتَ بدعوته.',
    'users_invitation_deleted_confirmation_message' => 'لقد تم حذف الدعوة بنجاح',
    'users_invitations_delete_confirmation' => 'هل أنت متأكد من حذف هذه الدعوة؟',
    'users_list_delete_confirmation' => 'هل أنت متأكد من حذف هذا المستخدم من حسابك؟',
    'users_invitation_need_subscription' => 'إضافة المزيد من المستخدمين يتطلب الإشتراك.',

    'subscriptions_account_current_plan' => 'خطتك الحالية',
    'subscriptions_account_current_paid_plan' => 'أنت على الخطة :name. شكراً جزيلاً لكونك مشتركاً.',
    'subscriptions_account_next_billing' => 'Your subscription will auto-renew on <strong>:date</strong>.',
    'subscriptions_account_cancel' => 'You can <a href=":url">cancel subscription</a> anytime.',
    'subscriptions_account_free_plan' => 'أنت في الخطة المجانية.',
    'subscriptions_account_free_plan_upgrade' => 'تستطيع ترقية حسابك لخطة :name، و التي تكلف :price$ شهرياً. هذه هي المنافع:',
    'subscriptions_account_free_plan_benefits_users' => 'عدد لا نهائي من المستخدمين',
    'subscriptions_account_free_plan_benefits_reminders' => 'تذكير بواسطة البريد اإلكتروني',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => 'قم بإستيراد جهات اتصالك مع vCard',
    'subscriptions_account_free_plan_benefits_support' => 'Support the project in the long run, so we can introduce more great features.',
    'subscriptions_account_upgrade' => 'قم بترقية حسابك',
    'subscriptions_account_upgrade_title' => 'قم بترقية Monica اليوم و احصل على علاقات أكثر أهمية.',
    'subscriptions_account_upgrade_choice' => 'اختر خطة أدناه و انضم إلى :customers الأشخاص الذين قاموا بترقية Monica الخاص بهم.',
    'subscriptions_account_invoices' => 'الفواتير',
    'subscriptions_account_invoices_download' => 'تنزيل',
    'subscriptions_account_invoices_subscription' => 'Subscription from :startDate to :endDate',
    'subscriptions_account_payment' => 'أي خيار للدفع يناسبك أكثر؟',
    'subscriptions_account_confirm_payment' => 'Your payment is currently incomplete, please <a href=":url">confirm your payment</a>.',
    'subscriptions_downgrade_title' => 'قم بخفض مرتبة حسابك للخطة المجانية',
    'subscriptions_downgrade_limitations' => 'خطتك المجانية فيها قيود. لتمكين خفض المرتبة، يجب أن تجتاز القائمة أدناه:',
    'subscriptions_downgrade_rule_users' => 'يجب أن يكون لديك مستخدم 1 فقط في حسابك',
    'subscriptions_downgrade_rule_users_constraint' => 'حالياً لديك <a href=":url">مستخدم واحد</a> في حسابك. | لديك حالياً <a href=":url">:count مستخدمين</a> في حسابك.',
    'subscriptions_downgrade_rule_invitations' => 'You must not have any pending invitations',
    'subscriptions_downgrade_rule_invitations_constraint' => 'You currently have <a href=":url">1 pending invitation</a>.|You currently have <a href=":url">:count pending invitations</a>.',
    'subscriptions_downgrade_rule_contacts' => 'You must not have more than :number active contacts',
    'subscriptions_downgrade_rule_contacts_constraint' => 'لديك حالياً <a href=":url"> جهة اتصال واحدة</a>.| لديك حالياً <a href=":url">:count جهات اتصال</a>.',
    'subscriptions_downgrade_cta' => 'خفض المرتبة',
    'subscriptions_downgrade_success' => 'لقد عدتَ للخطة المجانية!',
    'subscriptions_downgrade_thanks' => 'Thanks so much for trying the paid plan. We keep adding new features on Monica all the time – so you might want to come back in the future to see if you might be interested in taking a subscription again.',
    'subscriptions_back' => 'العودة للإعدادات',
    'subscriptions_upgrade_title' => 'قم بترقية حسابك',
    'subscriptions_upgrade_choose' => 'لقد اخترت خطة :plan.',
    'subscriptions_upgrade_infos' => 'لا يمكننا أن نكون أكثر سعادة. أدخل بيانات دفعك أدناه.',
    'subscriptions_upgrade_name' => 'الإسم على البطاقة',
    'subscriptions_upgrade_zip' => 'الرمز البريدي',
    'subscriptions_upgrade_credit' => 'بطاقة الإئتمان أو بطاقة الصراف',
    'subscriptions_upgrade_submit' => 'Pay {amount}',
    'subscriptions_upgrade_charge' => 'We’ll charge your card :price now. The next charge will be on :date. If you ever change your mind, you can cancel at any time, no questions asked.',
    'subscriptions_upgrade_charge_handled' => 'الدفع يتولاه <a href=":url">Stripe</a>. لا تلمس معلومات البطاقات خادمنا.',
    'subscriptions_upgrade_success' => 'شكراً لك! أنت مشترك الآن.',
    'subscriptions_upgrade_thanks' => 'مرحباً بك في مجتمع الأشخاص الذين يحاولون جعل العالم مكاناً أفضل.',

    'subscriptions_payment_confirm_title' => 'Confirm your :amount payment',
    'subscriptions_payment_confirm_information' => 'Extra confirmation is needed to process your payment. Please confirm your payment by filling out your payment details below.',
    'subscriptions_payment_succeeded_title' => 'Payment Successful',
    'subscriptions_payment_succeeded' => 'This payment was already successfully confirmed.',
    'subscriptions_payment_cancelled_title' => 'Payment Cancelled',
    'subscriptions_payment_cancelled' => 'This payment was cancelled.',
    'subscriptions_payment_error_name' => 'Please provide your name.',
    'subscriptions_payment_success' => 'The payment was successful.',

    'subscriptions_pdf_title' => 'اشتراكك :name الشهري',
    'subscriptions_plan_choose' => 'اختر هذه الخطة',
    'subscriptions_plan_year_title' => 'دفع سنوي',
    'subscriptions_plan_year_cost' => '45$/سنوياً',
    'subscriptions_plan_year_cost_save' => 'ستوفر 25%',
    'subscriptions_plan_year_bonus' => 'راحة البال لسنة كاملة',
    'subscriptions_plan_month_title' => 'دفع شهري',
    'subscriptions_plan_month_cost' => '5$/شهرياً',
    'subscriptions_plan_month_bonus' => 'قم بالإلغاء في أي وقت',
    'subscriptions_plan_include1' => 'تشمل الترقية الخاصة بك:',
    'subscriptions_plan_include2' => 'عدد لا نهائي من جهات الإتصال • عدد لا نهائي من المستخدمين • تذكير عبر البريد الإلكتروني • استيراد بـvCard • تخصيص صفحة جهة الإتصال',
    'subscriptions_plan_include3' => '100% من الأرباح تذهب لتطوير هذا المشروع المفتوح المصدر الرائع.',
    'subscriptions_help_title' => 'تفاصيل إضافية قد تكون مهتماً بمعرفتها',
    'subscriptions_help_opensource_title' => 'ما هو المشروع المفتوح المصدر؟',
    'subscriptions_help_opensource_desc' => 'Monica is an open source project.  This means it is built by a community who wants to build a great tool for the greater good. Being open source means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. All the money we raise is dedicated to building better features, paying for more powerful servers, and paying other costs. Thanks for your help. We couldn’t do it without you.',
    'subscriptions_help_limits_title' => 'Is there a limit to the number of contacts we can have on the free plan?',
    'subscriptions_help_limits_plan' => 'نعم. الخطط المجانية تدَعُك تُدِير:number جهات إتصال.',
    'subscriptions_help_discounts_title' => 'هل لديكم تخفيضات لأسباب غير ربحية أو للتعليم؟',
    'subscriptions_help_discounts_desc' => 'نعم لدينا! تطبيق Monica مجاني للطلاب، و مجاني لأسباب غير ربحية و للمؤسسات الخيرية. فقط تواصل مع <a href=":support">الدعم</a> بدليل على حالتك و سنقوم بتطبيق هذه الحالة الخاصة في حسابك.',
    'subscriptions_help_change_title' => 'ماذا إذا قمتُ بتغيير رأيي؟',
    'subscriptions_help_change_desc' => 'You can cancel anytime, no questions asked, and all by yourself – no need to contact support. However, you will not be refunded for the current period.',

    'stripe_error_card' => 'تم رفض بطاقتك. الرسالة المنحدرة: :message',
    'stripe_error_api_connection' => 'فشل الإتصال مع Stripe. حاول مجدداً لاحقاً.',
    'stripe_error_rate_limit' => 'يوجد عدد كبير من الطلبات على Stripe الآن. حاول مجدداً لاحقاً.',
    'stripe_error_invalid_request' => 'Invalid parameters. Try again later.',
    'stripe_error_authentication' => 'خطأ مصادقة مع Stripe',

    'import_title' => 'استيراد جهات الاتصال إلى حسابك',
    'import_cta' => 'تحميل جهات الإتصال',
    'import_stat' => 'قمت بإستيراد :number ملفات حتى الآن.',
    'import_result_stat' => 'Uploaded vCard with 1 contact (:total_imported imported, :total_skipped skipped)|Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => 'عرض التقرير',
    'import_in_progress' => 'الاستيراد قيد التقدم. أعد تحميل الصفحة في دقيقة واحدة.',
    'import_upload_title' => 'قم بإستيراد جهات اتصالك من ملف vCard',
    'import_upload_rules_desc' => 'و لكن لدينا بعض الشروط:',
    'import_upload_rule_format' => 'نحن ندعم ملفات <code>.vcard</code> و <code>.vcf</code>.',
    'import_upload_rule_vcard' => 'We support the vCard 3.0 format, which is the default format for macOS’s Contacts.app and Google Contacts.',
    'import_upload_rule_instructions' => 'Export instructions for <a href=":url1" target="_blank" rel="noopener noreferrer">macOS Contacts.app</a> and <a href=":url2" target="_blank" rel="noopener noreferrer">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'If your contacts have multiple email addresses or phone numbers, only the first entry will be saved.',
    'import_upload_rule_limit' => 'Files are limited to 10 MB.',
    'import_upload_rule_time' => 'It might take up to a minute to upload the contacts and process them. Please be patient.',
    'import_upload_rule_cant_revert' => 'Please make sure data is accurate before uploading, as you can’t undo the upload.',
    'import_upload_form_file' => 'ملف <code>.vcf</code> أو <code>.vCard</code> الخاص بك:',
    'import_upload_behaviour' => 'سلوك الاستيراد:',
    'import_upload_behaviour_add' => 'Add new contacts and skip existing',
    'import_upload_behaviour_replace' => 'استبدال جهات الاتصال الموجودة',
    'import_upload_behaviour_help' => 'Replacing will replace all data found in the vCard, but will keep existing contact fields.',
    'import_report_title' => 'تقرير الإستيراد',
    'import_report_date' => 'تاريخ الإستيراد',
    'import_report_type' => 'نوع الإستيراد',
    'import_report_number_contacts' => 'عدد جهات الإتصال في الملف',
    'import_report_number_contacts_imported' => 'عدد جهات الإتصال المستوردة',
    'import_report_number_contacts_skipped' => 'عدد جهات الإتصال المتخطى عنها',
    'import_report_status_imported' => 'تم استيراده',
    'import_report_status_skipped' => 'تم تخطيه',
    'import_vcard_parse_error' => 'Error when parsing the vCard entry',
    'import_vcard_contact_exist' => 'جهة الإتصال موجودة مسبقاً',
    'import_vcard_contact_no_firstname' => 'No first name (mandatory)',
    'import_vcard_file_not_found' => 'لم يتم إيجاد الملف',
    'import_vcard_unknown_entry' => 'جهة اتصال غير معروفة',
    'import_vcard_file_no_entries' => 'لا يوجد إدخالات في الملف',
    'import_blank_title' => 'لم تقم بإستيراد أي جهات إتصال بعد.',
    'import_blank_question' => 'هل تريد استيراد جهات الإتصال الآن؟',
    'import_blank_description' => 'يمكننا استيراد ملفات vCard التي يمكن أن تحصل عليها من جهات اتصال Google أو مدير جهات الاتصال الخاصة بك.',
    'import_blank_cta' => 'استيراد vCard',
    'import_need_subscription' => 'استيراد البيانات يتطلب اشتراكاً.',

    'tags_list_title' => 'Tags',
    'tags_list_description' => 'You can organize your contacts by setting up tags. Tags work like folders, but you can add more than one tag to a contact. To add a new tag, add it on the contact itself.',
    'tags_list_contact_number' => '1 جهة اتصال|:count جهات اتصال',
    'tags_list_delete_success' => 'The tag has been successfully deleted',
    'tags_list_delete_confirmation' => 'Are you sure you want to delete the tag? No contacts will be deleted, only the tag.',
    'tags_blank_title' => 'Tags are a great way of categorizing your contacts.',
    'tags_blank_description' => 'Tags work like folders, but you can add more than one tag to a contact. Go to a contact and tag a friend, right below the name. Once a contact is tagged, come back here to manage all the tags in your account.',

    'api_title' => 'الوصول إلى API',
    'api_description' => 'The API can be used to manipulate Monica’s data from an external application, like a mobile application for instance.',
    'api_help' => 'To use the API, a token is mandatory. You can either create a personal access token (Bearer authentication), or authorize an OAuth client to create it for you. See <a href=":url">API documentation</a>.',
    'api_endpoint' => 'The API endpoint for this Monica instance is:',

    'api_personal_access_tokens' => 'Personal access tokens',
    'api_pao_description' => 'Make sure you give this token to a source you trust – as they allow you to access all your data.',
    'api_token_title' => 'Personal Access Tokens',
    'api_token_create_new' => 'Create New Token',
    'api_token_not_created' => 'You have not created any personal access tokens.',
    'api_token_name' => 'Token name',
    'api_token_expire' => 'Expires at {date}',
    'api_token_delete' => 'حذف',
    'api_token_create' => 'Create Token',
    'api_token_scopes' => 'Scopes',
    'api_token_help' => 'Here is your new personal access token. This is the only time it will be shown so don’t lose it! You may now use this token to make API requests.',

    'api_oauth_clients' => 'Your OAuth clients',
    'api_oauth_clients_desc' => 'هذا القسم يتيح لك تسجيل عملاء OAuth الخاصين بك.',
    'api_oauth_clients_desc2' => 'Use this client id to request a new token, and convert authorization codes to access tokens. See <a href="{url}">Laravel Passport documentation</a> for more information.',
    'api_oauth_title' => 'OAuth Clients',
    'api_oauth_create_new' => 'إنشاء عميل جديد',
    'api_oauth_edit' => 'Edit Client',
    'api_oauth_not_created' => 'لم تقم بإنشاء أي عملاء OAuth.',
    'api_oauth_clientid' => 'معرف العميل',
    'api_oauth_name' => 'الاسم',
    'api_oauth_name_help' => 'شيء سيَتَعرف عليه مستخدمونك و يثقون به.',
    'api_oauth_secret' => 'سري',
    'api_oauth_create' => 'إنشاء عميل',
    'api_oauth_redirecturl' => 'رابط إعادة التوجيه',
    'api_oauth_redirecturl_help' => 'Your application’s authorization callback URL.',

    'api_authorized_clients' => 'قائمة العملاء المصرح بهم',
    'api_authorized_clients_desc' => 'This section lists all the clients you’ve authorized to access your application data. You can revoke this authorization at anytime.',
    'api_authorized_clients_title' => 'التطبيقات المصرحة بها',
    'api_authorized_clients_none' => 'There are no authorized clients yet.',
    'api_authorized_clients_name' => 'الاسم',
    'api_authorized_clients_scopes' => 'Scopes',

    'personalization_tab_title' => 'قم بتخصيص حسابك',

    'personalization_title' => 'Here you will find different settings to configure your account. These features are intended for “power users” who want maximum control over Monica.',
    'personalization_contact_field_type_title' => 'أنواع حقول جهة الإتصال',
    'personalization_contact_field_type_add' => 'أضف نوع حقل جديد',
    'personalization_contact_field_type_description' => 'You can configure all the different types of contact fields that you can associate to all your contacts. For example, if a new social network appears in the future, you will be able to add this new way of communicating with your contacts right here.',
    'personalization_contact_field_type_table_name' => 'الاسم',
    'personalization_contact_field_type_table_protocol' => 'النظام',
    'personalization_contact_field_type_table_actions' => 'إجراءات',
    'personalization_contact_field_type_modal_title' => 'إضافة نوع حقل جهة اتصال جديد',
    'personalization_contact_field_type_modal_edit_title' => 'تحرير نوع حقل جهة اتصال موجود',
    'personalization_contact_field_type_modal_delete_title' => 'حذف نوع حقل جهة اتصال موجود',
    'personalization_contact_field_type_modal_delete_description' => 'Are you sure you want to delete this contact field type? Deleting this type of contact field will delete ALL the data with this type for all of your contacts.',
    'personalization_contact_field_type_modal_name' => 'الاسم',
    'personalization_contact_field_type_modal_protocol' => 'النظام (إختياري)',
    'personalization_contact_field_type_modal_protocol_help' => 'Each new contact field type can be clickable. If a protocol is set, we will use it to trigger the action that is set.',
    'personalization_contact_field_type_modal_icon' => 'الأيقونة (اختياري)',
    'personalization_contact_field_type_modal_icon_help' => 'You can associate an icon with this contact field type. You need to add a reference to a Font Awesome icon.',
    'personalization_contact_field_type_delete_success' => 'The contact field type has been successfully deleted.',
    'personalization_contact_field_type_add_success' => 'The contact field type has been successfully added.',
    'personalization_contact_field_type_edit_success' => 'The contact field type has been successfully updated.',

    'personalization_genders_title' => 'أنواع الجنس',
    'personalization_genders_add' => 'إضافة نوع جنس جديد',
    'personalization_genders_desc' => 'You can define as many genders as you need to. You need at least one gender type in your account.',
    'personalization_genders_modal_add' => 'إضافة نوع جنس',
    'personalization_genders_modal_edit' => 'تحديث نوع الجنس',
    'personalization_genders_modal_name' => 'Name',
    'personalization_genders_modal_name_help' => 'The name used to display the gender on a contact page.',
    'personalization_genders_modal_sex' => 'Sex',
    'personalization_genders_modal_sex_help' => 'Used to define the relationships, and during the VCard import/export process.',
    'personalization_genders_modal_default' => 'Select the default gender for a new contact',
    'personalization_genders_modal_delete' => 'حذف نوع الجنس',
    'personalization_genders_modal_delete_desc' => 'Are you sure you want to delete the gender “{name}”?',
    'personalization_genders_modal_delete_question' => 'You currently have {count} contact with this gender. If you delete this gender, what gender should this contact have?|You currently have {count} contacts with this gender. If you delete this gender, what gender should these contacts have?',
    'personalization_genders_modal_delete_question_default' => 'This gender is the default one. If you delete this gender, which one will be the new default?',
    'personalization_genders_modal_error' => 'Please choose a gender from the list.',
    'personalization_genders_list_contact_number' => '{count} contact|{count} contacts',
    'personalization_genders_table_name' => 'Name',
    'personalization_genders_table_sex' => 'Sex',
    'personalization_genders_table_default' => 'Default',
    'personalization_genders_default' => 'Default gender',
    'personalization_genders_make_default' => 'Change default gender',
    'personalization_genders_select_default' => 'Select default gender',
    'personalization_genders_m' => 'Male',
    'personalization_genders_f' => 'Female',
    'personalization_genders_o' => 'Other',
    'personalization_genders_u' => 'Unknown',
    'personalization_genders_n' => 'None or not applicable',

    'personalization_reminder_rule_save' => 'لقد تم حفظ التغيير',
    'personalization_reminder_rule_title' => 'شروط التذكير',
    'personalization_reminder_rule_line' => 'قبل {count} يوم | قبل {count} أيام',
    'personalization_reminder_rule_desc' => 'For every reminder that you set, Monica can send you an email a number of days before the event happens.  You can adjust these notification settings here. These notifications only apply to monthly and yearly reminders.',

    'personalization_module_save' => 'لقد تم حفظ التغيير',
    'personalization_module_title' => 'الميزات',
    'personalization_module_desc' => 'You may not need all of Monica’s features. Below you can toggle specific features that are used on a contact sheet. This change will affect ALL your contacts. Turning off a feature does not delete any data, it simply hides the feature.',

    'personalisation_paid_upgrade' => 'This is a premium feature that requires a Paid subscription to be active. Upgrade your account by visiting <a href=":url">Settings > Subscription</a>.',
    'personalisation_paid_upgrade_vue' => 'This is a premium feature that requires a Paid subscription to be active. Upgrade your account by visiting <a href="{url}">Settings > Subscription</a>.',

    'reminder_time_to_send' => 'Time of the day reminders will be sent',
    'reminder_time_to_send_help' => 'Your next reminder is scheduled to be sent on <span title="{dateTimeUtc}" class="reminder-info">{dateTime}</span>.',

    'personalization_activity_type_category_title' => 'تصنيفات نوع النشاط',
    'personalization_activity_type_category_add' => 'إضافة فئة نوع نشاط جديد',
    'personalization_activity_type_category_table_name' => 'الاسم',
    'personalization_activity_type_category_description' => 'An activity with one of your contacts can have a type and a category type. Your account comes with a set of predefined category types by default, but you can customize these here.',
    'personalization_activity_type_category_table_actions' => 'إجراءات',
    'personalization_activity_type_category_modal_add' => 'إضافة فئة نوع نشاط جديد',
    'personalization_activity_type_category_modal_edit' => 'تحرير فئة نوع نشاط',
    'personalization_activity_type_category_modal_question' => 'What should we name this new category?',
    'personalization_activity_type_add_button' => 'أضف نوع نشاط جديد',
    'personalization_activity_type_modal_add' => 'أضف نوع نشاط جديد',
    'personalization_activity_type_modal_question' => 'What should we name this new activity type?',
    'personalization_activity_type_modal_edit' => 'تحرير نوع نشاط',
    'personalization_activity_type_category_modal_delete' => 'حذف فئة نوع نشاط',
    'personalization_activity_type_category_modal_delete_desc' => 'Are you sure you want to delete this category? Deleting it will delete all associated activity types. Activities that belong to this category will not be affected by this deletion.',
    'personalization_activity_type_modal_delete' => 'حذف نوع نشاط',
    'personalization_activity_type_modal_delete_desc' => 'هل أنت متأكد من حذف نوع هذا النشاط؟ الأنشطة التي تعود لهذه الفئة لن تتأثر بهذا الحذف.',
    'personalization_activity_type_modal_delete_error' => 'لا نستطيع إيجاد نوع هذا النشاط.',
    'personalization_activity_type_category_modal_delete_error' => 'لا نستطيع إيجاد تصنيف هذا النوع من الأنشطة.',

    'personalization_life_event_category_title' => 'Life event categories',
    'personalization_live_event_category_table_name' => 'Name',
    'personalization_life_event_category_description' => 'A life event can have a type and a category. Your account comes with a set of predefined categories and types by default, but you can customize life event types here.',
    'personalization_live_event_category_table_actions' => 'Actions',
    'personalization_life_event_type_add_button' => 'Add a new life event type',
    'personalization_life_event_type_modal_add' => 'Add a new life event type',
    'personalization_life_event_type_modal_question' => 'What should we name this new life event type?',
    'personalization_life_event_type_modal_edit' => 'Edit a life event type',
    'personalization_life_event_type_modal_delete' => 'Delete a life event type',
    'personalization_life_event_type_modal_delete_desc' => 'Are you sure you want to delete this life event type? Life events that belong to this type will be deleted by performing this action.',
    'personalization_life_event_type_modal_delete_error' => 'We can’t find this life event type.',

    'personalization_life_event_category_work_education' => 'العمل و التعليم',
    'personalization_life_event_category_family_relationships' => 'العائلة و العلاقات',
    'personalization_life_event_category_home_living' => 'المنزل و العيش',
    'personalization_life_event_category_travel_experiences' => 'السفر و الخبرات',
    'personalization_life_event_category_health_wellness' => 'الصحة و العافية',

    'personalization_life_event_type_new_job' => 'عمل جديد',
    'personalization_life_event_type_retirement' => 'التقاعد',
    'personalization_life_event_type_new_school' => 'مدرسة جديدة',
    'personalization_life_event_type_study_abroad' => 'الدراسة في الخارج',
    'personalization_life_event_type_volunteer_work' => 'عمل تطوعي',
    'personalization_life_event_type_published_book_or_paper' => 'نشر كتاب أو مقال',
    'personalization_life_event_type_military_service' => 'خدمة عسكرية',
    'personalization_life_event_type_first_met' => 'أول لقاء',
    'personalization_life_event_type_new_relationship' => 'علاقة جديدة',
    'personalization_life_event_type_engagement' => 'الخطوبة',
    'personalization_life_event_type_marriage' => 'الزواج',
    'personalization_life_event_type_anniversary' => 'ذكرى',
    'personalization_life_event_type_expecting_a_baby' => 'انتظار مولود',
    'personalization_life_event_type_new_child' => 'طفل جديد',
    'personalization_life_event_type_new_family_member' => 'فرد جديد في العائلة',
    'personalization_life_event_type_new_pet' => 'حيوان أليف جديد',
    'personalization_life_event_type_end_of_relationship' => 'نهاية علاقة',
    'personalization_life_event_type_loss_of_a_loved_one' => 'Loss of a loved one',
    'personalization_life_event_type_moved' => 'إنتقال',
    'personalization_life_event_type_bought_a_home' => 'شراء منزل',
    'personalization_life_event_type_home_improvement' => 'ترميم المنزل',
    'personalization_life_event_type_holidays' => 'العطل',
    'personalization_life_event_type_new_vehicle' => 'مركبة جديدة',
    'personalization_life_event_type_new_roommate' => 'رفيق سكن جديد',
    'personalization_life_event_type_overcame_an_illness' => 'التغلب على المرض',
    'personalization_life_event_type_quit_a_habit' => 'الإقلاع عن عادة',
    'personalization_life_event_type_new_eating_habits' => 'عادات أكل جديدة',
    'personalization_life_event_type_weight_loss' => 'فقدان الوزن',
    'personalization_life_event_type_wear_glass_or_contact' => 'Started wearing glasses or contacts',
    'personalization_life_event_type_broken_bone' => 'Broke a bone',
    'personalization_life_event_type_removed_braces' => 'Had braces removed',
    'personalization_life_event_type_surgery' => 'Had surgery',
    'personalization_life_event_type_dentist' => 'Had dental treatment',
    'personalization_life_event_type_new_sport' => 'Started playing a new sport',
    'personalization_life_event_type_new_hobby' => 'Took up a new hobby',
    'personalization_life_event_type_new_instrument' => 'Started learning a new instrument',
    'personalization_life_event_type_new_language' => 'Started learning a new language',
    'personalization_life_event_type_tattoo_or_piercing' => 'وشم أو ثقب',
    'personalization_life_event_type_new_license' => 'رخصة جديدة',
    'personalization_life_event_type_travel' => 'السفر',
    'personalization_life_event_type_achievement_or_award' => 'إنجاز أو جائزة',
    'personalization_life_event_type_changed_beliefs' => 'تغير المعتقدات',
    'personalization_life_event_type_first_word' => 'أول كلمة',
    'personalization_life_event_type_first_kiss' => 'First kiss',

    'storage_title' => 'Storage',
    'storage_account_info' => 'Your account limit is :accountLimit MB. Your current usage is :currentAccountSize MB (about :percentUsage%).',
    'storage_upgrade_notice' => 'Upgrade your account to be able to upload documents and photos.',
    'storage_description' => 'Here you can see all the documents and photos uploaded about your contacts.',

    'dav_title' => 'WebDAV',
    'dav_description' => 'Here you can find all settings to use WebDAV resources for CardDAV and CalDAV exports.',
    'dav_copy_help' => 'Copy into your clipboard',
    'dav_clipboard_copied' => 'Value copied into your clipboard',
    'dav_url_base' => 'Base url for all CardDAV and CalDAV resources:',
    'dav_connect_help' => 'You can connect your contacts and/or calendars with this base url on you phone or computer.',
    'dav_connect_help2' => 'Use your login (email) and create an API token as the password to authenticate.',
    'dav_url_carddav' => 'CardDAV url for Contacts resource:',
    'dav_url_caldav_birthdays' => 'CalDAV url for Birthdays resources:',
    'dav_url_caldav_tasks' => 'CalDAV url for Tasks resources:',
    'dav_title_carddav' => 'CardDAV',
    'dav_title_caldav' => 'CalDAV',
    'dav_carddav_export' => 'Export all contacts in one file',
    'dav_caldav_birthdays_export' => 'Export all birthdays in one file',
    'dav_caldav_tasks_export' => 'Export all tasks in one file',

    'archive_title' => 'Archive all of the contacts in your account',
    'archive_desc' => 'This will archive all of the contacts in your account.',
    'archive_cta' => 'Archive all of your contacts',

    'logs_title' => 'Everything that has happened to this account',
    'logs_actor' => 'Actor',
    'logs_timestamp' => 'Timestamp',
    'logs_description' => 'Description',
    'logs_subject' => 'Subject',
    'logs_size' => 'Size (Kb)',
    'logs_object' => 'Object',
];
