window.onload = getcategory();

function getcategory () {
    document.getElementById("cl").innerHTML = 'Choose category';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(xmlhttp);
            document.getElementById("categorydropitem").innerHTML = xmlhttp.response;
            // cleanTheatername();
            // cleanSession();
            // cleanSeats();
        }
    };
    xmlhttp.open("GET", "../category_drop.php", true);
    xmlhttp.send();
}

function getsubcategory(cid, val) {
    // alert(val);
    document.getElementById("cl").innerHTML = val;
    document.getElementById("categoryid").value = cid;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(xmlhttp);
            document.getElementById("subcategorydropitem").innerHTML = xmlhttp.response;
            
        }
    };
    xmlhttp.open("GET", "../subcategory_drop.php?cid="+cid, true);
    xmlhttp.send();
}

function subcategory (scid, val) {
    document.getElementById("scl").innerHTML = val;
    document.getElementById("subcategoryid").value = scid;
}