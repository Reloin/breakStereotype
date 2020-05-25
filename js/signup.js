//check username length
var simPwd = ["passsword", "123456","654321"];
function checkUidLen(){
    const name = document.getElementById("uid");
    var notice = document.getElementById("uid-notice");
    if(name.value.length < 4){
        notice.innerText = "Username too short";
        notice.style.color = "red";

    }
    else{
        notice.innerText = "Perfect";
        notice.style.color = "green";
    }
}

function checkPwdLen(){
    const name = document.getElementById("pwd");
    var notice = document.getElementById("pwd-check");
    console.log(simPwd.includes(pwd.value));
    if(name.value.length < 6){
        notice.innerText = "Password too short";
        notice.style.color = "red";
    }
    else if(simPwd.includes(pwd.value)){
        notice.innerText = "Password too simple";
        notice.style.color = "red";
    }
    else{
        notice.innerText = "";
    }
}

//function checking if passwords are same
function verPwd(){
    const pwd = document.getElementById("pwd");
    const rePwd = document.getElementById("re-pwd");
    var notice = document.getElementById("pwd-check");
    if(pwd.value == rePwd.value){
        notice.innerText = "Good to go";
        notice.style.color = "green";
    }
    else if(simPwd.includes(pwd.value)){
        notice.innerText = "Password too simple";
        notice.style.color = "red";
    }
    else if(pwd.value.length < 6){
        notice.innerText = "Password too short";
        notice.style.color = "red";
    }
    else{
        notice.innerText = "Your passwords are different";
        notice.style.color = "red";
    }
    
}