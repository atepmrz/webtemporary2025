<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="{{ asset('public/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('public/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('public/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('public/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/lib/counterup/counterup.min.js') }}"></script>

{{-- Reactjs --}}
<script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<script type="text/javascript">
    $(window).on("load", function() {
            $("#myModal").modal("show");
        });
</script>
<!-- Matiin Klik Kanan Inspect element -->
<script type="text/javascript">
    document.onmousedown = disableclick;
    status = "Forbidden";

    function disableclick(event) {
        if (event.button == 2) {
            alert(status);
            return false;
        }
    }
</script>
<!-- Matiin page view source F12, Ctrl+Shift+i,Ctrl+Shift+j,Ctrl+U  -->
<script type="text/javascript">
    window.addEventListener("keydown", function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e
                .which == 83 || e.which == 85 || e.which == 86 || e.keyCode == 154)) {
            e.preventDefault()
            alert("Forbidden");
        }
    });
    document.keypress = function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e
                .which == 83 || e.which == 85 || e.which == 86 || e.keyCode == 154)) {}
        alert("Forbidden");
        return false

    }
</script>
<script type="text/javascript">
    document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == 123 || e.keyCode == 18 || e.keyCode == 154) {
            alert("Forbidden");
            return false
        }
    }
</script>

<script type="text/javascript">
    function copyToClipboard() {
        // Create a "hidden" input
        var aux = document.createElement("input");
        // Assign it the value of the specified element
        aux.setAttribute("value",
            "Forbidden");
        // Append it to the body
        document.body.appendChild(aux);
        // Highlight its content
        aux.select();
        // Copy the highlighted text
        document.execCommand("copy");
        // Remove it from the body
        document.body.removeChild(aux);
        alert("Forbidden");
    }

    $(window).keyup(function(e) {
        if (e.keyCode == 44) {
            copyToClipboard();
        }
    });

    // $(window).focus(function() {
    //     $("body").show();
    // }).blur(function() {
    //     $("body").hide();
    // });
</script>

<script type="text/javascript" src="https://pdfanticopy.com/noprint.js"></script>
<script language="javascript">
    var noPrint = true;
    var noCopy = true;
    var noScreenshot = true;
    var autoBlur = true;
</script>