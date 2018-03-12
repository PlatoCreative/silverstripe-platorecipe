<?php
/**
 * GeneralPage
 *
 * @package silverstripe
 * @subpackage mysite
 */
class GeneralPage extends Page
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'General page';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'General pages';

    /**
     * Page type description for CMS
     * @var string
     */
    private static $description = 'Generic content page';

    /**
     * If you extend a class, and don't want to be able to select
     * the old class in the cms, set this to the old class name.
     * @var string
     */
    private static $hide_ancestor = 'Page';
}
