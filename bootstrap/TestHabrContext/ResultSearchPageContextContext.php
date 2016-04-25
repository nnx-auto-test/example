<?php
namespace TestHabrContext;

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\TranslatableContext;
use HabrPage\ResultSearchPage;

/**
 * Class ResultSearchPageContextContext
 *
 * @package TestHabrContext
 */
class ResultSearchPageContextContext implements TranslatableContext, SnippetAcceptingContext
{
    use WaitTrait;

    /**
     * @var ResultSearchPage
     */
    protected $resultSearchPage;

    /**
     * LeftMenuContext constructor.
     *
     * @param ResultSearchPage $resultSearchPage
     */
    public function __construct(ResultSearchPage $resultSearchPage)
    {
        $this->resultSearchPage = $resultSearchPage;
    }

    /**
     * Returns list of definition translation resources paths
     *
     * @return array
     */
    public static function getTranslationResources()
    {
        return glob(__DIR__ . '/../../i18n/result-search-page/*.xliff');
    }

    /**
     * @When I wait the opening of the search results page for query :query
     *
     * @param $query
     *
     * @throws \RuntimeException
     */
    public function iWaitOpeningOfSearchPage($query)
    {
        $this->waitTime(
            [$this->resultSearchPage, 'isOpen'],
            [
                'urlParameters' => [
                    'q' => $query
                ]
            ]
        );
    }

    /**
     * @Then I expect that the results will be an article with the headline :articleHeader
     *
     * @param $articleHeader
     */
    public function iExpectThatTheResultsWillBeAnArticleWithTheHeadline($articleHeader)
    {
        $has = $this->resultSearchPage->hasArticle($articleHeader);

        return;
    }
}