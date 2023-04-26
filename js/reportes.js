const btn_reports = document.querySelectorAll('.reports_btn');


document.addEventListener('click', e => {
    btn_reports.forEach((el) => {
        if (e.target == el) {
            console.log(el)
        }
    })
})

