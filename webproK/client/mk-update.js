function mkupdate(){
    document.getElementById("mkbaru").style.display="none"
    
    let kode = document.getElementById("txkode").value;
    let matkul = document.getElementById("txmatkul").value;
    let dosen = document.getElementById("txdosen").value;
    let sks = document.getElementById("txsks").value;
    let dta = "txkode="+kode+"&txmatkul="+matkul+"&txdosen="+dosen+"&txsks="+sks
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/webproK/server/dtamk-insertdata.php");
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(dta);

    xmlhttp.onload = function(){
        const mydta = JSON.parse(this.responseText);
        console.log(mydta);
        if(mydta["error"]==0){
            document.getElementById("sukses").style.display="block";
        }else{
            document.getElementById("gagal").style.display="none";
        }
        setTimeout(()=>{
            window.location.href="index.php?pg=mk";
        },5000)
    }
}