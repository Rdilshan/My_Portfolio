function submitdetails(){

    document.getElementById("loadingIndicator").style.display = "block";
    let f = new FormData();

    var title = document.getElementById("title").value;
    var htmlContent = quill.root.innerHTML;
    var image = document.getElementById("profile-image").files[0];

    f.append("title",title);
    f.append("htmlContent",htmlContent);
    f.append("image",image);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            document.getElementById("loadingIndicator").style.display = "none";
            console.log(r.responseText);
            if(r.responseText == 'Record inserted successfully'){
                window.location.href = 'blog.php';
            }
        } 
    }

    r.open("POST", "./php/add/blog.php", true);
    r.send(f);

}

function editing(){

    document.getElementById("loadingIndicator").style.display = "block";
    let f = new FormData();

    var title = document.getElementById("title").value;
    var id = document.getElementById("id").value;
    var currentImg = document.getElementById("currentImg").value;

    var htmlContent = quill.root.innerHTML;
    var image = document.getElementById("profile-image").files[0];

    f.append("title",title);
    f.append("htmlContent",htmlContent);
    f.append("image",image);
    f.append("id",id);
    f.append("currentImg",currentImg);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            document.getElementById("loadingIndicator").style.display = "none";
            console.log(r.responseText);
            if(r.responseText == 'Successful'){
                window.location.href = 'blog.php';
            }
        } 
    }

    r.open("POST", "./php/edit/blog.php", true);
    r.send(f);

}