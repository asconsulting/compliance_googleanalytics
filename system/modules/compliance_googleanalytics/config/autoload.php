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
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Compliance\GoogleAnalytics' 				=> 'system/modules/compliance_googleanalytics/library/Compliance/GoogleAnalytics.php',
	'Compliance\Module\GoogleAnalyticsNotice' 	=> 'system/modules/compliance_googleanalytics/library/Compliance/Module/GoogleAnalyticsNotice.php',
	'Compliance\Module\GoogleAnalyticsOptInOut' => 'system/modules/compliance_googleanalytics/library/Compliance/Module/GoogleAnalyticsOptInOut.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_compliance_ga_notice' 			=> 'system/modules/compliance_googleanalytics/templates/modules',
	'mod_compliance_ga_optinout' 		=> 'system/modules/compliance_googleanalytics/templates/modules',
    'analytics_google_compliance' 		=> 'system/modules/compliance_googleanalytics/templates/analytics',
));
