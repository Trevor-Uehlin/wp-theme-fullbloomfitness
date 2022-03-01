

document.addEventListener("DOMContentLoaded", function(e) {

    console.log("HELLO FROM FBF.JS");


    var siteTitle = document.getElementsByClassName("wp-block-site-title");
    console.log(siteTitle);
    console.log(siteTitle.length);

    for(var i = 0; i < siteTitle.length; i++){

        var a = siteTitle[i].firstChild;
        console.log(a)
        a.classList.add("no-text-decoration");

    }
});