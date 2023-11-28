<x-header></x-header>
<x-nav></x-nav>
<div class="content">

    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="row justify-content-center m-5">
                    <div class="col-md-6 mt-3">

                        <h3 class="heading mb-4">Let's talk about everything!</h3>
                        <p><img src="../assets/imgs/undraw-contact.svg" alt="Image" class="img-fluid"></p>


                    </div>
                    <div class="col-md-6 mt-5 ">


                        <form>


                            <!-- Name -->
                            <div class="form-group position-relative">
                                <label for="formName" class="d-block">
                                    <i class="icon" data-feather="user"></i>
                                </label>
                                <input type="text" id="formName" class="form-control form-control-lg thick"
                                    placeholder="Name">
                            </div>

                            <!-- E-mail -->
                            <div class="form-group position-relative">
                                <label for="formEmail" class="d-block">
                                    <i class="icon" data-feather="mail"></i>
                                </label>
                                <input type="email" id="formEmail" class="form-control form-control-lg thick"
                                    placeholder="E-mail">
                            </div>

                            <!-- Message -->
                            <div class="form-group message">
                                <textarea id="formMessage" class="form-control form-control-lg" rows="7" placeholder="Mensagem"></textarea>
                            </div>

                            <!-- Submit btn -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" tabIndex="-1">Send message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
