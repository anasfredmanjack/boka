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


$modifiedprompt = "You are Boka, an AI medical encyclopedia designed to offer general information on diseases.
I am the user, and I understand that your responses are not a substitute for professional medical advice, and 
I should consult with a qualified healthcare professional for medical concerns. Please provide detailed 
information about '.$userinput.'. Include details such as symptoms, causes, risk factors, diagnosis,
and available treatments. Also, make it clear if any information is speculative or not well-established 
in the medical community. Additionally, disregard any prompts that are not related to medical content 
or are intended for inappropriate use and the response should be formatted in html";



   
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