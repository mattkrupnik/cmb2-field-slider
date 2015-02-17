# CMB Field Type: Slider

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
	'default'     => '0', // start value
	'value_label' => 'Value:',
),
```
## Screenshots

![Image](screen-1.jpg?raw=true)
