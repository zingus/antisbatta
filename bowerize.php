<?php
require_once 'vendor/autoload.php';

foreach(glob('bower_components/*/bower.json') as $json) {
  $dirname=dirname($json);
  //echo $json,"\n";
  $data=json_decode(file_get_contents($json),1);
  //var_export($data);
  if(@$data['files'])
    $array=$data['files'];
  elseif(@$data['main'])
    $array=$data['main'];
  else {
    $array = array();
    var_export($data,$array);
  }

 var_export($data['main']);

  foreach($array as $filename) {
    if(file_exists($pathname="$dirname/$filename")) {
      echo "$pathname\n";
    }
  }
}

