<?php

array_insert($GLOBALS['FE_MOD']['navigationMenu'],1, array(
        'wr-onepage' => 'ModuleWrOnepage'
    )
);

#Hooks
$GLOBALS['TL_HOOKS']['getArticle'][] = array('wr.onepage.hooks', 'addAliasToArticleCssId');

