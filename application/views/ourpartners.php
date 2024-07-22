<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Partners</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #1e293b;
            /* dark background */
            color: #e2e8f0;
            /* light text */
        }

        .partner-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .partner-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .header {
            background-color: #1e40af;
            /* dark blue background */
            color: #e2e8f0;
            /* light text */
        }

        .header h1 {
            color: #60a5fa;
            /* lighter accent color */
        }

        .footer {
            background-color: #374151;
            /* darker footer */
            color: #e2e8f0;
            /* light text */
        }
    </style>
</head>

<body>

    <header class="header text-center py-4">
        <h1 class="text-3xl font-bold">Our Partners</h1>
    </header>

    <div class="container mx-auto mt-10">
        <div class="max-w-6xl mx-auto bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-blue-400 mb-6">Meet Our Partners</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="http://192.168.10.14" target="_blank" rel="noopener noreferrer" class="block">

                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihauWC5niuS9eYTdZ0lYO6svwmlUpmxk52IVrPFxl8mCyZ2ATUISNQ5X7dvipOC8U7b0g5lpZOKSyPnWtTfWTOF9BQz2I6PDyA=s1600-rw-v1" alt="Partner 2" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Cafe Reyes
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="http://192.168.10.13" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihaDxBGbto1NNmq_qfG_cPjgxX2wmdiNwZzJVcCvPywTS1IOEOjZ-rGGluedDpVURKFr1lVgoH0vVSuxlxPlOAPKSZZXwkQrflw=s2560" alt="Partner 2" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Clickers
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="http://192.168.10.15" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihb-M2lORX_G1fWat1EBVpnwJv9vDsICg2wJyR3vh2nX1qp4COY2bB13rthxwHhv1_0eIroHnA7KwC5fD9xFTO5k4_OifEuuMSs=s2560" alt="Partner 3" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            INGCO
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpiha829N9T0J1NtjV-FRILZBlgSjqOLYc0krjQUFiu0wJgzD9CtpWRjFsEztjaVXS7aDrbYfqCpXDXJkOT0-3Hlv4WQ_FwcWZLGQ=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            KFC
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihb9RhpSZ7pO1QRUcB-P5nwoAEFPnXLnUxgC8n6zHVjFEjLHSLV7t6sOYU-vFZ06tCgpv3FsqxkWe8-F4rE3Crav8wSxPtJFADY=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Shoepatoes
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihbcW9bhiopcoRabmCZ5loawrhrw32giWl5gWs24rbf2dl4LXPz7m3CmvlnbYxD-Zm1iwiiwAIrdT_fMqiIyMPzr46g88ZktHco=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            LRT
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihakHx2jbUQhGogOx2TypclhYsQyjOdfPK1GcLqQiyaO_ajwXVRxpWdTPOFJ5NRitXsMIFAYALc_0bD0OifunT1DOREdSk1xdw=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Medpoint
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZ3QcV5PSYZQ58VdrOvhaiaLemjDeUCWEcTXTzF4wU-B6epMAEFmoFSJex-3LpoTkLAoLz83woVZOeOvND0wgIDVsRCEHOtgkE=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            MotorTrade
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihYpa1EwBk07_DKcqn2hP4umQOpm5oBopshH8_YRLcmWqZBn0jMIePOcxeLY4jtoY2BUGQTgbLr5PPjrQR4-IhRRcg0Ka2hzw7U=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            National BookStore
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZUZ73GrMwKjtujqatK6sphQoghT8G9hd0R4q-2Sm0jmeyXE7o0NQLYVFuJUhMpo3zg5oB_FnmD8yMtNYAekn4kGV57k1LyYRw=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            OhMart
                        </h3>
                    </a>
                </div>

                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihYWD0JTonIsGV6wci2h2l46KSFLaCxTUyFyDq1Ma4n8b2rSrTylSRjt9smXvBJRe6omErpgg3dftW16CLxejw1Dw1UpkRn3JLk=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Pagturugan
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihbGvqcQ5P4MentLtMxuTV1IbQ_JyRKM3ruPJq5K0U5M5jlW6JosPzrxGnwKZhac5J0i-rM0JY0tcIfXZYIwnXdb13jZuMSfKw=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            ParaPo
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZTY3jEoTmyd9QjgpvMbOmgPYYBfioCTDpy-cgdH61jg2p2u43pvVgga_wXguWllZ7qXTU4UKL8-qVIhKUA0MQQp28W3OHhwQ=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Savemore
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihbwJYIeI6UvgqyGjMxLmD03Tc-KlhsQKePDtak9J_VTJkTg9kx_vRv-knjGfI1kCuXe2pRvvSqsiqBaubJomFBpmJoEboPlfA=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Ske Ease
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZo9PsLSVwUkvoH3MVrh9zXV1KG-vejUx8Mk0oWN2N8CDIyJMdx6wa4BmLt9DoMXTFGzEc9SK627CtP72n7ryHWAFTe3SwbRy4=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            TiagoShop
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihY9KurMpnkIuI3TTBxEv-1kwIiHSd5HiLUzC5wutAL19_4yhRS-nXg2xdchwOy6CBw0Z6Gleq7Ck7H2lw2B6m7PrDnXk4fDlHE=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Toyota
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZmtxkprbj5PSjQbz0BB9iuGw8GgpmsjpyffOx7fx1-Ek1dtrtEEdLcHJbgd-7icYlbezH7d682utLSd_8AEJJfUQBRKwRlNNE=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Tx
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZ4Hu9tf9m0wO3AcMVwywLiE1Y5Wt8zUkzlkV-vV2gSINQerxUxcwzq7CSO7hta0P1u9ZUHqNLaPSzkFLC6JEPGE7Am34S9qw=s2560" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                           UnionBank
                        </h3>
                    </a>
                </div>
                <div class="partner-card bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600">
                    <a href="https://www.partner4.com" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihY83xhz0EcG57SuN7z6Q9Aji7vr5HJdaznW0InzKCR2DOKxUEgdVHKKwNmBp56ywkjuuLlIMZxXkImfvmXf3tFdEqRNSwthwbU=s1600-rw-v1" alt="Partner 4" class="partner-image">
                        <h3 class="text-blue-400 hover:text-blue-300 text-xl font-medium mt-4 mb-2 text-center">
                            Watsons
                        </h3>
                    </a>
                </div>


            </div>
        </div>
    </div>

</body>

</html>