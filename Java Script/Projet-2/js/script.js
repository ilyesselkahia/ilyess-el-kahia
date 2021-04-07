var color = ['#E74C3C','#7D6608','#900C3F','#10701B', '#000000', '#3351FF', '#FBFF33', '#FF33F9', '#33FF4B']
var i = 0;
document.querySelector("button").addEventListener("click",
    function(){
    i = i < color.length ? ++i : 0;
document.querySelector("body").style.background = color[i]

})
