
   function submitForm() {
      // Get the form values
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var subject = document.getElementById("subject").value;
      var message = document.getElementById("message").value;
      
      // Create an AJAX request
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../API/sendmsg.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      
      // Set the data to be sent
      var data = "name=" + encodeURIComponent(name) +
                 "&email=" + encodeURIComponent(email) +
                 "&subject=" + encodeURIComponent(subject) +
                 "&msg=" + encodeURIComponent(message);
      
      // Handle the AJAX response
      xhr.onreadystatechange = function() {
         if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
               // Request successful, do something with the response
            //    console.log(xhr.responseText);
               if(xhr.responseText == 1){
                
                var altermsg = document.querySelector(".suceesfulmsgalte");
                altermsg.style.display = "block";

               }
            } else {
               // Request failed, handle the error
               console.error("Request failed. Status: " + xhr.status);
            }
         }
      };
      
      // Send the AJAX request
      xhr.send(data);
   }

