<?php

$arrDca = &$GLOBALS['TL_DCA']['tl_member'];

/**
 * Fields
 */
$arrDca['fields']['ldapUid'] = [
    'sql' => "varchar(255) NOT NULL default ''",
];