
//sign-up//
function frmSignup(e){
e.preventDefault();


let fullname = $("#txtFullname").val();
let contact = $("#txtContact").val();
let email = $("#txtEmail").val();
let section = $("#cmdSection").val();
let year = $("#cmdYear").val();
let password = $("#txtPassword").val();

$.post("../../action/add.php",  {
    fll_name : fullname,
    contact: contact,
    email:email,
    section:section,
    year:year,
    password:password

}, function (data){
//  alert(data);
console.log(data);
 if(data == "success"){
     alert ("save");
    window.location.href = "../../index.html";
 }
}
)



}