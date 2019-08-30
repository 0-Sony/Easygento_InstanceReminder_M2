# Instance Reminder by Easygento for Magento 2

Sometimes you have to work on multiple instance on multiple tab on your browser. 
This module prevent you to mix up by mistake your instances.

There are 4 instances type :
* Develop
* Pre Production
* Production
* Custom (you can named it as you want)

You have to define colour for your current instance, and a top bar with your background colour will appear


### How to Install ?

Install by composer : 

Update your composer.json file:  Open the root Magento directory on your server and send Composer the following command: 

`composer require easygento/magento2-instancereminder`

Install without composer :

Put the code in the `app/code/Easygento/InstanceReminder` folder

Once the module installed , run the command 
`bin/magento setup:upgrade` and  `bin/magento setup:di:compile`


![alt text](https://raw.githubusercontent.com/0-Sony/Easygento_InstanceReminder_M2/master/view/adminhtml/web/images/examples/demo-login.png "Login page")


![alt text](https://raw.githubusercontent.com/0-Sony/Easygento_InstanceReminder_M2/master/view/adminhtml/web/images/examples/demo-product.png "Products page")


![alt text](https://raw.githubusercontent.com/0-Sony/Easygento_InstanceReminder_M2/master/view/adminhtml/web/images/examples/demo-settings.png "Settings page")
