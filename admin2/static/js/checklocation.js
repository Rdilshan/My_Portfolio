var fullURL = window.location.href;
var parts = fullURL.split("/");
var lastPart = parts[parts.length - 1];
console.log(lastPart);

var sidebarItems = document.querySelectorAll(".sidebar-item");


sidebarItems.forEach(function(item, index) {

    if (item.classList.contains("active")) {
        item.classList.remove("active");
    }

    // console.log("Sidebar Item " + (index + 1) + ": " + item.innerText);
    if(lastPart == "index.php"){
        if (item.innerText == "Dashboard") {
            item.classList.add("active");
        }
    }

    if(lastPart == "mydetails.php"){
        if (item.innerText == "My Details") {
            item.classList.add("active");
        }
    }

    if(lastPart == "skills.php"){
        if (item.innerText == "My Skills") {
            item.classList.add("active");
        }
    }

    if(lastPart == "education.php"){
        if (item.innerText == "Education") {
            item.classList.add("active");
        }
    }

    if(lastPart == "workexperience.php"){
        if (item.innerText == "Work Experoence") {
            item.classList.add("active");
        }
    }

    if(lastPart == "blog.php"){
        if (item.innerText == "Blog") {
            item.classList.add("active");
        }
    }

    if(lastPart == "countshow.php"){
        if (item.innerText == "Count Showing") {
            item.classList.add("active");
        }
    }

    if(lastPart == "recentwork.php"){
        if (item.innerText == "Recent Work") {
            item.classList.add("active");
        }
    }

    if(lastPart == "cando.php"){
        if (item.innerText == "What can do") {
            item.classList.add("active");
        }
    }

    if(lastPart == "myexpertise.php"){
        if (item.innerText == "My Expertise") {
            item.classList.add("active");
        }
    }

    if(lastPart == "mymsg.php"){
        if (item.innerText == "Message") {
            item.classList.add("active");
        }
    }
});