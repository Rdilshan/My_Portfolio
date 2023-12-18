document.onreadystatechange = function () {
    if (document.readyState === "complete") {
      // Page has finished loading, hide the preloader
      var preloader = document.getElementById("preloader");
      preloader.style.display = "none";
    }
  };
  