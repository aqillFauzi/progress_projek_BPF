<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3 text-center"> <!-- Added text-center class -->
                    <div class="mb-3"> <!-- Added margin bottom -->
                        <a href="#" class="text-primary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-right-to-bracket me-2"></i> <!-- Added margin-right -->
                            <h3 class="text-primary">Login Admin</h3>
                        </a>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form action="<?= base_url('Auth/login'); ?>" class="user" method="POST">
                        <div class="form-floating mb-3">

                            <input type="text" value="<?= set_value('username'); ?>" name="username" class="form-control" id="username" placeholder="Username" required>
                            <label for="username">Username</label>

                            
                        </div>
                        <div class="form-floating mb-4">

                            <input type="password" value="<?= set_value('password'); ?>" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>

                    </form>
                </div>
                <button class="btn btn-warning" onclick="location.href='<?= base_url('Landingpage'); ?>'">Kembali </button>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>