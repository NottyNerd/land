/**
 * Created by NottyNerd on 30/08/2017.
 */

var userName ="beloved";
var password ="pass";

function checkLogin()
{

    var userNameA = document.getElementById('username').value;
    var passwordA = document.getElementById('password').value;
    console.log(userNameA +"###"+passwordA);
    if(userName===userNameA && passwordA===password)
    {
        open("http://34.207.118.121/home.html");
    }
    else
    {
        alert("Please Check Your username or password");
    }


}