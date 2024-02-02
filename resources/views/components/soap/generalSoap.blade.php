<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-dark text-center">
                <h3 class="text-white">General SOAP Note</h3>
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
        <a data-mdb-tab-init class="nav-link active" id="ex2-tab-1" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">TREATMENT NOTE</a>
    </li>
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link" id="ex2-tab-2" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">TREATMENT GOAL</a>
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
                                <textarea name="treatGoal" id="general_soap_treatment_goal_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="btn" id="general_soap_treatment_goal_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="arrow"/>
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                </button>
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
                                    Appointment notes
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatGoal" id="general_soap_appointment_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="general_soap_appointment_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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

    <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
        <div class="container">
            <!--
            <h3>Coming Soon </h3>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i>
                                Add Question
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>

    <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
        <div class="container">
            <!--
            <h3>
                Coming Soon
            </h3>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i>
                                Add Question
                            </button>
                        </div>
                    </div>
                </div>
            </div>
             -->
        </div>
    </div>
</div>


<script>
    // Function to initialize speech recognition for a specific text area and button
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
            const imageName = isActive ? 'microphone-listening.png' : 'microphone.png';
            button.innerHTML = `<img class="nav-logo mx-2" src="{{asset('images/${imageName}')}}" alt="microphone"/>`;
        }

        button.addEventListener('click', toggleRecognition);
    }

    initializeSpeechRecognition('general_soap_treatment_goal_textarea', 'general_soap_treatment_goal_button');
    initializeSpeechRecognition('general_soap_appointment_notes_textarea', 'general_soap_appointment_notes_button');

    document.addEventListener('DOMContentLoaded', function () {
        new mdb.Tab(document.getElementById('ex1')).init();
    });

</script>
