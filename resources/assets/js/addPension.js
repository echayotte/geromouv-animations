$(document).ready(function () {

    $(".add-new-pension").click(function (evt) {
        evt.preventDefault();

        $.ajaxSetup({
            headers: {
                // put the token
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var newPension = document.getElementById('member-new-pension').value;

        $.ajax({
            // route to get the controller use
            url: '/addPension',
            type: 'POST',
            data: {
                // value sent to db via PensionController@store
                'member-new-pension': newPension
            },
            dataType: 'JSON',
            success: function (data) {
                
                function closeAlert() {
                    selectDivAjaxPension.style.display = " none";
                }

                var selectDivAjaxPension = document.getElementById("ajax-pension");
                var createPTag = document.createElement("p");
                var message = document.createTextNode(data.message);

                createPTag.appendChild(message);

                if (data.status) {
                    selectDivAjaxPension.style.display = " block";
                    createPTag.setAttribute('class', 'error');
                    window.setTimeout(closeAlert, 1500);

                } else {
                    selectDivAjaxPension.style.display = " block";
                    document.getElementById('member-new-pension').value = '';
                    createPTag.setAttribute('class', 'success');

                    var getSelectedOption = document.getElementById('option-pension-selected');
                    getSelectedOption.setAttribute('selected', '');

                    var getSelect = document.getElementById("member-pension");
                    var newOption = document.createElement("option");

                    newOption.setAttribute('selected', 'selected');
                    newOption.setAttribute('value', data.newPensionId);
                    newOption.text = data.newPensionName;

                    getSelect.add(newOption);
                    var getDiv = document.getElementById('removePensionIfSuccess');
                    getDiv.remove();

                    // close the alert in 3 secs
                    window.setTimeout(closeAlert, 1500);
                }

                selectDivAjaxPension.innerHTML = createPTag.outerHTML;
            },

            error: function (e) {
                console.log(e.responseText);
            }
        });
    });
});