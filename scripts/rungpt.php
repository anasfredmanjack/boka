<?php
include('config/config.php');
$userid = $_POST['userrid'];

$conversationhistory = array();
$userinput = $_POST['userinput'];
$openAISecretKey = "";


//get user profile details
$sql = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE id='$userid'");
$fetch = mysqli_fetch_assoc($sql);
$dateofbirth = $fetch['dateofbirth'];
$weight = $fetch['weight'];
$allergies = $fetch['allergies']; 
$familypastmedicalhistory = $fetch['familypastmedicalhistory'];
$pastmedicalhistory = $fetch['pastmedicalhistory'];
$bloodgroup = $fetch['bloodgroup'];
$genotype = $fetch['genotype'];
$address = $fetch['address'];


$modifiedprompt = "
You are Boka, an AI medical bot designed to assist doctors in diagnosing medical problems. For this simulation, a dummy patient profile is provided:

Dummy Patient Profile:
- Date Of Birth: '.$dateofbirth.'
- Past Medical History: '.$pastmedicalhistory.'
- Family Medical History: '.$familypastmedicalhistory.'
- Allergies: '.$allergies.'
- Weight: '.$weight.'
- Blood Group: '.$bloodgroup.'
- Genotype: '.$genotype.'
- Address: '.$address.'
- Symptoms: '.$userinput.'

Help diagnose the patient with the given details. Provide insights into symptoms, potential causes, risk factors, 
and recommend appropriate diagnostic tests or considerations. Additionally, recommend the closest medical hospital 
based on the dummy address, so the patient can seek proper medical attention. Indicate if the condition is generally
considered life-threatening.

Ensure to disregard any prompts that are not related to medical content or are intended for inappropriate use.
Lastly, inform the user that they are free to ask about any other disease or medical topic if they have additional questions.
when providing the output exclude disclosing the profile is a dummy and always respond like a professional doctor answering his patient
and always start with disclosing you are boka and you are here to help and the response should be formatted in html
";



   
$search = $modifiedprompt;
$data = [
        "model" => "gpt-3.5-turbo",
        'messages' => [
            [
               "role" => "user",
               "content" => $search
           ]
        ],
        'temperature' => 0.1,
      ];
  
  

                    $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
              
            $headers = [];
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: Bearer '.$openAISecretKey;
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
              
            curl_close($ch);
           
              
            $arr = json_decode($response,true);
            
            $finalres = $arr["choices"][0]["message"]["content"];
            $data .= $finalres;
             $data .= $data;
        echo'
            <div class="card-hover-shadow card-border mb-3 card" style="">
                              <div class="card-body">
                           <div class="row align-items-center">
                                      <div class="col-lg-12 col-md-12 text-center">
        ';
        print_r($arr["choices"][0]["message"]["content"]);
          echo'             </div>
                            </div>
                            </div>              
                                  </div>  ';

    







?>