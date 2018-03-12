<?php

use SilverStripe\UserForms\Model\UserDefinedForm;

/**
 * ContactPage
 *
 * @package silverstripe
 * @subpackage mysite
 */
class ContactPage extends UserDefinedForm
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Contact page';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Contact pages';
}
