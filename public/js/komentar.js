function changetextbox()
    {
      
      if (document.getElementById("moda").value == "Angkot") {

      $('#formangkot').collapse('show');
      $('#formbus').collapse('hide');
      $('#formstasiun').collapse('hide');
      $('#formterminal').collapse('hide');
      document.getElementById("nopol").disabled=false;
      document.getElementById("opsiangkot").disabled=false; 
      document.getElementById("opsibus").disabled=true; 
      document.getElementById("opsistasiun").disabled=true; 
      document.getElementById("opsiterminal").disabled=true; 
      var objTag = document.getElementById("judulinput").innerHTML = "Nomor Angkot";
      var objTag = document.getElementById("id_kendaraan");
      if (objTag != null)
      {
        document.setAttribute('placeholder', 'Masukkan Nomor Trayek Angkot');
      }
      }

      if (document.getElementById("moda").value == "Bus") {
      $('#formangkot').collapse('hide');
      $('#formbus').collapse('show');
      $('#formstasiun').collapse('hide');
      $('#formterminal').collapse('hide');
      document.getElementById("nopol").disabled=false;
      document.getElementById("opsiangkot").disabled=true; 
      document.getElementById("opsibus").disabled=false; 
      document.getElementById("opsistasiun").disabled=true; 
      document.getElementById("opsiterminal").disabled=true; 
      var objTag = document.getElementById("judulinput").innerHTML = "Nama Bus"; 
      var objTag = document.getElementById("id_kendaraan");
      if (objTag != null)
      {
        objTag.setAttribute('placeholder', 'Masukkan Nama Bus');
      }
      }

      if (document.getElementById("moda").value == "Stasiun") {
      $('#formangkot').collapse('hide');
      $('#formbus').collapse('hide');
      $('#formstasiun').collapse('show');
      $('#formterminal').collapse('hide');
      document.getElementById("nopol").disabled=true; 
      document.getElementById("opsiangkot").disabled=true; 
      document.getElementById("opsibus").disabled=true; 
      document.getElementById("opsistasiun").disabled=false; 
      document.getElementById("opsiterminal").disabled=true;
      var objTag = document.getElementById("judulinput").innerHTML = "Nama Stasiun"; 
      var objTag = document.getElementById("id_kendaraan");
      if (objTag != null)
      {
        objTag.setAttribute('placeholder', 'Masukkan Nama Stasiun');
      }
      }

      if (document.getElementById("moda").value == "Terminal") {
      $('#formangkot').collapse('hide');
      $('#formbus').collapse('hide');
      $('#formstasiun').collapse('hide');
      $('#formterminal').collapse('show');
      document.getElementById("nopol").disabled=true; 
      document.getElementById("opsiangkot").disabled=true; 
      document.getElementById("opsibus").disabled=true; 
      document.getElementById("opsistasiun").disabled=true; 
      document.getElementById("opsiterminal").disabled=false;
      var objTag = document.getElementById("judulinput").innerHTML = "Nama Terminal"; 
      var objTag = document.getElementById("id_kendaraan");
      if (objTag != null)
      {
        objTag.setAttribute('placeholder', 'Masukkan Nama Terminal');
      }
      }

    }
