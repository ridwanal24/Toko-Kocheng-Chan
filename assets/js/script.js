// Register Page
let show_password = document.querySelector("input.show-password")

show_password.addEventListener('click', () => {
    if(show_password.checked){
        document.querySelector('input.password').setAttribute("type","text");
    }
    else {
        document.querySelector('input.password').setAttribute("type","password");
    }
});