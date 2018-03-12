<?php

use SilverStripe\UserForms\Model\UserDefinedForm;

/**
 * LandingPage
 *
 * @package silverstripe
 * @subpackage mysite
 */
class LandingPage extends UserDefinedForm
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Landing page';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Landing pages';

    /**
     * Page type description for CMS
     * @var string
     */
    private static $description = 'Page ideal for promotions, enquiries and driving conversions';
}
