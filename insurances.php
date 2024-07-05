
<html >
<head>
    <title>Insurance Policies of our Company</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
             background-color: #fffffd;
    
        }
        .container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 10px;
        
           background: linear-gradient(to bottom, rgb(244, 241, 203), rgb(211, 244, 249));
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: rgb(222, 102, 102);
        }
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        li {
            margin: 10px;
            border: 1px solid #ef7b7b;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 250px;
        }
        li:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(218, 35, 35, 0.2);
        }
        img {
            width: 100%;
            height: auto;
            display: block;
        }
        .card-content {
            padding: 10px;
        }
        h3{
            color: blue;
        }
    </style>
</head>
<body class="w3-light-grey">

    <div class="w3-bar w3-silver w3-large ">
        <a href="#" class="w3-bar-item w3-button w3-blue w3-mobile"><i class="fa-solid fa-house-chimney-crack"></i>DDDJ</a>
        <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
        <a
    href="index.php"
    class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" 
    >Back To Home</a
  >
      </div>
    <div class="container">
        <h1> Insurance Policies of Our Company</h1>
        <ul>
            <!-- Each list item represents a card -->
            <li>
                <img src="homee.jpg" alt="Insurance Provider 1">
                <div class="card-content">
                    <h3>Home or property insurance</h3>
                    <p>Our company offers comprehensive Home or Property Insurance policies tailored to safeguard your valuable assets.</p>
                </div>
            </li>
            <li>
                <img src="lifee.jpg" alt="Insurance Provider 2">
                <div class="card-content">
                    <h3>Life insurance</h3>
                    <p>Life Insurance policies offer peace of mind and financial security for your loved ones. With customizable coverage options.</p>
                </div>
            </li>
            <li>
                <img src="disability.jpg" alt="Insurance Provider 3">
                <div class="card-content">
                    <h3> Disability insurance</h3>
                    <p>Disability Insurance provides financial protection in case of injury or illness, offering peace of mind and support during challenging times.</p>
                </div>
            </li>
            <!-- Add more list items as needed -->
            <li>
                <img src="health.jpg" alt="Insurance Provider 3">
                <div class="card-content">
                    <h3> Health insurance</h3>
                    <p> Our Health Insurance plans offer comprehensive coverage for medical expenses, ensuring peace of mind for you and your family. </p>
                </div>
            </li>
            <li>
                <img src="auto.webp" alt="Insurance Provider 3">
                <div class="card-content">
                    <h3>  Automobile insurance</h3>
                    <p> our Automobile Insurance provides comprehensive coverage for your vehicles, ensuring peace of mind on the road.</p>
                </div>
            </li>
            <li>
                <img src="crop.jpg" alt="Insurance Provider 3">
                <div class="card-content">
                    <h3>  Crop  insurance</h3>
                    <p>our Crop Insurance offers farmers financial protection against crop losses due to adverse weather conditions, pests, and other risks</p>
                </div>
            </li>
            <li>
                <img src="pet.webp" alt="Insurance Provider 3">
                <div class="card-content">
                    <h3>  Pet  insurance</h3>
                    <p> our Pet Insurance plans provide comprehensive coverage for your furry companions, ensuring their health and well-being.</p>
                </div>
            </li>
            
        </ul>
    </div>
    
    <div class="w3-container" id="contact" style=" width: 80%; background-color: rgb(253, 251, 247);display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; ">
        <h2>Contact</h2>
        <p>For more information about Policies contact us </p>
        
        <form action="agent/modified.php" target="_blank">
          <p>
            <input
              class="w3-input w3-padding-11 w3-border"
              type="text"
              placeholder="Name"
              required
              name="Name"
            />
          </p>
          <p>
            <input
              class="w3-input w3-padding-11 w3-border"
              type="text"
              placeholder="Email"
              required
              name="Email"
            />
          </p>
          <p>
            <input
              class="w3-input w3-padding-11 w3-border"
              type="text"
              placeholder="Message"
              required
              name="Message"
            />
          </p>
          <p>
            <button class="w3-button w3-black w3-padding-large" type="submit">
              SEND MESSAGE
            </button>
          </p>
        </form>
      </div>
</body>
</html>
