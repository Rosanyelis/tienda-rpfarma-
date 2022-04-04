            if (localStorage.getItem("success") == 1){
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro Eliminado Exitosamente!',
                    showConfirmButton: false,
                    timer: 2500
                });
                localStorage.removeItem("success");
            }

            @if (session('success'))
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2500
            });
            @endif

            @if (session('danger'))
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: '{{ session('danger') }}',
                showConfirmButton: false,
                timer: 2500
            });
            @endif

            @if (session('warning'))
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: '{{ session('warning') }}',
                showConfirmButton: false,
                timer: 2500
            });
            @endif


