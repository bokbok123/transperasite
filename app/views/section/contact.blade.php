{{ Theme::asset()->usePath()->add('js-contact', 'js/contact.js') }}
<script src="http://maps.googleapis.com/maps/api/js"></script>
<div class="contactLayer">
    <!---left---->
    <div class="contactInnerLeft">
        <!--contact top wrapper-->
        <div class="topInnerContactLeftWrap">
            Contact Us
        </div>
        <!--lower contact wrapper-->
        <div class="lowerInnerContactLeftWrap">
             <div class="innerLeftTxtConWrap">
                 <div class="innerDetail1">
                      <img src="<?php echo Theme::asset()->url('img/contactShape1png.png'); ?>">
                     <span>
                         Suite 5 Level 12
                         53 Martin Place Sydney
                         NSW 2000
                     </span>
                 </div>

                 <div class="innerDetail2">
                     <img src="<?php echo Theme::asset()->url('img/contactShape2.png'); ?>">
                     <span>
                        +63 2 621 9370
                     </span>
                 </div>

                 <div class="innerDetail3">
                     <img src="<?php echo Theme::asset()->url('img/contactShape3.png'); ?>">
                         <span>
                            info@transpera.com.ph
                         </span>
                 </div>

             </div>

            <div class="innerRightTxtConWrap">
                <p>You might have other concerns:</p>
                    <form id="frmContact">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" type="text">
                                <label for="name">Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="concern" type="text">
                                <label for="concern">Concern</label>
                            </div>
                        </div>
                    </form>
                <a class="waves-effect waves-light btn">Submit</a>

            </div>
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

