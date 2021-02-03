//In JQuery, you can setup the on submit event listener like so:
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
