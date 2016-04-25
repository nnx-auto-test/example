<?php
namespace TestHabrContext;

/**
 * Class WaitTrait
 *
 * @package TestHabrContext
 */
trait WaitTrait
{
    /**
     * @param callable $condition
     * @param array    $args
     * @param int      $maxTime
     * @param int      $step
     *
     * @throws \RuntimeException
     */
    public function waitTime(callable $condition, array $args = [], $maxTime = 5000000, $step = 1000000)
    {
        $currentTime = 0;
        while ($currentTime <= $maxTime) {
            if (call_user_func_array($condition, $args)) {
                return;
            }
            $currentTime += $step;
            usleep($step);
        }

        $errMsg = 'not wait...';
        throw new \RuntimeException($errMsg);
    }
}