<html>

<head>
    <title>
        Agent Section
    </title>
</head>

<body>
    <link href="agentLog.css" type="text/css" rel="stylesheet" />
    <link href="style.css" type="text/css" rel="stylesheet" />
    <style>
        /* Custom CSS for fixed top header */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: brown;
            /* Dark background color */
            padding: 10px 20px;
            /* Adjust padding as needed */
            color: black;
            /* White text color */
            z-index: 1000;
            /* Ensure header appears above other content */
        }

        .fixed-header a {
            color: wheat;
            /* White link color */
            text-decoration: none;
            margin-left: 50px;
            padding: left:30px;
            /* Add margin between links */
        }

        .fixed-header ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .fixed-header li {
            float: right;
            /* Align links to the right */
            margin-left: 20px;
            /* Add margin between links */
        }
    </style>

    <div class="fixed-header">
        <ul>
            <li><a href="../index.php">Back to homepage</a></li>
        </ul>
        <h2>Policy Agents section</h2>
    </div>

    <div>

        <nav>


            <div style="margin-top: 70px; padding: 20px;">
                <ul style=" width: 100%; background-color: white; z-index: 1000;">
                    <li><a href="http://localhost/insurancemanagement/agent/modified1.php">
                            <h3>Agents Data</h3>
                        </a></li>
                    <li><a href="http://localhost/insurancemanagement/client/modified1.php">
                            <h3>Client Data</h3>
                        </a></li>
                    <li><a href="http://localhost/insurancemanagement/policy/modified1.php">
                            <h3>Policies Data</h3>
                        </a></li>
                    <li><a href="http://localhost/insurancemanagement/premium/modified1.php">
                            <h3>Premiums Data</h3>
                        </a></li>
                </ul>
            </div>



    </div>

</body>