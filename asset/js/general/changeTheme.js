const formChangeTheme = $('.theme-form')[0];
const favicon = $('link[rel="icon"]')[0];
const imagesToChange = $('[imageothertheme]');

$(formChangeTheme).submit(function (event) {
    event.preventDefault();
    if (formChangeTheme.checkValidity() === false) {
        event.stopPropagation();
    } else {
        var formData = new FormData(formChangeTheme);
        changeTheme(formData);
    }
});

const changeTheme = (formData) => {
    $.ajax({
        type: "POST",
        url: "./index.php",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 60000,
        success: function (data) {
            document.body.classList.toggle('body-dark');
            changeFavicon();
            changeImages();
        }
    });
}

const changeFavicon = () => {
    if (document.body.classList.contains('body-dark')) {
        favicon.href = './asset/img/favicon/favicon-dark-theme.png';
    } else {
        favicon.href = './asset/img/favicon/favicon-light-theme.png';
    }
}

const changeImages = () => {
    imagesToChange.each(function (index, element) {
        var currentImage = $(element).attr('src');
        var imageOtherTheme = $(element).attr('imageothertheme');
        console.log(currentImage);
        console.log(imageOtherTheme);
        $(element).attr('src', imageOtherTheme);
        $(element).attr('imageothertheme', currentImage);
    });
}