var navlinks = document.getElementById("navlinks");
function showmenu() {
    navlinks.style.right = "0";
}
function hidemenu() {
    navlinks.style.right = "-200px";
}
var loader = document.getElementById("preloader");
window.addEventListener("load", function () {
    loader.style.display = "none";
})
const detailsSection = document.getElementById("details-section");
const editSection = document.getElementById("edit-section");
const editButton = document.getElementById("edit-button");
const box = document.getElementById("box1");
const saveButton = document.getElementById("save-button");

const nameSpan = document.getElementById("name");
const emailSpan = document.getElementById("email");
const passwordSpan = document.getElementById("password");
const phoneSpan = document.getElementById("phone");
const aboutSpan = document.getElementById("about");
const companySpan = document.getElementById("company");
const locationSpan = document.getElementById("location");
const descriptionSpan = document.getElementById("description");
const dateSpan = document.getElementById("date");
const jobtitleSpan = document.getElementById("jobtitle");


const editNameInput = document.getElementById("edit-name");
const editEmailInput = document.getElementById("edit-email");
const editPasswordInput = document.getElementById("edit-password");
const editPhoneInput = document.getElementById("edit-phone");
const editAboutInput = document.getElementById("edit-about");
const editCompanyInput = document.getElementById("edit-company");
const editLocationInput = document.getElementById("edit-location");
const editJobDescriptionInput = document.getElementById("edit-job-description");
const editJobtitleInput = document.getElementById("edit-job-title");

editButton.addEventListener("click", function () {
    detailsSection.style.display = "none";
    editSection.style.display = "block";

    // Populate the edit fields with current values
    editNameInput.value = nameSpan.textContent;
    editEmailInput.value = emailSpan.textContent;
    editPasswordInput.value = passwordSpan.textContent;
    editPhoneInput.value = phoneSpan.textContent;
    editAboutInput.value = aboutSpan.textContent;
    editCompanyInput.value = companySpan.textContent;
    editLocationInput.value = locationSpan.textContent;
    editJobDescriptionInput.value = descriptionSpan.textContent;
    editJobtitleInput.value = jobtitleSpan.textContent;

    editButton.style.display = "none";
    box.style.display = "none";
    saveButton.style.display = "inline-block";
});

saveButton.addEventListener("click", function () {
    // Update the displayed information with the edited values
    nameSpan.textContent = editNameInput.value;
    emailSpan.textContent = editEmailInput.value;
    passwordSpan.textContent = editPasswordInput.value;
    phoneSpan.textContent = editPhoneInput.value;
    aboutSpan.textContent = editAboutInput.value;
    companySpan.textContent = editCompanyInput.value;
    jobtitleSpan.textContent = editJobtitleInput.value;
    locationSpan.textContent = editLocationInput.value;
    descriptionSpan.textContent = editJobDescriptionInput.value;
   
   
    saveButton.style.display = "none";
    detailsSection.style.display = "block";
    editSection.style.display = "none";
    editButton.style.display = "inline-block";
    box.style.display = "inline-block";
});


const profileImage = document.getElementById("profile-image");
const profileImageInput = document.getElementById("profile-picture-input");
const changePictureButton = document.getElementById("change-picture-button");

changePictureButton.addEventListener("click", function() {
    profileImageInput.click(); // Trigger click on the hidden file input
});

profileImageInput.addEventListener("change", function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function() {
        profileImage.src = reader.result;
    };
    reader.readAsDataURL(file);
});

