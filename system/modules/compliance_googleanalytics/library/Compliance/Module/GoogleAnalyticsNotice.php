<?php
 
/**
 * Compliance - Google Analytics
 *
 * Copyright (C) 2018 Andrew Stevens Consulting
 *
 * @package    compliance_googleanalytics
 * @link       https://andrewstevens.consulting
 */

 
namespace Compliance\Module;
 
/**
 * Class Asc\Module\DirectoryReader
 */
class GoogleAnalyticsNotice extends \Contao\Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_compliance_ga_notice';

 
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['compliance_ga_notice'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;
 
            return $objTemplate->parse();
        }
 
        return parent::generate();
    }
	
	 
    /**
     * Generate the module
     */
    protected function compile()
    {	
		$GLOBALS['TL_CSS'][] = "system/modules/compliance_googleanalytics/assets/css/compliance_google_analytics.css";
		$this->Template->googleAnalyticsNotice($this->googleAnalyticsNotice);
    }

}