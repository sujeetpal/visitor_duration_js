# visitor_duration_js
Track time spent by a visitor on page without Google Analytics

Here, I am using javascript's onbeforeunload event. The onbeforeunload event occurs when the document is about to be unloaded.

So as soon as the page loads, a start time is stored in a variable and just before unloading, the end time is stored in another variable whose difference is then stored in mysql database using Ajax.

Output:
The page prints time spent by visitor on every visit.

Languages:
PHP
JavaScript

Database Structure:
![image](https://user-images.githubusercontent.com/7383277/149571609-9d91643a-4957-450e-89a6-2b18d8ce72f7.png)

For full code explaination: https://sujeetpal.in/blog/2022/01/13/track-time-spent-by-user-on-webpage-using-javascript/
