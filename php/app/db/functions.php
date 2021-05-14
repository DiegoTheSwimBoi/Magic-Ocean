<?php

/**
 * @param $maxFileSize
 * @param $validFileType
 * @param $uploadPath
 * @return mixed|string
 */
function loadIMG($maxFileSize, $validFileType, $uploadPath, $nameElem): array
{
    $files = $_FILES[$nameElem];
    $CountFiles = count($_FILES[$nameElem]["error"]);
    //Количество файлов;
    $error = "";
    $errors = [];
    $fileNames = [];
    for($k=0; $k<$CountFiles;$k++) {

        $name = pathinfo($files["name"][$k], PATHINFO_FILENAME) . '_' . time();;
        $type = pathinfo($files["name"][$k], PATHINFO_EXTENSION);

        $file = "$name.$type";

        if ($files["size"][$k] > $maxFileSize) {
            $error = "Размер файла недолжен привышать {$maxFileSize} МБайт.";
        } else if (!empty($files["error"][$k])) {
            $error = "Ошибка загрузки файла";
        } else {

            $type = mime_content_type($files["tmp_name"][$k]);

            $fileName = $uploadPath . $file;


            if (in_array($type, $validFileType)) {
                if (!move_uploaded_file($files["tmp_name"][$k], $fileName)) {
                    $error = "Ошибка. Не удалось загрузить картинку.";
                }
            } else {

                $error = "Расширение должно быть png,jpg,jpeg";
            }
        }


        if (!empty($error)) {

            $error = "{$files["name"][$k]} - {$error}";
            $errors[] = $error;
        } else {
            $fileNames[] = $file;
        }
    }

    return [$errors, $fileNames];

}

function loadAvatar($maxFileSize, $validFileType, $avatarPath, $nameElem){
    $error = "";
    $avatarName = "";
    if (isset($_FILES[$nameElem])) {
        $file = $_FILES[$nameElem];

        $stepName = pathinfo($file['name'], PATHINFO_FILENAME). "_". time();
        $stepExt = pathinfo($file['name'], PATHINFO_EXTENSION);

        $avatarName = $stepName . "." . $stepExt;


        if (!empty($file['error'])) {  //Если error не пустой.
            $error = "Произошла ошибка - при загрузке данных";
        } else if ($file['size'] > $maxFileSize) {
            $error = "Файл недолжен превышать" . $maxFileSize . "байт";
        } else if (in_array($file['type'], $validFileType)) {
            if (!move_uploaded_file($file['tmp_name'], $avatarPath . $avatarName)) {
                $error = 'Не удалось загрузить изображение';
            }
        } else {
            $error = 'Расширение должно быть png, jpg, jpeg.';
        }
    }

	return [$errors, $avatarName];
}


/**
 * @param $array
 * @return string
 */
function deleteIMG($files_Arr,$uploadPath): string
{
    $error = "";
    if(!empty($files_Arr)) {

        foreach ($files_Arr as $file) {
            if (!unlink($uploadPath.$file)) {
                $error .= " Ошибка удаления файла ";
            }
        }
    }
    return $error;
}



