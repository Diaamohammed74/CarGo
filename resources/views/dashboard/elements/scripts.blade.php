{{-- <script>
$(document).ready(function () {
    $(".sweet-error-cancel").click(function () {
        event.preventDefault();
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes !'
            }).then((result) => {
                if (result.value) {
                    window.location.href = $(this).attr('href');
                }
            })
    });
    $(".sweet-warning-cancel").click(function () {
        event.preventDefault();
        Swal.fire({
                title: 'Are you sure?',
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes !'
            }).then((result) => {
                if (result.value) {
                    window.location.href = $(this).attr('href');
                }
            })
    });
    $(function () {
        $('.iconpicker').iconpicker({
            hideOnSelect: true,
            showFooter: true,
        });
        $(".iconpicker-popover").css("color", "black");
    });
});
</script> --}}


<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

<!-- SweetAlert JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(formId, confirmationMessage) {
        Swal.fire({
            title: 'Are you sure?',
            text: confirmationMessage,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form if the user confirms
                document.getElementById(formId).submit();
            }
        });
    }
</script>
<script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
