const produk = ["TV", "AC", "Kulkas"];
const barang = document.getElementById('brg');

produk.forEach(prdk => {
    const newOption = document.createElement('option');
    const optionText = document.createTextNode(prdk);
    newOption.appendChild(optionText);
    newOption.setAttribute('value',prdk);
    barang.appendChild(newOption);
    
    
});

function dataBarang() {
    let forms = document.getElementById('form');
    let nama = forms.nama.value;
    let produk = forms.produk.value;
    let jumlah = forms.jumlah.value;
    let harga = 0;
    let barang = "";
    let proses = "";

        switch(produk){
            case "TV" : harga = 2000000; break;
            case "AC" : harga = 3000000; break;
            case "Kulkas" : harga = 4000000; break;
            default : harga = 0;

        }

        let hargaTotal = harga * jumlah;

        let diskon = 0;
        
        if (produk == "Kulkas" && jumlah >= 3){
            diskon = 30/100 * hargaTotal
        } else if (produk == "AC" && jumlah >= 3){
            diskon = 20/100 * hargaTotal
        } else {
            diskon = 10/100 * hargaTotal
        }

        let ppn = 10/100 * ( hargaTotal - diskon)

        proses = `Input Data
        \n Nama : ${nama}
        \n Produk : ${produk}
        \n Harga : ${harga}
        \n Jumlah : ${jumlah}
        \n Harga total : ${hargaTotal}
        \n Diskon : ${diskon}
        \n Pajak : ${ppn} 

    `;
        
    alert(proses);
}