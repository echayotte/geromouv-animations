
$(".nom").click(function (e) {

    // put the token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: 'ajax',
        type: 'POST',
        data: {
        },

        dataType: 'JSON',

        success: function (data) {
            // console.log('ok');
            // debugger;

            // var el = document.getElementById('div-01').nextSibling,
            //     i = 1;

            // console.log('Siblings of div-01:');

            // while (el) {
            //     console.log(i + '. ' + el.nodeName);
            //     el = el.nextSibling;
            //     i++;
            // }

            var arrayMember = [];

            console.log(data);
         
            var row = $('tr[name="row"]').attr('content');
            // console.log(row);

            var id = $('td[class="id"]').attr('content');
            var lastname = $('td[class="lastname"]').attr('content');
            var firstname = $('td[class="firstname"]').attr('content');
            var email = $('td[class="email"]').attr('content');
            var member = [id, lastname, firstname, email];
            console.log(member);
            
            // var el = member.nextSibling;
            // console.log(el);
            

            // while (el) {
            //     console.log(i + '. ' + el.nodeName);
            //     el = el.nextSibling;
            //     i++;
            // }



        },
        error: function (e) {
            console.log("pas ok");
            console.log(e.responseText);
        }
    });
});


// when click on the button
// $(".f4b1").click(function (e) {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
//         }
//     });

//     $.ajax({
//         url: 'ajax',
//         type: 'POST',
//         data: {

//         },

//         dataType: 'JSON',
//         success: function (data) {

//             $('.ajax').empty();
//             $('.ajax').append('Count Users =' + data.users);

//         },
//         error: function (e) {
//             console.log(e.responseText);
//         }
//     });
// });





// récupérer les membres dans une liste {
// var handlers = {
//     sortMembers: function () {
//         console.log('handler ok');
//     }
// }
// console.log("ok");


// $('.ajax').empty();
// $('.ajax').append('Membre: ');
// console.log(data.members);
// for (let i = 0; i < data.members.length; i++) {

//     $('.ajax').append('<li>' + data.members[i].lastname + '</li>');
// }