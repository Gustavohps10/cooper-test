const photo = document.getElementById('photo')

photo.addEventListener('change', function (e) {
    let file = e.target.files[0]
    let fileReader = new FileReader()

    console.log(file);
    fileReader.onload = () => {
        let img = new Image();
        img.src = fileReader.result;
        document.getElementById("avatar-label").style.backgroundImage = "url('" + img.src + "')"
    }

    fileReader.readAsDataURL(file)
})