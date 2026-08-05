<?php
/*
 * Template Name: State Exam
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/submenu-programas.php');
?>


<div class="container-fluid header-title-img bg-20">
    <div class="container">
        <div class="row">
            <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-title-2.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1 txt mt-4 fade-in-right">
                <h2 class="tag-1-lg mb-4">Reach your full potential</h2>
                <h1 class="titulo-h2 mt-4 " style="color:#9300ff">State Exam Math Prep</h1>
                <p>Train your skills, organize your studies, and gain the confidence to excel.</p>
                <a href="#block_precios" class="btn-1 c-hover-2">Go for it! &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid suscripcion-1 g-0 bg-16" id="block_precios">
    <div class="container c-slider-3">
        <div class="row bloques-title bloques-title-2">
            <div class="col-12 text-center ">
                <h4 class="titulo-h4 color-blanco fade-in">Select the best plan for your child: </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php
                include(TEMPLATEPATH . '/template-parts/programan-state-exam.php');
                ?>
            </div>
        </div>
    </div>
</div>







<div class="container-fluid c-footer resultados bg-1">
    <div class="container fade-in">
        <div class="row">
            <div class="col-md-6">
                <div class="img">
                    <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/State_Exams.png" alt="" class="img-fluid">
                </div>
                <p class="mt-4">Standardized tests that measure progress and readiness for the future.</p>
            </div>
            <div class="col-md-6 txt">
                <div class="item">
                    <div class="det">
                        <span class="nro">1
                            <i class="fa-solid fa-chart-simple"></i>
                        </span>
                        <p>Students (ages 8–18) take state exams in math, reading, science, and other key subjects.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="Learn">2
                            <i class="fa-solid fa-school"></i>
                        </span>
                        <p>Each state sets its own standards to prepare students for the next stage of learning.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro">3
                            <i class="fa-solid fa-bullseye"></i>
                        </span>
                        <p>Good preparation makes a big difference in your child’s success.</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="#block_precios" class="btn-1 mt-4 bg-morado c-hover-1" tabindex="0">Get starterd today! &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>







<div class="container-fluid table-1 fade-in-top">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h4 class="titulo-h4">List of state exams</h4>
            </div>
        </div>
        <div class="row c-overflow">
            <div class="col-md-12">
                <div class="overflow-auto">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="header" scope="col">State</th>
                                <th class="header" scope="col">Examen name</th>
                                <th class="header" scope="col">Grades</th>
                                <th class="header" scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alabama</td>
                                <td>Scantron Performance test</td>
                                <td>3–8</td>
                                <td>March</td>
                            </tr>
                            <tr>
                                <td>Alaska</td>
                                <td>Performance Evaluation for Alaska's Schools (PEAKS)</td>
                                <td>3-12</td>
                                <td>March / Apri</td>
                            </tr>
                            <tr>
                                <td>Arizona</td>
                                <td>AZMerit exam</td>
                                <td>3-12</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Arkansas</td>
                                <td>ACT Aspire</td>
                                <td>3-12</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>California</td>
                                <td>Smarter Balanced test</td>
                                <td>3-12</td>
                                <td>January -- July</td>
                            </tr>
                            <tr>
                                <td>Colorado</td>
                                <td>Colorado Measures of Academic Success (CMAS)</td>
                                <td>3-8</td>
                                <td>March / Apri</td>
                            </tr>
                            <tr>
                                <td>Colorado</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Connecticut</td>
                                <td>Smarter Balanced test</td>
                                <td>3-8</td>
                                <td>March / June</td>
                            </tr>
                            <tr>
                                <td>Connecticut</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Delaware</td>
                                <td>Smarter Balanced test</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Delaware</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>District of Columbia</td>
                                <td>Partnership for Assessment of Readiness for College and Careers (PARCC)</td>
                                <td>3-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Florida</td>
                                <td>Florida Assessment of Student Thinking (FAST)</td>
                                <td>3-12</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Georgia</td>
                                <td>Georgia Milestones Assessment</td>
                                <td>3-12</td>
                                <td>April</td>
                            </tr>
                            <tr>
                                <td>Hawaii</td>
                                <td>Smarter Balanced test</td>
                                <td>3-8</td>
                                <td>June</td>
                            </tr>
                            <tr>
                                <td>Hawaii</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Idaho</td>
                                <td>Smarter Balanced test</td>
                                <td>3-8</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Idaho</td>
                                <td>PSAT&nbsp;/ SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Illinois</td>
                                <td>Illinois Assessment of Readiness (IAR)</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Illinois</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Indiana</td>
                                <td>ILEARN test</td>
                                <td>3-8</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Indiana</td>
                                <td>ISTEP+ test</td>
                                <td>9-12</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Iowa</td>
                                <td>Iowa Statewide Assessment of Student Progress (ISASP)</td>
                                <td>3-12</td>
                                <td>March -- May</td>
                            </tr>
                            <tr>
                                <td>Kansas</td>
                                <td>Kansas Assessment Program (KAP)</td>
                                <td>3-12</td>
                                <td>March -- May</td>
                            </tr>
                            <tr>
                                <td>Kentucky</td>
                                <td>Kentucky Performance Rating for Educational Progress (K-PREP)</td>
                                <td>3-8</td>
                                <td>March -- June</td>
                            </tr>
                            <tr>
                                <td>Kentucky</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Louisiana</td>
                                <td>Louisiana Educational Assessment Program (LEAP)</td>
                                <td>3-8</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Louisiana</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Maine</td>
                                <td>Maine Educational Assessment (MEA)</td>
                                <td>3-8</td>
                                <td>March / June</td>
                            </tr>
                            <tr>
                                <td>Maine</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Maryland</td>
                                <td>Maryland Comprehensive Assessment Program (MCAP)</td>
                                <td>3-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Massachusetts</td>
                                <td>Massachusetts Comprehensive Assessment System (MCAS)</td>
                                <td>3-12</td>
                                <td>May / June</td>
                            </tr>
                            <tr>
                                <td>Michigan</td>
                                <td>Michigan Student Test of Educational Progress (M-STEP)</td>
                                <td>3-8</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Michigan</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Minnesota</td>
                                <td>Minnesota Comprehensive Assessments (MCA)</td>
                                <td>3-12</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Mississippi</td>
                                <td>Mississippi Academic Assessment Program (MAAP)</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Mississippi</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Missouri</td>
                                <td>Missouri Assessment Program (MAP)</td>
                                <td>3-12</td>
                                <td>Frebruary / June</td>
                            </tr>
                            <tr>
                                <td>Montana</td>
                                <td>Smarter Balanced test</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Montana</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Nebraska</td>
                                <td>Nebraska Student-Centered Assessment System (NSCAS)</td>
                                <td>3-8</td>
                                <td>March -- April</td>
                            </tr>
                            <tr>
                                <td>Nebraska</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>New Hampshire</td>
                                <td>New Hampshire Statewide Assessment System (NHSAS)</td>
                                <td>3-8</td>
                                <td>March / June</td>
                            </tr>
                            <tr>
                                <td>New Hampshire</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>New Jersey</td>
                                <td>Assessment of Readiness for College and Careers (PARCC) or the New Jersey Student Learning Assessments (NJSLA)</td>
                                <td>3-12</td>
                                <td>March -- June</td>
                            </tr>
                            <tr>
                                <td>New Mexico</td>
                                <td>Partnership for Assessment of Readiness for College and Careers (PARCC) or the New Mexico Measures of Student Success and Achievement (NM-MSSA).</td>
                                <td>3-12</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>New York</td>
                                <td>New York State Assessments (NYSA)</td>
                                <td>3-8</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>New York</td>
                                <td>Regents Examinations</td>
                                <td>9-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>North Carolina</td>
                                <td>North Carolina End-of-Grade Tests (EOG)</td>
                                <td>3-8</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>North Carolina</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>North Dakota</td>
                                <td>North Dakota State Assessment (NDSA)</td>
                                <td>3-12</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Ohio</td>
                                <td>Ohio Achievement Assessment (OAA)</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Ohio</td>
                                <td>Ohio’s State Tests</td>
                                <td>9-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Oklahoma</td>
                                <td>Oklahoma School Testing Program (OSTP)</td>
                                <td>3-8</td>
                                <td>April --- May</td>
                            </tr>
                            <tr>
                                <td>Oklahoma</td>
                                <td>ACT / SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Oregon</td>
                                <td>Smarter Balanced test</td>
                                <td>3-12</td>
                                <td>January -- June</td>
                            </tr>
                            <tr>
                                <td>Pennsylvania</td>
                                <td>Pennsylvania System of School Assessment (PSSA)</td>
                                <td>3-8</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Pennsylvania</td>
                                <td>Keystone end-of-course tests</td>
                                <td>9-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Rhode Island</td>
                                <td>Rhode Island Comprehensive Assessment System (RICAS)</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Rhode Island</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>South Carolina</td>
                                <td>SCReady</td>
                                <td>3-8</td>
                                <td>April / June</td>
                            </tr>
                            <tr>
                                <td>South Carolina</td>
                                <td>ACT / SAT</td>
                                <td>9-12</td>
                                <td>January / March</td>
                            </tr>
                            <tr>
                                <td>South Dakota</td>
                                <td>Smarter Balanced test</td>
                                <td>3-12</td>
                                <td>March -- May</td>
                            </tr>
                            <tr>
                                <td>Tennessee</td>
                                <td>Tennessee Comprehensive Assessment Program (TCAP)</td>
                                <td>3-8</td>
                                <td>April / May</td>
                            </tr>
                            <tr>
                                <td>Tennessee</td>
                                <td>TNReady test</td>
                                <td>9-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>Texas</td>
                                <td>State of Texas Assessments of Academic Readiness (STAAR)</td>
                                <td>3-12</td>
                                <td>May / June</td>
                            </tr>
                            <tr>
                                <td>Utah</td>
                                <td>Readiness Improvement Success Empowerment (RISE)</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Utah</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Vermont</td>
                                <td>Smarter Balanced test</td>
                                <td>3-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Virginia</td>
                                <td>Standards of Learning (SOL) test</td>
                                <td>3-12</td>
                                <td>March / Apri</td>
                            </tr>
                            <tr>
                                <td>Washington</td>
                                <td>Smarter Balanced test</td>
                                <td>3-12</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>West Virginia</td>
                                <td>West Virginia General Summative Assessment (WVGSA)</td>
                                <td>3-8</td>
                                <td>Spring</td>
                            </tr>
                            <tr>
                                <td>West Virginia</td>
                                <td>SAT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Wisconsin</td>
                                <td>Wisconsin Forward test</td>
                                <td>3-8</td>
                                <td>March / May</td>
                            </tr>
                            <tr>
                                <td>Wisconsin</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>
                            <tr>
                                <td>Wyoming</td>
                                <td>Wyoming Test of Proficiency and Progress (WY-TOPP)</td>
                                <td>3-8</td>
                                <td>April --- May</td>
                            </tr>
                            <tr>
                                <td>Wyoming</td>
                                <td>ACT</td>
                                <td>9-12</td>
                                <td>National Dates</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>








<div class="container-fluid c-footer resultados">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="titulo-h4 mb-4 fade-in">Tips for preparing your state exam</h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 txt">
                <div class="item fade-in" data-delay="100" data-duration="500">
                    <div class="det">
                        <span class="nro">
                            1
                        </span>
                        <h4>Create a routine</h4>
                        <p>Study 30–45 minutes every day.</p>
                    </div>
                </div>
                <div class="item fade-in" data-delay="300" data-duration="500">
                    <div class="det">
                        <span class="Learn">
                            2
                        </span>
                        <h4>Practice with real tests</h4>
                        <p>Get used to the exam format and timing.</p>
                    </div>
                </div>


            </div>
            <div class="col-md-6 txt">
                <div class="item fade-in" data-delay="500" data-duration="500">
                    <div class="det">
                        <span class="nro">
                            3
                        </span>
                        <h4>Focus on weak areas</h4>
                        <p>Spend extra time where you need it most.</p>
                    </div>
                </div>
                <div class="item fade-in" data-delay="700" data-duration="500">
                    <div class="det">
                        <span class="Learn">
                            4
                        </span>
                        <h4>Get expert support</h4>
                        <p>With a MathPal tutor, your progress is guaranteed.</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h5 class="titulo-h5 fade-in-top">Prepare smarter, not harder — with MathPal by your side.</h5>
            </div>
        </div>
    </div>
</div>





<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/ixl.php');
?>


<div class="container-fluid banner-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center fade-in">
                <h4 class="titulo-h4">Ready to succeed?</h4>
                <h3 class="titulo-h3 mb-4">Start your State Exam Preparation today</h3>
                <a href="#block_precios" class="btn-1 mt-4 c-hover-1" tabindex="0">Explore exam prep plans &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>