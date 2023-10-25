<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../../app/db_connection.php");
$topic_name = "";
$teacher_name = "";
$subject_name = "";
$update = false;
    if(isset($_GET['id'])){
        $update = true;
        $result = mysqli_query($con,"SELECT * FROM notes WHERE notes_id = $_GET[id]");
        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        $row = mysqli_fetch_assoc($result);
        $topic_name = "$row[notes_topic]";
        $teacher_name = "$row[notes_author]";
        $subject_name = "$row[notes_subject]";
        $html_url = '../Notes/'.$row['notes_link'];

        $html_content = file_get_contents($html_url);

        if ($html_content === false) {
            die('Failed to fetch the HTML content.');
        }
        
    }else{
        $topic_name = $_POST['topic_name'];
        $teacher_name = $_POST['teacher_name'];
        $subject = $_POST['subject_name'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rich Text Editor</title>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- It is a Bootstrap CSS Link -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'
          integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh'
          crossorigin='anonymous'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="save">
            <input type="text" id="fileName" value="<?php echo $topic_name; ?>">

            <div> 
                <?php if($update === true){ ?>
                    <button id="updateFile" class="saveFile"><i class="fa fa-save"> Update</i></button>
                <?php }else{ ?>
                    <button id="saveFile" class="saveFile"><i class="fa fa-save"> SAVE</i></button>
                <?php } ?>
            </div>
        </div>
        <div class="options">
            <!-- Text Format -->
            <button id="bold" class="option-button format" data-toggle="tooltip" data-placement="top" title="bold">
                <i class="fa-solid fa-bold"></i>
            </button>
            <button id="italic" class="option-button format" data-toggle="tooltip" data-placement="top" title="italic">
                <i class="fa-solid fa-italic"></i>
            </button>
            <button id="underline" class="option-button format" data-toggle="tooltip" data-placement="top" title="underline">
                <i class="fa-solid fa-underline"></i>
            </button>
            <button id="strikethrough" class="option-button format" data-toggle="tooltip" data-placement="top" title="Strikethrough">
                <i class="fa-solid fa-strikethrough"></i>
            </button>
            <button id="superscript" class="option-button script" data-toggle="tooltip" data-placement="top" title="Superscript">
                <i class="fa-solid fa-superscript"></i>
            </button>
            <button id="subscript" class="option-button script" data-toggle="tooltip" data-placement="top" title="Subscript">
                <i class="fa-solid fa-subscript"></i>
            </button>

            <!-- List -->
            <button id="insertOrderedList" class="option-button" data-toggle="tooltip" data-placement="top" title="Order List">
                <div class="fa-solid fa-list-ol"></div>
            </button>
            <button id="insertUnorderedList" class="option-button" data-toggle="tooltip" data-placement="top" title="Unorder List">
                <i class="fa-solid fa-list"></i>
            </button>

            <!-- Undo/Redo -->
            <button id="undo" class="option-button" data-toggle="tooltip" data-placement="top" title="Undo">
                <i class="fa-solid fa-rotate-left"></i>
            </button>
            <button id="redo" class="option-button" data-toggle="tooltip" data-placement="top" title="Redo">
                <i class="fa-solid fa-rotate-right"></i>
            </button>

            <!-- Link -->
            <button id="createLink" class="adv-option-button" data-toggle="tooltip" data-placement="top" title="AddLink">
                <i class="fa fa-link"></i>
            </button>
            <button id="unlink" class="option-button" data-toggle="tooltip" data-placement="top" title="Remove Link">
                <i class="fa fa-unlink"></i>
            </button>
            <button id="createImage" class="option-button" data-toggle="tooltip" data-placement="top" title="Insert Image">
                <i class="fa fa-image"></i>
            </button>

            <!-- Alignment -->
            <button id="justifyLeft" class="option-button align" data-toggle="tooltip" data-placement="top" title="Alignment left">
                <i class="fa-solid fa-align-left"></i>
            </button>
            <button id="justifyCenter" class="option-button align" data-toggle="tooltip" data-placement="top" title="Alignment Center">
                <i class="fa-solid fa-align-center"></i>
            </button>
            <button id="justifyRight" class="option-button align" data-toggle="tooltip" data-placement="top" title="Alignment Right">
                <i class="fa-solid fa-align-right"></i>
            </button>
            <button id="justifyFull" class="option-button align" data-toggle="tooltip" data-placement="top" title="Justify Content">
                <i class="fa-solid fa-align-justify"></i>
            </button>
            <button id="indent" class="option-button spacing" data-toggle="tooltip" data-placement="top" title="Intend">
                <i class="fa-solid fa-indent"></i>
            </button>
            <button id="outdent" class="option-button spacing" data-toggle="tooltip" data-placement="top" title="Outtend">
                <i class="fa-solid fa-outdent"></i>
            </button>

            <!-- Headings -->
            <select id="formatBlock" class="adv-option-button" data-toggle="tooltip" data-placement="top" title="Heading">
                <option value="H1">H1</option>
                <option value="H2">H2</option>
                <option value="H3">H3</option>
                <option value="H4">H4</option>
                <option value="H5">H5</option>
                <option value="H6">H6</option>
            </select>

            <!-- Font -->
            <select id="fontName" class="adv-option-button" data-toggle="tooltip" data-placement="top" title="Font Name"></select>
            <select id="fontSize" class="adv-option-button" data-toggle="tooltip" data-placement="top" title="Font Size"></select>

            <!-- Color -->
            <div class="input-wrapper" data-toggle="tooltip" data-placement="top" title="text color">
                <input type="color" id="foreColor" class="adv-option-button" />
                <label for="foreColor">Font Color</label>
            </div>
            <div class="input-wrapper" data-toggle="tooltip" data-placement="top" title="background color">
                <input type="color" id="backColor" class="adv-option-button" />
                <label for="backColor">Highlight Color</label>
            </div>
        </div>
        <div id="text-input" contenteditable="true"></div>
    </div>

</body>

</html>


<script>
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
    let updateButton = document.getElementById("updateFile");

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

    <?php if($update === true){ ?>
            updateButton.addEventListener("click", () => {
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
                const topic = document.getElementById('fileName').value
                const teacherName = '<?= $teacher_name?>';
                const subjectName = '<?= $subject_name?>';

                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'save.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert(xhr.responseText); // Show a message indicating success or failure
                        location.replace("../../Panel/notes.php");
                    }
                };
                xhr.send(`content=${encodeURIComponent(contentToSave)}&topicname=${encodeURIComponent(topic)}&fileName=${encodeURIComponent(fileName)}&subject=${encodeURIComponent(subjectName)}&teacherName=${encodeURIComponent(teacherName)}&condition=${encodeURIComponent('update')}&id=${encodeURIComponent('<?= $_GET['id']?>')}`);
            });
        <?php }else { ?>
    saveButton.addEventListener("click", () => {
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
            const topic = document.getElementById('fileName').value
            const teacherName = '<?= $teacher_name?>';
            const subjectName = '<?= $subject_name?>';


        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'save.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert(xhr.responseText); // Show a message indicating success or failure
                location.replace("../../Panel/notes.php");
            }
        };
        xhr.send(`content=${encodeURIComponent(contentToSave)}&topicname=${encodeURIComponent(topic)}&fileName=${encodeURIComponent(fileName)}&subject=${encodeURIComponent(subjectName)}&teacherName=${encodeURIComponent(teacherName)}&condition=${encodeURIComponent('save')}`);
    });
<?php } ?>

    function loadFile() {
        const textInput = document.getElementById('text-input');
        textInput.innerHTML = `<?=$html_content ?>`;
    }

    window.addEventListener('beforeunload', (e) => {
        e.preventDefault();
        e.returnValue = 'Are you sure you want to leave this page? Your data may be lost.';
    });


    window.onload = () => { 
        <?php if($update === true){ ?>
            loadFile();
            console.log('hi');
        <?php } ?>
        initializer();
    }
</script>