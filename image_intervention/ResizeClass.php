<?php

class ResizeClass
{

    private $imageSource;
    private $type;

    private $width;
    private $height;

    private $imageResult;

    ///////const///////

    const WIDTH = 150;
    const HEIGHT = 100;

    const IMAGE_TYPE_DEFAULT = '.jpg';
    const DIR_SAVE = 'images';

    ///////const///////


    /**
     * ResizeClass constructor.
     * @param $pathToImage
     * @throws Exception
     */

    public function __construct($pathToImage)
    {
        if (!file_exists($pathToImage)){
            throw new Exception('File not found.');
        }

//        $type = strrchr($pathToImage, '.');
//        $finfo = new finfo(FILEINFO_MIME_TYPE);
//        echo $finfo->file($pathToImage);

        $this->type = $this->getType($pathToImage);

        switch ($this->type){

            case IMAGETYPE_JPEG:
                $img = imagecreatefromjpeg($pathToImage);
                break;

            case IMAGETYPE_GIF:
                $img = imagecreatefromgif($pathToImage);
                break;

            case IMAGETYPE_PNG:
                $img = imagecreatefrompng($pathToImage);
                break;

            case IMAGETYPE_BMP:
                $img = imagecreatefromwbmp($pathToImage);
                break;

            default:
                $img = false;
        }




        $this->imageSource = $img;

        if (!$this->imageSource){
            throw new Exception('Сan\'t create descriptor of file');
        }



        $this->width = imagesx($this->imageSource);
        $this->height = imagesy($this->imageSource);
    }

    /**
     * @param $pathToImage
     * @return int
     * @throws Exception
     */

    private function getType($pathToImage){
        if (!function_exists('exif_imagetype')){
            throw new Exception('exif doesn\'t include');
        }
        return exif_imagetype($pathToImage);
    }





    public function resize($newWidth = self::WIDTH, $newHeight = self::HEIGHT, $option = 'width'){

        $arr = $this->getSizes($newWidth, $newHeight, $option);




    }



    private function getSizes($newWidth, $newHeight, $option){

        switch ($option){

            case 'width':
                $width = $newWidth;
                $height = $this->getHeight($newWidth);
                break;

            case 'height':
                $width = $this->getWidth($newHeight);
                $height = $newHeight;
                break;

            case 'auto':
                $arr = $this->getAuto($newWidth, $newHeight);
                $width = $arr['w'];
                $height = $arr['h'];
                break;

            case 'crop':
                $arr = $this->getCrop($newWidth, $newHeight);
                $width = $arr['w'];
                $height = $arr['h'];
                break;

            case 'exact':
                $width = $newWidth;
                $height = $newHeight;
                break;
        }

        return ['width' => $width, 'height' => $height];

    }

    /**
     * @param $newWidth
     * @return float|int
     */
    private function getHeight($newWidth){
        $k = $this->height / $this->width;
        return $newWidth * $k;
    }

    /**
     * @param $newHeight
     * @return float|int
     */
    private function getWidth($newHeight){
        $k = $this->width / $this->height;
        return $newHeight * $k;
    }

    /**
     * @param $newWidth
     * @param $newHeight
     * @return array
     */
    private function getAuto($newWidth, $newHeight){

        if ($this->width > $this->height){
            $resWidth = $newWidth;
            $resHeight = $this->getHeight($newWidth);

        } elseif ($this->width < $this->height){
            $resWidth = $this->getWidth($newHeight);
            $resHeight = $newHeight;

        } else {
            $resWidth = $newWidth;
            $resHeight = $newHeight;
        }

        return ['w' => $resWidth, 'h' => $resHeight];

    }

    /**
     * @param $newWidth
     * @param $newHeight
     * @return array
     */

    private function getCrop($newWidth, $newHeight){

        $kw = $this->width / $newWidth;
        $kh = $this->height / $newHeight;

        if ($kw < $kh){
            $res_k = $kw;

        } else {
            $res_k = $kh;
        }

        return ['w' => ($this->width / $res_k), 'h' => ($this->height / $res_k)];
    }










}