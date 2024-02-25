<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-dark text-center">
                <h3 class="text-white">Basic Soap Notes</h3>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-light text-center">
                <lebel>
                    Enter Client Name
                </lebel>
                <input type="text" name="clientName" class="form-control" id="clientName" placeholder="Enter Client Name">
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<!-- Tabs navs -->
<ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link active" id="ex2-tab-1" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">TREATMENT GOAL</a>
    </li>
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link" id="ex2-tab-2" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">TREATMENT NOTE</a>
    </li>
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link" id="ex2-tab-3" href="#ex2-tabs-3" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">ATTACHMENT</a>
    </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
    <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="card border mt-3 mb-4">
                        <div class="d-flex align-items-center m-1">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                What is the primary reason for visit?
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="btn-group-vertical w-100" data-toggle="buttons">
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve pain
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve tension
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve stress
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve anxiety
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Improve mobility
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Improve quality of life (sleep, mood, etc.)
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relaxation
                                </label>
                                <level class="btn btn-light btn-lg mb-2 p-2">
                                    <input type="checkbox" name="other" value="other" autocomplete="off">Others
                                </level>
                                <div class="w-100">
                                    <textarea name="general_soap_Other_textarea" id="otherText" class="form-control mb-2" placeholder="Please type your answer"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border mt-3 mb-4">
                        <div class="d-flex align-items-center m-1">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Have we treated you for this in the past?
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="btn-group-vertical w-100" data-toggle="buttons">
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Yes
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    NO
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Unsure
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Treatment Goal
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatGoal" id="basic_soap_treatment_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_treatment_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <a href="{{url("#")}}" class="btn btn-outline-primary">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    Submit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-8 border mt-3 mb-3">
                            <div class="card mb-4">
                                <div class="d-flex align-items-center m-2 p-2">
                                    <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                    <h5 class="m-3">
                                        Click on the image to start markup
                                    </h5>
                                </div>
                                <hr>
                                <div class="m-1">
                                    <div class="p-2" >
                                        <img class="w-50"  src="{{asset('images/treatment/mascular-back-man.jpg')}}" alt="arrow"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Subjective(Information provided by the client)
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatGoal" id="basic_soap_subjective_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_subjective_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Objective(Physical examination and text result)
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatGoal" id="basic_soap_objective_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_objective_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Assessment(summary and conclusion from examination)
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatGoal" id="basic_soap_assessment_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_assessment_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Treatment Plan
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatGoal" id="basic_soap_treatment_plan_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_treatment_plan_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <button class="btn btn-outline-primary">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="card mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Upload any external files here...
                            </h5>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center m-1">
                            <button class="btn btn-outline-danger">UPLOAD FILE</button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <button class="btn btn-outline-primary">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabs content -->


<script>

    function initializeSpeechRecognition(textareaId, buttonId) {
        const textarea = document.getElementById(textareaId);
        const button = document.getElementById(buttonId);
        let recognition;

        function startRecognition() {
            recognition = new (webkitSpeechRecognition || SpeechRecognition)();
            recognition.continuous = true;
            recognition.interimResults = true;

            recognition.onresult = (event) => {
                let result = '';
                for (let i = event.resultIndex; i < event.results.length; i++) {
                    if (event.results[i].isFinal) {
                        result += event.results[i][0].transcript + ' ';
                    }
                }
                textarea.value += result;
            };

            recognition.onend = () => {
                updateButton(false);
            };

            recognition.start();
            updateButton(true);
        }

        function stopRecognition() {
            if (recognition && recognition.recognizing) {
                recognition.stop();
                updateButton(false);
            }
        }

        function toggleRecognition() {
            if (recognition && recognition.recognizing) {
                stopRecognition();
            } else {
                startRecognition();
            }
        }

        function updateButton(isActive) {
            button.classList.toggle('active', isActive);
            const imageName = isActive ? 'microphone.png' : 'microphone-listening.png';
            button.innerHTML = `<img class="nav-logo mx-2" src="{{asset('images/${imageName}')}}" alt="microphone"/>`;
        }

        button.addEventListener('click', toggleRecognition);
    }

    initializeSpeechRecognition('basic_soap_treatment_textarea', 'basic_soap_treatment_button');
    initializeSpeechRecognition('basic_soap_subjective_notes_textarea', 'basic_soap_subjective_notes_button');
    initializeSpeechRecognition('basic_soap_objective_notes_textarea', 'basic_soap_objective_notes_button');
    initializeSpeechRecognition('basic_soap_assessment_notes_textarea', 'basic_soap_assessment_notes_button');
    initializeSpeechRecognition('basic_soap_treatment_plan_textarea', 'basic_soap_treatment_plan_button');


    // Initialization for ES Users
    document.addEventListener('DOMContentLoaded', function () {// Initialization for tabs
        new mdb.Tab(document.getElementById('ex1')).init();
    });

</script>

