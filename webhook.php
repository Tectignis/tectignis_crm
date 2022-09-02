<?php
//EAALUMC9cCsEBAIFHwcqtwqGdFLugKkyaj8nJi8IkbxP4yYgX1yJ5cWPZCTDSUH4WdZCnxbS9LXN8DJZAc2sH7tryrp8dlSg49FPFlv16f28iQSZAlzxNoDmp4bJfEMmFk2UXIrVQIjQ0ZAf5QPKuOy0qwZBxnj4iqAMRZBDrdOAZAVS0qOFgZBUIZBhe3q6j6WQUR2ZBhc66e222QZDZD
//token

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;




$app_id = "796253371501249";
$app_secret = "d1642530dbfef30cf52c33cc7eb88e52";
$access_token = "EAALUMC9cCsEBAOEfY9XESGxJ0YojdtBPttgoEQ9RJwr5sXkCmZCCWsAgZAedcMSHZAfUHWbyxzhe3LW7y7MjB4AaM3t1VoDUbf63R4RDbpZAkm5sf8jjkusTfgOZCPXWg6ctvV82KJQzqjl3LsW9FjNrxZCwyfnxoU1eVTfJPuEo3KFXw5ZAXSljvRfqEQbqEAkJc1ZBEFspCY5bGjpc2lqVYZAmeZBknmn3IZD";
$account_id = "act_2261886460750473";

Api::init($app_id, $app_secret, $access_token);

$account = new AdAccount($account_id);
$cursor = $account->getCampaigns();

// Loop over objects
foreach ($cursor as $campaign) {
  echo $campaign->{CampaignFields::NAME}.PHP_EOL;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>