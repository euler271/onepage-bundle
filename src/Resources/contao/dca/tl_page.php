<?php


foreach (array_keys($dca['palettes']) as $palette) {
	$dca['palettes'][$palette] = str_replace(';{layout_legend', ';{onepage_legend},in_onepage;{layout_legend', $dca['palettes'][$palette]);
}

$fields = [
		'in_onepage'			  => [
		'label'                   =>  &$GLOBALS['TL_LANG']['tl_page']['in_onepage'],
    	'exclude'                 => true,
    	'inputType'               => 'checkbox',
    	'eval'                    => array('tl_class'=>'w50'),
    	'sql'                     => "char(1) NOT NULL default ''"
	],
];

$dca['fields'] += $fields;