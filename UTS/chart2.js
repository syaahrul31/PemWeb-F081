var karyawan = [];
var hrd = [];
var manajer = [];
var sekretaris = [];

var pagi = [];
var siang = [];
var sore = [];
var malam = [];

var senin = [];
var selasa = [];
var rabu = [];
var kamis = [];
var jumat = [];

var List_Karyawan = localStorage.getItem('List_Karyawan');
console.log(List_Karyawan.split('[,]'));
var localArray = JSON.parse(List_Karyawan); //
var i = 0;

function jmlhHadir(){
    // console.log(localArray[0])
    localArray.forEach(element => {
        // console.log(element.position)
        if(element.position == "Karyawan"){
            karyawan.push(element.position)
        }
        else if(element.position == "HRD"){
            hrd.push(element.position)
        }

        else if(element.position == "Manajer"){
            manajer.push(element.position)
        }

        else if(element.position == "Sekretaris"){
            sekretaris.push(element.position)
        }
    });
}

// jmlhHadir()

function jmlhshift(){
    // console.log(localArray[0])
    localArray.forEach(element => {
        // console.log(element.position)
        if(element.shift == "Pagi"){
            pagi.push(element.shift)
        }
        else if(element.shift == "Siang"){
            siang.push(element.shift)
        }
        else if(element.shift == "Sore"){
            sore.push(element.shift)
        }
        else if(element.shift == "Malam"){
            malam.push(element.shift)
        }
    });
}

// jmlhshift()

function jmlhhari(){
    // console.log(localArray[0])
    localArray.forEach(element => {
        var tw = new Date(element.date);
        var hari = tw.getDay();
        console.log(hari);
        // console.log(element.position)
        if(hari == 1){
            senin.push(element.date)
        }
        else if(hari == 2){
            selasa.push(element.date)
        }
        else if(hari == 3){
            rabu.push(element.date)
        }
        else if(hari == 4){
            kamis.push(element.date)
        }
        else if(hari == 5){
            jumat.push(element.date)
        }
    });
}

// jmlhhari()

console.log(karyawan)

function chart1(){
    // debugger;
    jmlhHadir();
    const ctx = document.getElementById('myChart').getContext('2d');
    var gradient = ctx.createLinearGradient(100, 30, 0, 100)
    gradient.addColorStop(0, 'rgba(94, 255, 217, 1)')
    gradient.addColorStop(1, 'rgba(153, 255, 238, 1)')
    ctx.canvas.width = 300;
    ctx.canvas.height = 300;
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Karyawan", "HRD", "Manajer", "Sekertaris"],
            datasets: [{
                label: 'Jabatan',
                data:  [karyawan.length, hrd.length, manajer.length, sekretaris.length],
                backgroundColor: [
                    'rgba(161, 255, 250, 1)',
                    'rgba(18, 77, 72, 1)',
                    'rgba(31, 148, 139, 1)',
                    'rgba(22, 120, 113, 1)'
                ],
                borderColor: [
                    'rgba(161, 255, 250, 1)',
                    'rgba(18, 77, 72, 1)',
                    'rgba(31, 148, 139, 1)',
                    'rgba(22, 120, 113, 1)'
                ],
                borderWidth: 1
            }]
}, options: {
    scales: {
        y: {
            beginAtZero: true
        }
    }
} 
});
}
chart1()



function chart2(){
    // debugger;
    jmlhshift();
    const ctx = document.getElementById('myChart2').getContext('2d');
    var gradient = ctx.createLinearGradient(100, 30, 0, 100)
    gradient.addColorStop(0, 'rgba(94, 255, 217, 1)')
    gradient.addColorStop(1, 'rgba(153, 255, 238, 1)')
    ctx.canvas.width = 300;
    ctx.canvas.height = 300;
    const myChart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Pagi", "Siang", "Sore", "Malam"],
            datasets: [{
                label: 'Shift',
                data:  [pagi.length, siang.length, sore.length, malam.length],
                backgroundColor: [
                    'rgba(161, 255, 250, 1)',
                    'rgba(18, 77, 72, 1)',
                    'rgba(31, 148, 139, 1)',
                    'rgba(22, 120, 113, 1)'
                ],
                borderColor: [
                    'rgba(161, 255, 250, 1)',
                    'rgba(18, 77, 72, 1)',
                    'rgba(31, 148, 139, 1)',
                    'rgba(22, 120, 113, 1)'
                ],
                borderWidth: 1
            }]
}, options: {
    scales: {
        y: {
            beginAtZero: true
        }
    }
} 
});
}
chart2()


function chart3(){
    // debugger;
    jmlhhari();
    const ctx = document.getElementById('myChart3').getContext('2d');
    var gradient = ctx.createLinearGradient(100, 30, 0, 100)
    gradient.addColorStop(0, 'rgba(94, 255, 217, 1)')
    gradient.addColorStop(1, 'rgba(153, 255, 238, 1)')
    ctx.canvas.width = 300;
    ctx.canvas.height = 300;
    const myChart3 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"],
            datasets: [{
                label: 'Shift',
                data:  [senin.length, selasa.length, rabu.length, kamis.length, jumat.length],
                backgroundColor: [
                    'rgba(161, 255, 250, 1)',
                    'rgba(18, 77, 72, 1)',
                    'rgba(31, 148, 139, 1)',
                    'rgba(22, 120, 113, 1)',
                    'rgba(55,140, 130, 1)'
                ],
                borderColor: [
                    'rgba(161, 255, 250, 1)',
                    'rgba(18, 77, 72, 1)',
                    'rgba(31, 148, 139, 1)',
                    'rgba(22, 120, 113, 1)',
                    'rgba(55,140, 130, 1)'
                ],
                borderWidth: 1
            }]
}, options: {
    scales: {
        y: {
            beginAtZero: true
        }
    }
} 
});
}
chart3()


