<?php

$curl = curl_init();
$channel =$_GET['c'];

$url="https://spapi.zee5.com/singlePlayback/getDetails?channel_id=$channel&device_id=dXCEgOvzEoz6q0KXjBge000000000000&platform_name=mobile_web&translation=en&user_language=en,hi&country=IN&state=UP&app_version=2.52.95&user_type=premium&check_parental_control=false&utm_source=GoogleSearch&uid=aa301487-5286-4d60-bda8-e6000d87be53&ppid=dXCEgOvzEoz6q0KXjBge000000000000&version=12&os=android";





curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
 "x-access-token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwcm9kdWN0X2NvZGUiOiJ6ZWU1QDk3NSIsInBsYXRmb3JtX2NvZGUiOiJXZWJAJCF0Mzg3MTIiLCJpc3N1ZWRBdCI6IjIwMjMtMDItMDVUMDg6MTQ6MTAuMjQxWiIsInR0bCI6ODY0MDAwMDAsImlhdCI6MTY3NTU4NDg1MH0.hx5XxiURUw9RP8Bqwkx-DTecYRcOXxbXamzqrr3-Qu0",  
  "Authorization": "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImU2bF9sZjB4enBhWThXME1wVDNaUHM3aHI4RnhjS2tsOENXQlp6RUpPaUEifQ.eyJ1c2VyX2lkIjoiYWEzMDE0ODctNTI4Ni00ZDYwLWJkYTgtZTYwMDBkODdiZTUzIiwic3lzdGVtIjoiWjUiLCJjdXJyZW50X2NvdW50cnkiOiJJTiIsInJlZ2lzdHJhdGlvbl9jb3VudHJ5IjoiSU4iLCJhY3RpdmF0aW9uX2RhdGUiOiIyMDE5LTAyLTE1VDA1OjE2OjE1LjExMyIsImFjdGl2YXRlZCI6dHJ1ZSwiY3JlYXRlZF9kYXRlIjoiMjAxOS0wMi0xNVQwNToxNjoxMC42OTAiLCJzdWIiOiJhYTMwMTQ4Ny01Mjg2LTRkNjAtYmRhOC1lNjAwMGQ4N2JlNTMiLCJkZXZpY2VfaWQiOiJkWENFZ092ekVvejZxMEtYakJnZTAwMDAwMDAwMDAwMCIsImlkcCI6ImxvY2FsIiwiY2xpZW50X2lkIjoicmVmcmVzaF90b2tlbiIsImF1ZCI6WyJ1c2VyYXBpIiwic3Vic2NyaXB0aW9uYXBpIiwicHJvZmlsZWFwaSJdLCJzY29wZSI6WyJ1c2VyYXBpIiwic3Vic2NyaXB0aW9uYXBpIiwicHJvZmlsZWFwaSJdLCJhbXIiOlsiZGVsZWdhdGlvbiJdLCJzdWJzY3JpcHRpb25zIjoiW3tcImlkXCI6XCJjZjZiYWMxOS1hNWNiLTQ5MWYtYmUyZi0zODRkODI5YTcwYWNcIixcInVzZXJfaWRcIjpcImFhMzAxNDg3LTUyODYtNGQ2MC1iZGE4LWU2MDAwZDg3YmU1M1wiLFwiaWRlbnRpZmllclwiOlwiWkVFNV8xMk1fU1ZPRF81OTlfQVJfSU5EXCIsXCJzdWJzY3JpcHRpb25fcGxhblwiOntcImlkXCI6XCIwLTExLTIwNzFcIixcImFzc2V0X3R5cGVcIjoxMSxcInN1YnNjcmlwdGlvbl9wbGFuX3R5cGVcIjpcIlNWT0RcIixcInRpdGxlXCI6XCJQcmVtaXVtXCIsXCJvcmlnaW5hbF90aXRsZVwiOlwiUHJlbWl1bVwiLFwic3lzdGVtXCI6XCJaNVwiLFwiZGVzY3JpcHRpb25cIjpcIjQwJSBvZmYgb24gOTk5XCIsXCJiaWxsaW5nX2N5Y2xlX3R5cGVcIjpcImRheXNcIixcImJpbGxpbmdfZnJlcXVlbmN5XCI6MzY1LFwicHJpY2VcIjo1OTkuMCxcImN1cnJlbmN5XCI6XCJJTlJcIixcImNvdW50cnlcIjpcIklOXCIsXCJjb3VudHJpZXNcIjpbXCJJTlwiXSxcInN0YXJ0XCI6XCIyMDIyLTAzLTE0VDAwOjAwOjAwWlwiLFwiZW5kXCI6XCIyMDIyLTA3LTE0VDAwOjAwOjAwWlwiLFwib25seV9hdmFpbGFibGVfd2l0aF9wcm9tb3Rpb25cIjpmYWxzZSxcInJlY3VycmluZ1wiOnRydWUsXCJwYXltZW50X3Byb3ZpZGVyc1wiOlt7XCJuYW1lXCI6XCJBcHAgU3RvcmVcIixcInByb2R1Y3RfcmVmZXJlbmNlXCI6XCJaRUU1XzEyTV9TVk9EXzU5OV9BUl9JTkRcIn1dLFwicHJvbW90aW9uc1wiOltdLFwiYXNzZXRfdHlwZXNcIjpbMCw2LDldLFwiYXNzZXRfaWRzXCI6W1wiXCJdLFwiZnJlZV90cmlhbFwiOm51bGwsXCJidXNpbmVzc190eXBlXCI6XCJmcmVlXCIsXCJiaWxsaW5nX3R5cGVcIjpcInByZW1pdW1cIixcIm51bWJlcl9vZl9zdXBwb3J0ZWRfZGV2aWNlc1wiOjMsXCJ0aWVyXCI6bnVsbCxcIm1vdmllX2F1ZGlvX2xhbmd1YWdlc1wiOltdLFwidHZfc2hvd19hdWRpb19sYW5ndWFnZXNcIjpbXSxcImNoYW5uZWxfYXVkaW9fbGFuZ3VhZ2VzXCI6W10sXCJkdXJhdGlvbl90ZXh0XCI6XCI5OTlcIixcInRlcm1zX2FuZF9jb25kaXRpb25zXCI6bnVsbCxcInZhbGlkX2Zvcl9hbGxfY291bnRyaWVzXCI6dHJ1ZSxcImFsbG93ZWRfcGxheWJhY2tfZHVyYXRpb25cIjo2LFwib2ZmZXJfaWRcIjowLFwiY2F0ZWdvcnlcIjpcIlwiLFwiYWN0dWFsX3ZhbHVlXCI6bnVsbH0sXCJzdWJzY3JpcHRpb25fc3RhcnRcIjpcIjIwMjItMDMtMjFUMDg6NDk6MzRaXCIsXCJzdWJzY3JpcHRpb25fZW5kXCI6XCIyMDIzLTAzLTIxVDIzOjU5OjU5WlwiLFwic3RhdGVcIjpcImFjdGl2YXRlZFwiLFwicmVjdXJyaW5nX2VuYWJsZWRcIjp0cnVlLFwicGF5bWVudF9wcm92aWRlclwiOlwiYXBwbGVcIixcImZyZWVfdHJpYWxcIjpudWxsLFwiY3JlYXRlX2RhdGVcIjpcIjIwMjItMDMtMzBUMDA6MDI6MjUuNzAzWlwiLFwiaXBfYWRkcmVzc1wiOlwiMTI0LjEyMy4zMC4yMjhcIixcImNvdW50cnlcIjpcIklOXCIsXCJhZGRpdGlvbmFsXCI6e1wib3JpZ2luYWxfdXNlcl9hZ2VudFwiOlwiWkVFNS8xNi4yNi42IChjb20uemVlVFYuRElEUzQ7IGJ1aWxkOjExMDsgaU9TIDEzLjMuMSkgQWxhbW9maXJlLzQuOS4wXCIsXCJYLUZvcndhcmRlZC1Gb3JcIjpcIjEyNC4xMjMuMzAuMjI4XCJ9LFwiYWxsb3dlZF9iaWxsaW5nX2N5Y2xlc1wiOjAsXCJ1c2VkX2JpbGxpbmdfY3ljbGVzXCI6MX1dIiwiYWNjZXNzX3Rva2VuX3R5cGUiOiJEZWZhdWx0UHJpdmlsZWdlIiwidmVyc2lvbiI6NCwidXNlcl90eXBlIjoiUmVnaXN0ZXJlZCIsInVzZXJfbW9iaWxlIjoiOTE4Mjk3NzgxODA3IiwiYXV0aF90aW1lIjoxNjc1NTk0NDAwLCJleHAiOjE2NzgyMjQ0MDAsImlhdCI6MTY3NTU5NDQwMCwiaXNzIjoiaHR0cHM6Ly91c2VyYXBpLnplZTUuY29tIiwibmJmIjoxNjc1NTk0NDAwfQ.Bevp3YRymG8jtidnDnaGBs6PYBw4igViz1zE_IGK4Gm3pesxwbzP0WjVOM1Z8H2reLbxbc0d2qHWJlArckpAIyv3NMA2h4q-Gyb4AKfFW9QSY-lZegOcNC08Fuak7HjheAHar-nB1_zo3hmpkYdey2CkJGpcfwVGaJF-RlmXO81qC4wTTPzyokB-OCD8JZM4CukbCW9m4yOYxXJ9J3Kj4KVc2RsnxAzOQpjwrLaw6q2HAwyAu3vZWbUeYjQER1R7Z9iPy9pdIEFCoHRXSEXDti_ksMXjREv3jmV9tUJ7V3abHPUZH2F_as3KdtEthie8wwed9zlipJbcpEEX3_JOdA"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);
curl_close($curl);

$zx = json_decode($response, true);
$image= $zx["assetDetails"]['image_url'];
$img = str_replace('270x152', '1170x658', $image);
$title= $zx["assetDetails"]['title'];
$playit= $zx["keyOsDetails"]['video_token'];

header("Location: $playit");
  
?>