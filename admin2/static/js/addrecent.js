function submitdetails(){

    document.getElementById("loadingIndicator").style.display = "block";

    let f = new FormData();

    var Name = document.getElementById("Name").value;
    var Type = document.getElementById("Type").value;
    var Link = document.getElementById("Link").value;

    var image = document.getElementById("profile-image").files[0];

    f.append("Name",Name);
    f.append("Type",Type);
    f.append("Link",Link);

    f.append("image",image);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            document.getElementById("loadingIndicator").style.display = "none";
            console.log(r.responseText);
            var responseWithoutSpaces = r.responseText.trim();
            if(responseWithoutSpaces === 'Record inserted successfully'){
                window.location.href = 'recentwork.php';
            }
        } 
    }
    r.open("POST", "./php/add/recentwork.php", true);
    r.send(f);

}



function editing(){

    document.getElementById("loadingIndicator").style.display = "block";
    let f = new FormData();

    var Name = document.getElementById("Name").value;
    var Type = document.getElementById("Type").value;
    var Link = document.getElementById("Link").value;

    var id = document.getElementById("id").value;
    var currentImg = document.getElementById("currentImg").value;

    var image = document.getElementById("profile-image").files[0];

    f.append("Name",Name);
    f.append("Type",Type);
    f.append("Link",Link);
    f.append("image",image);

    f.append("id",id);
    f.append("currentImg",currentImg);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            document.getElementById("loadingIndicator").style.display = "none";
            console.log(r.responseText);
             console.log(r.responseText);
            var responseWithoutSpaces = r.responseText.trim();
            if(responseWithoutSpaces === 'Successful'){
                window.location.href = 'recentwork.php';
            }
        } 
    }

    r.open("POST", "./php/edit/recentwork.php", true);
    r.send(f);

}
