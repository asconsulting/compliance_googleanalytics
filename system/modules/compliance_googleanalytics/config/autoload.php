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
    'Compliance\GoogleAnalytics' 		=> 'system/modules/compliance_googleanalytics/library/Compliance/GoogleAnalytics.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'analytics_google_compliance' 		=> 'system/modules/compliance_googleanalytics/templates/modules',
));
