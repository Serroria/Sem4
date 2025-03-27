function rentangNilai(){
    let nilai = document.getElementById("nilai").value;
    let nilaiMutu;
    if (nilai >=80 && nilai <=100){
        nilaiMutu = "A";
    }else if (nilai >=70 && nilai<=79){
        nilaiMutu="B";
    }else if (nilai >=60 && nilai <= 69){
        nilaiMutu="C";
    }else if(nilai >=50 && nilai<=59){
        nilaiMutu="D";
    }else if(nilai >=0 && nilai<=49){
        nilaiMutu="E";
    }else if(nilai <0){
        nilaiMutu="ERROR!"
    }
    let hasil=document.getElementById("hasil").innerText = nilaiMutu;
}
