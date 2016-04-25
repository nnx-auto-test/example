<?php
namespace HabrPage;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Class ResultSearchPage
 *
 * @package HabrPage
 */
class ResultSearchPage extends Page
{
    /**
     * Заглавная страница
     *
     * @var string
     */
    protected $path = 'search/?q={q}';

    /**
     * Шаблоны xpath
     *
     * @var array
     */
    protected $xpathPatterns = [
        'Статья с заданным заголовком' => './/h1[contains(@class, \'title\')]//a[contains(@class, \'post_title\') and text()=\'%s\']'
    ];

    /**
     * Используемые элементы
     *
     * @var array
     */
    protected $elements = [
        'Результаты' => [
            'xpath' => '//div[contains(@class, \'search_results\')]//div[contains(@class, \'shortcuts_items\')]'
        ],
    ];

    /**
     * Проверяет есть ли статья с заданным заголовком
     *
     * @param $articleHeader
     *
     * @return \SensioLabs\Behat\PageObjectExtension\PageObject\Element
     */
    public function hasArticle($articleHeader)
    {
        $result = $resultBlock = $this->getElement('Результаты');

        $xpath = sprintf($this->xpathPatterns['Статья с заданным заголовком'], $articleHeader);
        $res = $result->find('xpath', $xpath);


        return $res;
    }
}