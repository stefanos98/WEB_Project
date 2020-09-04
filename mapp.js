const RegButton = document.getElementById("back");
RegButton.addEventListener("click",sendProcessreg);

function sendProcessreg(){
    location.href = "http://localhost//WEB//MainUser.html"
}
const GetButton = document.getElementById("get");
GetButton.addEventListener("click",sendProcessget);

const div = document.getElementById("users");
const url ="http://localhost//WEB//Get.php";
obj = { "limit":10 };
dbParam = JSON.stringify(obj);
function sendProcessget(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
    myObj = JSON.parse(this.responseText);
    console.log(myObj);
    var txt ="";
    var txt1 ="";
    for (x in myObj){
      txt += myObj[x].datata1 + "<br>";

  }
  for (x in txt){
    txt1 += txt[x] + "<br>";

}
  document.getElementById("users").innerHTML = txt;
  console.log(txt1)
  }
  
};
xmlhttp.open("POST", url, true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);

    };
