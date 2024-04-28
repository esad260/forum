
# QMUL Student Forum Web Application Setup Guide

Welcome to the QMUL Student Forum Web Application. This README file will go through the steps for the setup of the forum running on your local machine using XAMPP.

## Prerequisites
Before the setup your computer has to have XAMPP installed. If you dont have XAMPP installed on your computer, you can install it from the following link 

 ```
https://www.apachefriends.org/download.html
```

## Installation Steps

### 1. Downloading the Project

UnzipDownload the Zip file named forum from the qmplus submission website. This zip file contains the  If you haven't already, download the zip file containing the QMUL Student Forum project. If you received this file from a repository, ensure you have the complete package.

### 1. Placing the Project in XAMPP

Extract the downloaded zip file. Copy the extracted folder, named `forum`, to the `htdocs` directory in your XAMPP installation folder. This is can found at:

- **Windows**: `C:\xampp\htdocs\`
- **Mac**: `/Applications/XAMPP/htdocs/`
- **Linux**: `/opt/lampp/htdocs/`

### 2. Running XAMPP Services

Open the XAMPP Control Panel and start the following services:

- **Apache**: This service is required to serve the web pages.
- **MySQL**: This service manages the database.

Both has to be running for the FOrum to be able to work, this can be checked in the XAMPP applications control panel and the working services should be highligted in green.


### 3. Accessing the Forum

Open a web browser and navigate to the forum by entering the following URL:

```
http://localhost/forum/
```

This URL directs your browser to the forum's index page hosted locally on your computer.

### 4. Accessing phpMyAdmin

To manage the forum’s database or tables:

```
http://localhost/phpmyadmin/index.php
```
Here you can acces the forums database and table. You can create tables or modify existing tables. 

## Usage

After setting up, in the phpMyAdmin you have to insert data to the categories table in order to create topics. After inserting data all the funcionalities should work of the QMUL Student Forum, from posting and replying to topics to managing user profiles.


