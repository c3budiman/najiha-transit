function toggler(divId) {
    $("#" + divId).toggle();
}

$('.target').click(function() {

  if($(this).hasClass('lanjut')) {
    $(this).text('Selanjutnya').toggleClass('lanjut');
  } else {
    $(this).text('Lebih Sedikit').toggleClass('lanjut');
  }
});

function dopetaangkot(id)
{
    var button = document.getElementById(id)

    var peta = button.getAttribute('data-peta');
    var namamoda = button.getAttribute('data-moda');
    var gambar = button.getAttribute('data-gambar');
    var tujuan = button.getAttribute('data-tujuan');
    var tarif = button.getAttribute('data-tarif');
    var jamoperasional = button.getAttribute('data-jamoperasional');
    var jeniskend = button.getAttribute('data-jeniskend');
    var warna = button.getAttribute('data-warna');

    var objTag = document.getElementById("namamoda").innerHTML=('<span class="badge badge-warning">'+'Angkot: '+namamoda+ '</span>');
    var objTag = document.getElementById("infomoda-1").innerHTML=('<i class="fa fa-map-signs" style="color:#1D9B7F" aria-hidden="true"></i>'+' Tujuan: '+tujuan);
    var objTag = document.getElementById("infomoda-2").innerHTML=('<i class="fa fa-money" style="color:#1D9B7F" aria-hidden="true"></i>'+' Tarif: '+tarif);
    var objTag = document.getElementById("infomoda-3").innerHTML=('<i class="fa fa-clock-o" style="color:#1D9B7F" aria-hidden="true"></i>'+' Jam Operasional: '+jamoperasional);
    var objTag = document.getElementById("infomoda-4").innerHTML=('<i class="fa fa-car" style="color:#1D9B7F" aria-hidden="true"></i>'+' Jenis: '+jeniskend+', Dengan warna: '+warna);
    var objTag = document.getElementById("peta");
    if (objTag != null)
    {
        objTag.setAttribute('data', 'storage/'+peta);
    }
    var objTag = document.getElementById("gambarmoda");
    if (objTag != null)
    {
        objTag.setAttribute('src', 'storage/'+gambar);
    }
    $('#infocolapse').collapse('show');
    
}
function dopetabus(id)
{
    var button = document.getElementById(id)

    var peta = button.getAttribute('data-peta');
    var namamoda = button.getAttribute('data-moda');
    var gambar = button.getAttribute('data-gambar');
    var tujuan = button.getAttribute('data-tujuan');
    var keberangkatan = button.getAttribute('data-keberangkatan');
    var tarif = button.getAttribute('data-tarif');
    var jamkeberangkatan = button.getAttribute('data-jamkeberangkatan');
    var jeniskend = button.getAttribute('data-jeniskend');
    var kelas = button.getAttribute('data-kelas');
    var seat = button.getAttribute('data-seat');
    var warna = button.getAttribute('data-warna');

    var objTag = document.getElementById("namamoda").innerHTML=('<span class="badge badge-warning">'+'Bus: '+namamoda+ '</span>');
    var objTag = document.getElementById("infomoda-2").innerHTML=('<i class="fa fa-map-signs" style="color:#1D9B7F" aria-hidden="true"></i>'+' '+ keberangkatan+ ' - ' + tujuan);
    var objTag = document.getElementById("infomoda-3").innerHTML=('<i class="fa fa-money" style="color:#1D9B7F" aria-hidden="true"></i>'+' Tarif: '+tarif);
    var objTag = document.getElementById("infomoda-4").innerHTML=('<i class="fa fa-clock-o" style="color:#1D9B7F" aria-hidden="true"></i>'+' Jam Keberangkatan: '+jamkeberangkatan);
    var objTag = document.getElementById("infomoda-5").innerHTML=('<i class="fa fa-car" style="color:#1D9B7F" aria-hidden="true"></i>'+' Jenis: '+jeniskend+', Dengan warna: '+warna);
    var objTag = document.getElementById("infomoda-1").innerHTML=('<span class="badge badge-danger">'+' Kelas: '+kelas+' | Seat: '+seat+ '</span>');
    var objTag = document.getElementById("peta");
    if (objTag != null)
    {
        objTag.setAttribute('data', 'storage/'+peta);
    }
    var objTag = document.getElementById("gambarmoda");
    if (objTag != null)
    {
        objTag.setAttribute('src', 'storage/'+gambar);
    }
    $('#infocolapse').collapse('show');
}

function dopetalokasi(id)
{
    var button = document.getElementById(id)

    var peta = button.getAttribute('data-peta');
    var namamoda = button.getAttribute('data-moda');
    var gambar = button.getAttribute('data-gambar');
    var alamat = button.getAttribute('data-alamat');
    var jambuka = button.getAttribute('data-jambuka');
    var jamtutup = button.getAttribute('data-jamtutup');
    var haribuka = button.getAttribute('data-haribuka');
    var haritutup = button.getAttribute('data-haritutup');
    var telp = button.getAttribute('data-telp');

    var objTag = document.getElementById("namamoda").innerHTML=('<span class="badge badge-warning">'+' '+namamoda+ '</span>');
    var objTag = document.getElementById("infomoda-1").innerHTML=('<i class="fa fa-map-marker" style="color:#1D9B7F" aria-hidden="true"></i>'+' '+ alamat);
    var objTag = document.getElementById("infomoda-2").innerHTML=('<i class="fa fa-clock-o" style="color:#1D9B7F" aria-hidden="true"></i>'+' Buka: '+haribuka+' '+jambuka+' s/d '+jamtutup);
    var objTag = document.getElementById("infomoda-3").innerHTML=('<i class="fa fa-phone-square" style="color:#1D9B7F" aria-hidden="true"></i>'+' Telp: '+telp);
    var objTag = document.getElementById("infomoda-4").innerHTML=('');
    var objTag = document.getElementById("peta");
    if (objTag != null)
    {
        objTag.setAttribute('data', 'storage/'+peta);
    }
    var objTag = document.getElementById("gambarmoda");
    if (objTag != null)
    {
        objTag.setAttribute('src', 'storage/'+gambar);
    }
    $('#infocolapse').collapse('show');
}

      function counterangkot(id){
        var button = document.getElementById(id)
        var nama = button.getAttribute('data-select');
        if (nama == 'angkot')
        {
            $("#buttonangkot").click();
        }
      }
      function counterbus(id){
      $("#buttonbus").click();
      }
      function counterstasiun(id){
      $("#buttonstasiun").click();
      }
      function counterterminal(id){
      $("#buttonterminal").click();
      }
          
       $(document).ready(function(){
           if(location.pathname=="/moda"){
             $("#buttonangkot").click();
           }
           if(location.pathname=="/moda-angkot"){
             $("#buttonangkot").click();
           }
           if(location.pathname=="/moda-bus"){
             $("#buttonbus").click();
           }
           if(location.pathname=="/moda-terminal"){
             $("#buttonterminal").click();
           }
           if(location.pathname=="/moda-stasiun"){
             $("#buttonstasiun").click();
           }
           });   

       function bukaformkomentar(){
           $('#colapsekomentar').collapse('show');
         }