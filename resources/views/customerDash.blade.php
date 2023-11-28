<x-headerDashborad></x-headerDashborad>
<x-sidebar></x-sidebar>

<style>
    .details {
        width: 1900px;
        margin-left: 400px;
        margin-right: auto;
        padding: 30px;
    }

    .recentCustomers {
        margin-top: 60px;
        width: 900px;
    }
</style>
<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>All User </h2>

        </div>
        <table>
@foreach ($users as $user )

@endforeach
            <tr>
                <td width="60px">
                    {{ $user->id }}
                </td>
                <td>
                    <h4>{{ $user->name }}</h4>
                </td>
                <td>
                    <h4>{{ $user->city }}</h4>
                </td>
                <td><button class="btn btn-danger">delete</button></td>
            </tr>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1 class="modal-title fs-5 justify-center text-center mt-2" id="staticBackdropLabel">Add New User</h1>

                <div class="modal-body">
                    <!-- Pills navs -->


                    <div class="tab-content">
                        <form>
                            <div class="text-center mb-3">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" class="form-control" />
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword">Password</label>
                                    <input type="password" id="loginPassword" class="form-control" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Phone</label>
                                    <input type="phone" id="loginName" class="form-control" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">National ID</label>
                                    <input type="number" id="loginName" class="form-control" />
                                </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>


                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
    integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
