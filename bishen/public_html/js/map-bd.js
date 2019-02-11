function createObject() {
    var request_type;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        request_type = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        request_type = new XMLHttpRequest();
    }
    return request_type;
}
var http = createObject();
var nocache = 0;
function insert() {
    document.getElementById('insert_response').innerHTML = "Подождите пожалуйста немного,загружается информация"
    var site_url= encodeURI(document.getElementById('/').value);
    var site_name = encodeURI(document.getElementById('bishen').value);
    // Set te random number to add to URL request
    nocache = Math.random();
    // Pass the login variables like URL variable
    http.open('get', 'insert.php?site_url='+site_url+'&site_name=' +site_name+'&nocache = '+nocache);
    http.onreadystatechange = insertReply;
    http.send(null);
}
function insertReply() {
    if(http.readyState == 4){
        var response = http.responseText;
// else if login is ok show a message: "Site added+ site URL".
        document.getElementById('insert_response').innerHTML = 'Site added:'+response;
    }
}