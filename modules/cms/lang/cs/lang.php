<?php

return [
    'cms_object' => [
        'invalid_file' => 'Invalid file name: :name. File names can contain only alphanumeric symbols, underscores, dashes and dots. Some examples of correct file names: page.htm, page, subdirectory/page',
        'invalid_property' => "Parametr ':name' není možno nastavit",
        'file_already_exists' => "Soubor ':name' již existuje.",
        'error_saving' => "Chyba ukládání souboru ':name'. Zkontrolujte práva k zápisu.",
        'error_creating_directory' => 'Chyba vytváření složky :name. Zkontrolujte práva k zápisu.',
        'invalid_file_extension'=>'Chybná přípona souboru: :invalid. Povolené přípony jsou: :allowed.',
        'error_deleting' => "Chyba mazání souboru s šablonou ':name'. Zkontrolujte práva k zápisu.",
        'delete_success' => 'Šablony úspěšně smazány: :count.',
        'file_name_required' => 'Je nutno vyplnit Název souboru.'
    ],
    'dashboard' => [
        'active_theme' => [
            'online' => 'online',
            'maintenance' => 'v údržbě',
        ]
    ],
    'theme' => [
        'not_found_name' => "Téma ':name' nebylo nalezeno.",
        'active' => [
            'not_set' => 'Aktivní téma nebylo nastaveno.',
            'not_found' => 'Aktivní téma nebylo nalezeno.'
        ],
        'edit' => [
            'not_set' => 'Editované téma nebylo uloženo.',
            'not_found' => 'Editované téma nebylo nalezeno.',
            'not_match' => "Objekt který chcete právě zobrazit nepatří do téma, které nyní editujete. Prosím obnovte stránku."
        ],
        'settings_menu' => 'Témata vzhledu',
        'settings_menu_description' => 'Náhledy instalovaných témat a výběr aktivního téma.',
        'default_tab' => 'Parametry',
        'name_label' => 'Název',
        'name_create_placeholder' => 'Název nového téma',
        'author_label' => 'Autor',
        'author_placeholder' => 'Jméno osoby, nebo firmy',
        'description_label' => 'Popisek',
        'description_placeholder' => 'Popište svoje téma',
        'homepage_label' => 'Domovská stránka',
        'homepage_placeholder' => 'URL domovské stránky',
        'code_label' => 'Kód',
        'code_placeholder' => 'Unikátní kód téma pro distribuci aktualizační sítí',
        'dir_name_label' => 'Název složky',
        'dir_name_create_label' => 'Název cílové složky pro uložení téma',
        'theme_label' => 'Téma',
        'theme_title' => 'Téma',
        'activate_button' => 'Aktivovat',
        'active_button' => 'Aktivní',
        'customize_theme' => 'Přizpůsobení téma',
        'customize_button' => 'Přizpůsobit',
        'duplicate_button' => 'Duplikovat',
        'duplicate_title' => 'Duplikovat téma',
        'duplicate_theme_success' => 'Duplikace téma byla úspěšná!',
        'manage_button' => 'Správa téma',
        'manage_title' => 'Správa témat',
        'edit_properties_title' => 'Téma',
        'edit_properties_button' => 'Nastavit',
        'save_properties' => 'Uložit nastavení',
        'import_button' => 'Importovat',
        'import_title' => 'Importovat téma',
        'import_theme_success' => 'Téma úspěšně importováno!',
        'import_uploaded_file' => 'Soubor s tématem',
        'import_overwrite_label' => 'Přepsat existující soubory',
        'import_overwrite_comment' => 'Odškrtněte tento box pokud chcete importovat pouze nové soubory.',
        'import_folders_label' => 'Složky',
        'import_folders_comment' => 'Vyberte prosím složky, které chcete importovat',
        'export_button' => 'Exportovat',
        'export_title' => 'Exportovat téma',
        'export_folders_label' => 'Složky',
        'export_folders_comment' => 'Vyberte prosím složky, které chcete exportovat',
        'delete_button' => 'Smazat',
        'delete_confirm' => 'Jste si jistí, že chcete smazat toto téma? Tuto akci nelze vrátit zpět!',
        'delete_active_theme_failed' => 'Nelze smazat aktivní téma. Nejdříve aktivujte jiné téma.',
        'delete_theme_success' => 'Téma úspěšně smazáno!',
        'create_title' => 'Vytvořit téma',
        'create_button' => 'Vytvořit',
        'create_new_blank_theme' => 'Vytvořit nové čisté téma',
        'create_theme_success' => 'Téma úspěšně vytvořeno!',
        'create_theme_required_name' => 'Napište jméno pro nové téma.',
        'new_directory_name_label' => 'Složka téma',
        'new_directory_name_comment' => 'Zadejte název nové složky pro duplikaci téma.',
        'dir_name_invalid' => 'Název může obsahovat pouze čísla, písmena a následující symboly: _-',
        'dir_name_taken' => 'Tato složka s tématem již existuje.',
        'find_more_themes' => 'Vyhledat více témat',
        'saving' => 'Ukládám téma...',
        'return' => 'Zpět na seznam témat',
    ],
    'maintenance' => [
        'settings_menu' => 'Režim údržby',
        'settings_menu_description' => 'Nastavte stránku režimu údržby a její nastavení.',
        'is_enabled' => 'Aktivovat režim údržby',
        'is_enabled_comment' => 'Pokud je režim údržby aktivní, uživatelé uvidí stránku vybranou níže.'
    ],
    'page' => [
        'not_found_name' => "Stránka ':name' nebyla nalezena",
        'not_found' => [
            'label' => 'Stránka nenalezena',
            'help' => 'Požadovaná stránka nebyla nalezena.'
        ],
        'custom_error' => [
            'label' => 'Chyba stránky',
            'help' => "Omlouváme se, ale požadovaná stránka nelze zobrazit z důvodu nějaké chyby."
        ],
        'menu_label' => 'Stránky',
        'unsaved_label' => 'Neuložené stránky',
        'no_list_records' => 'Žádné stránky',
        'new' => 'Nová stránka',
        'invalid_url' => 'Špatný formát URL. URL musí začínat lomítkem a může obsahovat pouze číslice, písmena a následující znaky: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Opravdu chcete odstranit vybrané stránky?',
        'delete_confirm_single' => 'Opravdu chcete odstranit tuto stránku?',
        'no_layout' => '-- žádný layout --'
    ],
    'layout' => [
        'not_found_name' => "Layout ':name' nebyl nalezen",
        'menu_label' => 'Layouty',
        'unsaved_label' => 'Neuložený layout(y)',
        'no_list_records' => 'Žádné layouty nebyly nalezeny',
        'new' => 'Nový layout',
        'delete_confirm_multiple' => 'Opravdu chcete odstranit vybrané layouty?',
        'delete_confirm_single' => 'Opravdu chcete odstranit tento layout?'
    ],
    'partial' => [
        'not_found_name' => "Dílčí šablona ':name' nebyla nalezena.",
        'invalid_name' => 'Chybný název dílčí šablony: :name.',
        'menu_label' => 'Dílčí šablony',
        'unsaved_label' => 'Neuložené dílčí šablony',
        'no_list_records' => 'Žádné dílčí šablony',
        'delete_confirm_multiple' => 'Opravdu chcete smazat tyto dílčí šablony?',
        'delete_confirm_single' => 'Opravdu chcete smazat tuto dílčí šablonu?',
        'new' => 'Nová šablona'
    ],
    'content' => [
        'not_found_name' => "Obsahový soubor ':name' nebyl nalezen.",
        'menu_label' => 'Obsahy',
        'unsaved_label' => 'Neuložený obsah',
        'no_list_records' => 'Žádné obsahové soubory',
        'delete_confirm_multiple' => 'Opravdu chcete smazat tyto obsahové soubory nebo složky?',
        'delete_confirm_single' => 'Opravdu chcete smazat tento obsahový soubor?',
        'new' => 'Žádný obsahový soubor'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Invalid AJAX handler name: :name.',
        'not_found' => "AJAX handler ':name' was not found."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Přidat',
        'search' => 'Hledat...'
    ],
    'editor' => [
        'settings' => 'Nastavení',
        'title' => 'Název souboru',
        'new_title' => 'Nový název souboru',
        'url' => 'URL',
        'filename' => 'Název souboru',
        'layout' => 'Layout',
        'description' => 'Popisek',
        'preview' => 'Náhled',
        'meta' => 'Meta údaje',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'markup' => 'Markup',
        'code' => 'PHP kód',
        'content' => 'Obsah',
        'hidden' => 'Skrytý',
        'hidden_comment' => 'Skryté stránky jsou dostupné pouze přihlášeným administrátorům pro náhled.',
        'enter_fullscreen' => 'Zapnout režim celé obrazovky',
        'exit_fullscreen' => 'Opustit režim celé obrazovky'
    ],
    'asset' => [
        'menu_label' => 'Soubory',
        'unsaved_label' => 'Neuložené soubory',
        'drop_down_add_title' => 'Přidat...',
        'drop_down_operation_title' => 'Akce...',
        'upload_files' => 'Nahrát soubor(y)',
        'create_file' => 'Vytvořit soubor',
        'create_directory' => 'Vytvořit složku',
        'directory_popup_title' => 'Vytvoření nové složky',
        'directory_name' => 'Název složky',
        'rename' => 'Přejmenovat',
        'delete' => 'Smazat',
        'move' => 'Přesunout',
        'select' => 'Vybrat',
        'new' => 'Nový soubor',
        'rename_popup_title' => 'Přejmenovat',
        'rename_new_name' => 'Nový název',
        'invalid_path' => 'Cesta může obsahovat pouze číslice, písmena, mezery nebo následující znaky: ._-/',
        'error_deleting_file' => 'Chyba mazání souboru :name.',
        'error_deleting_dir_not_empty' => 'Chyba mazání složky :name. Složka není prázdná.',
        'error_deleting_dir' => 'Chyba mazání souboru :name.',
        'invalid_name' => 'Název může obsahovat pouze číslice, písmena, mezery a následující soubory: ._-',
        'original_not_found' => 'Původní soubor nebo složka neexistují',
        'already_exists' => 'Soubor nebo složka s tímto názvem již existují',
        'error_renaming' => 'Chyba přejmenovávání souboru nebo složky',
        'name_cant_be_empty' => 'Název nemůže být prázdný',
        'too_large' => 'Nahrávaný soubor je příliš veliký. Maximální povolená velikost je :max_size',
        'type_not_allowed' => 'Je možno nahrávat pouze tyto typy souborů: :allowed_types',
        'file_not_valid' => 'Soubor není validní',
        'error_uploading_file' => "Chyba nahrávání souboru ':name': :error",
        'move_please_select' => 'prosím vyberte',
        'move_destination' => 'Cílová složka',
        'move_popup_title' => 'Přesunutí souborů',
        'move_button' => 'Přesunout',
        'selected_files_not_found' => 'Vybrané soubory nebyly nalezeny',
        'select_destination_dir' => 'Vyberte cílovou složku',
        'destination_not_found' => 'Cílová složka nebyla nalezena',
        'error_moving_file' => 'Chyba přesunu souboru :file',
        'error_moving_directory' => 'Chyba přesunu složky :dir',
        'error_deleting_directory' => 'Chyba přesunu původní složky :dir',
        'path' => 'Cesta'
    ],
    'component' => [
        'menu_label' => 'Komponenty',
        'unnamed' => 'Bez jména',
        'no_description' => 'Popis nevyplněn',
        'alias' => 'Alias',
        'alias_description' => 'Unikátní název komponenty pro použití ve stránkách, nebo kodéch layoutu.',
        'validation_message' => 'Alias komponenty je povinný a může obsahovat pouze písmena, čísla a podtržítka. Alias by měl začínat písmenem.',
        'invalid_request' => 'Šablona nemohla být uložena, protože jedna z komponent nemá správně vyplněná data.',
        'no_records' => 'Žádná komponenta',
        'not_found' => "Komponenta ':name' nebyla nalezena.",
        'method_not_found' => "Komponenta ':name' nemá metodu ':method'."
    ],
    'template' => [
        'invalid_type' => 'Neznámý typ šablony.',
        'not_found' => 'Požadovaná šablona nebyla nalezena.',
        'saved'=> 'Šablona byla úspěšně uložena.'
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Správa obsahu',
        'manage_assets' => 'Správa souborů',
        'manage_pages' => 'Správa stránek',
        'manage_layouts' => 'Správa layoutů',
        'manage_partials' => 'Správa dílčích šablon',
        'manage_themes' => 'Správa témat',
        'manage_media' => 'Správa médií'
    ],
    'mediafinder' => [
        'default_prompt' => 'Klikněte na tlačítko %s pro hledání souboru'
    ],
    'media' => [
        'invalid_path' => "Chybně zadaná cesta: ':path'.",
        'menu_label' => 'Media',
        'upload' => 'Nahrát',
        'move' => 'Přesunout',
        'delete' => 'Smazat',
        'add_folder' => 'Přidat složku',
        'search' => 'Vyhledat',
        'display' => 'Zobrazit',
        'filter_everything' => 'Vše',
        'filter_images' => 'Obrázky',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumenty',
        'library' => 'Knihovna',
        'folder_size_items' => 'soubor(ů)',
        'size' => 'Velikost',
        'title' => 'Název',
        'last_modified' => 'Naposledy upraveno',
        'public_url' => 'Veřejná URL',
        'click_here' => 'Klikněte zde',
        'thumbnail_error' => 'Chyba generování náhledu.',
        'return_to_parent' => 'Zpět do nadřazené složky',
        'return_to_parent_label' => 'Go up ..',
        'nothing_selected' => 'Nic nevybráno.',
        'multiple_selected' => 'Vybráno více položek.',
        'uploading_file_num' => 'Nahrávám :number soubor(y)...',
        'uploading_complete' => 'Nahrávání kompletní',
        'order_by' => 'Seřadit dle',
        'folder' => 'Složka',
        'no_files_found' => 'No files found by your request.',
        'delete_empty' => 'Vyberte položky ke smazání.',
        'delete_confirm' => 'Opravu chcete smazat vybrané položky?',
        'error_renaming_file' => 'Přejmenování se nezdařilo.',
        'new_folder_title' => 'Nová složka',
        'folder_name' => 'Název složky',
        'error_creating_folder' => 'Chyba vytváření složky',
        'folder_or_file_exist' => 'A folder or file with the specified name already exists.',
        'move_empty' => 'Vyberte položky k přesunutí.',
        'move_popup_title' => 'Přesun souborů nebo složek',
        'move_destination' => 'Cílová složka',
        'please_select_move_dest' => 'Prosím vyberte cílovou složku.',
        'move_dest_src_match' => 'Prosím vyberte jinou cílovou složku.',
        'empty_library' => 'Knihovna médií je prázdná. Nahrajte prosím soubory, nebo vytvořte složky.',
        'insert' => 'Vložit',
        'crop_and_insert' => 'Oříznout & vložit',
        'select_single_image' => 'Prosím vyberte pouze jeden obrázek.',
        'selection_not_image' => 'Vybraná položka není obrázek.',
        'restore' => 'Zpět všechny změny',
        'resize' => 'Změnit velikost...',
        'selection_mode_normal' => 'Normální',
        'selection_mode_fixed_ratio' => 'Pevný poměr stran',
        'selection_mode_fixed_size' => 'Pevná velikost',
        'height' => 'Výška',
        'width' => 'Šířka',
        'selection_mode' => 'Selection mode',
        'resize_image' => 'Změna rozměrů obrázku',
        'image_size' => 'Velikost obrázku:',
        'selected_size' => 'Vybrané:'
    ]
];