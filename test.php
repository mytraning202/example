$jsonResponse = '{
  "status": 1,
  "message": "demo data loaded.",
  "result": [
    {
      "id": 1,
      "tab_name": "birthdays",
      "imageurls": [
        "http://srsolutions.online/allinoneframesjkt/upload/frames/dEfFQgWaAdr9BN9flGfUDojHDygk12.jpg",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/eyPuiqraGiON0VpdFrAclvgPsyBD3w.png"
      ]
    },
    {
      "id": 2,
      "tab_name": "birthday",
      "imageurls": [
        "http://srsolutions.online/allinoneframesjkt/upload/frames/8x6C3FSGAnldGdNVVINvL3kgU5MV9n.jpg",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png"
      ]
    },
    {
      "id": 3,
      "tab_name": "nature",
      "imageurls": [
        "http://srsolutions.online/allinoneframesjkt/upload/frames/8x6C3FSGAnldGdNVVINvL3kgU5MV9n.jpg",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png",
        "http://srsolutions.online/allinoneframesjkt/upload/frames/FN5lADb8yPnWRAokvMHVPMagvioKOJ.png"
      ]
    }
  ]
}';

$data = json_decode($jsonResponse, true);

// Accessing the values
$status = $data['status'];
$message = $data['message'];
$result = $data['result'];

// Loop through the result array
foreach ($result as $item) {
    $id = $item['id'];
    $tabName = $item['tab_name'];
    $imageUrls = $item['imageurls'];

    // Accessing image URLs
    foreach ($imageUrls as $imageUrl) {
        // Do something with each image URL
        echo $imageUrl . "\n";
    }
}
