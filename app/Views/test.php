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



    <div class="container-fluid mt-5">
        <h1 class="h1 text-white text-center my-5">Welcome To Lyncxus Online</h1>
        <h1 class="h5 text-white text-center mt-5">A free sms API developed by: LydianJay</h1>
        <div class="d-flex flex-column justify-content-center py-5 px-5">
            <form action="<?php echo site_url('send') ?>" method="post">
                <div class="card">
                    <div class="card-header">
                        <p class="text-dark fs-5 fw-bold ms-2">Send Message</p>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="form-label">Phone number</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="number" class="form-control" name="number" placeholder="09123456789" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-label">Message</label>
                            <div class="input-group input-group-outline mb-3">
                                <textarea class="form-control" name="msg" id="msg" rows="5" cols="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Send</button>
                    </div>
                </div>

            </form>

        </div>
        <p class="text-white text-center fs-5 fw-bold">
            <a href="<?php echo base_url() ?>">Go back to Homepage</a>
        </p>
    </div>
</body>
        <script>
            
            <?php 
                $msg = session()->getFlashdata('msg');
                if(isset($msg)) {
                    echo "window.alert('$msg');";
                }
            ?>
        </script>
</html>