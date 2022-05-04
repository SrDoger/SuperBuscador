# eBay Developer API 
This small php application should get you started using the **eBay Developer's API**. A working copy of this project is [here.](https://php-mvc.rickapps.com)

There are three methods demonstrated. You will find them in the file **application/libs/eBayrepository.php**.

1. ***getAppToken()*** - manages OAuth credentials. Gets a new token only when the current token has expired. This minimizes the number of eBay token requests and speeds the API calls by eliminating unneeded requests to eBay.
2. ***searchCategories($term)*** - search eBay for categories suggested by your search terms
3. ***getItemAspects($catID)*** - get item specifics for a given eBay category

Information is transferred to and from eBay using the [curl](https://curl.se/) program. You will need a copy of it on your server. Edit DemoContants.php to specify the path to the program.

The API calls demonstrated here only require Application access tokens. The calls return
general eBay information, not information specific to a user's account. If you need user level tokens, look at this project: [rickapps/eBay-Sell-Feed-API](https://github.com/rickapps/eBay-Sell-Feed-API). Otherwise, be sure to paste your developer token into the file DemoConstants.php before trying out this demo. 

The demo app uses the MVC pattern. You can use MVC or scrap it. The three methods will work regardless of MVC. You will find more documentation on how MVC is implemented for this project in  *README-MVC.md*.

## INSTALLATION
1. Copy the files to a publicly accessible location on your web server. The files in folder public_html are intended to be served by the web server. The files in folder /application are not intended to be browsable. You will find a .htaccess file in that folder to prevent it from being browsed . You can also install the /application folder outside your web root folder to prevent it from being browsed. 
2. Install mod_rewrite on your server if not already supported.
3. Edit the file */.htaccess* (*Web.config* for IIS). You may need to change the line 'RewriteBase ...' to point to the folder where you installed this project. If you installed the project such that the url is *www.myDomain.com*, comment out the line or change to RewriteBase /. But if you copied the project to a subfolder, such as *www.myDomain.com/eBayAPI*, change the line to 'RewriteBase /eBayAPI/'
4. Edit the file */public_html/index.php* so the line 'define('PROJECT_ROOT', ...' contains the full path name of the folder containing the public_html and application folders. For linux this might be '/var/www/myDomain'. For IIS, 'C:/Inetpub/vhosts/myDomain.com'. The folders 'public_html' and 'application' must be at the same directory level so they can both be accessed using 'PROJECT_ROOT' . /application and 'PROJECT_ROOT'. /public_html'.
5. Make sure the [curl](https://curl.se/) program is installed on your system.
6. Edit the file 'application/config/DemoConstants.php' using the instructions in the file.
