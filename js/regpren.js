$('#action').on('click', function(){
    var name = $('#name').val();
    var paterno = $('#paterno').val();
    var corporativo = $('#corporativo').val();
    var puesto = $('#puesto').val();
    var sitio = $('#sitio').val();
    var identificacion = $('#identificacion').val();

    if(name == ''){
        Swal.fire({
        title: 'Error',
        text: 'Escribe tu(s) nombre(s)',
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#3c91ec',
        color: '#fff',
        background: '#000',
        confirmButtonColor: '#48bddf'
        });

        return false;
    }else if(paterno == ''){
        Swal.fire({
        title: 'Error',
        text: 'Escribe tu(s) apellido(s)',
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#3c91ec',
        color: '#fff',
        background: '#000',
        confirmButtonColor: '#48bddf'
        });

        return false;
    }else if(corporativo == ''){
        Swal.fire({
        title: 'Error',
        text: 'Escribe tu mail corporativo',
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#3c91ec',
        color: '#fff',
        background: '#000',
        confirmButtonColor: '#48bddf'
        });

        return false;
    }else if(puesto == ''){
        Swal.fire({
        title: 'Error',
        text: 'Escribe tu puesto',
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#3c91ec',
        color: '#fff',
        background: '#000',
        confirmButtonColor: '#48bddf'
        });

        return false;
    }else if(sitio == ''){
        Swal.fire({
        title: 'Error',
        text: 'Escribe tu sitio web',
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#3c91ec',
        color: '#fff',
        background: '#000',
        confirmButtonColor: '#48bddf'
        });

        return false;
    }else if(identificacion == ''){
        Swal.fire({
        title: 'Error',
        text: 'Selecciona tu identificación',
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#3c91ec',
        color: '#fff',
        background: '#000',
        confirmButtonColor: '#48bddf'
        });

        return false;
    }else{
        Swal.showLoading();
        var link = $('#link').val();
        var link1 = $('#link1').val();
        var data = {
            'name' : name,
            'paterno' : paterno,
            'corporativo' : corporativo,
            'personal' : personal,
            'puesto' : puesto,
            'sitio' : sitio,
            'link' : link,
            'link1' : link1,
            'identificacion' : identificacion,
        };
        console.log(data);

        $.ajax({
        type: "POST",
        url: "action.php",
        data: data,
        success: function(data){
            Swal.hideLoading();
            console.log(data);
            if(data == 1){
                Swal.fire({
                    title: 'Bien',
                    text: 'Se envio tu mensaje',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: '#3c91ec'
                }).then((result) => {
                    window.location.reload();
                });
            }
        }
        });
    }

});


const params = new URLSearchParams(window.location.search)

        if(params.has('success')){
          Swal.fire({
            title: 'Gracias por tu tiempo',
            text: 'Más adelante recibirás en el correo electrónico que nos proporcionaste la notificación de tu acreditación. ',
            confirmButtonText: 'ENTENDIDO',
            confirmButtonColor: '#3c91ec',
            color: '#fff',
            background: '#000',
            confirmButtonColor: '#48bddf',
            showCloseButton: true,
          });
        }