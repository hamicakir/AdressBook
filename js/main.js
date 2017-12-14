
var searchArea = document.getElementById("search");

function openSearch() {
    searchArea.style.visibility = "visible";
}
function closeSearch() {
    searchArea.style.visibility = "hidden";
}
var newContact =document.getElementById("new-contact");
function CreateElements() {

    var adder = document.getElementById("contact");
    var divCol4 = document.createElement("div");
    divCol4.className = "col-md-4";
    var divAdder = document.createElement("div");
    divAdder.className = "adder";
    var adderForm = document.createElement("form");
    adderForm.method = "post";
    adderForm.setAttribute("enctype" , "multipart/data");
    adderForm.action = "../controller/FormSaveController.php";
    var fileLabel = document.createElement("label");
    fileLabel.className = "label-file";
    fileLabel.htmlFor = "person_file";
    var fileLabeli = document.createElement("i");
    fileLabeli.className = "ion ion-camera";
    var formInputFile = document.createElement("INPUT");
    formInputFile.setAttribute("id","person_file");
    formInputFile.setAttribute("type","file");
    formInputFile.setAttribute("name","person_file");
    formInputFile.setAttribute("accept" , "image/png,image/jpeg,image/jpg");
    var formInputText = document.createElement("input");
    formInputText.type = "text";
    formInputText.name = "person_name";
    formInputText.placeholder = "Name Surname";
    var formInputEmail = document.createElement("input");
    formInputEmail.type = "email";
    formInputEmail.name = "person_email";
    formInputEmail.placeholder = "E-mail";
    var formInputPhone = document.createElement("input");
    formInputPhone.type = "tel";
    formInputPhone.name = "person_phone";
    formInputPhone.placeholder = "Phone";

    var textArea = document.createElement("textarea");
    textArea.rows = 10;
    textArea.placeholder = "Adress";
    textArea.name= "person_adress";
    var formInputSubmit = document.createElement("input");
    formInputSubmit.type = "submit";
    formInputSubmit.value = "Kaydet";
    formInputSubmit.name = "formSave";

    adder.parentNode.insertBefore(divCol4,adder);
    divCol4.appendChild(divAdder);
    divAdder.appendChild(adderForm);
    adderForm.appendChild(fileLabel);
    fileLabel.appendChild(fileLabeli);
    fileLabel.parentNode.insertBefore(formInputFile,fileLabel.nextSibling);
    formInputFile.parentNode.insertBefore(formInputText,formInputFile.nextSibling);
    formInputText.parentNode.insertBefore(formInputPhone, formInputText.nextSibling);
    formInputPhone.parentNode.insertBefore(formInputEmail,formInputPhone.nextSibling);
    formInputEmail.parentNode.insertBefore(textArea,formInputEmail.nextSibling);
    textArea.parentNode.insertBefore(formInputSubmit,textArea.nextSibling);
    adder.className = "col-md-4";
}
window.addEventListener("load",function (ev) {
    newContact.addEventListener("click",function () {
        CreateElements();
    });
});
function alertDelete() {
    swal({
        title: 'Error!',
        text: 'Do you want to continue',
        type: 'error',
        confirmButtonText: 'Cool'
    });
}





