var form = document.getElementById("form")
form.addEventListener('submit',function(event){
	event.preventDefault()

    var tinggi = document.getElementById("tinggi").value;
    var hasil1 = document.getElementById("hasil1");
    var hasil2 = document.getElementById("hasil2");
    var hasil3 = document.getElementById("hasil3");
    var hasil4 = document.getElementById("hasil4");
    hasil1.innerHTML = sgitiga1(tinggi);
    hasil2.innerHTML = sgitiga2(tinggi);
    hasil3.innerHTML = sgitiga3(tinggi);
    hasil4.innerHTML = sgitiga4(tinggi);
});

function sgitiga1(tinggi){
    var hasil = '';
    for (var x = 0; x < tinggi; x++) {
        for (var y = 0; y <= x; y++) {
            hasil += '* ';
        }
        hasil += '<br>';
    }
    return hasil;
}

function sgitiga2(tinggi) {
    var hasil = '';
    for (var x = 0; x < tinggi; x++) {
        for (var y = tinggi; y > x; y--) {
            hasil += '* ';
        }
        hasil += '<br>';
    }
    return hasil;
}

function sgitiga3(tinggi) {
    var hasil = '';
    for (var x = tinggi; x > 0; x--) {
        for (var y = 1; y <= tinggi; y++) {
            if (y >= x) {
                hasil += ' *';
            } else {
                hasil += '  '
            }
        }
        hasil += '<br>';
    }
    return hasil;
}

function sgitiga4(tinggi) {
    var hasil = '';
    for (var x = tinggi; x > 0; x--) {
        for (var y = tinggi; y > 0; y--) {
            if (y > x) {
                hasil += '  ';
            } else {
                hasil += ' *'
            }
        }
        hasil += '<br>';
    }
    return hasil;
}