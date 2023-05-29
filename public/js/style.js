// Button Radio
function selectButton(buttonId) {
    // Dapatkan elemen radio button terkait dengan tombol yang diklik
    var radio = document.getElementById(buttonId);

    // Setel semua radio button dengan nama yang sama menjadi tidak terpilih
    var radios = document.getElementsByName(radio.name);
    for (var i = 0; i < radios.length; i++) {
        radios[i].checked = false;
    }

    // Setel radio button yang diklik menjadi terpilih
    radio.checked = true;
}
