## Magento2 Switch the shipping methods based on order amount

> Magento2 an open-source e-commerce platform written in PHP.

&nbsp;
&nbsp;

> In this extension we will learn how to switch shipping method based on the order amount.

&nbsp;
&nbsp;

> Here, we are going to display Free Shipping method when order total >= 200 & Flat rate Shipping method when order total < 200

&nbsp;
&nbsp;

> In order to achieve that we are going to use plugin method of Magento2 to override the collect rates method & add the condition over there.

&nbsp;
&nbsp;

## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/FlatrateShipping
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/FlatrateShipping
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush

&nbsp;
&nbsp;

<h5>Free Shipping method when order total >= 200</h5>

<kbd>

![image2](https://user-images.githubusercontent.com/123800304/218639599-326970a8-4eb1-4e24-9972-8bf8c14b5d18.png)


</kbd>

&nbsp;
&nbsp;

<h5>Flat rate Shipping method when order total < 200</h5>

<kbd>

![image1](https://user-images.githubusercontent.com/123800304/218639645-458dde37-1c8f-42ad-83c2-1a08c202162c.png)

</kbd>

&nbsp;
&nbsp;

## Note : We have tested this option in Magento ver. 2.4.5-p1
