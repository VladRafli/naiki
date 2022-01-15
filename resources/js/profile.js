// Behavior before logged in
if (document.querySelector('#login_button') !== null) {
    document.querySelector('#login_button').addEventListener('click', () => {
        document.querySelector('#login_popup').setAttribute('style', 'display: flex')
    })
    
    document.querySelector('#popup_close').addEventListener('click', () => {
        document.querySelector('#login_popup').removeAttribute('style')
    })
}
// Behavior after logged in
if (document.querySelector('#profile_menu_button') !== null) {
    document.querySelector('#profile_menu_button').addEventListener('click', (e) => {
        e.stopPropagation()
        document.querySelector('#profile_menu').style.display = "block"
        document.querySelector('#profile_menu').addEventListener('click', (e) => {
            e.stopPropagation()
        })
    })
    document.querySelector('body').addEventListener('click', (e) => {
        e.stopPropagation()
        document.querySelector('#profile_menu').style.display = ""
    })
}