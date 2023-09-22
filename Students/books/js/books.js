
    // Initialize PDF.js
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';

    // Load PDFs and render them on canvases
    const pdfPreviews = document.querySelectorAll('.pdf-preview');
    pdfPreviews.forEach(pdfPreview =>
     {
        const pdfUrl = pdfPreview.getAttribute('data-pdf-url');

        pdfjsLib.getDocument(pdfUrl).promise.then(pdfDocument => {
            pdfDocument.getPage(1).then(page => {
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');

                const viewport = page.getViewport({ scale: 1.0 });
                canvas.width = viewport.width;
                canvas.height = viewport.height;

                pdfPreview.appendChild(canvas);

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport,
                };

                page.render(renderContext).promise.then(() => {
                    // Rendering complete
                });
            });
        });
    });

   
    var navlinks = document.getElementById("navlinks");
    function showmenu() {
        navlinks.style.right = "0";
    }
    function hidemenu() {
        navlinks.style.right = "-200px";
    }


    var loader = document.getElementById("preloader");
    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
