<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link href="<?php echo e(asset('css/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>

 
<div class="row">
<h1> Revision Sheet</h1>

Release No.	Date	Revision Description
Rev. 0	16/08/2017	User Manual
		
		
		
 
USER'S MANUAL

TABLE OF CONTENTS

Page #

A.	GENERAL INFORMATION	A-1
1.1	System Overview	A-1
1.2	Project References	A-2
1.3	Authorized Use Permission	A-2
1.4	Points of Contact	A-2
1.4.1	Information	A-2
1.5	Organization of the Manual	A-2
1.6	Acronyms and Abbreviations	A-3
B.	SYSTEM SUMMARY	B-1
2.1	System Configuration	B-1
2.2	Data Flows	B-1
2.3	User Access Levels	B-1
C.	GETTING STARTED	C-1
3.1	Logging On	C-1
3.2	System Menu	C-1
3.2.x	[System Function Name]	C-1
3.3	Changing User ID and Password	C-1
3.4	Exit System	C-1
D.	USING the SYSTEM (ONline)	D-1
4.0	Role Management	D-1
4.0.1	Add Role	D-1
4.0.2	Edit Role	D-1
4.0.3	Search Role	D-1
4.0.4	Delete Role	D-1
5.0	User Management	D-1
5.0.1	Add User	D-1
5.0.2	Assign Role to User	D-1
5.0.3	Delete User	D-1
5.0.4	Search User	D-1
6.0	Document Management	D-1



6.0.1	Add CV	D-1
6.0.2	Edit CV	D-1
6.0.3	Delete CV	D-1
6.0.4	Upload CV From CSV	D-1
6.0.5	Document Custom Search	D-1
6.0.6	Accessing CV	D-1

 A.	Appendix	D-1
B.	Appendix	D-2


 





















0.0.1	GENERAL INFORMATION

 
A.	GENERAL INFORMATION

1.1	System Overview

A CV Database Management System for Rhizome consulting: 

•	A web application system for CV management with mobile compatibility 
•	Upload CVs’ to Google Drive
•	Application name or title: R-24 
•	System category:
	Major application:  performs clearly defined functions for a Database Management System 
•	Operational status:
	Testing Stage
 
1.2	Project References

References that were used in preparation of this document in order of importance to the end user.

1.3	Authorized Use Permission

Rhizome provides you with access to a variety of resources on this app including documentation and other product information (collectively the “Documentation”), software, excluding developer tools and sample code (collectively “Software”). The Documentation, (including any updates, enhancements, new features, and/or the addition of any new app properties to the application), are subject to the following Terms of Use ("TOU"), unless we have provided those items to you under more specific terms, in which case, those more specific terms will apply to the relevant item.
1.4	Points of Contact

1.4.1	Information

The points of organizational contact (POCs) that may be needed by the document user for informational and troubleshooting purposes are currently not available.
1.5	Organization of the Manual

User Manual v0.01.
1.6	Acronyms and Abbreviations

Provide a list of the acronyms and abbreviations used in this document and the meaning of each.


App:	 Application
L:	Laravel
 





















2.0	SYSTEM SUMMARY

 
B.	SYSTEM SUMMARY
2.1	System Configuration

Laravel 5.4 is a php framework, for building enterprise application.
•	PHP >= 5.6.4
•	OpenSSL PHP Extension
•	PDO PHP Extension
•	Mbstring PHP Extension
•	Tokenizer PHP Extension
•	XML PHP Extension

2.2	Data Flows

Users input text by using an on-screen virtual keyboard, for Mobile and a physical keyboard on a system which has a dedicated key for inserting emoticons. Spell checking and word prediction are supported, (for mobile) and users may change a word after it has been typed by tapping the word; similar words that may have been the word the user was trying to type will then be suggested as alternatives.

2.3	User Access Levels

The Primary user (admin) or general-user; when authorized may be able to add and modify data and information.


 





















3.0	GETTING STARTED

 
C.	GETTING STARTED
3.1	Logging On

A user ID (email address) and password is required to log onto web interface.
3.2	System Menu
User management > Add user>Edit User>Delete User
Role management Add user>Edit User>Delete User
Document management Add CV>Edit CV>Customer Search
 
3.3	Changing Password

Sign in to the Web Interface. 
Click on your name at the top right corner of the home page, you will see a dropdown menu. 
Click on My Profile. 
In the new window, click Change Password Tab.
Enter your current password and your new password and then your repeat password. 
3.4	Exit System

Click on your name, at the top right corner of the home page, you will see a dropdown menu. 
Click on Logout. 
.

 





















4.0	USING THE SYSTEM (ONLINE)

 
D.	USING THE SYSTEM (ONLINE)

4.0	Role Management
4.0.1 Add Role

•	Sign in to the Web Interface. 
•	Click on Role Management at the top left corner of the home page. 
•	Click on View Roles. 
•	In the new window, click [Create Role] 
•	Fill in the text fields, click the desired permission
•	Click the [Create Roles] Button

4.0.2 Edit Role

•	Click on Role Management at the top left corner of the home page. 
•	Click on View Roles. 
•	In the new window, see table> click on action to edit a record 
•	Fill in the text fields, click the desired
•	Click the [Edit Roles] Button

4.0.3 Search Role

•	Enter name or Display name or Description in the search input provide
•	To see a specific search

4.0.4 Delete Role

•	Click on Role Management at the top left corner of the home page. 
•	Click on View Roles. 
•	In the new window, see table> click on action
•	Click on delete


 

5.0	User Management
5.0.1 Add User
•	Sign in to the Web Interface. 
•	Click on User Management at the left side menu of the home page. 
•	Click on User. 
•	In the new window, click [Create User] to create user
•	In the new window, fill in the form 
•	Click the [Register] Button

5.0.2 Assign Role to User
•	Sign in to the Web Interface. 
•	Click on User Management at the left side menu of the home page. 
•	Click on User. 
•	In the new window, see table> click on Assign
•	In the new popup window, select one role or multiple role to assign to the user 
•	Click the [Save Changes] Button

5.0.3 Delete User
•	Sign in to the Web Interface. 
•	Click on User Management at the left side menu of the home page. 
•	Click on User. 
•	In the new window, see table> click on Delete

5.0.4 Search User
•	Click on User Management at the left side menu of the home page. 
•	Click on User. 
•	In the new window, see table > search by username in the input field






 
6.0	Document Management
6.0.1 Add CV

•	Sign in to the Web Interface. 
•	Click on Document Management at the left side menu of the home page. 
•	Click on Candidates Records. 
•	In the new window, see a list of CV’s > click on [Add CV] button
•	In the new window, enter all fields
•	Click the [Add Candidates] Button

6.0.2  Edit CV

•	Sign in to the Web Interface. 
•	Click on Document Management at the left side menu of the home page. 
•	Click on Candidates Records. 
•	In the new window, see a list of CV’s > click on [Edit CV] button
•	In the new window, enter all fields
•	Click the [Edit Candidate] Button

6.0.3  CV Table filter 

•	Sign in to the Web Interface. 
•	Click on Document Management at the left side menu of the home page. 
•	Click on Candidates Records. 
•	In the new window, see a search input field on top of the table
•	Enter any of the column data to search 

6.0.4  Upload CV from CSV(comma delimited)

•	Sign in to the Web Interface. 
•	Click on Document Management at the left side menu of the home page. 
•	Click on Upload CV From CSV menu
•	In the new window, click choose File to select the desired .csv file for upload
•	Click Upload

6.0.5 Document Custom Search

•	Sign in to the Web Interface. 
•	Click on Document Management at the left side menu of the home page. 
•	Click on Document Search menu
•	In the new window, select Filter by city [to search by city] or select Filter by Profession to do same
 

6.0.6 Accessing CV

•	Sign in to the Web Interface. 
•	Click on Document Management at the left side menu of the home page. 
•	In the new window, see a list of CVs’ > click on [CV] under file to download CV


















 
 
























10.0	APPENDIX

 
A.	APPENDIX


Menu Flow:






 
B.	APPENDIX


Screen Shots:

 
Home Page


 
Login Page

 
				
 Dashboard


 		

 

 
Create Roles


 
Edit Roles 


 
User Management



 
Register User:

Screen Shots:



 
Assign Role to Users


 

Document Management







 
Backup CV



</div> 






        

</body>
</html>