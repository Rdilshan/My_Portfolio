function submitdetails(){
    document.getElementById("loadingIndicator").style.display = "block";
    let f = new FormData();

    var Name = document.getElementById("Name").value;
    var Country = document.getElementById("Country").value;
    var Role = document.getElementById("Role").value;
    var aboutme = document.getElementById("aboutme").value;
    var descskill = document.getElementById("descskill").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var telephone = document.getElementById("telephone").value;
    var profileimage = document.getElementById("profile-image").files[0];

    var background1image = document.getElementById("background1-image").files[0];
    var background2image = document.getElementById("background2-image").files[0];
    var pdfUpload = document.getElementById("pdfUpload").files[0];


    f.append("Name",Name);
    f.append("Country",Country);
    f.append("Role",Role);
    f.append("aboutme",aboutme);
    f.append("descskill",descskill);
    f.append("email",email);
    f.append("address",address);
    f.append("telephone",telephone);
    f.append("profileimage",profileimage);
    f.append("background1image",background1image);
    f.append("background2image",background2image);
    f.append("pdfUpload",pdfUpload);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            document.getElementById("loadingIndicator").style.display = "none";
            if (r.status === 200) {
                console.log(r.responseText);
                if(r.responseText == 'Record updated successfully'){
                    location.reload();
                }
            } else {
                console.log("error");
            }
        } 
    }

    r.open("POST", "./php/submitdetails.php", true);
    r.send(f);

}