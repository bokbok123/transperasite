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
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Concern</label>
                            </div>
                            <a class="waves-effect waves-light btn" type="submit">Submit</a>
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
        <a class="phDivContact">
            Philippines
        </a>
        <a class="auDivContact">
            Australia
        </a>

        <a class="chiDivContact">
            Chicago
        </a>

    </div>

</div>

