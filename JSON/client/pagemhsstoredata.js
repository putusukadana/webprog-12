function storedata(){
   let nim = document.getElementById("txnim").value;
   let nama = document.getElementById("txnama").value;
   let tgl = document.getElementById("txtgl").value;
   let jr = document.getElementById("txjr").value;
   let jkel = document.getElementById("txjkel").value;

   let dta =  "nim="+nim+"&nama="+nama+"&jurusan="+jr+"&jkel="+jkel+"&tgl="+tgl;
   const gh = new XMLHttpRequest();
    gh.open("POST", "http//");
    gh.setRequestHeader("content-type", "application/x-ww-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan")
        }
    }

}