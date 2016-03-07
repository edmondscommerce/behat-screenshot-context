<?php namespace EdmondsCommerce\BehatScreenshotContext;

use Behat\MinkExtension\Context\RawMinkContext;

class ScreenshotContext extends RawMinkContext
{
    /**
     * @When /^I take a screenshot$/
     */
    public function iTakeAScreenshot()
    {

        $driver = $this->getSession()->getDriver();

        //Generate filename
        $name = substr(preg_replace('%[^a-z0-9]%i', '_', array_pop($_SERVER['argv']) . ':'
            . $driver->getCurrentUrl()),
            0,
            100);
        $file = '/tmp/behat_' . $name . '.png';
    }

    public function takeScreenshot($fileName)
    {
        $driver = $this->getSession()->getDriver();
        if ($driver instanceof \Behat\Mink\Driver\Selenium2Driver)
        {
            file_put_contents($fileName, $this->getSession()->getDriver()->getScreenshot());

            echo "Screenshot saved to ".$fileName;
        }
    }
}