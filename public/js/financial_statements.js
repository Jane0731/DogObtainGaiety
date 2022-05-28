$(document).ready(function (){
    var Today=new Date();
    let month = parseInt(document.getElementById("month").innerHTML)
    let year = parseInt(document.getElementById("year").innerHTML)
    if(month==(Today.getMonth()+1) && year==(Today.getFullYear()))
        var next = document.getElementById('next');
        next.style.display = 'none';
})