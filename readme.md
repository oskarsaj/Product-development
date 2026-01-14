Product development Website Usage



The website functions in 3 different parts: The "Ask" page, the Google form and Google sheet, and the "Answers" page.



#### ASK page



This is the main page the students will be interacting with, it is found under "index.html" in the repository, 

this is the only page that needs to be publicly hosted, the website itself is nothing more than a visual overlay 

of the google form that sends info to the google sheet. (more in the instructions).



#### Google form and Sheet



The google form simply is used for creating the question/ questions that need to be added to the "ask" page. The 

google sheet is connected to the google form and lists all the questions, it then runs a custom script to: 

1\. Filter for profanity.

2\. Look for duplicate questions.

3\. Send the filtered answers to the "Answer" page. 



#### Answer page

this page should not be published and is only used to receive the filtered questions, it gets automatically refreshes

every 5 seconds adding the new filtered questions.

#### 



#### Instructions 



###### For the html.



1. Copy the repository files.
2. Host the index.html page
3. Make sure that "ask.css" and "overlay.png" are in the same folder as "index.html"
4. Keep "answere.html" somewhere visible as it is only accessible via the file. Don't host that one.



###### For the Google Form and sheet.



1. Copy the files to a new drive.
2. Start by ensuring the form still works (test by sending a question on the hosted site and await a response on answere.html)

3\. You can also make your own new google form in which case: 

&nbsp;    3.1 Start by creating a short or long question form (the current website only supports one question but you can edit this to accommodate longer forms) make sure it is public.

&nbsp;    3.2 Click on the top right share icon and copy the link somewhere where the text can be edited. 



&nbsp;        It should look something like this: (https://docs.google.com/forms/d/e/1FAIpQLSe3SF82IB19rz\_cvibTteK7K\_LY3zakP0ZXkyIVArKeP-COVQ/***viewform***?usp=header)

&nbsp;    3.3 Replace the viewform (in bold in the above example) with "formResponse" 



&nbsp;        It should look something like: (https://docs.google.com/forms/d/e/1FAIpQLSe3SF82IB19rz\_cvibTteK7K\_LY3zakP0ZXkyIVArKeP-COVQ/**formResponse**?usp=header)

&nbsp;    3.4 Go into the "index.html" file and around line 27 (the code says: <form action = Link>) and paste the new link there. 

&nbsp;    3.5 Next go back to google forms, and click on the preview (eye icon), then right click -> inspect (or press F12) and search for something similar to name="entry.1019289855"

&nbsp;        (this number is unique to every question and is required in our html) 

&nbsp;    3.6 Copy this to "index.html" and paste it in the line right under <form action>, it says <textarea name = id, placeholder...>

4\. You can now go to the Google sheet and connect it, to do this you go back to the google form and click on the responses tab, on the top right you should see the option to create a 

google sheet, doing this will automatically create a linked list. 

5\. On the top right of the purple sheets box you should see the little + this lets you add columns, in total we need 5: from left to right the names are 

&nbsp;    5.1 Timestamp

&nbsp;    5.2 Ask a Question

&nbsp;    5.3 Cleaned

&nbsp;    5.4 Normalized 

&nbsp;    5.5 Status 

&nbsp; Make sure you have the columns set up exactly like that otherwise it wont work.

6\. Now go to Extensions and App scripts. 

7\. Copy the code from the current Responsesheet sheet (copy Code.gs) to the already existing (Code.gs) in your new form.

8\. Click on the + above Code.gs (new sheets) and add a new script (not html) name it "AI Assist" and then paste the current (AI assist) code.

&nbsp;    !!!!DISCLAIMER!!!! There is currently an API key to my Gemini repository in the first line of that script as we have not implemented any functionality for it, its and artifact 

&nbsp;    but in case it is removed and the code stops working just plug your own API into it and replace mine.

9\. DO not forget to CTRL + S both scripts to save them

10\. Now you can go to the left of the scripts you should see a ta with a couple options, click on triggers (the one that looks like an alarm) and in the bottom left of the page click + Add Trigger

11 Make sure it looks like this 

&nbsp;    11.1 Choose which function to run: DoGet

&nbsp;    11.2 Choose which deployment should run: Head

&nbsp;    11.3 Select event source: Spreadsheet

&nbsp;    11.4 Select event type: On Form Submit

12\. Save the trigger

13\. In the top Right you will see a Deploy Option click it and press New Deployment then click the gear icon and make sure its set to "Web App" and the who has access to "Anyone"

14\. You will be presented with two Links copy the bottom one (URL) it looks like this 



&nbsp;    https://script.googleusercontent.com/macros/echo?user\_content\_key=AehSKLjX0pU5bPXqLqOiSKXI62UbJkpeiq9sp3GNjScRToOMuH-LIaCrGRwVH2U4V6Y9    \_K3ro5AKpth3IA\_\_zW6L2HlXGSxkhwANeFHvqB\_oNYKFf03wG6B\_BVE7H7Zz5o9B21Us6zLxAUQQIKCuS9hI883FuWg3Tg1xkYWfc367Rx9BXb8vHGnqtdSXhgCW4hVFrpmHtyppe\_ayDmAdqJmeY0akkGUAI1qi0RjSLdRLo7dQdgAf8lCvIh-\_urgy6WKE1oOGBnyVB0fGdiE2kDnjzau6N7dJeQ\&lib=MEoM80OVxdQK9\_w7Dy0wPIhf0Jd7JqW4A

15\. Paste this into the const webApp part of the answer sheet (around line 65 the first <script> line) 

&nbsp;    !!!!IMPORTANT!!!! The Link for the deploy changes on every Deploy, so if you redeploy make sure to copy the new link and paste it.

16\. Everything should now be properly set up, enjoy. 





&nbsp;    

&nbsp;        

