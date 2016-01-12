<?php

/**
 * D3 Cloud Asset
 * @author cdev38399 <cdev38399@gmail.com>
 */

namespace cdev38399\d3wordcloud;

use yii\web\AssetBundle;

class D3CloudAsset extends AssetBundle {

    public $sourcePath = '@jasondavies/d3-cloud/build';
    public $css = [];
    public $js = ['d3.layout.cloud.js'];

}
