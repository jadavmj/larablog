
## Introduction

This is a Simple blog system written in Laravel. It provides following functionality.

- An Administrator may view all existing blog posts or see a message that no blogs are
  available. 
- A logged out user should be able to see all Active blog posts available.
  The list of Active blogs should show it’s Title, Excerpt Body, Published Time &
  Author’s Name. 
- Upon clicking the blogs Title, it should present the full blog article
  showing Title, Full Body, Published Time, Author’s Name.
- An Administrator can create a new blog article with fields including Title, Body and Active
  Status. 
- An Administrator can edit an existing blog and be able to update it’s Title, Body
  and Active Status

## Setup

   ### Options 1: Using Homestead

   	### you will need following
 		- Git
 		- Homestead setup to run Laravel
 		- Vagrant
 		- Virtual Box
 
 	### steps

	   - Install latest verisons of Git, Vagrant and Virtual Box
	   - Setup Homestead, follow steps from offical documentation 
	     https://laravel.com/docs/5.4/homestead
	   - Navigate to homestead directory
	     cd ~/Homestead
	   - Clone this repository
	     git clone https://github.com/jadavmj/larablog
	   - Provison Vagrant Box
	     vagrant provision
	   - add host entry to hosts file
         127.0.0.1 homestead.app     
       - browse 'http://homestead.app'

	     
	### Options 2: Using Mamp or Xampp
	   - Install latest version of Mamp
	   - Navigate to htdocs directory
	   - Clone this repository
	     git clone https://github.com/jadavmj/larablog
	   - Navigate to cloned repository
	     cd /path/to/htdocs/larablog
	   - Install dependencies using composer
	     php composer update
	   - Install migrations
	     php aritsan migrate
	   - Seed Database
	     php artisan db:seed
	   - setup apache virtual host 
	    
	    
	    <VirtualHost *:80>
			ServerAdmin webmaster@larablog.com
			DocumentRoot "/path/to/htdocs/larablog/public"
			ServerName homestead.app
		</VirtualHost>
			 
		<Directory "/path/to/htdocs/larablog/public">
			Options Indexes FollowSymLinks
			AllowOverride all
			# onlineoffline tag - don't remove
			Order Deny,Allow
			Deny from all
			Allow from 127.0.0.1
		</Directory>
		
		
       - restart apache via Mamp or Xampp control panel  
       - add host entry to hosts file
         127.0.0.1 homestead.app     
       - browse 'http://homestead.app'

## Test Admin User functionality

	you can login as admin user with following details,

	username: admin
	password: admin123

