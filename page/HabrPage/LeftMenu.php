<?php
namespace HabrPage;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Class LeftMenu
 *
 * @package HabrPage
 */
class LeftMenu extends Page
{
    /**
     * Используемые элементы
     *
     * @var array
     */
    protected $elements = [
        'Меню' => [
            'xpath' => '//div[@id=\'navbar\']//a[contains(@class, \'tab_menu\')]'
        ],
        'Поиск'  => [
            'xpath' => '//div[@id=\'navbar\']//form[contains(@class, \'global_search_form\')]//input[@name=\'q\']'
        ],
    ];
}