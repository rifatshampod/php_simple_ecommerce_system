# php_simple_ecommerce_system


Steps to install and run the system:

## 1. Launch/run in local computer

There are few steps before you run the system in your local computer, as the system is developed in php, the local computer needs a server environment to run php codes, which is apache 
server. This server environment will enable you to run php codes as well as set up database. Follow the steps below if you are completely new to php, or directly jump to import database section
if you are experienced php developer. 

Step 1: Install necessary softwares:

  - Apache environment
   
   Go to https://www.apachefriends.org/index.html  and download XAMPP according to your device.
   
   ![Image of Yaktocat](https://github.com/rifatshampod/University-Management-System-php/blob/master/xampp%20page.png)
   
   - For editor and view coding
   
   Go to https://code.visualstudio.com/ and download Visual studio Code, VS code is an excellent text editor application that can be useful for editing the codes. 
   
   
   - Starting with the database
   
   Install the downloaded file, then open XAMPP from your applications, alternatively you can go to the installed directory where you installed XAMPP (Generally in local disk C: Xampp in windows) , and open xampp-control file to launch XAMPP.
 
  
   After xampp control panel opens, start Apache and MySql server by clicking the start buttons. You can close or minimise xampp control panel after that.
   
   ![Image of Yaktocat](https://github.com/rifatshampod/images/blob/master/xampp%20control.png)
   
     
   then, Open your browser and go to http://localhost/phpmyadmin, there you will see all your database directory. Click on new and create a new database named "slimfitshop". Note that this name is mendatory and should be exactly same.
   
   ![Image of Yaktocat](https://github.com/rifatshampod/images/blob/master/phpmyadmin.png)
   
   - Downloading the project
   
   Download this whole project and unzip. The project will be extracted to a folder. Copy the folder and paste inside Local Disk C:\xampp\htdocs , or inside the htdocs folder of your xampp installed direcory.
   
   - Import database
   
   inside the folder, there is a subfolder named "DB", the database file is inside this folder named "slimfitshop.sql". Go to http://localhost/phpmyadmin/ again, click on the database "slimfitshop" as you created there, click on Import tab, select the "slimfitshop.sql" file from the project folder, upload the file and click go. The whole database will be imported.
   
   ![Image of Yaktocat](https://github.com/rifatshampod/images/blob/master/import%20database.png)
   
   After the database in imported, go to http://localhost/folderName (here folder name will be the project folder name under xampp/htdocs ) to open the website in browser.
   

-----------------------------------------------------------   
    
## 2. Set up under a domain with cloud host

If you are using any apache server, you can upload the whole project folder in your host under the domain you want to add, create a database accordingly and import the "ums.sql" file to the database you created in your server.

Then you have to add the database name, user and password to the project config file. Go to the project folder > ums > include > config.php and replace the database name, username and passsword and save the config file in your host server.

![Image of Yaktocat](https://github.com/rifatshampod/images/blob/master/config.png)

### That's it. 
