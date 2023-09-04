<?php
include('config/config.php');
$userid = '2';

$conversationhistory = array();
$userinput = $_POST['userinput'];
$openAISecretKey = "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";


//get user profile details
$sql = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE id='2'");
$fetch = mysqli_fetch_assoc($sql);
$dateofbirth = $fetch['dateofbirth'];
$weight = $fetch['weight'];
$allergies = $fetch['allergies']; 
$familypastmedicalhistory = $fetch['familypastmedicalhistory'];
$pastmedicalhistory = $fetch['pastmedicalhistory'];
$bloodgroup = $fetch['bloodgroup'];
$genotype = $fetch['genotype'];
$address = $fetch['address'];


$modifiedprompt = "pretend to be boka an ai medical bot capable of giving medical
                    prescriptions and disgnosing a patient and giving medical advice
                    here is the access to medical profile blood group:'.$bloodgroup.',genotype:'.$genotype.',
                    date of birth:'.$dateofbirth.',weight:'.$weight.',allergies:'.$allergies.',Family medical history:'.$familypastmedicalhistory.'
                    ,My Past Medical History:'.$pastmedicalhistory.' '.$userinput.'
                     help disgnose me and recommend a health clinic 
                    or professional  closer to me my addreess is:'.$address.'";



   
$search = $modifiedprompt;
$data = [
        "model" => "gpt-3.5-turbo",
        'messages' => [
            [
               "role" => "user",
               "content" => $search
           ]
        ],
        'temperature' => 0.5,
        "max_tokens" => 200,
        "top_p" => 1.0,
        "frequency_penalty" => 0.52,
        "presence_penalty" => 0.5,
        "stop" => ["11."],
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
            <div class="card" style="margin:10px;">
                              <div class="card-body">
                           <div class="row align-items-center">
                                      <div class="col-lg-2 col-md-2 text-center">
        ';
        print_r($arr["choices"][0]["message"]["content"]);
          echo'             </div>
                            </div>
                            </div>              
                                  </div>  ';

    







?>