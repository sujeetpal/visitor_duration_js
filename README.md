# visitor_duration_js
Track time spent by a visitor on page without Google Analytics

Here, I am using javascript's onbeforeunload event. The onbeforeunload event occurs when the document is about to be unloaded.

So as soon as the page loads, a start time is stored in a variable and just before unloading, the end time is stored in another variable whose difference is then stored in mysql database using Ajax.

Languages:
PHP
JavaScript

Database Structure:
![image](https://user-images.githubusercontent.com/7383277/149571609-9d91643a-4957-450e-89a6-2b18d8ce72f7.png)
