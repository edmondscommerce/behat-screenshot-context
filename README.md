# behat-screenshot-context
## By [Edmonds Commerce](https://www.edmondscommerce.co.uk)

A simple Behat Context to allow you to take screenshot when triggering the "I take screenshot" step.

### Installation

Install via composer

"edmondscommerce/behat-screenshot-context": "dev-master"


### Include Context in Behat Configuration

```
default:
    # ...
    suites:
        default:
            # ...
            contexts:
                - # ...
                - EdmondsCommerce\BehatScreenshotContext\ScreenshotContext

```
