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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getPageIdFromUrl'][] = array('Compliance\GoogleAnalytics', 'loadListPageFromUrl');
