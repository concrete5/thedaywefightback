The Day We Fight Back is a global day of protest against internet surveillance 
by putting a banner on websites that link to either email or call people in power

https://thedaywefightback.org/

This package will load that code into your footer automatically all day on
Tuesday, February 11th, 2014. After that it will do nothing, but you will want 
to uninstall it so that it doesn't run before each page load.

You can configure it's operation a bit by editing 

{site root}/packages/thedaywefightback/controller.php

On lines 30-32, you can choose the following options:

greeting: 'Dear Internet' 
	Sets the salutation at the top left, will be followed by a comma
	You cannot use any single or double quotes here

disableDate: false 
	If true, the banner shows even if the date is not yet 02/11/2014

callOnly: false 
	If true, the banner only displays a form for calling congress

Thank you for helping stand up against the NSA!