## Magento2 Switch the shipping methods based on order amount

> Magento2 an open-source e-commerce platform written in PHP.

> In this extension we will learn how to switch shipping method based on the order amount.

> Here, we are going to display Free Shipping method when order total >= 200 & Flat rate Shipping method when order total < 200

> In order to achieve that we are going to use plugin method of Magento2 to override the collect rates method & add the condition over there.


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/FlatrateShipping
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/FlatrateShipping
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1