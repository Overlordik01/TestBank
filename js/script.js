$(function () {
    $('input[type="number"]').on('input', function() {
        var obj = $(this),
            max = obj.data('max'),
            min = obj.data('min');

        if (obj.val() >= max)
            obj.val(max);
        else if (obj.val() <= min)
            obj.val(min);
    })
});

$(function() {
    $( "#slider-time" ).slider({
        value: 1500000,
        min: 1000,
        max: 3000000,
        step: 1,
        slide:function (event,ui) {
            $(".sumDeposit" ).val( ui.value);
            $("#slider-time" ).css({'background':'-webkit-linear-gradient(left ,#7ba129 ' + ui.value/30000 + '%,#7ba129 '+ui.value/30000+'%,#000 '+ui.value/30000+'%, #000 100%)'});
        }
    });
});

$(function() {
    $( "#slider-summa" ).slider({
        value: 1500000,
        min: 1000,
        max: 3000000,
        step: 1,
        slide: function( event, ui ) {
            $(".depReplAmount" ).val( ui.value);
            $("#slider-summa" ).css({'background':'-webkit-linear-gradient(left ,#7ba129 ' + ui.value/30000 + '%,#7ba129 '+ui.value/30000+'%,#000 '+ui.value/30000+'%, #000 100%)'});
        }
    });
});

$(function() {
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $("#datepicker" ).datepicker({
        dateFormat:'dd.mm.yy',
        altField: '#alt_date',
        altFormat:'dd.mm.yy'
    });
});

$(function () {
    const options = { year: '2-digit', month: '2-digit', day: '2-digit'};
    const russiannDateTime = new Intl.DateTimeFormat('ru-RU',options).format;
    $('#datepicker').change(function () {
        $(this).val(russiannDateTime($(this).val()))
    });
});

$(function () {
    $("#submit").click(function(){
        $.ajax({
            url: 'calc.php',
            method: 'post',
            dataType: 'html',
            data: $(".form").serialize(),
            success: function(data){
                $('#message').html(data);
            }
        });
    });
});