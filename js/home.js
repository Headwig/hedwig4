function post(s) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var returnd = xmlhttp.responseText;
            document.getElementById("status").innerHTML=returnd;
        }
    }
    xmlhttp.open("POST", "ajaxtest.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var p="rec=" + s;
    xmlhttp.send(p);
            
}
                 
function sub() {
    var myText = document.getElementById("msg");
    var s = myText.value;
    var x = new XMLHttpRequest();
    x.onreadystatechange = function() {
        if (x.readyState == 4 && x.status == 200) {
           var returnd1 = x.responseText;
            document.getElementById("status1").innerHTML=returnd1;
        }
    }
    x.open("POST", "chatdata.php", true);
    x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var p="msg=" + s;
    x.send(p);
    document.getElementById("msg").value="";            
}

function ajax(){
     notifcheck();
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = req.responseText;
        }
    }
    req.open('GET', 'chat.php', true);
    req.send();
}

function notifcheck(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('notification').innerHTML = req.responseText;
        }
    }
    req.open('GET', 'notif.php', true);
    req.send();
}