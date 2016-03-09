#slick - the last carousel you'll ever need

### this is a typo3 (7LTS) extenions of the slick carousel

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/misterboe/slickcarousel/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/misterboe/slickcarousel/?branch=develop)
[![Build Status](https://scrutinizer-ci.com/g/misterboe/slickcarousel/badges/build.png?b=develop)](https://scrutinizer-ci.com/g/misterboe/slickcarousel/build-status/develop)

<img src="http://snag.gy/jsI2I.jpg" alt="alt text" style="width:400px;height:auto">

## slick - Basic
* Description (Caption) is shown in frontend
* Very easy to use
* Supports image crop

![image](http://snag.gy/qwwSp.jpg)
![image](http://snag.gy/FsWNa.jpg)

## slick - Synced
* Description (Caption) is shown in frontend on the upper slide
* Very easy to use
* Supports image crop
* Two syncronized slider (Gallery like)

![image](http://snag.gy/drzTv.jpg)
![image](http://snag.gy/st65k.jpg)

## slick - Expert
* Description (Caption) is shown in frontend
* fully customizable
* Supports image crop
* Responsive settings

![image](http://snag.gy/qwwSp.jpg)
![image](http://snag.gy/NI3lB.jpg)
![image](http://snag.gy/TRror.jpg)

## How to disable different slick types

### Page TS
```
TCEFORM.tt_content.CType {
    removeItems = slickcarousel,slickcarouselbasic,slickcarouselsync
}
```

## Changelog:
* Version: 0.2.2
    * Changed description
    * Bugfix: (TS) jQuery force on top
* Version: 0.2.1
    * Bugfix: (TS) JS include switch
* Version: 0.2.0
    * Easing is now default and working [cssEase: cubic-bezier(0.950, 0.050, 0.795, 0.035)]
    * CSS improvements (thx to Oliver Oertel from analog.de)
* Version: 0.1.0
    * Random sorting for Expert Slider
* Version: 0.0.5
	* CSS fixes
	* Add Grunt task to build CSS file
* Version: 0.0.4
	* slick - Synced > Can be configured in Backend now
* Version: 0.0.3
	* Image crop ratios "slick - wide" and "slick - 3:2"
	* slick - Synced (Gallery)
* Version: 0.0.1
	* First release with two carousel types
	* More Settings and Slider options will follow
