
// name = "alamin";
 let name = "alamin";
 //var name = "alamin";
// const name = "alamin";
let student = ['alamin', 12, '3.6'];

//    function sum(){

//    }
//    let f1 = function(){

//    }
//    let f2 = (a,b)=>a+b;

//console.log('test');

//document.write('<h1>JS test</h1>');
function test(){
 document.getElementsByTagName('h1')[0].innerHTML = "another test";
}
// head.innerHTML = "another JS test";

function checkName(){
 let username = document.getElementById('username').value;
 //alert(username);
 document.getElementsByTagName('h1')[0].innerHTML = username;
 document.getElementsByTagName('h1')[0].style.color = 'red';
}


function ajax(){
    let username = document.getElementById('username').value;
    let user = {
                    'username': username, 
                    'password':'1234', 
                    'email':'alamin@aiub.edu'
                };
    let data = JSON.stringify(user);
    //alert(data);
    let xhttp = new XMLHttpRequest();
    //xhttp.open('GET', 'abc.php?username='+username, true);
    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('user='+data);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            let user = JSON.parse(this.responseText);
            document.getElementById('head1').innerHTML = "Test: "+user.password;
        }
    }
}