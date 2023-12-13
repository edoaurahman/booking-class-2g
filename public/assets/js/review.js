document.addEventListener('alpine:init', () => {
    Alpine.data('formulir', () => ({
        async handleSubmit() {
            const formData = new FormData(document.querySelector('#formulir'));
            // console.log(data);
            const response = await fetch('/api/booking', {
                method: 'POST',
                body: formData
            })
            const data = await response.json()
            console.log(data);
            if (data.status) {
                swal({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data berhasil dikirim',
                }).then(() => {
                    document.cookie = "lampiran=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    window.location.href = '/'
                })
            } else {
                await swal({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Data gagal dikirim',
                }).then(() => {
                    document.cookie = "lampiran=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    window.location.href = '/booking'
                })
            }
        }
    }))
})