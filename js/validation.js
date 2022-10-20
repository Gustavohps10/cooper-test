const form = document.getElementById("user-form")
form.addEventListener('submit', function (e) {
    e.preventDefault()
    const sucessSubmitToast = document.getElementById("sucess-submit-toast")
    const dangerSubmitToast = document.getElementById("danger-submit-toast")

    if(
        !imageIsValid() ||
        !nameIsValid() ||
        !yearsIsValid() ||
        !emailIsValid() ||
        !descriptionIsValid() ||
        !termsChecked()
    ){
        const toast = new bootstrap.Toast(dangerSubmitToast)
        toast.show()
        return
    }
 
    const toast = new bootstrap.Toast(sucessSubmitToast)
    toast.show()
})

function nameIsValid() {
    let regex = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/
    const name = document.getElementById("name")

    if(!name.value || !name.value.match(regex)){
        name.classList.remove("is-valid")
        name.classList.add("is-invalid")
        return false
    }

    name.classList.remove('is-invalid')
    name.classList.add("is-valid")
    return true
}

function yearsIsValid() {
    const years = document.getElementById("years")
    let value = Number(years.value)

    if(!value || value < 18 ){
        years.classList.remove("is-valid")
        years.classList.add("is-invalid")
        return false
    }

    years.classList.remove('is-invalid')
    years.classList.add("is-valid")
    return true
}

function emailIsValid() {
    const email = document.getElementById("email") 
    let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    if(!email.value.match(regex)){
        email.classList.remove("is-valid")
        email.classList.add("is-invalid")
        return false
    }

    email.classList.remove('is-invalid')
    email.classList.add("is-valid")
    return true
}

function descriptionIsValid() {
    const description = document.getElementById("description")
    if(!description.value){
        description.classList.remove("is-valid")
        description.classList.add("is-invalid")
        return false
    }

    description.classList.remove('is-invalid')
    description.classList.add("is-valid")
    return true
}

function termsChecked() {
    terms = document.getElementById("terms")

    if(!terms.checked){
        terms.classList.remove("is-valid")
        terms.classList.add("is-invalid")
        return false
    }

    terms.classList.remove('is-invalid')
    terms.classList.add("is-valid")
    return true
}

function imageIsValid() {
    const file = document.getElementById('photo').files[0]

    if(file){
        if(file.type == "image/jpeg" || file.type == "image/png"){
            document.getElementById("photo-invalid-feedback").classList.add("d-none")
            return true
        }

        document.getElementById("photo-invalid-feedback").classList.remove("d-none")
        return false
    }

    return true
}