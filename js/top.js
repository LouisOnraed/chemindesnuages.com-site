const btn_top = document.querySelector('.btn_top');

btn_top.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})