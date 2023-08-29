<?php
include("header.php");

?>
    <div class="content">
        <div class="w-400 p-5 shadow rounded">

            <div class="d-flex
                                justify-content-center
                                align-items-center
                                flex-column">

                <h1 class="text-center">
                    Upload a Book
                </h1>

            </div>
            <div class="text-center">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="card-body p-4">
                                        <h3>Information of Book</h3>
                                        <hr class="mt-0 mb-4">
                                        <div class="text-center">
                                            <h5>Book Name</h5>
                                            <div class="input">
                                                <input type="text" value="C in Depth">
                                            </div>
                                            <br>
                                            <h5>Author Name</h5>
                                            <div class="input">
                                                <input type="text" value="Deepali Srivaastava">
                                            </div>
                                            <br>
                                            <h5>Subject Name</h5>
                                            <div class="input">
                                                <input type="text" value="C language">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <embed
                                        src="../image/book.png" id="PDFfile"
                                        type="application/pdf" frameBorder="0" scrolling="auto" height="650px"
                                        width="100%"></embed>
                                        <input type="file" id="upload" onchange="showPDF();" style="display: none;" accept="application/pdf" />

                                </div>
                                <button class="btn btn-primary"
                                    style="width: 80%; margin: auto; margin-top: 10px;" onclick="clickout()">Upload a book</button>
                            </div>
                            <div class="text-center" style="padding: 10px">
                                <button class="btn btn-success">Upload Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
</body>

</html>

<script type="text/javascript">
    var upload = false;
    function clickout() {
        var temp = document.getElementById("upload");
        temp.click();
        upload = true;
    }

    function showPDF() {
        var temp = document.getElementById("upload");
        temp.click();
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("upload").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("PDFfile").src = oFREvent.target.result;
            newImage = oFREvent.target.result;
        };
    };

</script>