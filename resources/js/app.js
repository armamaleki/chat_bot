import './bootstrap';
import './echo.js';
import Toastify from 'toastify-js'

Echo.channel('messages')
    .listen('PublicMessages' , (event)=>{
        Toastify({
            text: event.message,
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
        }).showToast();
    })

