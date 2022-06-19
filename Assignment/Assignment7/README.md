## Assignment Given : 19th June 2022 ----- Deadline : 20th June 2022

***

## Local Application Setup 
---
### Step 1 : Go to 'Drive C' and then there will be a XAMPP folder, open it.
### Step 2 : After opening the XAMPP folder, there will be a folder name 'htdocs', this is where the files and folders are added that is to be accessed through XAMPP localhost.
### Step 3 : Create a folder for example : webtech , then create a php file name index.php. The web server will open the file named index if full url is not given as it sees index named file as the main file.
### Step 4 : Then after creating files and folders, open browser and type the url localhost/foldername/filename , for example : localhost/webtech/index.php or we can also do localhost/webtech and the file is accessed. 

---

## Host File Setup
---
### Step 1 : First of all, go to 'Drive C' of your computer, then there will be a folder name 'Windows', open it.
### Step 2 : Then open another folder name 'System32' that will be inside 'Windows' folder.
### Step 3 : After that, open the folder name 'drivers' that will be inside the 'System32' folder.
### Step 4 : Similarly, open the folder name 'etc' that will be inside the 'drivers' folder.
### Step 5 : Then in 'etc' folder, there will be a file name 'host' and open it as run administrator. Incase there is chance of error make a backup file.
### Step 6 : In the file add the line of code such as :
### "127.0.0.1   helloworld.local
###  127.0.0.1   second.local"
### here we are giving the domain name the same IP addresses.
---
## C: -> Windows -> System32 -> drivers -> etc -> host file

---

## Setup Virtual Host
### Step 1 : Go to the place where the XAMPP is install i.e 'Drive C' and then there will a folder name 'XAMPP', open it.
### Step 2 : In 'XAMPP' folder, there will be a folder name 'apache' , open it.
### Step 3 : Then open 'conf' folder that is inside tha 'apache' folder.
### Step 4 : Then there will be folder name 'extra' inside 'conf', open it and you will see various files, the one we are looking for is 'httpd-vhosts.conf' file.
### Step 5 : Open the file and this is where we provide domain url to the local system. For that change the DocumentRoot with root of the file/folder that is being host. This files/folders are loacted inside the 'htdocs' folder of the XAMPP. Similarly, change the ServerName to a desired domain url through which the files are being accessed.
### For Example :

 <VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs\wt-git-practice\Assignment\Assignment7\helloworld"
    ServerName helloworld.local
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs\wt-git-practice\Assignment\Assignment7\second"
    ServerName second.local
</VirtualHost>`

--- 

## C: -> XAMPP -> apache -> conf -> extra -> httpd-vhosts.conf file.
