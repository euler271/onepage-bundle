<?php

$GLOBALS['TL_DCA']['tl_article']['palettes']['default']=preg_replace('/{expert_legend:hide}/','{onepage_legend:hide},in_onepage,in_onepage_level_lower;{expert_legend:hide}',$GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_article']['fields']['in_onepage'] = array
(
    'label'                   =>  &$GLOBALS['TL_LANG']['tl_article']['in_onepage'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['in_onepage_level_lower'] = array
(
	'label'                   =>  "in onepage level lower",//&$GLOBALS['TL_LANG']['tl_article']['in_onepage'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);