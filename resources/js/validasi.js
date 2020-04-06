
function validateForm(){
  var a = document.forms["form"]["nama"].value;
  var b = document.forms["form"]["email"].value;
  var c = document.forms["form"]["noHp"].value;
  var d = document.forms["form"]["pekerjaan"].value;
  var e = document.forms["form"]["noId"].value;
  var f = document.forms["form"]["alamat"].value;
  var regex=/(?=.*\d)(^[0-9]+$)./i; //hanya menerima angka dan inputan 0 - 9
  var pattern = /(?=.*\d)((?=.*[A-Z])|(?=.*[a-z]))./i; //hanya menerima angka dan huruf
  var huruf = /((?=.*[A-Z])|(?=.*[a-z]))./i;
  

  if(a == ""  || b == ""  || c == ""  || d == ""  || e == "" || f == ""){
    alert("Tidak boleh kosong");
    return false;
  };
  
  if (!regex.test(c)) {
      alert("hanya menerima angka");
      return false;
  };
  

  
  
}
