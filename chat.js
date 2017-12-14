function ajax(){
    var req = XMLHttpRequest();
    
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = requ.responseText;
        }
    }
    
    req.open('GET','chat.php',true);
    req.send();
}