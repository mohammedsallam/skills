<!-- Lesson list title -->

<div class="card text-center mt-3 mb-5">

    <a target="_blank" class="btn btn-primary col-lg-1 m-auto" href="<?=$this->route->baseUrl() . 'chat'?>">Chat</a>

    <div class="card-body">
        <h2>Dear student here list of lessons</h2>
    </div>
</div>

<div class="col-lg-12 row">
    <!-- Lesson side list-->

    <div class="card col-lg-3 mb-5 list_side">
        <div class="card-header">
            <div class="card-title">
                <h4>Lessons list</h4>
            </div>
        </div>

        <ul class="list-group list-group-flush">
            <?php
            foreach ($lessons as $lesson) { ?>
                <li class="list-group-item">
                    <?= $this->filter->string($lesson->lesson_title) ?>
                    <span class="fa fa-check text-success d-none"></span>
                </li>
            <?php } ?>
        </ul>
    </div>

    <!-- lesson content -->

    <div class="col-lg-9 mx-auto row coder my-4">
        <div class="steps-form-2">
            <div class="steps-row-2 surface_Track d-flex justify-content-between">
                <div class="steps-step-2">
                    <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0 clicked" data-toggle="tooltip" data-placement="top" title="Basic Information">Lesson 1</a>
                </div>
                <div class="steps-step-2">
                    <a href="#step-2" type="button" class="btn  btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data">Lesson 2</a>
                </div>
                <div class="steps-step-2">
                    <a href="#step-3" type="button" class="btn  btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions">Lesson 3</a>
                </div>
                <div class="steps-step-2">
                    <a href="#step-4" type="button" class="btn  btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish">Lesson 4</a>
                </div>
                <div class="steps-step-2">
                    <a href="#step-5" type="button" class="btn  btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish">Lesson 5</a>
                </div>
                <div class="steps-step-2">
                    <a href="#step-6" type="button" class="btn  btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish">Lesson 6</a>
                </div>
                <div class="steps-step-2">
                    <a href="#step-7" type="button" class="btn  btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish">Lesson 7</a>
                </div>
            </div>
        </div>

        <!-- First Step -->
        <div class="row setup-content-2" id="step-1">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you will be able to:</h6>
                        <ul>
                            <li>Acknowledge definition of HTML.</li>
                            <li>Realize HTML rules.</li>
                            <li>Comprehend the structure of creating web page using HTML.</li>
                        </ul>
                    </div>
                </div>
                <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=1uDX6NRvz17a4h7zkOUslHgQCuPHnWV1E">Lesson 1 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class=" float-left" src="https://www.youtube.com/embed/hQJ7Sw7AilE" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe class="float-left" src="https://www.youtube.com/embed/OCOxYgZFtsk" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                    <label for="que_1" class="form-group w-100">
                        <input type="text" disabled value="……………… Extension is used to save a webpage with html code." class="form-control font-weight-bold" id="que_1">
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_1" name="mark">
                        <label class="custom-control-label" for="check_1" > <?= $this->filter->string('ttml') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_2" name="mark">
                        <label class="custom-control-label right_answer" for="check_2" > <?= $this->filter->string('html') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_3" name="mark">
                        <label class="custom-control-label" for="check_3" > <?= $this->filter->string('thml') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_4" name="mark">
                        <label class="custom-control-label" for="check_4" > <?= $this->filter->string('hmtl') ?> </label>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="To show the text on the web page to be written in the text area...................." class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_5" name="mark">
                        <label class="custom-control-label right_answer" for="check_5" > <?= $this->filter->string('body') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_6" name="mark">
                        <label class="custom-control-label" for="check_6" > <?= $this->filter->string('head') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_7" name="mark">
                        <label class="custom-control-label" for="check_7" > <?= $this->filter->string('title') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_8" name="mark">
                        <label class="custom-control-label" for="check_8" > <?= $this->filter->string('Paragraph') ?> </label>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 3</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="HTML shortcut refers................................. " class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_9" name="mark">
                        <label class="custom-control-label" for="check_9" > <?= $this->filter->string('Hyper Text Mark-up Library') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_10" name="mark">
                        <label class="custom-control-label" for="check_10" > <?= $this->filter->string('Help Table Made Layout') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_11" name="mark">
                        <label class="custom-control-label right_answer" for="check_11" > <?= $this->filter->string('Hyper Text Mark-up Language') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_12" name="mark">
                        <label class="custom-control-label" for="check_12" > <?= $this->filter->string('Hyper Text Make-up Library') ?> </label>
                    </div>
                </form>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Write the structure of creating web site using HTML .</p>
            </div>
        </div>

        <!-- Second Step -->
        <div class="row setup-content-2" id="step-2">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you will be able to:</h6>
                        <ul>
                            <li>Comprehend the used code to add text for a web page</li>
                            <li>Can Change the direction of the web page using "dir" property.</li>
                            <li>Apply the practical example for changing web page content direction from right to left.</li>
                        </ul>
                    </div>
                </div>
                <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=1OHug4iifuYXS4WaFJSij7ZpEImGYbZ7s">Lesson 2 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class="" src="https://www.youtube.com/embed/nTe5BoOSYGA" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe src="https://www.youtube.com/embed/wS8M0d5yFu4" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="User command to change the page orientation is" class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_13" name="mark">
                        <label class="custom-control-label" for="check_13" > <?= $this->filter->string('src') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_14" name="mark">
                        <label class="custom-control-label right_answer" for="check_14" > <?= $this->filter->string('dir') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_15" name="mark">
                        <label class="custom-control-label" for="check_15" > <?= $this->filter->string('img') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_16" name="mark">
                        <label class="custom-control-label" for="check_16" > <?= $this->filter->string('ort') ?> </label>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="…………… is the area in which he writes the content of the page" class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_17" name="mark">
                        <label class="custom-control-label" for="check_17" > <?= $this->filter->string('<html>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_18" name="mark">
                        <label class="custom-control-label" for="check_18" > <?= $this->filter->string('<head>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_19" name="mark">
                        <label class="custom-control-label right_answer" for="check_19" > <?= $this->filter->string('<body>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_20" name="mark">
                        <label class="custom-control-label" for="check_20" > <?= $this->filter->string('<title>') ?> </label>
                    </div>
                </form>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Use “dir” property to change the direction of the web page .</p>

            </div>
        </div>

        <!-- Third Step -->
        <div class="row setup-content-2" id="step-3">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you will be able to:</h6>
                        <ul>
                            <li>Acknowledge the function of the &ltbr&gt tag.</li>
                            <li>Using the tag  <?= htmlentities('<center>...</center>') ?> to put the text in middle of the line.</li>
                            <li>Apply the symbol <?= htmlentities('"&nbsp;"') ?> to add blank space between words.</li>
                            <li>Analyzing the properties of the &ltfont&gt tag.</li>
                            <li> Distinguish between (underline/ bold/italic) to format the font in the web page.</li>
                            <li> Apply a practical example for formatting the font in the web page.</li>
                        </ul>
                    </div>
                </div>
                    <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=1Vx7g9FSsxfWPq35oeHlT0cayzehJ_nr-">Lesson 3 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class="" src="https://www.youtube.com/embed/SDwh0QeF1xY" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe src="https://www.youtube.com/embed/flZc19YzpN0" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="To make the text appears on the Web page italic use................... " class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_21" name="mark">
                        <label class="custom-control-label" for="check_21" > <?= $this->filter->string('<u>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_22" name="mark">
                        <label class="custom-control-label right_answer" for="check_22" > <?= $this->filter->string('<i>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_23" name="mark">
                        <label class="custom-control-label" for="check_23" > <?= $this->filter->string('<b>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_24" name="mark">
                        <label class="custom-control-label" for="check_24" > <?= $this->filter->string('<t>') ?> </label>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="Command used to create a new line is …………" class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_25" name="mark">
                        <label class="custom-control-label right_answer" for="check_25" > <?= $this->filter->string('<br>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_26" name="mark">
                        <label class="custom-control-label" for="check_26" > <?= $this->filter->string('<rb>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_27" name="mark">
                        <label class="custom-control-label" for="check_27" > <?= $this->filter->string('<rc>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_28" name="mark">
                        <label class="custom-control-label" for="check_28" > <?= $this->filter->string('<pr>') ?> </label>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 3</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="To write text bold face are writing the letter" class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_29" name="mark">
                        <label class="custom-control-label" for="check_29" > <?= $this->filter->string('<u>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_30" name="mark">
                        <label class="custom-control-label right_answer" for="check_30" > <?= $this->filter->string('<b>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_31" name="mark">
                        <label class="custom-control-label" for="check_31" > <?= $this->filter->string('<c>') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_32" name="mark">
                        <label class="custom-control-label" for="check_32" > <?= $this->filter->string('<t>') ?> </label>
                    </div>
                </form>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Use font properties and change font formatting in your codes.</p>

            </div>
        </div>

        <!-- Fourth Step -->
        <div class="row setup-content-2" id="step-4">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample4">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you w`ill be able to:</h6>
                        <ul>
                            <li>Can select the background color for the web page by the property bgcolor.</li>
                            <li>Remember the used code to add image as a web page background.</li>
                        </ul>
                    </div>
                </div>
                <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=1eVKAU15bV0zYaRcZxbrhuMdwfEEB_K92">Lesson 4 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class="" src="https://www.youtube.com/embed/4IS_R2w0QlI" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe src="https://www.youtube.com/embed/ObZAdsjWASU" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="Select an image to be the background of the web page choose...................." class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_33" name="mark">
                        <label class="custom-control-label" for="check_33" > <?= $this->filter->string('BGCOLOR') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_34" name="mark">
                        <label class="custom-control-label right_answer" for="check_34" > <?= $this->filter->string('BACKGROUND') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_35" name="mark">
                        <label class="custom-control-label" for="check_35" > <?= $this->filter->string('COLOR') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_36" name="mark">
                        <label class="custom-control-label" for="check_36" > <?= $this->filter->string('GROUND') ?> </label>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body col-sm-10 m-auto lesson_question_form">
                <form action="">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                    <label for="" class="form-group w-100">
                        <input type="text" disabled value="To determine the background of the web page color we choose...................." class="form-control font-weight-bold" >
                    </label>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='1' class="custom-control-input " id="check_37" name="mark">
                        <label class="custom-control-label right_answer" for="check_37" > <?= $this->filter->string('BGCOLOR') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_38" name="mark">
                        <label class="custom-control-label" for="check_38" > <?= $this->filter->string('BACKGROUND') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_39" name="mark">
                        <label class="custom-control-label" for="check_39" > <?= $this->filter->string('COLOR') ?> </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input  type="radio" value='0' class="custom-control-input " id="check_40" name="mark">
                        <label class="custom-control-label" for="check_40" > <?= $this->filter->string('GROUND') ?> </label>
                    </div>
                </form>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Change the back ground color of web site.</p>
            </div>
        </div>

        <!-- Fiveth Step -->
        <div class="row setup-content-2" id="step-5">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample5">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you will be able to:</h6>
                        <ul>
                            <li>Acknowledge the tag to insert image in the web page.</li>
                            <li>Apply <?= htmlentities('<img>') ?> tag to Control the image dimension in the web page.</li>
                            <li>Using the <?= htmlentities('<img>') ?> tag to align the image through the property align.</li>
                        </ul>
                    </div>
                </div>
                <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=14Yl6H8yFfuIe0LijNeBDspCPfaRioRwq">Lesson 5 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class="" src="https://www.youtube.com/embed/dQJnEHBny1k" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe src="https://www.youtube.com/embed/-7bG8uI_CE8" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                <div class="card-body col-sm-10 m-auto lesson_question_form">
                    <form action="">
                        <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                        <label for="" class="form-group w-100">
                            <input type="text" disabled value="Property associated with the order <img> is the property………." class="form-control font-weight-bold" >
                        </label>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_41" name="mark">
                            <label class="custom-control-label" for="check_41" > <?= $this->filter->string('Path') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='1' class="custom-control-input " id="check_42" name="mark">
                            <label class="custom-control-label right_answer" for="check_42" > <?= $this->filter->string('Src') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_43" name="mark">
                            <label class="custom-control-label" for="check_43" > <?= $this->filter->string('Prc') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_44" name="mark">
                            <label class="custom-control-label" for="check_44" > <?= $this->filter->string('Hrc') ?> </label>
                        </div>
                    </form>
                    <hr>
                </div>
                <div class="card-body col-sm-10 m-auto lesson_question_form">
                    <form action="">
                        <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                        <label for="" class="form-group w-100">
                            <input type="text" disabled value="The measurement unit that used to measure the image dimensions is………" class="form-control font-weight-bold" >
                        </label>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='1' class="custom-control-input " id="check_45" name="mark">
                            <label class="custom-control-label right_answer" for="check_45" > <?= $this->filter->string('Pixel') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_46" name="mark">
                            <label class="custom-control-label" for="check_46" > <?= $this->filter->string('Centimeter') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_47" name="mark">
                            <label class="custom-control-label" for="check_47" > <?= $this->filter->string('Meter') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_48" name="mark">
                            <label class="custom-control-label" for="check_48" > <?= $this->filter->string('Mega') ?> </label>
                        </div>
                    </form>
                    <hr>
                </div>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Use HTML tags to insert an image and change its dimensions and align</p>

            </div>
        </div>

        <!-- sexth Step -->
        <div class="row setup-content-2" id="step-6">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample6">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you will be able to:</h6>
                        <ul>
                            <li>Acknowledge the used tag to Insert the sound as a background sound.</li>
                            <li> Use <?= htmlentities('<embed>') ?> tag to insert video in the web page.  </li>
                        </ul>
                    </div>
                </div>
                <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=1A1oqwRQFN83prW_zKsOc8f4JihXh0IXR">Lesson 6 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class="" src="https://www.youtube.com/embed/79uIGYDmvdM" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe src="https://www.youtube.com/embed/cLXY4cDrci0" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                <div class="card-body col-sm-10 m-auto lesson_question_form">
                    <form action="">
                        <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                        <label for="" class="form-group w-100">
                            <input type="text" disabled value="You can insert the sound as a background sound by……" class="form-control font-weight-bold" >
                        </label>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='1' class="custom-control-input " id="check_49" name="mark">
                            <label class="custom-control-label" for="check_49" > <?= $this->filter->string('<bgsound>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_50" name="mark">
                            <label class="custom-control-label" for="check_50" > <?= $this->filter->string('<bgvoice>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_51" name="mark">
                            <label class="custom-control-label" for="check_51" > <?= $this->filter->string('<bgaudio>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_52" name="mark">
                            <label class="custom-control-label" for="check_52" > <?= $this->filter->string('<backgroundsound>') ?> </label>
                        </div>
                    </form>
                    <hr>
                </div>
                <div class="card-body col-sm-10 m-auto lesson_question_form">
                    <form action="">
                        <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                        <label for="" class="form-group w-100">
                            <input type="text" disabled value="You can insert video in the web page by ………" class="form-control font-weight-bold" >
                        </label>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_53" name="mark">
                            <label class="custom-control-label" for="check_53" > <?= $this->filter->string('<bgvideo>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='1' class="custom-control-input " id="check_54" name="mark">
                            <label class="custom-control-label" for="check_54" > <?= $this->filter->string('<embed>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_55" name="mark">
                            <label class="custom-control-label" for="check_55" > <?= $this->filter->string('<insertvideo>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_56" name="mark">
                            <label class="custom-control-label" for="check_56" > <?= $this->filter->string('<videobg>') ?> </label>
                        </div>
                    </form>
                    <hr>
                </div>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Use HTML tags to insert sound as a background sound.</p>
                <p class="lead border rounded p-3">- Use &lt;embed&gt; tag to insert video in web site.</p>

            </div>
        </div>

        <!-- seventh Step -->
        <div class="row setup-content-2" id="step-7">
            <div class="col-md-12">
                <p class="my-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                        Show Lesson objectives
                    </button>
                </p>
                <div class="collapse" id="collapseExample7">
                    <div class="card card-body">
                        <h6>By the end of this lesson, you will be able to:</h6>
                        <ul>
                            <li>Acknowledge definition of hyperlink.</li>
                            <li>Realize the function of <?= htmlentities('<a> … </a>') ?> tag. </li>
                            <li>Can insert hyperlink to an image.</li>
                        </ul>
                    </div>
                </div>
                <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="https://drive.google.com/open?id=1FPCS1x2-GvL38e4GcRjWy7iDz90kJs88">Lesson 7 Book</a></strong></h3>
                    <div class="form-group md-form d-flex justify-content-center">
                        <div class="lesson_video">
                            <iframe class="" src="https://www.youtube.com/embed/hU_hx09fzI8" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe src="https://www.youtube.com/embed/tYr9Yo2gtMI" allowfullscreen></iframe>
                        </div>
                    </div>
                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                <a href="<?= $this->route->baseUrl() . 'measure/surfaceAfter'?>" class="btn btn-success btn-rounded float-right">Submit</a>
                <div class="card-body col-sm-10 m-auto lesson_question_form">
                    <form action="">
                        <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 1</h4>
                        <label for="" class="form-group w-100">
                            <input type="text" disabled value="It <A> is used in.................... within the web page." class="form-control font-weight-bold" >
                        </label>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_57" name="mark">
                            <label class="custom-control-label" for="check_57" > <?= $this->filter->string('Alignment of the text') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='1' class="custom-control-input " id="check_58" name="mark">
                            <label class="custom-control-label" for="check_58" > <?= $this->filter->string('Added a hyperlink>') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_59" name="mark">
                            <label class="custom-control-label" for="check_59" > <?= $this->filter->string('Video run') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_60" name="mark">
                            <label class="custom-control-label" for="check_60" > <?= $this->filter->string('Added a Video') ?> </label>
                        </div>
                    </form>
                    <hr>
                </div>
                <div class="card-body col-sm-10 m-auto lesson_question_form">
                    <form action="">
                        <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - 2</h4>
                        <label for="" class="form-group w-100">
                            <textarea disabled class="form-control font-weight-bold" >………… is a hyper image or a hypertext, connected to a title and when we click it, we move to this title and it can be in the same page or in another one, in the same site or in another one</textarea>
                        </label>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='1' class="custom-control-input " id="check_61" name="mark">
                            <label class="custom-control-label" for="check_61" > <?= $this->filter->string('Hyperlink') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_62" name="mark">
                            <label class="custom-control-label" for="check_62" > <?= $this->filter->string('Hypertitle') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_63" name="mark">
                            <label class="custom-control-label" for="check_63" > <?= $this->filter->string('Hypermilk') ?> </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input  type="radio" value='0' class="custom-control-input " id="check_64" name="mark">
                            <label class="custom-control-label" for="check_64" > <?= $this->filter->string('Hyperbink') ?> </label>
                        </div>
                    </form>
                    <hr>
                </div>
                <hr>
                <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                <p class="lead border rounded p-3">- Insert hyperlink to your website once as text and as an image again. </p>

            </div>
        </div>
        <hr>
        <div class="col-lg-12 row coder">
            <h3 class="text-center w-100 my-5 mx-auto text-success">Run your code here</h3>
            <div class="buttons col-lg-12 mb-5 text-center">
                <button id="run" class="btn btn-success">RUN</button>
                <button id="clear" class="btn btn-default">CLEAR</button>
            </div>
            <div class="col-lg-8">
                <textarea type="text" id="input" class="w-100 bg-dark text-success rounded px-2" placeholder="Write your code here"></textarea>
            </div>
            <div id="output" class="col-lg-4 output bg-dark d-flex align-items-center text-success">Execution will appear here</div>
        </div>
    </div>
</div>


<style>
    ::placeholder{
        color: #bf0000;
        font-family: Consolas;
    }
</style>
