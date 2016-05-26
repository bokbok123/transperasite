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
                @foreach(Address::all() as $data)
                <div class="contacts" id="{{ $data->country_code }}-c">
                    <div class="innerDetail">
                          <img src="<?php echo Theme::asset()->url('img/contactShape1png.png'); ?>">
                         <span id="address">
                             {{ $data->address }}
                         </span>
                     </div>
                    <div class="innerDetail">
                         <img src="<?php echo Theme::asset()->url('img/contactShape2.png'); ?>">
                         <span id="number">
                            {{ $data->contact }}
                         </span>
                     </div>
                    <div class="innerDetail">
                     <img src="<?php echo Theme::asset()->url('img/contactShape3.png'); ?>">
                         <span id="emailAddress">
                            {{ $data->email }}
                         </span>
                    </div>
                </div>
                @endforeach
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
                            <div class="input-field" id="textAreaField">
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
