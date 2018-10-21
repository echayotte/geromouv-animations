$(document).ready(function () {
    
    $(".add-new-mutual").click(function (evt) {
        evt.preventDefault();
        // put the token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var newMutual = document.getElementById('member-new-mutual').value;
        
        $.ajax({
            // route to get the controller use
            url: '/addMutual',
            type: 'POST',
            data: {
                // value sent to db via MutualController@store
                'member-new-mutual': newMutual
            },
            dataType: 'JSON',
            success: function (data) {

                function closeAlert() {
                    selectDivAjaxMutual.style.display = "none";
                }

                var selectDivAjaxMutual = document.getElementById("ajax-mutual");
                var createPTag = document.createElement("p");
                var message = document.createTextNode(data.message);

                createPTag.appendChild(message);

                if (data.status) {
                    selectDivAjaxMutual.style.display = " block";
                    createPTag.setAttribute('class', 'error');
                    window.setTimeout(closeAlert, 1500);
                }
                else {
                    selectDivAjaxMutual.style.display = " block";
                    document.getElementById('member-new-mutual').value = '';
                    createPTag.setAttribute('class', 'success');

                    var getSelectedOption = document.getElementById('option-mutual-selected');
                    getSelectedOption.setAttribute('selected', '');
                    
                    var getSelect = document.getElementById("member-mutual");
                    var newOption = document.createElement("option");
                    
                    newOption.setAttribute('selected', 'selected');
                    newOption.setAttribute('value', data.newMutualId);
                    newOption.text = data.newMutualName;

                    getSelect.add(newOption);
                    var getDiv = document.getElementById('removeMutualIfSuccess');
                    getDiv.remove();

                    // close the alert in 1.5 secs
                    window.setTimeout(closeAlert, 1500);
                }
                
                selectDivAjaxMutual.innerHTML = createPTag.outerHTML;
            },

            error: function (e) {
                console.log(e.responseText);
            }
        });
    });
});