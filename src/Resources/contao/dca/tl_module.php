<?php
$GLOBALS['TL_DCA']['tl_module']['palettes']['jl-onepage-nav'] = '{title_legend},name,headline,type;{redirect_legend},rootPage;{options_legend},loadDefaultJavascript;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';


$GLOBALS['TL_DCA']['tl_module']['fields']['loadDefaultJavascript'] = array
(
    'label'                   =>  &$GLOBALS['TL_LANG']['tl_module']['load_default_javascript'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);