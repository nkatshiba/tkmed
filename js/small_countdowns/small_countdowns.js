n =  new Date();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("dagens1").innerHTML = d + "/" + m;
document.getElementById("dagenstop").innerHTML = m + "/" + d;