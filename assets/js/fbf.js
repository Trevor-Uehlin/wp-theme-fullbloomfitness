

console.log("HELLO FROM FBF.JS");


var siteTitle = document.getElementsByClassName("wp-block-site-title");
console.log(siteTitle);

for(var i = 0; i < siteTitle.length; i++){

    var a = siteTitle.firstChild;
    console.log(a)
    a.classList.add("no-text-decoration");

}
