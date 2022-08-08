function ExportToExcel(type, fn, dl) {
    const elt = document.getElementById('luaran');
    const wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('List Kehadiran Karyawan.' + (type || 'xlsx')));
}

function generatePDF(){
    var doc = new jsPDF('p', 'pt', 'letter');
    var htmlstring = '';
    var tempVarToCheckPageHeight = 0;
    var pageHeight = 0;
    pageHeight = doc.internal.pageSize.height;
    specialElementHandlers = { 
        '#bypassme': function (element, renderer) { 
            return true
        }
    };
    var y = 20;
    doc.setLineWidth(2);
    doc.text(230, y = y + 70, "Rekap Karyawan");
    doc.autoTable({
        html: '#luaran',
        startY: 110,
        theme: 'grid',
        columnStyles: {
            0: {cellWidth: 30},
            1: {cellWidth: 110},
            2: {cellWidth: 110},
            3: {cellWidth: 70},
            4: {cellWidth: 60},
            5: {cellWidth: 70},
            4: {cellWidth: 70}
        },
        styles: {minCellHeight: 20}
})
doc.save('List Kehadiran Karyawan.pdf');
}


