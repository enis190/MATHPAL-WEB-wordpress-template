<?php
/*
 * Template Name: Contact
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<div class="container-fluid home_form home_form--page-top fade-in">
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulo-h2 text-center home_form__title">Contact with MathPal</h1>

        </div>
        <div class="col-md-5 img"></div>
        <div class="col-md-7 form">
            <h2 class="titulo-h2">Register here for more information</h2>
            <p><strong>Tell us a little about your child we’ll take care of the rest.</strong></p>
            <div class="content-form">
                <!-- FORM HS -->
                <div id="hs_form_target_widget_1614708359277"></div>

                <script src="https://peru.berlitzuavp.live/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js"></script>

                <!--[if lte IE 8]>
                <script charset="utf-8" src="https://js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->

                <script data-hs-allowed="true" src="https://peru.berlitzuavp.live/_hcms/forms/v2.js"></script>

                <script data-hs-allowed="true">
                    var options = {
                        portalId: '9068661',
                        formId: 'f93cdcbd-cdc7-4b1e-a563-f0030b620d78',
                        formInstanceId: '8899',
                        pageId: '113138659853',
                        region: 'na1',
                        pageName: "Mathpal - Contact",
                        redirectUrl: "https:\/\/www.mathpal.us\/thank-you",
                        css: '',
                        target: '#hs_form_target_widget_1614708359277',
                        contentType: "landing-page",
                        formsBaseUrl: '/_hcms/forms/',
                        formData: {
                            cssClass: 'hs-form stacked hs-custom-form'
                        },
                        onFormReady: function($form) {
                            $('.hs-form-radio').on('click', function() {
                                console.log('Se hizo clic en:', $(this));
                                let divs = document.querySelectorAll(".hs-form-radio");

                                divs.forEach(div => {
                                    div.classList.remove("active");
                                });

                                $(this).addClass('active');

                            });
                        }

                    };

                    options.getExtraMetaDataBeforeSubmit = function() {
                        var metadata = {};
                        if (hbspt.targetedContentMetadata) {
                            var count = hbspt.targetedContentMetadata.length;
                            var targetedContentData = [];
                            for (var i = 0; i < count; i++) {
                                var tc = hbspt.targetedContentMetadata[i];
                                if (tc.length !== 3) {
                                    continue;
                                }
                                targetedContentData.push({
                                    definitionId: tc[0],
                                    criterionId: tc[1],
                                    smartTypeId: tc[2]
                                });
                            }
                            metadata["targetedContentMetadata"] = JSON.stringify(targetedContentData);
                        }
                        return metadata;
                    };
                    hbspt.forms.create(options);
                </script>
                <!-- END FORM HS -->
            </div>
        </div>
    </div>
</div>

<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>


