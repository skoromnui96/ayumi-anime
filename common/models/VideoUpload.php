<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class VideoUpload extends Model {
    public $video;

    public function rules()
{
    return [
        [['video'], 'required'],
        [['video'], 'file', 'extensions' => 'mp4']
    ];
}

    public function uploadFile(UploadedFile $file, $currentVideo) {
        $this->video = $file;
        if ($this->validate()) {

            $this->deleteCurrentVideo($currentVideo);

            return $this->saveVideo();
        }
    }

    public function updateVideo(UploadedFile $file, $currentVideo) {
        $this->video = $file;
        $this->deleteCurrentVideo($currentVideo);
        return $this->saveVideo();
    }

    public function getFolder() {
        return Yii::getAlias('@frontend') . '/web/videos/';
    }

    public function generateVideoName() {
        return strtolower(md5(uniqid($this->video->baseName)). '.' . $this->video->extension);
    }

    public function deleteCurrentVideo($currentVideo) {
        if ($this->fileExists($currentVideo)) {
            unlink($this->getFolder() . $currentVideo);
        }
    }

    public function fileExists($currentVideo) {
        if (!empty($currentVideo) && $currentVideo !=null) {
            return file_exists($this->getFolder() . $currentVideo);
        }
    }

    public function saveVideo() {
        $filename = $this->generateVideoName();

        $this->video->saveAs($this->getFolder(). $filename);

        return $filename;
    }
}