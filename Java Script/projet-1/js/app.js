var btn = document.getElementById('submitBtn');
btn.onclick = function(){
    var message = document.getElementById('message').value;
    var output = document.getElementById('output');
    output.innerHTML = message;
}