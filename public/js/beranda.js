$('#modalberita').on('show.bs.modal', function (event){
             console.log('modal terbuka');
         
             var button =$(event.relatedTarget)
         
             var id = button.data('id')
             var judul = button.data('judul')
             var berita = button.data('berita')
             var gambar = button.data('gambar')
         
             var modal = $(this)
         
             modal.find('.modal-body #judul').text(judul)
             modal.find('.modal-body #berita').text(berita)
             modal.find('.modal-body #gambarberita').text(berita)
             var objTag = document.getElementById("gambarberita");
             if (objTag != null)
             {
                 objTag.setAttribute('src', 'storage/'+gambar);
             }
       });