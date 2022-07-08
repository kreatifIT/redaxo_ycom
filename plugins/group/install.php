<?php

/**
 * @var rex_addon $this
 * @psalm-scope-this rex_addon
 */

rex_sql_table::get(rex::getTable('article'))
    ->ensureColumn(new rex_sql_column('ycom_group_type', 'int', false, '0'))
    ->ensureColumn(new rex_sql_column('ycom_groups', 'text'))
    ->alter()
;

$content = rex_file::get(rex_path::plugin('ycom', 'group', 'install/tablesets/yform_ycom_group.json'));
if ($content) {
    rex_yform_manager_table_api::importTablesets($content);
}

$content = rex_file::get(rex_path::plugin('ycom', 'group', 'install/tablesets/yform_ycom_user_group.json'));
if ($content) {
    rex_yform_manager_table_api::importTablesets($content);
}

rex_yform_manager_table::deleteCache();
