<?
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

//$object_image_file = 'gs://my-bucket/myfile.png'
//$object_image_url = CloudStorageTools::getImageServingUrl($object_image_file, ['crop' => true] ['size' => 400]);
//header('Location:' .$object_image_url);

$img = 'gs://ricc/google-400x300.jpg'
$img_url = CloudStorageTools::getImageServingUrl($object_image_file, ['crop' => true] ['size' => 200]);
header('Location:' .$object_image_url);

