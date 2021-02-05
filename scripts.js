//Setup the on submit event listeners for ajax calls
$(document).ready(function() { $("#login_form").submit(function(event) {ajaxCall(event,"#login_form","#login_output","users.php")});});

//PHP AJAX Call Function
function ajaxCall(event, formID, outputDiv, phpPage) {
    //Prevent default posting to form
    event.preventDefault();
    //Grab the form
    var $form = $(formID);
    //Cache all inputs
    var $inputs = $form.find("input");
    //Serialize the data in the form
    var serializedData = $form.serialize();
    //Let's disable the inputs for the duration of the ajax request and output some text to show we are doing something
    $inputs.prop("disabled", true);
    $(outputDiv).html("Loading...");
    //Send the request to the php script using ajax
    request = $.ajax({
        type: "POST",
        url: phpPage,
        datatype: "html",
        data: serializedData,
        success: function(data) {
            //Append the returned data to the output div
            $(outputDiv).html(data);
        }
    });
    //Callback handler that will always be called once complete
    request.always(function() {
        //Re-enable the inputs
        $inputs.prop("disabled", false);
    });
}

//Show/hide modal function
function showHideModal(formID, mode, user_id="") {
    //Use JQuery to show/hide modal
    $(`#modal`).css("display", mode == 0 ? "none" : "inline-block");
    //Check if mode is not 0
    if (mode != 0) {
        //Set user section of the uri to a blank string by default
        var user_section = "";
        //Check if the user ID has been provided
        if (user_id != "") {
            //Set user section of the uri to provide the user ID
            user_section = `&userID=${user_id}`;
        }
        //Perform a JQuery get request to get the form for the modal
        $.get(`modal.php?formType=${formID}${user_section}`, function(data) {
            //Set the modal content to the html of the returned data
            $("#modal_content").html(data);
        });
    }
}
