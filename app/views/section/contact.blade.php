{{ Theme::asset()->usePath()->add('js-contact', 'js/contact.js') }}
<script src="http://maps.googleapis.com/maps/api/js"></script>
<div class="contactLayer" id="contact">
    <!---left---->
    <div class="contactInnerLeft">
        <!--contact top wrapper-->
        <div class="topInnerContactLeftWrap">
            Contact Us
        </div>
        <!--lower contact wrapper-->
        <div class="lowerInnerContactLeftWrap">
            <div class="innerLeftTxtConWrap">
                 <div class="innerDetail">
                      <img src="<?php echo Theme::asset()->url('img/contactShape1png.png'); ?>">
                     <span>
                         Suite 5 Level 12 <br>
                         53 Martin Place Sydney <br>
                         NSW 2000 <br>
                     </span>
                 </div>

                 <div class="innerDetail">
                     <img src="<?php echo Theme::asset()->url('img/contactShape2.png'); ?>">
                     <span>
                        +63 2 621 9370
                     </span>
                 </div>

                 <div class="innerDetail">
                     <img src="<?php echo Theme::asset()->url('img/contactShape3.png'); ?>">
                         <span>
                            info@transpera.com.ph
                         </span>
                 </div>
             </div>
            <div class="innerRightTxtConWrap">
                <p>You might have other concerns:</p>
                <div id="registration-error-field" class="error-field" style="display: none;">
                    <i id="error-icon" class="material-icons">error</i>
                    Unable to proceed. Please fix the errors below.
                </div>
                    <form id="frmContact">
                        <div class="form-container">
                            <div class="input-field">
                                <input id="name" class="input-box" type="text" name="name" maxlength="50" aria-required="true">
                                <label class="" for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input id="email" class="input-box" type="text" name="email" maxlength="50" aria-required="true">
                                <label class="" for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea" name="concern"></textarea>
                                <label for="textarea1">Concern</label>
                            </div>
                            <button class="waves-effect waves-light btn" type="submit" id="btnSubmit">Submit</button>
                        </div>
                    </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>


    <!---right---->
    <div class="contactInnerRight">
        <div id="map">
            <!---map inner--->
        </div>
    </div>

    <div class="clear">

    </div>

    <div class="contactMapNav">
        <a class="waves-effect waves-light phDivContact country-button">Philippines</a>
        <a class="waves-effect waves-light auDivContact country-button active">Australia</a>
        <a class="waves-effect waves-light chiDivContact country-button">Chicago</a>
    </div>

</div>

<script>
    $(document).ready(function(){
        $("#frmContact").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                concern: {
                    required: true
                }
            },messages: {
                name: {
                    required: ""
                },
                email: {
                    required: "",
                    email: "xxx"
                },
                concern: {
                    required: ""
                }
            },
            errorPlacement: function(error, element) {
                if(error.html() == "xxx"){
                    var message = 'Unable to proceed. Email should be in correct format.';
                    message = '<i class="material-icons" id="error-icon">error</i>' + message;
                    $("#registration-error-field").html(message);
                    $("div#registration-error-field").show();
                }
            },
            invalidHandler: function(event, validator) {
                // 'this' refers to the form
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1
                        ? 'Unable to proceed. Fill up the required field.'
                        : 'Unable to proceed. Fill up the required fields.';
                    message = '<i class="material-icons" id="error-icon">error</i>' + message;
                    $("#registration-error-field").html(message);
                    $("div#registration-error-field").show();
                } else {
                    $("div#registration-error-field").hide();
                }
            }
        });

        /*AJAX FORM SUBMIT*/
        var options = {
            beforeSubmit: function()
            {},
            success: function(response)
            {},
            complete: function()
            {},
            error: function()
            {}
        };
        $("#frmContact").ajaxForm(options);
    });
</script>