<?php
namespace TestHabrContext;

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\TranslatableContext;
use HabrPage\LeftMenu;

/**
 * Class LeftMenuContext
 *
 * @package TestAipApp
 */
class LeftMenuContext implements TranslatableContext, SnippetAcceptingContext
{
    /**
     * @var LeftMenu
     */
    protected $leftMenu;

    /**
     * LeftMenuContext constructor.
     *
     * @param LeftMenu $leftMenu
     */
    public function __construct(LeftMenu $leftMenu)
    {
        $this->leftMenu = $leftMenu;
    }

    /**
     * Returns list of definition translation resources paths
     *
     * @return array
     */
    public static function getTranslationResources()
    {
        return glob(__DIR__.'/../../i18n/left-menu/*.xliff');
    }



    /**
     * @When I activate left menu
     */
    public function iClickLeftMenu()
    {
        $this->leftMenu->getElement('Меню')->click();
    }


    /**
     * @When I enter in the search box :searchText
     *
     * @param $searchText
     */
    public function iEnterInTheSearchBox($searchText)
    {
        $element = $this->leftMenu->getElement('Поиск');
        $element->setValue($searchText);
        $element->submit();
    }
}