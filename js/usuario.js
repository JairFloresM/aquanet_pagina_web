const btnE = document.querySelectorAll('.btn-edit-user');
const btnD = document.querySelectorAll('.btn-delete-user');



// EDITAR USUARIOS
document.addEventListener('click', e => {
    btnE.forEach((el) => {
        if (e.target == el) {
            let id = el.parentNode.firstElementChild.firstElementChild.value;
            let user = el.parentNode.parentNode.children[0].innerHTML;
            let password = el.parentNode.parentNode.children[1].innerHTML;
            let role = el.parentNode.parentNode.children[2].innerHTML;

            const form_user_edit = document.getElementById('user_edit');

            form_user_edit.username.value = '';
            form_user_edit.password.value = '';
            form_user_edit.id.value = '';

            form_user_edit.username.value = user.trim();
            form_user_edit.password.value = password.trim();
            form_user_edit.id.value = id.trim();

            console.log("/'" + user.trim() + "/'")

            for (let i = 1; i < form_user_edit.type_user.options.length; i++) {
                if (form_user_edit.type_user.options[i].value.trim() == role.trim()) {
                    form_user_edit.type_user.options.item(i).selected = true;
                    break;
                }
            }
        }
    })
})







// ELIMIAR USUARIO
document.addEventListener('click', e => {
    btnD.forEach((el) => {
        if (e.target == el) {
            const form_user_delete = document.getElementById('user_delete');
            const nombre = document.getElementById('nombre_delete');
            let id = el.parentNode.firstElementChild.firstElementChild.value;
            let user = el.parentNode.parentNode.children[0].innerHTML;

            nombre.innerHTML = user;
            form_user_delete.id.value = id;
        }
    })
})



// // CREAR USUARIO

// document.getElementById('new_user').addEventListener('click', e => {

//     const form_user_create = document.getElementById('user_create');

// })

