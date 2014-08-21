 <?php
function image_upload($filename){
  require "class.upload.php";

  $image_file = $_FILES['image_field'];
  $handle = new Upload($_FILES['image_field']);
  $upload_dir = "files/";

  if(!$handle->uploaded)
    return $handle->error;

  //通常の大きさの画像
  $handle->file_overwrite     = true;      //ファイル上書き有効
  $handle->file_auto_rename   = false;     //ファイル名自動リネーム無効
  $handle->file_src_name_body = $filename; //ファイル名指定
  $handle->Process($upload_dir);           //画像アップロード実行

  //サムネイル画像
  $handle->file_overwrite     = true;
  $handle->file_auto_rename   = false;
  $handle->file_src_name_body = $filename . "_thumb";
  $handle->image_resize       = true;
  $handle->image_ratio_y      = true;
  $handle->image_x            = 50;      //製作するサムネイルの横幅
  $handle->Process($upload_dir);

  if (!$handle->processed)
    return $handle->error;
}

    //以下2行で呼び出し ファイルネームには拡張子は不要
    $filename = "test.jpg";
    image_upload($filename);





