<?php

use SilverStripe\View\Requirements;
use SilverStripe\Control\Director;
use SilverStripe\CMS\Controllers\ContentController;

class PageController extends ContentController
{
    public function IsLive()
    {
        return Director::isLive();
    }

    public function PageTitle()
    {
        return HTMLTag::create($this->data()->Title, 'h1');
    }
}
