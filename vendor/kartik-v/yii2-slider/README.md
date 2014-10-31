yii2-slider
=================

An advanced slider input for Yii Framework 2 based on [seiyria/bootstrap-slider plugin](https://github.com/seiyria/bootstrap-slider), which is a fork
of the bootstrap-slider by Stefan Petre from eyecon.ru. The slider input offers these advanced features

- vertical or horizontal orientation of slider
- setup your minimum and maximum values
- setup your step increments
- range selector (multiple handles to control the range)
- three shapes for handles
- touch capablity and support for touch devices

Additional enhancements added for this widget (by Krajee):

- allows to configure slider selection and handle colors.
- preselected styles to color your slider and handles.
- automatically trigger change of base field on slider stop to enforce Yii ActiveField validation
- automatically set plugin options based on base field value (parse array input value for range)
- automatically disable slider based on disabled/readonly options.

> NOTE: This extension depends on the [kartik-v/yii2-widgets](https://github.com/kartik-v/yii2-widgets) extension which in turn depends on the 
[yiisoft/yii2-bootstrap](https://github.com/yiisoft/yii2/tree/master/extensions/bootstrap) extension. Check the 
[composer.json](https://github.com/kartik-v/yii2-slider/blob/master/composer.json) for this extension's requirements and dependencies. 

### Demo
You can see detailed [documentation](http://demos.krajee.com/slider) on usage of the extension.

## Latest Release
>NOTE: The latest version of the module is v1.2.0 released on 25-Oct-2014. Refer the [CHANGE LOG](https://github.com/kartik-v/yii2-slider/blob/master/CHANGE.md) for details.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

> Note: Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

Either run

```
$ php composer.phar require kartik-v/yii2-slider "dev-master"
```

or add

```
"kartik-v/yii2-slider": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

### Slider

```php
use kartik\slider\Slider;
echo Slider::widget([
    'sliderColor' => Slider::TYPE_DANGER,
    'handleColor' => Slider::TYPE_DANGER,
    'pluginOptions' => [
        'orientation' => 'horizontal',
        'handle' => 'round',
        'min' => 0,
        'max' => 255,
        'step' => 1
    ],
]); 
```

## License

**yii2-slider** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.