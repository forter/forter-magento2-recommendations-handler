# Forter Recommendations Handler (boilerplate module) for Magento 2

To be used alongside [Forter's Magento 2 module](https://github.com/forter/forter-magento2), for applying custom logics based on the recommendations that may be included in the Forter decision response.

## Usage Instructions
1. Install the module (see instructions below).
2. Uncomment the relevant events on the module's `etc/events.xml`.
3. Add your logics for handling the recommendation to the corresponding observer class and adjust to your needs.

---

## Install manually under app/code
Download & place the contents of this repository under `{YOUR-MAGENTO2-ROOT-DIR}/app/code/Forter/RecommendationsHandler`.  
Then, run the following commands from your Magento 2 root dir:
```
php bin/magento maintenance:enable
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento maintenance:disable
php bin/magento cache:flush
```

---

https://www.forter.com/

© 2023 Forter.
All rights reserved.

![Forter Logo](https://upload.wikimedia.org/wikipedia/commons/5/51/Forter_Logo_Blue_Web-3.png)
