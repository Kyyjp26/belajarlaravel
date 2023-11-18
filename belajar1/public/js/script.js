let listMahasiswa = document.getElementsByTagName("ol");
listMahasiswa[0].addEventListener("click", tampilkan)

function tampilkan(event){
    alert("Cek Data Mahasiswa Ini"+event.target.innerHTML);
}