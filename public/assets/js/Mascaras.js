/*Plugin datetimepicker*/

/*Somente Data*/
$('.mask-data').datetimepicker({
    //daysOfWeekDisabled: [0, 6],
    format: 'DD/MM/YYYY',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
});

/*Somente Data minDate*/
$('.mask-data-minDate').datetimepicker({
    //daysOfWeekDisabled: [0, 6],
    minDate: "moment",
    format: 'DD/MM/YYYY',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})


/*Data e hora*/
$('.mask-datahora').datetimepicker({
    //daysOfWeekDisabled: [0, 6],
    locale: 'pt-br',
    defaultDate: 'moment',
    format: 'DD/MM/YYYY HH:mm',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})

/*Data e hora minDate*/
$('.mask-datahora-minDate').datetimepicker({
    //daysOfWeekDisabled: [0, 6],
    minDate: 'moment',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})

/*Data e hora maxDate*/
$('.mask-datahora-maxDate').datetimepicker({
    //daysOfWeekDisabled: [0, 6],
    maxDate: 'moment',
    format: 'DD/MM/YYYY',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})


/*Somente Mes e Ano*/
$('.mask-mesano').datetimepicker({
    viewMode: 'months',
    format: 'MM/YYYY',
    locale: 'pt-br',
    defaultDate: 'moment',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})

/*Somente Ano*/
$('.mask-ano').datetimepicker({
    maxDate: "moment",
    viewMode: 'years',
    format: 'YYYY',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})

/*Somente Hora*/
$('.mask-hora').datetimepicker({
    format: 'HH:mm',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})

/*Somente Hora minDate*/
$('.mask-hora-minDate').datetimepicker({
    //daysOfWeekDisabled: [0, 6],
    minDate: "moment",
    format: 'HH:mm',
    locale: 'pt-br',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down",
        previous: 'fa fa-arrow-left',
        next: 'fa fa-arrow-right'
    }
})

$(function () {
    /* Máscaras */
    $('.mask-ano').mask('0000');
    $('.mask-data').mask('00/00/0000');
    $('.mask-datahora').mask('00/00/0000 00:00');
    //$('.mask-mesano').mask('00/0000');
    $('.mask-hora').mask("00:00");
    $('.mask-cpf').mask('000.000.000-00', { reverse: false });
    $('.mask-cnpj').mask('00.000.000/0000-00', { reverse: false });
    $('.mask-cep').mask('00.000-000');
    $('.mask-celular').mask('(00) 0 0000-0000');
    $('.mask-telefone').mask('(00) 0000-0000');
    $('.mask-matricula').mask('000000000000000');
    $('.mask-money').mask('000.000.000.000,00', { reverse: true });
});

var mascaraContato = {
     cacheDOM: function(){
         this.contato = $('.mask-celular-opcional')
     },
     iniciarMascaras: function(){
         this.contato.mask(this.SPMaskBehavior, this.spOptions.bind(this))
     },
     init: function(){
         this.cacheDOM()
         this.iniciarMascaras()
     },
     SPMaskBehavior: function (val) {
         return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
     },
     spOptions: function() {
         return {
             onKeyPress: function(val, e, field, options) {
                 field.mask(this.SPMaskBehavior.apply({}, arguments), options);
             }
         }
     }

 }.init()
