<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyncxus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        :root {
            --custom-c1: 7, 30, 61;
            --custom-c2: 31, 66, 135;
            --custom-c3: 39, 142, 165;
            --custom-c4: 33, 230, 193;
            --custom-c1-h: #071e3d;
            --custom-c2-h: #1f4287;
            --custom-c3-h: #278ea5;
            --custom-c4-h: #21e6c1;
            --bs-light-rgb: var(--custom-c4);
            --bs-dark-rgb: var(--custom-c1);
            --bs-primary-rgb: var(--custom-c3);
            --bs-secondary-rgb: var(--custom-c2);
        }

        .mt-10 {
            margin-top: 12rem;
        }

        .mt-12 {
            margin-top: 15rem;
        }

        .btn-primary {
            --bs-btn-bg: var(--custom-c3-h);
            --bs-btn-hover-color: #000000;
            --bs-btn-hover-bg: var(--custom-c4-h);
            --bs-btn-border-color: #e9e9e9;
            --bs-btn-hover-border-color: #ffffff;
        }
    </style>
</head>

<body class="bg-dark">

    <div class="container-fluid mt-12 px-5">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-8 ">
                        <form action="POST">
                            <div class="container-fluid pt-5 pb-4 mx-5 bg-secondary rounded shadow border-dark">
                                <p class="h1 text-white text-center mb-5"> Welcome To Lyncxus Online</p>
                                <p class="h2 text-white text-center mb-2">Sign In</p>
                                <div class="d-flex flex-column px-3 mt-2">
                                    <label for="name" class="form-label text-white">Username</label>
                                    <input type="text" id="name" class="form-control">

                                    <label for="password" class="form-label text-white">Password</label>
                                    <input type="password" id="password" class="form-control">
                                    <div class="row d-flex flex-row justify-content-center mt-3">
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid mt-4 justify-content-center">
                                    <div class="d-flex flex-row justify-content-center">
                                        <a class="fs-6 text-white text-center" href="<?php echo base_url() . "lyncxus/public" . $registerpath ?>">
                                            Not Registered?
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </form>


                    </div>


                </div>

            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <!-- <div class="container-fluid mt-10">
        <div class="d-flex flex-column justify-content-center py-5">
            <h1 class="h1 text-white text-center my-5">Welcome To Lyncxus Online</h1>
            <h1 class="h5 text-white text-center mt-5">Website is currently in development</h1>
            <h1 class="h5 text-white text-center">If you have an idea on what to put here please email me at lydianjayarpilleda@gmail.com</h1>
            <h1 class="h5 text-white text-center mt-5">Yow wassup - LydianJay</h1>
            <h1 class="h5 text-white text-center">Tisaaasii!!! - SammyBoy</h1>
        </div>
    </div> -->
</body>

</html>