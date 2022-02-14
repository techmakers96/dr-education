<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

            <img class="paraxImg paraxImg-first js-has-anim" anim-type="parallax" anim-ver="70" src="https://implantologie-kurs.cezanne-dental.de/app/themes/cezanne/images/parallax-1.png" style="opacity: 1" alt="" />
            <div class="s s-courses js-section"  data-hash="COURSES">
                <div class="l-container">
                    <h4 class="s-title-center"><!-- الطباعة والاستدعاء حسب نوع الأرشيف - فئة أو تاق أومؤلف - (category / author / tag) --><?php the_archive_title() ?></h4>
                </div>
                <div class="s-courses_itemWrap">
                    <div class="l-container">
                    <?php 
                    // The Loop
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post(); //post
                    ?>
                        <div class="g-row">
                            <div class="g g-sm-6 g-md-12">
                                <div class="s-courses_item s-course_item-wide js-course-preview js-has-anim" anim-type="fadeIn" anim-delay="5" data-type="Curriculum">
                                    <p class="course_pretitle"><?php /* دالة لعرض التاق */ the_category(', ') ?></p>
                                    <h3><?php /* دالة لاستدعاء عنوان البوست */ the_title() ?></h3>
                                    <div class="s-courses_item_content">
                                        <div class="typography">
                                            <p><?php /* دالة لاستدعاء محتوى البوست */ the_excerpt() ?></p>
                                        </div>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course btn is-Curriculum">REQUEST</a>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course-more btn-plain is-Curriculum">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="g g-sm-6 g-md-6">
                                <div class="s-courses_item js-places-hook js-course-preview js-has-anim" anim-type="fadeIn" anim-delay="5" data-type="Accelerator">
                                    <p class="course_pretitle"><?php /* دالة لعرض التاق */ the_category(', ') ?></p>
                                    <h3><?php /* دالة لاستدعاء عنوان البوست */ the_title() ?></h3>
                                    <p data-places="7" class="js-course-places" style="color: #dd3333">Only % seats left.</p>
                                    <div class="s-courses_item_content">
                                        <div class="s-courses_item_content_inner">
                                            <div class="typography-flush-btm">
                                                <p><?php /* دالة لاستدعاء محتوى البوست */ the_excerpt() ?></p>
                                            </div>
                                        </div>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course btn js-ga-event is-Accelerator" ga-action="DisplayForm" ga-cat="Kurs" ga-label="Accelerator">REQUEST</a>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course-more btn-plain  js-ga-event is-Accelerator" ga-action="DisplayInfo" ga-cat="Kurs" ga-label="Accelerator">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="g g-sm-6 g-md-6">
                                <div class="s-courses_item js-places-hook js-course-preview js-has-anim" anim-type="fadeIn" anim-delay="5" data-type="Advanced">
                                    <p class="course_pretitle"><?php /* دالة لعرض التاق */ the_category(', ') ?></p>
                                    <h3><?php /* دالة لاستدعاء عنوان البوست */ the_title() ?></h3>
                                    <p data-places="4" class="js-course-places" style="color: #dd3333">Only % seats left.</p>
                                    <div class="s-courses_item_content">
                                        <div class="s-courses_item_content_inner">
                                            <div class="typography-flush-btm">
                                                <p>Focus on Advanced Level Implant Cases</p>
                                            </div>
                                            <span class="course_topic">Membrane Handling</span>
                                            <span class="course_topic">Bone Replacement Materials</span>
                                            <span class="course_topic">Internal Sinus Lift</span>
                                            <span class="course_topic">Bone Spreading</span>
                                        </div>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course btn js-ga-event is-Advanced" ga-action="DisplayForm" ga-cat="Kurs" ga-label="Advanced">REQUEST</a>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course-more btn-plain  js-ga-event is-Advanced" ga-action="DisplayInfo" ga-cat="Kurs" ga-label="Advanced">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="g g-sm-6 g-md-6">
                                <div class="s-courses_item js-places-hook js-course-preview js-has-anim" anim-type="fadeIn" anim-delay="5" data-type="Master-Class">
                                    <p class="course_pretitle"><?php /* دالة لعرض التاق */ the_category(', ') ?></p>
                                    <h3><?php /* دالة لاستدعاء عنوان البوست */ the_title() ?></h3>
                                    <p data-places="3" class="js-course-places" style="color: #dd3333">Only % seats left.</p>
                                    <div class="s-courses_item_content">
                                        <div class="s-courses_item_content_inner">
                                            <div class="typography-flush-btm">
                                                <p>Focus on Very Challenging Implant Cases</p>
                                            </div>
                                            <span class="course_topic">Membrane Handling</span>
                                            <span class="course_topic">Bone Replacement Materials</span>
                                            <span class="course_topic">Internal Sinus Lift</span>
                                            <span class="course_topic">Bone Spreading</span>
                                            <span class="course_topic">External Sinus Lift</span>
                                            <span class="course_topic">Bone Block</span>
                                            <span class="course_topic">Soft Tissue Management</span>
                                            <span class="course_topic">All on 4 OP’s</span>
                                            <span class="course_topic">Anxiety Patients with ITN</span>
                                            <span class="course_topic">Navigated Implantation</span>
                                        </div>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course btn js-ga-event is-Master-Class" ga-action="DisplayForm" ga-cat="Kurs" ga-label="Master-Class">REQUEST</a>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course-more btn-plain  js-ga-event is-Master-Class" ga-action="DisplayInfo" ga-cat="Kurs" ga-label="Master-Class">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="g g-sm-6 g-md-6">
                                <div class="s-courses_item js-places-hook js-course-preview js-has-anim" anim-type="fadeIn" anim-delay="5" data-type="Implant prosthetics">
                                    <p class="course_pretitle"><?php /* دالة لعرض التاق */ the_category(', ') ?></p>
                                    <h3><?php /* دالة لاستدعاء عنوان البوست */ the_title() ?></h3>
                                    <p data-places="3" class="js-course-places" style="color: #dd3333">Only % seats left.</p>
                                    <div class="s-courses_item_content">
                                        <div class="s-courses_item_content_inner">
                                            <div class="typography-flush-btm">
                                                <p>Focus on prosthetics</p>
                                            </div>
                                            <span class="course_topic">Impression of the exposed implants</span>
                                            <span class="course_topic">Digital temporomandibular joint measurement</span>
                                            <span class="course_topic">Functional diagnostics with Zebris</span>
                                            <span class="course_topic">All on 4 constructions</span>
                                            <span class="course_topic">Abutment specimens with individual abutments</span>
                                            <span class="course_topic">Combined working with telescopes and bars</span>
                                            <span class="course_topic">3D drilling templates</span>
                                            <span class="course_topic">CAD CAM designs</span>
                                        </div>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course btn js-ga-event is-Implant prosthetics" ga-action="DisplayForm" ga-cat="Kurs" ga-label="Implant prosthetics">REQUEST</a>
                                        <a href="<?php /* دالة ترجع رابط البوست */ the_permalink() ?>" class="js-show-course-more btn-plain  js-ga-event is-Implant prosthetics" ga-action="DisplayInfo" ga-cat="Kurs" ga-label="Implant prosthetics">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        // End Loop
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="l-container">
                    <div class="s-courses_callTo js-has-anim" anim-type="fadeIn" anim-delay="5">
                        <h4 class="s-courses_callTo_title">Individual Coaching Implantology</h4>
                        <div class="typography">
                            Tailored to your individual knowledge and experiences you place implants, carry out sinus lift or bone block surgeries in an intense individual coaching under the supervision and guidance of a leading implantologists. Whether within the Cézanne Clinic or on-site in your dental practice, your individual patient cases become your practical learning sessions specified to your needs.
                        </div>
                        <span>
                            <a href="#" class="js-show-course btn-gradient js-ga-event" ga-action="DisplayForm" ga-cat="Kurs" ga-label="Premium">REQUEST YOUR PREMIUM COURSE NOW</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
