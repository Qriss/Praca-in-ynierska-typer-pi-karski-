$(document).ready(function() {


    $('#adduser').validate({
        //reguły dla pola formularza
        rules: {
            //atrybut name: {reguły}
            login: {
                //reguły - kolejność ma znaczenia
                required: true,
                minlength: 5,
                maxlength: 30
            },
            haslo: {
                //reguły - kolejność ma znaczenia
                required: true,
                minlength: 7,
                maxlength: 30
            },
            haslo2:{
                required: true,
                minlength: 7,
                maxlength: 30
            },
            email:{
                required: true,
                email: true
            }
        },
        //komunikaty dla pola formularza
        messages: {
            login: {
                required: 'Pole wymagane',
                minlength: jQuery.validator.format("Pole musi zawierać minimum {0} znakdddi!"),
                maxlength: jQuery.validator.format("Pole musi zawierać maksimum {0} znakdddi!")
            },
            haslo: {
                required: 'Pole wymagane',
                minlength: jQuery.validator.format("Pole musi zawierać minimum {0} znakidd!"),
                maxlength: jQuery.validator.format("Pole musi zawierać maksimum {0} znakdddi!")
            },
            haslo2:{
                required: 'Pole wymagane',
                minlength: jQuery.validator.format("Pole musi zawierać minimum {0} znakddi!"),
                maxlength: jQuery.validator.format("Pole musi zawierać maksimum {0} zndddaki!")
            },
            email: {
                required: 'Pole wymagane',
                email: 'Wpisz poprawny adres email'
            }
        },
        highlight: function(element, errorClass, validClass) {
            //znajdz najbliższy element form-group
            $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass(errorClass).addClass(validClass);
        },
        errorClass: 'has-error',
        validClass: 'has-success',
        /**niestandradowa reakcja na kliknięcie submit,
         gdy nie ma błędów,
         blokuje standradową akcję
         **/
        /*submitHandler: function(form) {
         alert('reakcja na subit');
         },*/
        /**
         niestadardowa rekacja na kliknięcie submit,
         gdy są błędy,
         blokuje standradową akcję
         **/
        invalidHandler: function(event, validator) {
            // 'this' to referencja do form
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1
                    ? 'Nie wypełniono poprawnie 1 pola. Zostało podświetlone'
                    : 'Nie wypełniono poprawnie ' + errors + ' pól. Zostały podświetlone';
                $("div.alert-danger").html(message);
                $("div.alert-danger").show();
            } else {
                $("div.alert-danger").hide();
            }
        },
    });
});