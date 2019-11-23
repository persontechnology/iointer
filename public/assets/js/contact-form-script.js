/*==============================================================*/
// Bahama Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "¿Completaste el formulario correctamente?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm(){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();


        // $.ajax({
        //     type: "POST",
        //     url: "enviar-contacto",
        //     data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&phone_number=" + phone_number + "&message=" + message,
        //     success : function(text){
        //         if (text == "success"){
        //             formSuccess();
        //         } else {
        //             formError();
        //             submitMSG(false,text);
        //         }
        //     }
        // });

        $.blockUI({message:'<h1>Espere por favor.!</h1>'});
        $.post("enviar-contacto", { nombre: name,email:email,tema:msg_subject,telefono:phone_number,mensaje:message })
        .done(function( data ) {
            formSuccess();
        }).always(function(){
            $.unblockUI();
        }).fail(function(data,err){
            
            var errores='';
            var datAux = data.responseJSON;
            $.each(datAux.errors, function() {
                $.each(this, function(k, v) {
                    errores+=v;
                });
            });
            
            formError();

            if (errores) {
                submitMSG(false,errores);
            }else if (err) {
                submitMSG(false,err);
            }

            
            
        });


    }



    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Mensaje enviado!")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 text-center tada animated text-success";
        } else {
            var msgClasses = "h4 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict