<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
import Swal from 'sweetalert2'

        // CommonJS
        const Swal = require('sweetalert2')

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })

        Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
        })