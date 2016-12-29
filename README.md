# CMB2 Field Type: Slider

## Desc
Slider field type for CMB2.

##Install
You can install slider field as a Wordpress plugin

1. Download plugin
2. Place in `wp-content/plugins` directory
3. Active in Wordpress plugin section

## Use
`own_slider` as a field type.

```php
array(
	'name'        => 'Slider Field',
	'desc'        => 'Set your value.',
	'id'          => $prefix . 'slider',
	'type'        => 'own_slider',
	'min'         => '0',
	'max'         => '200',
	'step'        => '5',
	'default'     => '0', // start value
	'value_label' => 'Value:',
),
```
## Screenshots

![Image](screen-1.jpg?raw=true)

## Changelog

## 1.1.2 - 04-12-2016

* Added support for repeatable group ( [#3](https://github.com/mattkrupnik/cmb2-field-slider/issues/3) ).
* Added `step` attribute by [jondcampbell](https://github.com/jondcampbell), ( [#5](https://github.com/mattkrupnik/cmb2-field-slider/pull/5) ).
