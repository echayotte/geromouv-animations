$("#addFruitId").click(function (e) {
console.log("ok baby");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: 'fruit',
        type: "POST",
        data: dataString,
        dataType: 'JSON',

        success: function (data) {

            // $('#form').fadeOut(200).hide();
            // $('.success').fadeIn(200).show();
            // $('.error').fadeOut(200).hide();
            $('#fruit').append($('<option>', {
                value: data.id,
                text: newFruit
            }));
        }
    });


});