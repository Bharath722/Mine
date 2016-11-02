<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

        <form action="email.php" method="post" id="contactForm" name="contactForm">
          <fieldset>

                  <div>
               <label for="contactName">Name <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
               <label for="contactEmail">Email <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
               <label for="contactSubject">Subject</label>
               <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                  </div>
          </fieldset>
           </form> <!-- Form End -->
                  
               <!-- contact-warning -->
               <div id="message-warning">oops!! something went wrong. Please try again.</div>
               <!-- contact-success -->
           <div id="message-success">
                  <i class="fa fa-check"></i>Thank you for submiting a message. I will get back to you within 24 hours <br>
           </div>




<script src="jquery.js"></script>
   <script>
   $(document).ready(function(){
     $('.submit').click(function(){
     $.post("backend.php", $("#contactForm").serialize(),  function(data) {console.log(data);
    $('#message-success').html(data);
});
return false;
 
});
 
});
   
   
   </script>

</body>
</html>
