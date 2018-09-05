$(document).ready(function () {
    console.log("ready!");
    $(".table").append('hello you');
});




















// $(".nom").click(function (e) {

//     // put the token
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     $.ajax({
//         url: 'ajax',
//         type: 'POST',
//         data: {
//         },

//         dataType: 'JSON',

//         success: function (data) {
//             console.log('ok');
//             console.log(data);
//         },
//         error: function (e) {
//             console.log("pas ok");
//             console.log(e.responseText);
//         }
//     });
// });


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