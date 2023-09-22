let optionsButtons = document.querySelectorAll(".option-button");
let advancedOptionButton = document.querySelectorAll(".adv-option-button");
let fontName = document.getElementById("fontName");
let fontSizeRef = document.getElementById("fontSize");
let writingArea = document.getElementById("text-input");
let linkButton = document.getElementById("createLink");
let imageButton = document.getElementById("createImage");
let alignButtons = document.querySelectorAll(".align");
let spacingButtons = document.querySelectorAll(".spacing");
let formatButtons = document.querySelectorAll(".format");
let scriptButtons = document.querySelectorAll(".script");
let saveButton = document.getElementById("saveFile");
let openButton = document.getElementById("openFile");

let append = false;

//List of fontlist
let fontList = [
    "Arial",
    "Verdana",
    "Times New Roman",
    "Garamond",
    "Georgia",
    "Courier New",
    "cursive",
];

//Initial Settings
const initializer = () => {
    //function calls for highlighting buttons
    //No highlights for link, unlink,lists, undo,redo since they are one time operations
    highlighter(alignButtons, true);
    highlighter(spacingButtons, true);
    highlighter(formatButtons, false);
    highlighter(scriptButtons, true);

    //create options for font names
    fontList.map((value) => {
        let option = document.createElement("option");
        option.value = value;
        option.innerHTML = value;
        fontName.appendChild(option);
    });

    //fontSize allows only till 7
    for (let i = 1; i <= 7; i++) {
        let option = document.createElement("option");
        option.value = i;
        option.innerHTML = i;
        fontSizeRef.appendChild(option);
    }

    //default size
    fontSizeRef.value = 3;
};

//main logic
const modifyText = (command, defaultUi, value) => {
    //execCommand executes command on selected text
    document.execCommand(command, defaultUi, value);
};

//For basic operations which don't need value parameter
optionsButtons.forEach((button) => {
    button.addEventListener("click", () => {
        modifyText(button.id, false, null);
    });
});

//options that require value parameter (e.g colors, fonts)
advancedOptionButton.forEach((button) => {
    button.addEventListener("change", () => {
        modifyText(button.id, false, button.value);
    });
});

//link
linkButton.addEventListener("click", () => {
    let userLink = prompt("Enter a URL");
    //if link has http then pass directly else add https
    if (/http/i.test(userLink)) {
        modifyText(linkButton.id, false, userLink);
    } else {
        userLink = "http://" + userLink;
        modifyText(linkButton.id, false, userLink);
    }
});

imageButton.addEventListener("click", () => {
    let alt = prompt('Please enter image alt text:');
    if (alt !== null) {
        let url = prompt('Please enter image URL:');
        if (url !== null) {
            let width = prompt('Enter image width:', 'auto');
            if (width !== null) {
                let imgTag = '<img src="' + (url.length > 0 ? url : '') + '"' +
                    (width !== 'auto' ? ' width="' + width + '"' : '') +
                    (alt.length > 0 ? ' alt="' + alt + '"' : '') +
                    '>';
                document.execCommand('insertHTML', false, imgTag);
            }
        }
    }
});

//Highlight clicked button
const highlighter = (className, needsRemoval) => {
    className.forEach((button) => {
        button.addEventListener("click", () => {
            //needsRemoval = true means only one button should be highlight and other would be normal
            if (needsRemoval) {
                let alreadyActive = false;

                //If currently clicked button is already active
                if (button.classList.contains("active")) {
                    alreadyActive = true;
                }

                //Remove highlight from other buttons
                highlighterRemover(className);
                if (!alreadyActive) {
                    //highlight clicked button
                    button.classList.add("active");
                }
            } else {
                //if other buttons can be highlighted
                button.classList.toggle("active");
            }
        });
    });
};

const highlighterRemover = (className) => {
    className.forEach((button) => {
        button.classList.remove("active");
    });
};

console.log(9);
saveButton.addEventListener("click", () => {
    // // Function to save content as HTML
    // const content = writingArea.innerHTML; // Get the content from the editor
    // const htmlContent = `
    //   <!DOCTYPE html>
    //   <html lang="en">
    //   <head>
    //     <meta charset="UTF-8">
    //     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    //     <title>Saved Rich Text</title>
    //   </head>
    //   <body>
    //     ${content}
    //   </body>
    //   </html>
    // `;
  
    // // Create a Blob with the HTML content
    // const blob = new Blob([htmlContent], { type: "text/html" });
  
    // // Create a link to download the Blob as an HTML file
    // const url = URL.createObjectURL(blob);
    // const a = document.createElement("a");
    // a.href = url;
    // a.download = document.getElementById('fileName').value;
    // document.body.appendChild(a);
    // a.click();
    // document.body.removeChild(a);
    // URL.revokeObjectURL(url);
    let contentToSave = "";
    if(append === false){
        contentToSave = `
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>${document.getElementById('fileName').value}</title>
        </head>
        <body>
            ${document.getElementById('text-input').innerHTML}
        </body>
        </html>`;
    }
    else  
        contentToSave = document.getElementById('text-input').innerHTML;
    
    const fileName = document.getElementById('fileName').value + ".html";

    const file = document.getElementById('fileName').value;
    const teacherName = document.getElementById('teacherName').value;
    const subjectName = document.getElementById('subjectName').value;

    console.log(document.getElementById('subjectName').value);
    console.log(4+5);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'save.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
        alert(xhr.responseText); // Show a message indicating success or failure
        location.replace("../../Panel/notes.php");

        }
    };
    xhr.send(`content=${encodeURIComponent(contentToSave)}&fileName=${encodeURIComponent(fileName)}&file=${encodeURIComponent(file)}&subject=${encodeURIComponent(subjectName)}&teacherName=${encodeURIComponent(teacherName)}`);
});
console.log(subjectName);
console.log(teacherName);
// openButton.addEventListener("click", () => {
//     const fileInput = document.getElementById('fileInput');
//     fileInput.click();
    
//     fileInput.addEventListener("change", () => {
//         const file = fileInput.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.onload = function (event) {
//                 const fileContent = event.target.result;
//                 const textInput = document.getElementById('text-input');
//                 textInput.innerHTML += fileContent;
//                 append = true;
//             };
//             reader.readAsText(file);
//     }});
  
// });

window.addEventListener('beforeunload', (e) => {
    e.preventDefault();
    e.returnValue = 'Are you sure you want to leave this page? Your data may be lost.';
});


window.onload = initializer();