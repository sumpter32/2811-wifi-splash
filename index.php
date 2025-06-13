<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>2811 Maple Free Wi-Fi</title>
  <style>
    /* Full-screen background */
    body {
      margin: 0;
      font-family: sans-serif;
      background: #000 url('2811 Home Screen.jpg') center/cover no-repeat;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100vh;
    }
    /* Semi-transparent container */
    .container {
      background: rgba(0,0,0,0.6);
      padding: 2rem;
      border-radius: 8px;
      max-width: 600px;
      width: 90%;
    }
    .logo {
      max-width: 150px;
      margin-bottom: 1rem;
    }
    .tos {
      text-align: left;
      max-height: 200px;
      overflow-y: auto;
      margin: 1rem 0;
      padding: 1rem;
      background: rgba(255,255,255,0.1);
      border: 1px solid #666;
    }
    .btn {
      display: inline-block;
      margin-top: 1rem;
      padding: 0.8rem 1.2rem;
      background: #0070f3;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }
    footer {
      margin-top: 1.5rem;
      font-size: 0.8rem;
      color: #ccc;
    }
  </style>
</head>
<body>

<?php
  // Grab Meraki parameters
  $base_grant_url       = urldecode($_GET['base_grant_url']    ?? '');
  $user_continue_url    = urldecode($_GET['user_continue_url'] ?? '');

  // Optional override URL (unused by default)
  $override_continue_url     = 'https://2811.wifi.rownet.app/success';
  $override_the_users_request = false;

  if ($override_the_users_request && $base_grant_url) {
    $grant_url = $base_grant_url . '?continue_url=' . urlencode($override_continue_url);
  } else {
    $grant_url = $base_grant_url . '?continue_url=' . urlencode($user_continue_url);
  }
?>

<div class="container">
  <img src="2811 Maple Logo.svg" alt="2811 Maple Logo" class="logo">
  <h1>Welcome to 2811 Maple Free Wi-Fi</h1>

  <div class="tos">
    <p>
      You are about to access the Internet through wireless (Wi-Fi) Internet access node (the "Service") operated by 2811 Maple.  
      The purpose of the Service is to provide free wireless Internet access for the residence and guests of 2811 Maple.  
      You may use the Service only if you agree to the following terms of service each time you access the Service.  
      Please remember: NO network communication should be considered private or protected.  
      All communication over the 2811 Maple network is subject to monitoring.  
      2811 Maple reserves the right to reduce throughput or access as need be.  
      Your use of the Service and any activities conducted online through the Service shall not violate any applicable law or regulation.  
      2811 Maple cannot accept any responsibility for any injury or loss that results from inaccurate, unsuitable, offensive, or illegal Internet communications.  
      You acknowledge (i) that the Service may not be interruption or error-free; (ii) that viruses or other harmful applications may be available through the Service; (iii) that 2811 Maple does not guarantee the security of the Service and that unauthorized third parties may access your computer or files or otherwise monitor your connection.
    </p>
    <p><strong>THE USE OF THE SERVICE FOR THE FOLLOWING ACTIVITIES IS PROHIBITED:</strong><br>
      Spamming and Invasion of Privacy of Others, Violating Intellectual Property Law, Transmitting Obscene or Indecent Speech or Materials,  
      Transmitting Defamatory or Abusive Language, Hacking or Distribution of Internet Viruses, Worms, Trojan Horses, or Other Destructive Activities.
    </p>
  </div>

  <a href="<?= htmlspecialchars($grant_url) ?>" class="btn">I Agree &amp; Connect</a>

  <footer>
    Powered by <img src="Rownet-logo.png" alt="RowNet Logo" style="height:1em; vertical-align:middle;">
  </footer>
</div>

</body>
</html>
