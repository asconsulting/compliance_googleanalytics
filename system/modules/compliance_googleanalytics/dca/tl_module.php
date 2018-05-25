<?php
 
/**
 * Compliance - Google Analytics
 *
 * Copyright (C) 2018 Andrew Stevens Consulting
 *
 * @package    compliance_googleanalytics
 * @link       https://andrewstevens.consulting
 */
 
 
/**
 * Add a palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['compliance_ga_notice'] 	= '{title_legend},name,type;{compliance_legend},googleAnalyticsNotice;{template_legend:hide},customTpl;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['compliance_ga_optinout'] 	= '{title_legend},name,type;{template_legend:hide},customTpl;{expert_legend:hide},guests,cssID,space';

// Search Fields
$GLOBALS['TL_DCA']['tl_module']['fields']['googleAnalyticsNotice'] = array
(
	'label' 			=> &$GLOBALS['TL_LANG']['tl_module']['googleAnalyticsNotice'],
	'inputType'         => 'textarea',
	'eval'              => array('mandatory'=>true, 'rte'=>'tinyMCE', 'helpwizard'=>true),
	'explanation'       => 'insertTags',
	'sql'               => "mediumtext NULL"
);