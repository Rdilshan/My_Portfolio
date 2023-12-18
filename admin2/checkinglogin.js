function submitForm() {
    var email = document.getElementById("emailInput").value;
    var password = document.getElementById("passwordInput").value;
    var successMsg = document.querySelector(".alert-success");
    var failureMsg = document.querySelector(".alert-danger");

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Specify the PHP file's URL and HTTP method
    xhr.open("POST", "./login.php", true);

    // Set the request header
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Prepare the data to be sent as a URL-encoded string
    var data = "email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password);

    // Define the function to handle the response from the PHP file
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Handle the response from the PHP file
        var response = xhr.responseText;
        if( response == 1){
           failureMsg.style.display = 'none';
            successMsg.style.display = 'block';

            setTimeout(function() {
                window.location.href = './static/index.php';
              }, 2000);

        } else {
            successMsg.style.display = 'none';
            failureMsg.style.display = 'block';
        }
      }
    };

    // Send the request with the data
    xhr.send(data);
  }