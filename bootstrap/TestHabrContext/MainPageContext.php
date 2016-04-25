<?php
namespace TestHabrContext;

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\TranslatableContext;
use HabrPage\MainPage;

/**
 * Class MainPageContext
 *
 * @package TestHabrContext
 */
class MainPageContext implements TranslatableContext, SnippetAcceptingContext
{
    /**
     * @var MainPage
     */
    protected $mainPage;


    /**
     * LeftMenuContext constructor.
     *
     * @param MainPage $mainPage
     */
    public function __construct(MainPage $mainPage)
    {
        $this->mainPage = $mainPage;
    }

    /**
     * Returns list of definition translation resources paths
     *
     * @return array
     */
    public static function getTranslationResources()
    {
        return glob(__DIR__.'/../../i18n/main-page/*.xliff');
    }


    /**
     * @Given I open the main page habrahabr
     * 
     */
    public function iOpenTheMainHabrahabrPage()
    {
        $this->mainPage->open();
    }

}