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
        <div class="d-flex flex-column justify-content-center py-5">
            <h1 class="h1 text-white text-center my-5">Welcome To Lyncxus Online</h1>
            <h1 class="h5 text-white text-center mt-5">A free sms API developed by: LydianJay</h1>
            <h1 class="h5 text-white text-center mt-5">How to use?</h1>
            <p class="p5 text-white text-center mt-5">You send a post request containing the number (name = 'number') and message (name='msg') to send to this url address: https://lyncxus.online/send</p>
            <div class="container border border-white d-flex flex-row justify-content-center px-0">
                <pre>
                    <code class="text-white text-center">
                        $ch = curl_init();

                        // Set the URL for the POST request
                        curl_setopt($ch, CURLOPT_URL, "https://lyncxus.online/send");

                        // Enable the POST option
                        curl_setopt($ch, CURLOPT_POST, 1);

                        // Specify the POST data
                        $postData = [
                        'number' => '+63912345678',
                        'msg' => 'Hellow world',
                        ];
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

                        // Set options to return the response as a string
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        // Execute the POST request
                        $response = curl_exec($ch);

                        // Check for errors
                        if (curl_errno($ch)) {
                        echo 'Error:' . curl_error($ch);
                        }

                        // Close the cURL session
                        curl_close($ch);

                        // Print the response
                        echo $response;


                    </code>
                </pre>
            </div>

            <h1 class="h5 text-white text-center mt-5">Yow wassup - LydianJay</h1>
        </div>
    </div>
</body>

</html>