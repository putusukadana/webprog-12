  <div id="konten"></div>
    <script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http//");
    gh.send();

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        var tx = ' <h3>List Data Mahasiswa</h3>
        tx +='<table class="table tabel-hover"><thead><tr><th scope="col">+</th><th scope="col">NIM</th><th scope="col">Nama Lengkap </th><th scope="col">Jenis Kelamin</th><th scope="col">Jurusan</th><th scope="col">Tanggal Lahir</th></tr></thead>';
          <tbody>';
          for(i=0;i<dta.length;i++){
                let jkel = "Laki-Laki";
                if(dta[i][3]=="p"){
                    jkel = "Perempuan";
                }
            tx +='<tr>';
            tx +='<th scope="row">1</th>';
            tx +='<td>'+dta[i][0]'</td>';
            tx +='<td>'+dta[i][1]'</td>';
            tx +='<td>'+dta[i][2]'</td>';
            tx +='<td>'+dta[i][3]'</td>';
            tx +='<td>'+dta[i][4]'</td>';
            tx +='<td>';
            tx +='<td><a href="index.php?p=mhs&sp=edit&nim='+dta[i][0]+'" class="badge bg-success">edit</a></td>';
            tx +='<td>';
            tx +='</tr>';
          }
            </tbody>
        </table>'

        document.GetElementById("konten").innerHTML =tx;
    }
</script>